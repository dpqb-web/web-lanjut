<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa as ModelMahasiswa;
use Illuminate\Http\Request;

class Mahasiswa extends Controller
{
    public function index()
    {
        $data = ModelMahasiswa::all();
        return view('mahasiswa.index', compact('data'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        ModelMahasiswa::create($request->all());
        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $data = ModelMahasiswa::findOrFail($id);
        return view('mahasiswa.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = ModelMahasiswa::findOrFail($id);
        $data->update($request->all());

        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $data = ModelMahasiswa::findOrFail($id);
        $data->delete();

        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil dihapus!');
    }
}
