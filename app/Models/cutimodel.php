<?php

namespace App\Models;

use CodeIgniter\Model;

class cutimodel extends Model
{
    protected $table = 'approval_cuti';

    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';

    protected $allowedFields = ['nama', 'nim', 'no_telp', 'semester', 'alasan','is_approve'];

    public function getCuti($slug = false)
    {
        if ($slug === false) {
            return $this->where('is_approve', 0)->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function getCuti_disetujui($slug = false)
    {
        if ($slug === false) {
            return $this->where('is_approve', 1)->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

   



}