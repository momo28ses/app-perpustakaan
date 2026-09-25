@extends('layouts.app')

@section('title', 'Tambah Anggota')

@section('content')
    <h1>Tambah Anggota</h1>
    <p><a href="{{ route('members.index') }}">&larr; Kembali</a></p>

    <form action="{{ route('members.store') }}" method="POST" style="max-width: 500px;">
        @csrf

        <label for="nama">Nama Lengkap</label>
        <input type="text" name="nama" id="nama" value="{{ old('nama') }}">
        @error('nama') <div class="error">{{ $message }}</div> @enderror

        <label for="nim">NIM</label>
        <input type="text" name="nim" id="nim" value="{{ old('nim') }}">
        @error('nim') <div class="error">{{ $message }}</div> @enderror

        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}">
        @error('email') <div class="error">{{ $message }}</div> @enderror

        <label for="status">Status</label>
        <select name="status" id="status">
            <option value="">-- Pilih Status --</option>
            <option value="aktif" @selected(old('status') === 'aktif')>Aktif</option>
            <option value="nonaktif" @selected(old('status') === 'nonaktif')>Nonaktif</option>
        </select>
        @error('status') <div class="error">{{ $message }}</div> @enderror

        <button type="submit" class="btn" style="margin-top: 1.5rem;">Simpan</button>
    </form>
@endsection