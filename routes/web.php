<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/profil-mahasiswa', [PageController::class, 'profil'])->name('profil');
Route::get('/ide-agent', [PageController::class, 'ideAgent'])->name('ide.agent');