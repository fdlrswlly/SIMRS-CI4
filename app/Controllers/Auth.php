<?php

namespace App\Controllers;

use App\Models\UserModel;

$session = session();
class Auth extends BaseController
{
    public function __construct()
    {
        //membuat user model untuk konek ke database 
        $this->userModel = new UserModel();
        
        //meload validation
        $this->validation = \Config\Services::validation();
        
        //meload session
        $this->session = \Config\Services::session();
        
    }
    
    public function valid_login()
    {
        //ambil data dari form
        $data = $this->request->getPost();
        //$role = $this->request->getPost();
        //ambil data user di database yang usernamenya sama 
        $user = $this->userModel->where('username', $data['username'])->first();
        //ambil role
        //$role = $this->userModel->where('role', $data['role'])->first();
        //cek apakah username ditemukan
        if($user){
            //cek password
            //jika salah arahkan lagi ke halaman login
            if($user['password'] != ($data['password'])){
                session()->setFlashdata('password', 'Password salah');
                return redirect()->to('Login');
            }
           
            else{
                //jika benar, arahkan user masuk ke aplikasi 
                $sessLogin = [
                    'isLogin' => true,
                    'username' => $user['username'],
                    'role' => $user['role']
                    ];
                $this->session->set($sessLogin);
                return redirect()->to('Dashboard');
                
               
            }
        }
        else{
            //jika username tidak ditemukan, balikkan ke halaman login
            if (!session('username')) {
                echo 'username', 'username tidak ditemukan';
                return redirect()->to('Login');
            }
        }
    }
    
     public function logout()
    {
        //hancurkan session 
        //balikan ke halaman login
        $this->session->destroy();
        return redirect()->to('Login');
    }
    
}