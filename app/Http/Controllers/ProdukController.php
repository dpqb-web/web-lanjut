<?php

namespace App\Http\Controllers;

use App\Models\ProdukModel;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $data = ProdukModel::all();
        return view('produk.index', compact('data'));
    }

    public function create()
    {
        return view('produk.create');
    }

    public function store(Request $request)
    {
        ProdukModel::create($request->all());
        return redirect()->route('produk.index')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $data = ProdukModel::findOrFail($id);
        return view('produk.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = ProdukModel::findOrFail($id);
        $data->update($request->all());

        return redirect()->route('produk.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $data = ProdukModel::findOrFail($id);
        $data->delete();

        return redirect()->route('produk.index')->with('success', 'Data berhasil dihapus!');
    }
}
