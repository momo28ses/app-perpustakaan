@extends('layouts.app')

@section('title', 'Dashboard - App Perpustakaan')

@section('content')
    <h1>Selamat Datang di App Perpustakaan</h1>
    <p>Sistem Informasi Manajemen Perpustakaan berbasis Laravel 12.</p>

    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem; margin-top: 2rem;">
        <div style="background: white; padding: 1.5rem; border-radius: 8px; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
            <h3>📚 Kelola Buku</h3>
            <p>Manajemen koleksi buku perpustakaan.</p>
            <a href="{{ route('books.index') }}" class="btn">Lihat Buku</a>
        </div>
        <div style="background: white; padding: 1.5rem; border-radius: 8px; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
            <h3>🏷️ Kelola Kategori</h3>
            <p>Pengelompokan kategori buku.</p>
            <a href="{{ route('categories.index') }}" class="btn">Lihat Kategori</a>
        </div>
        <div style="background: white; padding: 1.5rem; border-radius: 8px; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
            <h3>👥 Kelola Anggota</h3>
            <p>Manajemen anggota dan pendaftaran.</p>
            <a href="{{ route('members.index') }}" class="btn">Lihat Anggota</a>
        </div>
    </div>
@endsection