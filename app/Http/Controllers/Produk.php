<?php

namespace App\Http\Controllers;

use App\Models\Produk as ModelProduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Produk extends Controller
{
    public function index()
    {
        $data = ModelProduk::all();
        return view('produk.index', compact('data'));
    }

    public function create()
    {
        return view('produk.create');
    }

    public function store(Request $request)
    {
        ModelProduk::create($request->all());
        Storage::disk('public')->putFileAs('produk', $request->file('gambar'), $request->input('kode_produk'));
        return redirect()->route('produk.index')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $data = ModelProduk::findOrFail($id);
        return view('produk.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = ModelProduk::findOrFail($id);
        $data->update($request->all());
        Storage::disk('public')->putFileAs('produk', $request->file('gambar'), $request->input('kode_produk'));

        return redirect()->route('produk.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $data = ModelProduk::findOrFail($id);
        $data->delete();
        Storage::disk('public')->delete('produk/' . $data->kode_produk);

        return redirect()->route('produk.index')->with('success', 'Data berhasil dihapus!');
    }
}
