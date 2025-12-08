<?php

namespace App\Http\Controllers;

use App\Models\Dosen as ModelDosen;
use Illuminate\Http\Request;

class Dosen extends Controller
{
    public function index()
    {
        $data = ModelDosen::all();
        return view('dosen.index', compact('data'));
    }

    public function create()
    {
        return view('dosen.create');
    }

    public function store(Request $request)
    {
        ModelDosen::create($request->all());
        return redirect()->route('dosen.index')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $data = ModelDosen::findOrFail($id);
        return view('dosen.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = ModelDosen::findOrFail($id);
        $data->update($request->all());

        return redirect()->route('dosen.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $data = ModelDosen::findOrFail($id);
        $data->delete();

        return redirect()->route('dosen.index')->with('success', 'Data berhasil dihapus!');
    }
}
