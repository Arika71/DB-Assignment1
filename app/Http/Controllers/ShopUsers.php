<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopUsers extends Controller
{
    public function index(){
        $data  = ShopUsers::with('ShopUsers')->get();
        return view('ShopUsersdetails', ['data'=>$data]);
    }
}
