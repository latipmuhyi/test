<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public function index()
    {
        $items = Produk::all();
        $itemsEdit = Produk::first();
        return view('Merchant.Produk.index', compact('items', 'itemsEdit'));
    }

    public function insert(Request $request)
    {
        $request->validate([
            'nama_makanan' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'harga' => 'required|numeric',
            'deskripsi' => 'required|string',
            'kategori' => 'required|in:Minuman,Makanan',
            'stok' => 'required|integer',
        ]);

        try {
            $input = $request->all();

            if ($request->hasFile('foto')) {
                $image = $request->file('foto');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads'), $imageName);
                $input['foto'] = $imageName;
            }

            Produk::create($input);

            return response()->json(['message' => 'Produk berhasil disimpan'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Terjadi kesalahan: ' . $e->getMessage()], 500);
        }
    }

    public function edit($id)
    {
        $produk = Produk::find($id);

        if (!$produk) {
            return response()->json(['error' => 'Produk tidak ditemukan.'], 404);
        }

        return response()->json(['produk' => $produk]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_makanan' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'deskripsi' => 'required|string',
            'kategori' => 'required|in:Minuman,Makanan',
            'stok' => 'required|integer',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        try {
            $produk = Produk::find($id);

            if (!$produk) {
                return response()->json(['error' => 'Produk tidak ditemukan.'], 404);
            }

            $input = $request->all();

            if ($request->hasFile('foto')) {
                $image = $request->file('foto');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads'), $imageName);
                $input['foto'] = $imageName;
            } else {
                $input['foto'] = $produk->foto;
            }

            $produk->update($input);

            return response()->json(['success' => 'Produk berhasil diperbarui.']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Terjadi kesalahan: ' . $e->getMessage()], 500);
        }
    }
}
