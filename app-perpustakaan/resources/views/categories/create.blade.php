@extends('layouts.app')

@section('title', 'Tambah Kategori')

@section('content')
    <h1>Tambah Kategori</h1>
    <p><a href="{{ route('categories.index') }}">&larr; Kembali</a></p>

    <form action="{{ route('categories.store') }}" method="POST" style="max-width: 500px;">
        @csrf
        <label for="nama_kategori">Nama Kategori</label>
        <input type="text" name="nama_kategori" id="nama_kategori" value="{{ old('nama_kategori') }}">
        @error('nama_kategori') <div class="error">{{ $message }}</div> @enderror

        <label for="deskripsi">Deskripsi</label>
        <textarea name="deskripsi" id="deskripsi" rows="3">{{ old('deskripsi') }}</textarea>

        <button type="submit" class="btn" style="margin-top: 1.5rem;">Simpan</button>
    </form>
@endsection