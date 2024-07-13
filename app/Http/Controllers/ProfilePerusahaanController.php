<?php

namespace App\Http\Controllers;

use App\Models\ProfilPerusahaan;
use Illuminate\Http\Request;

class ProfilePerusahaanController extends Controller
{
    public function index()
    {
        $data = ProfilPerusahaan::first();
        return view('Merchant.Profile.index', compact('data'));
    }


    public function simpanProfile(Request $request)
    {
        dd($request);
        $validasi = $request->validate([
            'nama_perusahaan' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
            'nama_jalan' => 'required|string|max:255',
            'rt' => 'required|string|max:10',
            'rw' => 'required|string|max:10',
            'desa' => 'required|string|max:255',
            'kecamatan' => 'required|string|max:255',
            'kabupaten' => 'required|string|max:255',
            'provinsi' => 'required|string|max:255',
            'kontak' => 'required|string|max:12',
        ]);

        $alamat = $validasi['nama_jalan'] . "-" . $validasi['rt'] . "-" . $validasi['rw'] . "-" . $validasi['desa'] . "-" . $validasi['kecamatan'] . "-" . $validasi['kabupaten'] . "-" . $validasi['provinsi'];

        $data = [
            'nama_perusahaan' => $validasi['nama_perusahaan'],
            'alamat' => $alamat,
            'kontak' => $validasi['kontak'],
            'deskripsi' => $validasi['deskripsi'],
        ];

        ProfilPerusahaan::create($data);

        return redirect()->back()->with('success', 'Profil perusahaan berhasil disimpan.');
    }

    public function editProfile(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_perusahaan' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
            'nama_jalan' => 'required|string|max:255',
            'rt' => 'required|string|max:10',
            'rw' => 'required|string|max:10',
            'desa' => 'required|string|max:255',
            'kecamatan' => 'required|string|max:255',
            'kabupaten' => 'required|string|max:255',
            'provinsi' => 'required|string|max:255',
            'kontak' => 'required|string|max:12',
        ]);

        $alamat = implode('-', [
            $validatedData['nama_jalan'],
            $validatedData['rt'],
            $validatedData['rw'],
            $validatedData['desa'],
            $validatedData['kecamatan'],
            $validatedData['kabupaten'],
            $validatedData['provinsi']
        ]);

        $data = [
            'nama_perusahaan' => $validatedData['nama_perusahaan'],
            'alamat' => $alamat,
            'kontak' => $validatedData['kontak'],
            'deskripsi' => $validatedData['deskripsi'],
        ];

        $profile = ProfilPerusahaan::findOrFail($id);
        $profile->update($data);

        return redirect()->back()->with('success', 'Profil perusahaan berhasil diperbarui.');
    }
}
