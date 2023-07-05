<?php

namespace App\Controllers;

use App\Models\SuratKeluarModel;

class Login extends BaseController
{
    public function index()
    {
        return view('login2');
    }

}