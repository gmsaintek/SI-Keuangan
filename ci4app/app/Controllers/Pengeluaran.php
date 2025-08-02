<?php

namespace App\Controllers;

use App\Models\PengeluaranModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Dompdf\Dompdf;

class Pengeluaran extends BaseController
{
    public function index()
    {
        $model = new PengeluaranModel();
        $data['pengeluaran'] = $model->findAll();
        return view('pengeluaran_input', $data);
    }

    public function store()
    {
        $file = $this->request->getFile('nota');
        $fileName = $file && $file->isValid() && !$file->hasMoved() ? $file->getRandomName() : null;

        if ($fileName) {
            $file->move('uploads/nota', $fileName);
        }

        $model = new PengeluaranModel();
        $data = [
            'tanggal'            => $this->request->getPost('tanggal'),
            'nama'               => $this->request->getPost('nama'),
            'sumber'             => $this->request->getPost('sumber'),
            'kegiatan'           => $this->request->getPost('kegiatan'),
            'bidang'             => $this->request->getPost('bidang'),
            'sub_bidang'         => $this->request->getPost('sub_bidang'),
            'jumlah_pengeluaran' => $this->request->getPost('jumlah_pengeluaran'),
            'catatan'            => $this->request->getPost('catatan'),
            'nota'               => $fileName
        ];
        $model->insert($data);

        return redirect()->to('/pengeluaran_input');
    }

    public function update($id)
    {
        $model = new PengeluaranModel();
        $existing = $model->find($id);

        $file = $this->request->getFile('nota');
        $fileName = $existing['nota']; // default filename = existing file

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $fileName = $file->getRandomName();
            $file->move('uploads/nota', $fileName);

            // Optional: delete old file
            if (!empty($existing['nota']) && file_exists('uploads/nota/' . $existing['nota'])) {
                unlink('uploads/nota/' . $existing['nota']);
            }
        }

        $data = [
            'tanggal'            => $this->request->getPost('tanggal'),
            'nama'               => $this->request->getPost('nama'),
            'sumber'             => $this->request->getPost('sumber'),
            'kegiatan'           => $this->request->getPost('kegiatan'),
            'bidang'             => $this->request->getPost('bidang'),
            'sub_bidang'         => $this->request->getPost('sub_bidang'),
            'jumlah_pengeluaran' => $this->request->getPost('jumlah_pengeluaran'),
            'catatan'            => $this->request->getPost('catatan'),
            'nota'               => $fileName
        ];

        $model->update($id, $data);
        return redirect()->to('/pengeluaran_input');
    }

    public function delete($id)
{
    $model = new \App\Models\PengeluaranModel();
    $existing = $model->find($id);

    // Hapus file nota jika ada
    if (!empty($existing['nota']) && file_exists('uploads/nota/' . $existing['nota'])) {
        unlink('uploads/nota/' . $existing['nota']);
    }

    $model->delete($id);
    return redirect()->to('/pengeluaran_input');
}



public function cetak()
{
    $format = $this->request->getPost('format');
    $start = $this->request->getPost('start');
    $end = $this->request->getPost('end');

    $model = new \App\Models\PengeluaranModel();
    $data = $model->where('tanggal >=', $start)->where('tanggal <=', $end)->findAll();

    if ($format === 'PDF') {
        $html = view('laporan/pengeluaran_input_print', ['pengeluaran' => $data]);

        $dompdf = new \Dompdf\Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream('laporan_pengeluaran.pdf', ['Attachment' => true]);


    } elseif ($format === 'XLSX') {
        $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->fromArray(['Tanggal', 'Nama', 'Sumber', 'Kegiatan', 'Bidang', 'Sub-bidang', 'Jumlah', 'Catatan'], NULL, 'A1');

        $rowNum = 2;
        foreach ($data as $d) {
            $sheet->fromArray([
                $d['tanggal'], $d['nama'], $d['sumber'], $d['kegiatan'], $d['bidang'],
                $d['sub_bidang'], $d['jumlah_pengeluaran'], $d['catatan']
            ], NULL, 'A' . $rowNum++);
        }

        $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="laporan_pengeluaran.xlsx"');
        $writer->save('php://output');

    } elseif ($format === 'CSV') {
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment;filename="laporan_pengeluaran.csv"');
        $output = fopen('php://output', 'w');
        fputcsv($output, ['Tanggal', 'Nama', 'Sumber', 'Kegiatan', 'Bidang', 'Sub-bidang', 'Jumlah', 'Catatan']);
        foreach ($data as $d) {
            fputcsv($output, [
                $d['tanggal'], $d['nama'], $d['sumber'], $d['kegiatan'],
                $d['bidang'], $d['sub_bidang'], $d['jumlah_pengeluaran'], $d['catatan']
            ]);
        }
        fclose($output);

    } elseif ($format === 'PRINT') {
        echo view('laporan/pengeluaran_input_print', [
            'pengeluaran' => $data,
            'autoPrint' => true
        ]);
    }

    exit;
}

}
