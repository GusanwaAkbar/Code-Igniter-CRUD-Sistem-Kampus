<?php

namespace App\Models;

use CodeIgniter\Model;

class rizalmodel extends Model
{
    protected $table = 'pklrizal';

    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';

    protected $allowedFields = ['nama', 'nim', 'semester', 'perusahaan', 'keterangan','is_approve'];

    public function getPKL($slug = false)
    {
        if ($slug === false) {
            return $this->where('is_approve', 0)->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function getDisetujui($slug = false)
    {
        if ($slug === false) {
            return $this->where('is_approve', 1)->findAll();
        }

        return $this->where(['is_approve' => $slug])->first();
    }



   



}