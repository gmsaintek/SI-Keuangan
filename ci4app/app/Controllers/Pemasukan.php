<?php

namespace App\Controllers;
use App\Models\PemasukanModel;
use Dompdf\Dompdf;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Writer\Csv;

class Pemasukan extends BaseController
{
    public function index()
    {
        $model = new PemasukanModel();
        $data['pemasukan'] = $model->findAll();
        return view('pemasukan_input', $data);
    }

    public function store()
    {
        $model = new PemasukanModel();
        $data = [
            'tanggal'     => $this->request->getPost('tanggal'),
            'sumber_dana' => $this->request->getPost('sumber_dana'),
            'jumlah'      => $this->request->getPost('jumlah'),
            'catatan'     => $this->request->getPost('catatan'),
        ];
        $model->insert($data);
        return redirect()->to('/pemasukan_input');
    }

    public function update($id)
{
    $model = new PemasukanModel();
    $data = [
        'tanggal'     => $this->request->getPost('tanggal'),
        'sumber_dana' => $this->request->getPost('sumber_dana'),
        'jumlah'      => $this->request->getPost('jumlah'),
        'catatan'     => $this->request->getPost('catatan'),
    ];
    $model->update($id, $data);
    return redirect()->to('/pemasukan_input');
}

    public function delete($id)
{
    $model = new \App\Models\PemasukanModel();
    $model->delete($id);
    return redirect()->to('/pemasukan_input');
}


    public function cetak()
{
    $format    = $this->request->getPost('format');
    $start     = $this->request->getPost('start');
    $end       = $this->request->getPost('end');
    $sumber    = $this->request->getPost('sumber');

    $model = new \App\Models\PemasukanModel();
    $query = $model->where('tanggal >=', $start)->where('tanggal <=', $end);
    if ($sumber !== 'Semua') {
        $query = $query->where('sumber_dana', $sumber);
    }
    $data = $query->findAll();

    if ($format === 'HTML') {
        return view('laporan/pemasukan_input_print', ['pemasukan' => $data]);
    } elseif ($format === 'PDF') {
        return $this->exportPDF($data);
    } elseif ($format === 'XLSX') {
        return $this->exportExcel($data);
    } elseif ($format === 'CSV') {
        return $this->exportCSV($data);
    }

    return redirect()->back()->with('error', 'Format tidak dikenali.');
}

    private function exportPDF($data)
{
    $dompdf = new Dompdf();
    $html = view('laporan/pemasukan_input_print', ['pemasukan' => $data]);
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();
    $dompdf->stream('laporan_pemasukan.pdf', ['Attachment' => 1]); // 1 = download, 0 = open in browser
}



private function exportExcel($data)
{
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Header
    $sheet->fromArray(['Tanggal', 'Sumber Dana', 'Jumlah', 'Catatan'], null, 'A1');

    // Data
    $row = 2;
    foreach ($data as $item) {
        $sheet->setCellValue("A$row", $item['tanggal']);
        $sheet->setCellValue("B$row", $item['sumber_dana']);
        $sheet->setCellValue("C$row", $item['jumlah']);
        $sheet->setCellValue("D$row", $item['catatan']);
        $row++;
    }

    // Output
    $writer = new Xlsx($spreadsheet);
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="laporan_pemasukan.xlsx"');
    $writer->save('php://output');
    exit;
}

private function exportCSV($data)
{
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    $sheet->fromArray(['Tanggal', 'Sumber Dana', 'Jumlah', 'Catatan'], null, 'A1');
    $row = 2;
    foreach ($data as $item) {
        $sheet->setCellValue("A$row", $item['tanggal']);
        $sheet->setCellValue("B$row", $item['sumber_dana']);
        $sheet->setCellValue("C$row", $item['jumlah']);
        $sheet->setCellValue("D$row", $item['catatan']);
        $row++;
    }

    $writer = new Csv($spreadsheet);
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment;filename="laporan_pemasukan.csv"');
    $writer->save('php://output');
    exit;
}

}
