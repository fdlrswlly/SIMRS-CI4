<?php

namespace App\Models;

use CodeIgniter\Model;


class DataKelurahanModel extends Model
{
    protected $table                = 'tb_kelurahan';
    protected $primaryKey           = 'id_kelurahan';
    protected $returnType           = 'array';
    protected $allowedFields        = ['id_kelurahan','nama_kelurahan','nama_kecamatan','nama_kota'];

    public function idkelurahan()
    {
        $kode = $this->db->table('tb_kelurahan')
        ->select('RIGHT(id_kelurahan,4) as id_kelurahan', false)
            ->orderBy('id_kelurahan', 'DESC')
            ->limit(1)->get()->getRowArray();

        if ($kode['id_kelurahan'] == null) {
            $no = 1;
        } else {
            $no = intval($kode['id_kelurahan']) + 1;
        }

        $kel= 'KEL';
        $batas = str_pad($no, 4, "0", STR_PAD_LEFT);
        $id_kelurahan = $kel . $batas;
        return $id_kelurahan;
    }

}
