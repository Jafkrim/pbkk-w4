@extends('layouts.app')
@section('title', 'Profil Mahasiswa')

@section('content')
    <h2 class="mb-4">Profil Akademik Pengguna</h2>

    <x-info-card>
        <x-slot:header>Identitas Mahasiswa</x-slot:header>
        <p><strong>Nama Lengkap:</strong> Ja'far Balyan Al Karim</p>
        <p><strong>NRP:</strong> 5025241040</p>
        <p><strong>Departemen:</strong> Teknik Informatika ITS</p>
        <p><strong>Fakultas:</strong> Fakultas Teknologi Elektro dan Informatika Cerdas (FTEIC)</p>
    </x-info-card>
@endsection