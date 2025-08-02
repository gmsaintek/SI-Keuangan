<?php

namespace App\Models;

use CodeIgniter\Model;

class PengeluaranKegiatanModel extends Model
{
    protected $table = 'pengeluaran_kegiatan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['kegiatan', 'tanggal_mulai', 'tanggal_selesai', 'bidang', 'anggaran', 'pengeluaran', 'kemajuan', 'catatan'];
    protected $useTimestamps = false;
}
