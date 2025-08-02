<?php
namespace App\Models;

use CodeIgniter\Model;

class PengeluaranSubbidangModel extends Model
{
    protected $table      = 'pengeluaran_subbidang';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nama_bidang',
        'pengeluaran_sekarang',
        'catatan'
    ];

    public function getByDateRange($start, $end)
{
    return $this->where('created_at >=', $start)
                ->where('created_at <=', $end)
                ->findAll();
}

  
}
