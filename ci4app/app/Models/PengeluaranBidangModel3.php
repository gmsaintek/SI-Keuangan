<?php

namespace App\Models;

use CodeIgniter\Model;

class PengeluaranBidangModel3 extends Model
{
    protected $table = 'pengeluaran_bidang3';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'tanggal', 'nama', 'sumber', 'kegiatan', 'subbidang', 'jumlah_pengeluaran', 'nota', 'catatan'
    ];
}
