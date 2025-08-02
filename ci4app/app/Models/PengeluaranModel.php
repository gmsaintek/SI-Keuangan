<?php

namespace App\Models;

use CodeIgniter\Model;

class PengeluaranModel extends Model
{
    protected $table      = 'pengeluaran';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $allowedFields = [
        'tanggal',
        'nama',
        'sumber',
        'kegiatan',
        'bidang',
        'sub_bidang',
        'jumlah_pengeluaran',
        'catatan',
        'nota'
    ];
}
