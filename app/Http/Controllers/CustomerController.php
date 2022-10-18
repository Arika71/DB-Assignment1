<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $data  = Customer::with('customer')->get();
        return view('customerdetails', ['data'=>$data]);
    }
}
