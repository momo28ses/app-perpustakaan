<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Anggota</title>
    <style>
        body { font-family: sans-serif; margin: 40px; color: #333; }
        h1 { margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 16px; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background: #f3f4f6; }
        .btn { padding: 8px 14px; background: #2563eb; color: #fff; text-decoration: none; border-radius: 4px; border: none; cursor: pointer; display: inline-block; }
        .success { background: #dcfce7; color: #166534; padding: 12px; margin-bottom: 16px; border-radius: 4px; }
        .top-bar { display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px; }
    </style>
</head>
<body>
    <h1>Daftar Anggota</h1>

    @if (session('success'))
        <div class="success">{{ session('success') }}</div>
    @endif

    <div class="top-bar">
        <a href="{{ route('members.create') }}" class="btn">+ Tambah Anggota</a>

        <form action="{{ route('members.index') }}" method="GET">
            <input type="text" name="search" placeholder="Cari nama anggota..." value="{{ request('search') }}" style="padding: 8px; width: 220px; border: 1px solid #ccc; border-radius: 4px;">
            <button type="submit" class="btn">Cari</button>
            @if(request('search'))
                <a href="{{ route('members.index') }}" style="margin-left: 8px; text-decoration: none; color: #666;">Reset</a>
            @endif
        </form>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($members as $member)
                <tr>
                    <td>{{ $member->id }}</td>
                    <td>{{ $member->nama }}</td>
                    <td>{{ $member->email }}</td>
                    <td>{{ $member->nomor_telepon }}</td>
                    <td>{{ ucfirst($member->status) }}</td>
                    <td>
                        <a href="{{ route('members.show', $member->id) }}">Detail</a> |
                        <a href="{{ route('members.edit', $member->id) }}">Edit</a> |
                        <form action="{{ route('members.destroy', $member->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin hapus anggota ini?')" style="background:none; border:none; color:red; cursor:pointer; text-decoration:underline;">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="6" style="text-align: center; color: #777;">Belum ada data anggota.</td></tr>
            @endforelse
        </tbody>
    </table>

    <div style="margin-top: 20px;">
        {{ $members->appends(request()->query())->links() }}
    </div>
</body>
</html>