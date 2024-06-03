<?php

namespace App\Controllers;
use App\Models\ModelAdmin;

class dashboard extends BaseController
{
    public function main()
    {
         return view('dashboard');
    }
    public function databuku()
    {
         return view('databuku');
    }
    public function datauser()
    {
         return view('datauser');
    }
     // public function index()
     // {
     //      $data = [
     //           'menu' => 'dashboard',
     //           'submenu' => '',
     //           'judul' => 'dashboard',
     //           'page' => 'dashboard',
     //      ];
     //      return view('templatedb');
     // } 
}