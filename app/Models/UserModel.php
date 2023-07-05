<?php

namespace App\Models;

use \CodeIgniter\Model;

class UserModel extends Model 
{
    protected $table = 'tb_user';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ["id","username","password","role"];

    public function search($x)
{
    return $this->table('tb_user')->like('email', $x)->orLike('username', $x)->orLike('role', $x);
}



/*public function save()
{
    $pass = $this->input->post('npwd');
    $data = array(
        'password' => $pass
    );
    $this->db->where('id',$this->session->userdata('id'));
    $this->db->update('user', $data);
}

//fungsi untuk mengecek password lama
public function cek_old()
{
    $old = $this->input->post('opwd'); 
    $this->db->where('password',$old);
    $query = $this->db->get('user');
    return $query->result();
}*/
}