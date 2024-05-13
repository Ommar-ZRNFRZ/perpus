<?php

namespace App\Controllers;

class Tampilan extends BaseController
{
    public function contact()
    {
         return view('contact');
    }
    public function index()
    {
         return view('index');
    }
    public function product()
    {
         return view('product-details');
    }
    public function shop()
    {
         return view('shop');
    }
}