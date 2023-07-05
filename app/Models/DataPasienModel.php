<?php

namespace App\Models;

use CodeIgniter\Model;

class DataPasienModel extends Model
{

    protected $table                = 'tb_pasien';
    protected $primaryKey           = 'id_pasien';
    protected $allowedFields        = ['id_pasien','nama_pasien','alamat','no_telp','RT','RW','tgl_lahir','jk_pasien','id_kelurahan'];

    public function joinpasienxkelurahan() {
        return $this->db->table('tb_pasien')
        ->join('tb_kelurahan', 'tb_pasien.id_kelurahan=tb_kelurahan.id_kelurahan')
        ->get()->getResultArray();
    }
    public function dropdownkelurahan()
    {
        return $this->db->table('tb_kelurahan')->get()->getResultArray();
    }
public function idPasien() {
        $kode = $this->db->table('tb_pasien')
        ->select('RIGHT(id_pasien,5) as id_pasien', false)
            ->orderBy('id_pasien', 'DESC')
            ->limit(1)->get()->getRowArray();

        if ($kode['id_pasien'] == null) {
            $no = 1;
        } else {
            $no = intval($kode['id_pasien']) + 1;
        }

        $pas = date('Ym');
        $batas = str_pad($no, 5, "0", STR_PAD_LEFT);
        $id_pasien = $pas . $batas;
        return $id_pasien;

}
}