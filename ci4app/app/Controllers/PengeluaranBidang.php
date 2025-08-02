<?php

namespace App\Controllers;

use App\Models\PengeluaranBidangModel;
use App\Models\PengeluaranBidangModel1;
use App\Models\PengeluaranBidangModel2;
use App\Models\PengeluaranBidangModel3;
use App\Models\PengeluaranBidangModel4;

class PengeluaranBidang extends BaseController
{
    public function index()
    {
        // Query total penggunaan (jumlah_pengeluaran) dari setiap tabel bidang
        $model      = new PengeluaranBidangModel();
        $model1     = new PengeluaranBidangModel1();
        $model2     = new PengeluaranBidangModel2();
        $model3     = new PengeluaranBidangModel3();
        $model4     = new PengeluaranBidangModel4();

        $data['total_penggunaan'] = [
            'each'  => $model->selectSum('jumlah_pengeluaran')->get()->getRow()->jumlah_pengeluaran ?? 0,
            'each1' => $model1->selectSum('jumlah_pengeluaran')->get()->getRow()->jumlah_pengeluaran ?? 0,
            'each2' => $model2->selectSum('jumlah_pengeluaran')->get()->getRow()->jumlah_pengeluaran ?? 0,
            'each3' => $model3->selectSum('jumlah_pengeluaran')->get()->getRow()->jumlah_pengeluaran ?? 0,
            'each4' => $model4->selectSum('jumlah_pengeluaran')->get()->getRow()->jumlah_pengeluaran ?? 0,
        ];

        // Anggaran, bisa ganti dengan query dari tabel anggaran jika ada
        $data['anggaran'] = [
            'each'  => 1100000000,         // Pemberdayaan Masyarakat
            'each1' => 17730909167,        // Pembinaan kemasyarakatan
            'each2' => 1074093536,         // Pelaksanaan Pembangunan Desa
            'each3' => 100800000,          // Penyelengaraan Permintahan Desa
            'each4' => 75000000,           // Penanggulangan Bencana, Darurat, dan Mendadak Desa
        ];

        return view('pengeluaran_bidang', $data);
    }
}
