@extends('layouts.base')

@section('title', 'Edit Data')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header">Edit Data</div>
        <div class="card-body">
            <form action="{{ route('produk.update', $data->id) }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label>Kode Produk</label>
                    <input type="text" name="kode_produk" value="{{ $data->kode_produk }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Nama Produk</label>
                    <input type="text" name="nama_produk" value="{{ $data->nama_produk }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Harga</label>
                    <input type="number" name="harga" value="{{ $data->harga }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" required>{{ $data->deskripsi }}</textarea>
                </div>

                <button class="btn btn-success">Update</button>
                <a href="{{ route('produk.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
