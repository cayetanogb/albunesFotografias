<?php

use App\Http\Controllers\AlbunController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/albun', [AlbunController::class, 'index'])->name('index');

Route::get('/albun/show/{id}', [AlbunController::class, 'show'])->name('showAlbun');

Route::middleware('auth')->group(function () {
    Route::get('/perfil', function () {
        return view('perfil');
    })->name('perfil');

    Route::get('/albun/create', [AlbunController::class, 'create'])->name('createAlbun');

    Route::post('/albun/create', [AlbunController::class, 'store'])->name('storeAlbun');

    Route::get('/albun/edit/{id}', [AlbunController::class, 'edit'])->name('editAlbun');

    Route::put('/albun/edit/{id}', [AlbunController::class, 'update'])->name('updateAlbun');
});

require __DIR__ . '/auth.php';
