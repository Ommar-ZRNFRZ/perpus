<?php

namespace App\Controllers;

class Crud extends BaseController
{
    public function buku()
    {
         return view('table_buku');
    }
}