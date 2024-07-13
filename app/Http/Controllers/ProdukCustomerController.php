<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukCustomerController extends Controller
{
    public function index(){
        $items = Produk::all();
        return view('Produk.index', compact('items'));
    }
}
