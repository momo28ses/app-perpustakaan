<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMemberRequest;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    private array $members = [
        [
            'id'            => 1,
            'nama'          => 'Ahmad Fauzi',
            'nim'           => '22041110001',
            'email'         => 'ahmad.fauzi@example.com',
            'nomor_telepon' => '081234567890',
            'alamat'        => 'Jl. Sukolilo No. 12, Surabaya',
            'status'        => 'aktif',
        ],
        [
            'id'            => 2,
            'nama'          => 'Siti Nurhaliza',
            'nim'           => '22041110002',
            'email'         => 'siti.nur@example.com',
            'nomor_telepon' => '081987654321',
            'alamat'        => 'Jl. Gebang Wetan No. 5, Surabaya',
            'status'        => 'aktif',
        ],
        [
            'id'            => 3,
            'nama'          => 'Budi Santoso',
            'nim'           => '21041110045',
            'email'         => 'budi.santoso@example.com',
            'nomor_telepon' => '085712349876',
            'alamat'        => 'Jl. Manyar Sabrangan No. 8, Surabaya',
            'status'        => 'nonaktif',
        ],
    ];

    public function index()
    {
        $members = $this->members;

        return view('members.index', compact('members'));
    }

    public function create()
    {
        return view('members.create');
    }

    public function store(StoreMemberRequest $request)
    {
        $validated = $request->validated();

        return redirect()->route('members.index')
            ->with('success', "Anggota \"{$validated['nama']}\" berhasil ditambahkan (data dummy, belum tersimpan ke database).");
    }

    public function show(string $id)
    {
        $member = collect($this->members)->firstWhere('id', (int) $id);
        abort_if(! $member, 404);

        return "MemberController@show, id: {$id}";
    }

    public function edit(string $id)
    {
        return "MemberController@edit, id: {$id}";
    }

    public function update(Request $request, string $id)
    {
        return "MemberController@update, id: {$id}";
    }

    public function destroy(string $id)
    {
        return redirect()->route('members.index')
            ->with('success', "Anggota dengan ID {$id} berhasil dihapus (data dummy).");
    }
}