<?php

namespace App\Controllers;

use App\Models\TransaksiAllModel;
use Dompdf\Dompdf;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class TransaksiAll extends BaseController
{
    protected $model;
    public function __construct()
    {
        $this->model = new TransaksiAllModel();
    }

    public function index()
    {
        $data['title'] = 'Semua Transaksi';
        $data['transaksi'] = $this->model->orderBy('tanggal', 'DESC')->findAll();
        $data['actionUrlStore'] = base_url('transaksi_all/store');
        $data['actionUrlUpdate'] = base_url('transaksi_all/update');
        $data['actionUrlDelete'] = base_url('transaksi_all/delete');
        $data['actionUrlCetak']  = base_url('transaksi_all/cetak');
        return view('transaksi_all', $data);
    }

    public function store()
    {
        $post = $this->request->getPost();

        $data = [
            'tanggal'           => $post['tanggal'] ?? '',
            'nama'              => $post['nama'] ?? '',
            'sumber'            => $post['sumber'] ?? '',
            'kegiatan'          => $post['kegiatan'] ?? '',
            'bidang'            => $post['bidang'] ?? '',
            'sub_bidang'        => $post['sub_bidang'] ?? '',
            'jumlah_transaksi'  => $post['jumlah_pemasukan'] ?? $post['jumlah_pengeluaran'] ?? 0,
            'jenis_transaksi'   => $post['jenis_transaksi'] ?? '',
            'catatan'           => $post['catatan'] ?? '',
        ];

        $this->model->insert($data);
        return redirect()->to(base_url('transaksi_all'));
    }

    public function update($id)
    {
        $post = $this->request->getPost();

        $data = [
            'tanggal'           => $post['tanggal'] ?? '',
            'nama'              => $post['nama'] ?? '',
            'sumber'            => $post['sumber'] ?? '',
            'kegiatan'          => $post['kegiatan'] ?? '',
            'bidang'            => $post['bidang'] ?? '',
            'sub_bidang'        => $post['sub_bidang'] ?? '',
            'jumlah_transaksi'  => $post['jumlah_pemasukan'] ?? $post['jumlah_pengeluaran'] ?? 0,
            'jenis_transaksi'   => $post['jenis_transaksi'] ?? '',
            'catatan'           => $post['catatan'] ?? '',
        ];

        $this->model->update($id, $data);
        return redirect()->to(base_url('transaksi_all'));
    }

    public function delete($id)
    {
        $this->model->delete($id);
        return redirect()->to(base_url('transaksi_all'));
    }

    public function cetak()
{
    $format = $this->request->getGet('format') ?? 'print';
    $tanggal_awal = $this->request->getGet('tanggal_awal');
    $tanggal_akhir = $this->request->getGet('tanggal_akhir');
    $jenis_transaksi = $this->request->getGet('jenis_transaksi');

    // Query builder untuk filter dinamis
    $query = $this->model;
    if ($tanggal_awal) {
        $query = $query->where('tanggal >=', $tanggal_awal);
    }
    if ($tanggal_akhir) {
        $query = $query->where('tanggal <=', $tanggal_akhir);
    }
    if ($jenis_transaksi) {
        $query = $query->where('LOWER(jenis_transaksi)', strtolower($jenis_transaksi));
    }
    $data['transaksi'] = $query->orderBy('tanggal', 'DESC')->findAll();

    $data['judulLaporan'] = 'Laporan Semua Transaksi';
    $viewPath = 'laporan/transaksi_all_print';

    if ($format === 'print') {
        return view($viewPath, $data);
    } elseif ($format === 'pdf') {
        return $this->cetakPdf($data, $viewPath, 'laporan_semua_transaksi.pdf');
    } elseif ($format === 'excel') {
        return $this->cetakExcel($data['transaksi'], 'laporan_semua_transaksi.xlsx');
    } elseif ($format === 'csv') {
        return $this->cetakCsv($data['transaksi'], 'laporan_semua_transaksi.csv');
    }
    return view($viewPath, $data);
}

    // Untuk PDF (DOMPDF)
protected function cetakPdf($data, $viewPath, $filename)
{
    $dompdf = new \Dompdf\Dompdf();
    $html = view($viewPath, $data);
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'landscape');
    $dompdf->render();
    return $this->response
        ->setContentType('application/pdf')
        ->setHeader('Content-Disposition', 'attachment; filename="' . $filename . '"')
        ->setBody($dompdf->output());
}

// Untuk Excel (PHPExcel)
protected function cetakExcel($transaksi, $filename)
{
    $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    $sheet->fromArray([
        ['Tanggal', 'Nama', 'Sumber', 'Kegiatan', 'Bidang', 'Sub-bidang', 'Jumlah Transaksi (Rp)', 'Jenis Transaksi', 'Catatan']
    ], null, 'A1');
    $rowNum = 2;
    foreach ($transaksi as $row) {
        $sheet->fromArray([
            $row['tanggal'] ?? '',
            $row['nama'] ?? '',
            $row['sumber'] ?? '',
            $row['kegiatan'] ?? '',
            $row['bidang'] ?? '',
            $row['sub_bidang'] ?? '',
            $row['jumlah_transaksi'] ?? '',
            $row['jenis_transaksi'] ?? '',
            $row['catatan'] ?? ''
        ], null, 'A' . $rowNum++);
    }
    $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
    $tempFile = tempnam(sys_get_temp_dir(), 'excel');
    $writer->save($tempFile);
    $excelData = file_get_contents($tempFile);
    @unlink($tempFile);
    return $this->response
        ->setHeader('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet')
        ->setHeader('Content-Disposition', 'attachment; filename="' . $filename . '"')
        ->setBody($excelData);
}

// Untuk CSV
protected function cetakCsv($transaksi, $filename)
{
    $handle = fopen('php://temp', 'r+');
    fputcsv($handle, ['Tanggal', 'Nama', 'Sumber', 'Kegiatan', 'Bidang', 'Sub-bidang', 'Jumlah Transaksi (Rp)', 'Jenis Transaksi', 'Catatan']);
    foreach ($transaksi as $row) {
        fputcsv($handle, [
            $row['tanggal'] ?? '',
            $row['nama'] ?? '',
            $row['sumber'] ?? '',
            $row['kegiatan'] ?? '',
            $row['bidang'] ?? '',
            $row['sub_bidang'] ?? '',
            $row['jumlah_transaksi'] ?? '',
            $row['jenis_transaksi'] ?? '',
            $row['catatan'] ?? ''
        ]);
    }
    rewind($handle);
    $csv = stream_get_contents($handle);
    fclose($handle);
    return $this->response
        ->setHeader('Content-Type', 'text/csv')
        ->setHeader('Content-Disposition', 'attachment; filename="' . $filename . '"')
        ->setBody($csv);
}

}
