<?php 
namespace App\Models;

use CodeIgniter\Model;

class ModelKegiatan extends Model
{
    protected $table = "kegiatan";
    protected $primaryKey = "id_kegiatan";
    protected $allowedFields =['nama_kegiatan', 'komunitas_id', 'dosen_id', 'lab_id', 'proposal', 'rencana_program', 'jumlah_peserta'];
    function cari($katakunci)
    {
        //budi gmail
        $builder = $this->table("kegiatan");
        $arr_katakunci = explode(" ", $katakunci);
        for ($x = 0; $x < count($arr_katakunci); $x++) {
            $builder->orLike('nama_kegiatan', $arr_katakunci[$x]);
            $builder->orLike('jumlah_peserta', $arr_katakunci[$x]);
        }
        return $builder;
    }
}