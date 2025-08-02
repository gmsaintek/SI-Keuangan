<?php

namespace App\Models;

use CodeIgniter\Model;

class PengeluaranBidangModel4 extends Model
{
    protected $table = 'pengeluaran_bidang4';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'tanggal', 'nama', 'sumber', 'kegiatan', 'subbidang', 'jumlah_pengeluaran', 'nota', 'catatan'
    ];
}
