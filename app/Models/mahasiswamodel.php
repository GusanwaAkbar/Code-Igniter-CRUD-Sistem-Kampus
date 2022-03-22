<?php

namespace App\Models;

use CodeIgniter\Model;

class mahasiswamodel extends Model
{
    protected $table = 'universitas_pkl';

    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';

    protected $allowedFields = ['nama', 'nim', 'email', 'linkcv', 'linkedin','is_approve'];

    public function getMahasiswa($slug = false)
    {
        if ($slug === false) {
            return $this->where('is_approve', 0)->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function getMahasiswa_disetujui($slug = false)
    {
        if ($slug === false) {
            return $this->where('is_approve', 1)->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

   



}