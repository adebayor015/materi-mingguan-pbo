<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data = Mahasiswa::all();
        return view('Mahasiswa', compact('data'), [
            "title" => "Data Mahasiswa",
        ]);
    }

    public function tambahmahasiswa()
    {
        return view('tambahmahasiswa', [
            "title" => "Tambah Data Mahasiswa",
        ]);
    }

    public function insertdata(Request $request)
    {
        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswa')->with('success', 'Data Berhasil Di Tambahkan');
    }

    public function tampildata($id)
    {
        // MENGGUNAKAN findOrFail: Jika ID tidak ada di DB, akan muncul 404, bukan error null
        $data = Mahasiswa::findOrFail($id);
        
        return view("edit", [
            "title" => "Edit data mahasiswa",
            "data" => $data,
        ]);
    }

    public function editdata(Request $request, $id)
    {
        $data = Mahasiswa::findOrFail($id);
        $data->update($request->all());
        return redirect()->route('mahasiswa')->with('success', 'Data Berhasil Di Update');
    }

    public function deletedata($id)
    {
        $data = Mahasiswa::findOrFail($id);
        $data->delete();
        return redirect()->route('mahasiswa')->with('success', 'Data Berhasil Di Hapus');
    }
}