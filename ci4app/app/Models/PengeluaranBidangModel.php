<?php

namespace App\Models;

use CodeIgniter\Model;

class PengeluaranBidangModel extends Model
{
    protected $table = 'pengeluaran_bidang';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'tanggal', 'nama', 'sumber', 'kegiatan', 'subbidang', 'jumlah_pengeluaran', 'nota', 'catatan'
    ];
}
