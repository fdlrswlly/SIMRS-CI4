<?php

namespace App\Controllers;

use App\Models\HomeModel;

class Home extends BaseController
{
    public function __construct()
    {
       // $this->HomeModel = new HomeModel();
    }
    public function index()
    {
        //$session = session();
        return view('login');
    }

    public function dashboard()
    {
        /*$data = array(
            'total_surat_masuk'=>$this->HomeModel->total_SuratMasuk(),
            'total_surat_keluar'=>$this->HomeModel->total_SuratKeluar(),
            'total_user'=>$this->HomeModel->total_User(),
            'total_arsip_masuk'=>$this->HomeModel->total_ArsipMasuk(),
            'total_arsip_keluar'=>$this->HomeModel->total_ArsipKeluar()
        );*/
        return view('index');
    }
    public function errorpage()
    {
        return view('errorpage');
    }

}
