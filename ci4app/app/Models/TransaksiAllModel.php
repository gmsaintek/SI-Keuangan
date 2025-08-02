<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiAllModel extends Model
{
    protected $table = 'transaksi_all';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'tanggal',
        'nama',
        'sumber',
        'kegiatan',
        'bidang',
        'sub_bidang',
        'jumlah_transaksi',
        'jenis_transaksi',
        'catatan'
    ];
    protected $useTimestamps = false;
}
