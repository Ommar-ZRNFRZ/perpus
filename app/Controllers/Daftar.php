<?php

namespace App\Controllers;
use App\Models\Tb_userModel;

class Daftar extends BaseController
{
    protected $Tb_userModel;
    public function __construct()
    {
        $this->Tb_userModel = new Tb_userModel();
    }

    public function daftar()
    {
        $user = $this->Tb_userModel->findAll();


         return view('daftar');  
    }
}