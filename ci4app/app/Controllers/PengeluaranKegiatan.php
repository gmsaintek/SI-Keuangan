<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PengeluaranKegiatanModel;

class PengeluaranKegiatan extends BaseController
{
    public function index()
    {
        $model = new PengeluaranKegiatanModel();
        $data['kegiatan'] = $model->findAll();

        return view('pengeluaran_kegiatan', $data);
    }

    public function store()
{
    $model = new \App\Models\PengeluaranKegiatanModel();

    $data = [
        'bidang'          => $this->request->getPost('bidang'),
        'tanggal_mulai'   => $this->request->getPost('tanggal_mulai'),
        'tanggal_selesai' => $this->request->getPost('tanggal_selesai'),
        'catatan'         => $this->request->getPost('catatan'),
    ];

    $model->insert($data);

    return redirect()->to('/pengeluaran_kegiatan')->with('success', 'Data berhasil disimpan!');
}

    public function cetak()
{
    $format = $this->request->getPost('format');
    $startDate = $this->request->getPost('start_date');
    $endDate = $this->request->getPost('end_date');
    $bidang = $this->request->getPost('bidang');

    $model = new \App\Models\PengeluaranKegiatanModel();
    $builder = $model->builder();
    $builder->where('tanggal_mulai >=', $startDate);
    $builder->where('tanggal_selesai <=', $endDate);
    if ($bidang !== 'Semua') {
        $builder->where('bidang', $bidang);
    }

    $data['results'] = $builder->get()->getResultArray();

    if ($format === 'print') {
        return view('laporan/pengeluaran_kegiatan_print', $data); // Cetak Langsung buka tab
    }

    if ($format === 'PDF') {
        helper('filesystem');
        $html = view('laporan/pengeluaran_kegiatan_print', $data);
        $dompdf = new \Dompdf\Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        return $this->response
            ->setContentType('application/pdf')
            ->setHeader('Content-Disposition', 'attachment; filename="laporan_pengeluaran_kegiatan.pdf"')
            ->setBody($dompdf->output());
    }

    if ($format === 'XLSX') {
        $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle('Laporan');

        $sheet->fromArray(['No', 'Kegiatan', 'Mulai', 'Selesai', 'Bidang', 'Anggaran', 'Pengeluaran', 'Kemajuan', 'Catatan'], null, 'A1');

        $rowIndex = 2;
        foreach ($data['results'] as $i => $row) {
            $sheet->fromArray([
                $i + 1,
                $row['kegiatan'],
                $row['tanggal_mulai'],
                $row['tanggal_selesai'],
                $row['bidang'],
                $row['anggaran'],
                $row['pengeluaran'],
                $row['kemajuan'] . '%',
                $row['catatan']
            ], null, "A$rowIndex");
            $rowIndex++;
        }

        $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
        $filename = 'laporan_pengeluaran_kegiatan.xlsx';

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header("Content-Disposition: attachment; filename=\"$filename\"");
        $writer->save('php://output');
        exit;
    }

    if ($format === 'CSV') {
        $filename = 'laporan_pengeluaran_kegiatan.csv';
        header('Content-Type: text/csv');
        header("Content-Disposition: attachment; filename=\"$filename\"");

        $output = fopen('php://output', 'w');
        fputcsv($output, ['No', 'Kegiatan', 'Mulai', 'Selesai', 'Bidang', 'Anggaran', 'Pengeluaran', 'Kemajuan', 'Catatan']);
        foreach ($data['results'] as $i => $row) {
            fputcsv($output, [
                $i + 1,
                $row['kegiatan'],
                $row['tanggal_mulai'],
                $row['tanggal_selesai'],
                $row['bidang'],
                $row['anggaran'],
                $row['pengeluaran'],
                $row['kemajuan'] . '%',
                $row['catatan']
            ]);
        }
        fclose($output);
        exit;
    }

    return redirect()->back()->with('error', 'Format tidak valid.');
}



    public function update($id)
{
    $model = new \App\Models\PengeluaranKegiatanModel();

    $data = [
        'kegiatan'         => $this->request->getPost('kegiatan'),
        'tanggal_mulai'    => $this->request->getPost('tanggal_mulai'),
        'tanggal_selesai'  => $this->request->getPost('tanggal_selesai'),
        'bidang'           => $this->request->getPost('bidang'),
        'anggaran'         => $this->request->getPost('anggaran'),
        'pengeluaran'      => $this->request->getPost('pengeluaran'),
        'kemajuan'         => $this->request->getPost('kemajuan'),
        'catatan'          => $this->request->getPost('catatan'),
    ];

    $model->update($id, $data);
    return redirect()->to('/pengeluaran_kegiatan')->with('success', 'Data berhasil diperbarui!');
}

public function show($id)
{
    $model = new \App\Models\PengeluaranKegiatanModel();
    $data['row'] = $model->find($id);

    if (!$data['row']) {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Data tidak ditemukan");
    }

    return view('pengeluaran_kegiatan_each', $data);
}

    public function delete($id)
{
    $model = new \App\Models\PengeluaranKegiatanModel();
    $model->delete($id);

    return redirect()->to('/pengeluaran_kegiatan')->with('success', 'Data berhasil dihapus!');
}



}
