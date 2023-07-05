<?php

namespace App\Models;

use CodeIgniter\Model;

class CetakKartuModel extends Model
{
    protected $table            = 'query_pasienxkelurahan';
    protected $primaryKey       = 'id_pasien';
    protected $allowedFields    = ['id_pasien','nama_pasien','alamat','no_telp','RT','RW','tgl_lahir','jk_pasien','nama_pasien'];

    
}
