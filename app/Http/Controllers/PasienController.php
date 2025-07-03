<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Kelurahan;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    // Tampilkan semua data pasien
    public function index()
    {
        $data_pasien = Pasien::all();
        return view('pasiens', compact('data_pasien'));
    }

    // Tampilkan form tambah pasien
    public function create()
    {
        $kelurahan = Kelurahan::all();
        return view('pasiens.tambah_pasien', compact('kelurahan'));
    }

    // Simpan data pasien baru
    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|max:10',
            'nama' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required|date',
            'gender' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
            'kelurahan_id' => 'required|exists:kelurahans,id' // pastikan nama tabel benar
        ]);

        Pasien::create($request->all());

        return redirect()->route('pasien.index')->with('success', 'Data pasien berhasil ditambahkan');
    }

    // Tampilkan form edit pasien
    public function edit($id)
    {
        $pasien = Pasien::findOrFail($id);
        $kelurahan = Kelurahan::all();
        return view('pasiens.edit_pasien', compact('pasien', 'kelurahan'));
    }
}
