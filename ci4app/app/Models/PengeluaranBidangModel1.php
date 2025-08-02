<?php

namespace App\Models;

use CodeIgniter\Model;

class PengeluaranBidangModel1 extends Model
{
    protected $table = 'pengeluaran_bidang1';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'tanggal', 'nama', 'sumber', 'kegiatan', 'subbidang', 'jumlah_pengeluaran', 'nota', 'catatan'
    ];
}
