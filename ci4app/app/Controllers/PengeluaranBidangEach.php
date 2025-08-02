<?php

namespace App\Controllers;

use App\Models\PengeluaranBidangModel;
use Dompdf\Dompdf;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class PengeluaranBidangEach extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new PengeluaranBidangModel();
    }

    public function index()
    {
        $data['title'] = 'Pemberdayaan Masyarakat';
        $data['pengeluaran'] = $this->model->findAll();
        $data['actionUrlStore'] = base_url('pengeluaran_bidang_each/store');
        $data['actionUrlUpdate'] = base_url('pengeluaran_bidang_each/update');
        $data['actionUrlDelete'] = base_url('pengeluaran_bidang_each/delete');
        return view('pengeluaran_bidang_each', $data);
    }

    public function store()
    {
        $post = $this->request->getPost();
        $file = $this->request->getFile('nota');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(FCPATH . 'uploads/nota', $newName);
            $post['nota'] = $newName;
        } else {
            $post['nota'] = null;
        }

        $this->model->insert($post);
        return redirect()->to(base_url('pengeluaran_bidang_each'));
    }

    public function update($id)
    {
        $post = $this->request->getPost();
        $file = $this->request->getFile('nota');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(FCPATH . 'uploads/nota', $newName);
            $post['nota'] = $newName;
        } else {
            unset($post['nota']);
        }

        $this->model->update($id, $post);
        return redirect()->to(base_url('pengeluaran_bidang_each'));
    }

    public function delete($id)
    {
        $this->model->delete($id);
        return redirect()->to(base_url('pengeluaran_bidang_each'));
    }

    public function cetak()
    {
        $format = $this->request->getGet('format') ?? 'print';
        $data['pengeluaran'] = $this->model->findAll();
        $data['judulLaporan'] = 'Laporan Pengeluaran Bidang - Pemberdayaan Masyarakat';

        $viewPath = 'laporan/pengeluaran_bidang_each_print'; // hanya satu file untuk semua bidang

        if ($format === 'print') {
            return view($viewPath, $data);
        } elseif ($format === 'pdf') {
            return $this->cetakPdf($data, $viewPath, 'laporan_pengeluaran_bidang.pdf');
        } elseif ($format === 'excel') {
            return $this->cetakExcel($data['pengeluaran'], 'laporan_pengeluaran_bidang.xlsx');
        } elseif ($format === 'csv') {
            return $this->cetakCsv($data['pengeluaran'], 'laporan_pengeluaran_bidang.csv');
        }
        // Default fallback
        return view($viewPath, $data);
    }

    // --- Helper Functions ---
    protected function cetakPdf($data, $viewPath, $filename)
    {
        $dompdf = new Dompdf();
        $html = view($viewPath, $data);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();

        return $this->response
            ->setContentType('application/pdf')
            ->setHeader('Content-Disposition', 'attachment; filename="' . $filename . '"')
            ->setBody($dompdf->output());
    }

    protected function cetakExcel($pengeluaran, $filename)
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->fromArray([
            ['Tanggal', 'Nama', 'Sumber', 'Kegiatan', 'Sub-bidang', 'Jumlah Pengeluaran (Rp)', 'Nota', 'Catatan']
        ], null, 'A1');

        $rowNum = 2;
        foreach ($pengeluaran as $row) {
            $sheet->fromArray([
                $row['tanggal'],
                $row['nama'],
                $row['sumber'],
                $row['kegiatan'],
                $row['subbidang'],
                $row['jumlah_pengeluaran'],
                $row['nota'],
                $row['catatan']
            ], null, 'A' . $rowNum++);
        }

        $writer = new Xlsx($spreadsheet);
        $tempFile = tempnam(sys_get_temp_dir(), 'excel');
        $writer->save($tempFile);

        $excelData = file_get_contents($tempFile);
        @unlink($tempFile);

        return $this->response
            ->setHeader('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet')
            ->setHeader('Content-Disposition', 'attachment; filename="' . $filename . '"')
            ->setBody($excelData);
    }

    protected function cetakCsv($pengeluaran, $filename)
    {
        $handle = fopen('php://temp', 'r+');

        fputcsv($handle, ['Tanggal', 'Nama', 'Sumber', 'Kegiatan', 'Sub-bidang', 'Jumlah Pengeluaran (Rp)', 'Nota', 'Catatan']);
        foreach ($pengeluaran as $row) {
            fputcsv($handle, [
                $row['tanggal'],
                $row['nama'],
                $row['sumber'],
                $row['kegiatan'],
                $row['subbidang'],
                $row['jumlah_pengeluaran'],
                $row['nota'],
                $row['catatan']
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
