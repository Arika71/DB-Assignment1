<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Shop extends Controller
{
    public function index(){
        $data  = Shop::with('Shop')->get();
        return view('Shopdetails', ['data'=>$data]);
    }
}
