<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Klien;

class KlienController extends Controller
{
    public function showRegisterForm()
    {
        return view('klien.klien_register');
    }

    public function register(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:kliens',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Simpan data ke database
        Klien::create([
            'nama' => $validated['nama'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
        ]);

        // Redirect ke halaman login
        return redirect()->route('klien.login')->with('success', 'Pendaftaran berhasil! Silakan login.');
    }
}

