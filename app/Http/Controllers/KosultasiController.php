<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KosultasiController extends Controller
{
    function index()
    {
        return view('/pesanan.index');
    }
}
