<?php

namespace App\Models;

use CodeIgniter\Model;

class skripsimodel extends Model
{
    protected $table = 'pendaftaran_sempro';

    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';

    protected $allowedFields = ['nama', 'nim', 'judul', 'link', 'dosen','link','status'];

    public function getSkripsi($slug = false)
    {
        if ($slug === false) {
            return $this->where('status', 0)->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function getSidang($slug = false)
    {
        if ($slug === false) {
            return $this->where('status', 1)->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function getSidang_disetujui($slug = false)
    {
        if ($slug === false) {
            return $this->where('status', 2)->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

   



}