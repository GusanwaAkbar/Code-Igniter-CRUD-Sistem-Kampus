<?php 
namespace App\Models;

use CodeIgniter\Model;

class ModelKomunitas extends Model
{
    protected $table = "komunitas";
    protected $primaryKey = "id_komunitas";
    protected $allowedFields = ['nama_komunitas', 'ketua_komunitas', 'bidang', 'jumlah_anggota'];

    function cari($katakunci)
    {
        //budi gmail
        $builder = $this->table("komunitas");
        $arr_katakunci = explode(" ", $katakunci);
        for ($x = 0; $x < count($arr_katakunci); $x++) {
            $builder->orLike('nama_komunitas', $arr_katakunci[$x]);
            $builder->orLike('ketua_komunitas', $arr_katakunci[$x]);
            $builder->orLike('bidang', $arr_katakunci[$x]);
            $builder->orLike('jumlah_anggota', $arr_katakunci[$x]);
        }
        return $builder;
    }
}