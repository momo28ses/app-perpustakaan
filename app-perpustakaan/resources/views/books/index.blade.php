@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    <h1>Daftar Buku</h1>

    @if (session('success'))
        <div class="success">{{ session('success') }}</div>
    @endif

    <p><a href="{{ route('books.create') }}" class="btn">+ Tambah Buku</a></p>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Tahun Terbit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($books as $book)
                <tr>
                    <td>{{ $book['id'] }}</td>
                    <td>{{ $book['judul'] }}</td>
                    <td>{{ $book['penulis'] }}</td>
                    <td>{{ $book['tahun_terbit'] }}</td>
                    <td>
                        <a href="{{ route('books.show', $book['id']) }}">Detail</a> |
                        <a href="{{ route('books.edit', $book['id']) }}">Edit</a>
                    </td>
                </tr>
            @empty
                <tr><td colspan="5">Belum ada data buku.</td></tr>
            @endforelse
        </tbody>
    </table>
@endsection