@extends('layouts.app')
@section('title', 'Ide Agentic AI')

@section('content')
    <!-- Challenge 1: Dynamic Theme Toggle via parameter ?mode=dark/light -->
    <div class="p-5 rounded-3 shadow-sm {{ $mode == 'dark' ? 'bg-dark text-white' : 'bg-white text-dark border' }}">
        <h2>Rencana Proyek Akhir: Platform Agentic AI</h2>
        <hr>
        <p class="lead">Kelompok kami memilih tema spesifik:</p>
        <div class="p-3 mb-3 rounded {{ $mode == 'dark' ? 'bg-secondary text-light' : 'bg-light border' }}">
            <strong>Tema:</strong> Smart Local Archivist (ByeByeCleaner)
        </div>
        <p>Merupakan asisten AI otonom lokal yang dapat mengelola dan merapikan tumpukan file usang di perangkat pengguna berdasarkan topik.</p>

        <a href="{{ route('ide.agent', ['mode' => $mode == 'dark' ? 'light' : 'dark']) }}" class="btn btn-{{ $mode == 'dark' ? 'light' : 'dark' }} btn-sm mt-3">
            Ubah Tampilan ke Mode {{ $mode == 'dark' ? 'Terang (Light)' : 'Gelap (Dark)' }}
        </a>
    </div>
@endsection