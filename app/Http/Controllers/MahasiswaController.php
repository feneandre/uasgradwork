<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function showRegisterForm()
    {
        return view('mahasiswa.mahasiswa_register');
    }

    public function register(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:mahasiswas',
            'asal_kampus' => 'required|string|max:255',
            'nomer_hp' => 'required|string|max:15',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Simpan data ke database
        Mahasiswa::create([
            'nama' => $validated['nama'],
            'email' => $validated['email'],
            'asal_kampus' => $validated['asal_kampus'],
            'nomer_hp' => $validated['nomer_hp'],
            'password' => bcrypt($validated['password']),
        ]);

        // Redirect ke halaman login
        return redirect()->route('mahasiswa.login')->with('success', 'Pendaftaran berhasil! Silakan login.');
    }
}
