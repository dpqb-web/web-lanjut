@extends('layouts.base')

@section('title', 'Halaman Awal')

@section('content')
<div class="container mt-4">
    <a href="{{ route('example.index') }}" class="btn btn-primary">Mahasiswa</a>
    <a href="{{ route('dosen.index') }}" class="btn btn-outline-secondary">Dosen</a>
    <a href="{{ route('produk.index') }}" class="btn btn-outline-secondary">Produk</a>
</div>
@endsection
