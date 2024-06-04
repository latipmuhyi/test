<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelolaProdukController extends Controller
{
    function index()
    {
        return view('/Pesanan.index');
    }
}
