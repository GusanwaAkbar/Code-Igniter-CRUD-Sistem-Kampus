<?php 
namespace App\Models;

use CodeIgniter\Model;

class ModelDosen extends Model
{
    protected $table = "dosen";
    protected $primaryKey = "id_dosen";
    protected $allowedFields =['nama_dosen', 'email', 'kelompok_keilmuan'];
    function cari($katakunci)
    {
        //Fungsi Pencarian
        $builder = $this->table("dosen");
        $arr_katakunci = explode(" ", $katakunci);
        for ($x = 0; $x < count($arr_katakunci); $x++) {
            $builder->orLike('nama_dosen', $arr_katakunci[$x]);
            $builder->orLike('email_dosen', $arr_katakunci[$x]);
            $builder->orLike('kelompok_keilmuan', $arr_katakunci[$x]);
        }
        return $builder;
    }
}