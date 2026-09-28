<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Halaman Beranda (Mendukung Challenge 2: Interaktif Alert Nama)
    public function index(Request $request) {
        $user = $request->query('user', 'Guest');
        return view('home', compact('user'));
    }

    // Halaman Profil Mahasiswa
    public function profil() {
        return view('profil');
    }

    // Halaman Ide Riset Agentic AI (Mendukung Challenge 1: Dynamic Dark/Light Mode)
    public function ideAgent(Request $request) {
        $mode = $request->query('mode', 'light');
        return view('ide-agent', compact('mode'));
    }
}