<?php 
namespace App\Models;

use CodeIgniter\Model;

class ModelLab extends Model
{
    protected $table = "lab";
    protected $primaryKey = "id_lab";
    protected $allowedFields =['nama_lab', 'ketua_lab', 'kapasitas'];
    function cari($katakunci)
    {
        //budi gmail
        $builder = $this->table("lab");
        $arr_katakunci = explode(" ", $katakunci);
        for ($x = 0; $x < count($arr_katakunci); $x++) {
            $builder->orLike('nama_lab', $arr_katakunci[$x]);
            $builder->orLike('kapasitas', $arr_katakunci[$x]);
        }
        return $builder;
    }
}