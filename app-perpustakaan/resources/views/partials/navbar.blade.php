<nav style="background: #1e293b; padding: 1rem 2rem; display: flex; justify-content: space-between; align-items: center; color: white;">
    <div style="font-weight: bold; font-size: 1.25rem;">
        <a href="{{ url('/') }}" style="color: white; text-decoration: none;">📚 App Perpustakaan</a>
    </div>
    <ul style="list-style: none; display: flex; gap: 1.5rem; margin: 0; padding: 0;">
        <li><a href="{{ url('/') }}" style="color: #cbd5e1; text-decoration: none;">Dashboard</a></li>
        <li><a href="{{ route('books.index') }}" style="color: #cbd5e1; text-decoration: none;">Buku</a></li>
        <li><a href="{{ route('categories.index') }}" style="color: #cbd5e1; text-decoration: none;">Kategori</a></li>
        <li><a href="{{ route('members.index') }}" style="color: #cbd5e1; text-decoration: none;">Anggota</a></li>
    </ul>
</nav>