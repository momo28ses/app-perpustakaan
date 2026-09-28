<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMemberRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nama' => 'required|string|max:100',
            'email' => 'required|email|unique:members,email|max:100',
            'nomor_telepon' => 'required|string|max:15',
            'alamat' => 'required|string',
            'status' => 'required|in:aktif,nonaktif',
        ];
    }
}