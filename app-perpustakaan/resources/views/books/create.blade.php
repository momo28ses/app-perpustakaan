@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')
    <h1>Tambah Buku</h1>
    <p><a href="{{ route('books.index') }}">&larr; Kembali</a></p>

    <form action="{{ route('books.store') }}" method="POST" style="max-width: 500px;">
        @csrf
        <label for="judul">Judul Buku</label>
        <input type="text" name="judul" id="judul" value="{{ old('judul') }}">
        @error('judul') <div class="error">{{ $message }}</div> @enderror

        <label for="penulis">Penulis</label>
        <input type="text" name="penulis" id="penulis" value="{{ old('penulis') }}">
        @error('penulis') <div class="error">{{ $message }}</div> @enderror

        <label for="tahun_terbit">Tahun Terbit</label>
        <input type="number" name="tahun_terbit" id="tahun_terbit" value="{{ old('tahun_terbit') }}">
        @error('tahun_terbit') <div class="error">{{ $message }}</div> @enderror

        <button type="submit" class="btn" style="margin-top: 1.5rem;">Simpan</button>
    </form>
@endsection