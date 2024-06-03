<?php

namespace App\Controllers;
use App\Models\TablebukuModel;


class Crud extends BaseController
{
    protected $TablebukuModel;
    public function __construct()
    {
        $this->TablebukuModel = new TablebukuModel();
    }

    public function buku()
    {
         return view('table_buku');
    }
}