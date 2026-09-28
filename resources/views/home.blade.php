@extends('layouts.app')
@section('title', 'Beranda Utama')

@section('content')
    <!-- Challenge 2: Alert interaktif mendeteksi parameter ?user=Nama -->
    <x-status-banner type="success">
        Halo, <strong>{{ $user }}</strong>! Selamat datang di Portal Akademik & Riset Mahasiswa Teknik Informatika ITS.
    </x-status-banner>

    <div class="p-5 mb-4 bg-white rounded-3 shadow-sm border">
        <h1 class="display-5 fw-bold text-primary">Secure Feedback Hub</h1>
        <p class="col-md-8 fs-4">Aplikasi portofolio mandiri berbasis framework Laravel dengan ekosistem modern dan arsitektur MVC terstruktur.</p>
        <a href="{{ route('profil') }}" class="btn btn-dark btn-lg">Lihat Profil Akademik &rarr;</a>
    </div>
@endsection