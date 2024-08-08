@extends('layout')

@section('title', 'Daftar Sebagai Mahasiswa')

@section('content')
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card p-4 shadow" style="width: 400px;">
        <h2 class="text-center mb-4">Daftar Sebagai Mahasiswa</h2>
        <form action="{{ route('mahasiswa.register.submit') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="asal_kampus" class="form-label">Asal Kampus</label>
                <input type="text" class="form-control" id="asal_kampus" name="asal_kampus" required>
            </div>
            <div class="mb-3">
                <label for="nomer_hp" class="form-label">Nomer Hp</label>
                <input type="text" class="form-control" id="nomer_hp" name="nomer_hp" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="agree" required>
                <label class="form-check-label" for="agree">Saya telah menyetujui segala aturan GradWork</label>
            </div>
            <button type="submit" class="btn btn-primary w-100">Daftar</button>
        </form>
        <p class="mt-3 text-center">Sudah punya akun? <a href="{{ route('mahasiswa.login') }}">Daftar</a></p>
    </div>
</div>
@endsection
