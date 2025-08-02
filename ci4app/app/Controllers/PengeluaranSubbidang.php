<?php
namespace App\Controllers;

use App\Models\PengeluaranSubbidangModel;
use CodeIgniter\Controller;

class PengeluaranSubbidang extends BaseController
{
    protected $subbidangModel;

    public function __construct()
    {
        $this->subbidangModel = new PengeluaranSubbidangModel();
    }

    // Halaman utama list
    public function index()
    {
        $data['subbidang'] = $this->subbidangModel->findAll();
        return view('pengeluaran_subbidang', $data);
    }

    // Proses simpan data dari modal input
    public function store()
    {
        $validation = \Config\Services::validation();
        $rules = [
            'nama_bidang' => 'required',
            'pengeluaran_sekarang' => 'required|numeric',
            'catatan' => 'permit_empty'
        ];

        if (!$this->validate($rules)) {
            session()->setFlashdata('error', $validation->getErrors());
            return redirect()->back()->withInput();
        }

        $this->subbidangModel->save([
            'nama_bidang' => $this->request->getPost('nama_bidang'),
            'pengeluaran_sekarang' => $this->request->getPost('pengeluaran_sekarang'),
            'catatan' => $this->request->getPost('catatan')
        ]);
        session()->setFlashdata('success', 'Data sub-bidang berhasil ditambahkan.');
        return redirect()->to(base_url('pengeluaran_subbidang'));
    }

    // Fungsi cetak laporan dalam berbagai format
    public function cetak()
    {
        $format = $this->request->getGet('format') ?? 'print';
        $mulai = $this->request->getGet('tanggal_mulai');
        $selesai = $this->request->getGet('tanggal_selesai');

        // Safety: validasi input date
        if (!$mulai || !$selesai) {
            return redirect()->back()->with('error', 'Tanggal harus diisi!');
        }

        // Range tanggal
        $start = $mulai . ' 00:00:00';
        $end = $selesai . ' 23:59:59';

        $model = new \App\Models\PengeluaranSubbidangModel();
        $data = $model->getByDateRange($start, $end);

        // Path view print HARUS sesuai lokasi di app/Views/laporan/
        $viewPath = 'laporan/pengeluaran_subbidang_print';

        if ($format == 'print') {
            return view($viewPath, [
                'data' => $data,
                'tanggal_mulai' => $mulai,
                'tanggal_selesai' => $selesai
            ]);
        } elseif ($format == 'pdf') {
            // Export PDF (pastikan dompdf sudah install)
            $dompdf = new \Dompdf\Dompdf();
            $html = view($viewPath, [
                'data' => $data,
                'tanggal_mulai' => $mulai,
                'tanggal_selesai' => $selesai
            ]);
            $dompdf->loadHtml($html);
            $dompdf->setPaper('A4', 'landscape');
            $dompdf->render();
            return $this->response
                ->setContentType('application/pdf')
                ->setHeader('Content-Disposition', 'attachment;filename="Laporan_Subbidang_'.date('Ymd').'.pdf"')
                ->setBody($dompdf->output());
        } elseif ($format == 'excel') {
            header('Content-Type: application/vnd.ms-excel');
            header('Content-Disposition: attachment;filename="Laporan_Subbidang_'.date('Ymd').'.xls"');
            echo view($viewPath, [
                'data' => $data,
                'tanggal_mulai' => $mulai,
                'tanggal_selesai' => $selesai,
                'forExcel' => true
            ]);
            exit();
        } elseif ($format == 'csv') {
            header('Content-Type: text/csv');
            header('Content-Disposition: attachment;filename="Laporan_Subbidang_'.date('Ymd').'.csv"');
            $out = fopen('php://output', 'w');
            fputcsv($out, ['No', 'Nama Bidang', 'Pengeluaran sekarang (Rp)', 'Catatan']);
            $no = 1;
            foreach ($data as $row) {
                fputcsv($out, [
                    $no++, 
                    $row['nama_bidang'],
                    $row['pengeluaran_sekarang'],
                    $row['catatan']
                ]);
            }
            fclose($out);
            exit();
        } else {
            // Jika format tidak valid, redirect balik
            return redirect()->back()->with('error', 'Format tidak valid!');
        }
    }

    public function update($id)
{
    $validation = \Config\Services::validation();
    $rules = [
        'nama_bidang' => 'required',
        'pengeluaran_sekarang' => 'required|numeric',
        'catatan' => 'permit_empty'
    ];

    if (!$this->validate($rules)) {
        session()->setFlashdata('error', $validation->getErrors());
        return redirect()->back()->withInput();
    }

    $this->subbidangModel->update($id, [
        'nama_bidang' => $this->request->getPost('nama_bidang'),
        'pengeluaran_sekarang' => $this->request->getPost('pengeluaran_sekarang'),
        'catatan' => $this->request->getPost('catatan')
    ]);

    session()->setFlashdata('success', 'Data sub-bidang berhasil diupdate.');
    return redirect()->to(base_url('pengeluaran_subbidang'));
}

    public function delete($id)
{
    $this->subbidangModel->delete($id);
    session()->setFlashdata('success', 'Data sub-bidang berhasil dihapus.');
    return redirect()->to(base_url('pengeluaran_subbidang'));
}

}
