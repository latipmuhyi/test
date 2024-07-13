<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilPerusahaanCustomerController extends Controller
{
    public function index(){
        return view('ProfilePerusahaan.index');
    }
}
