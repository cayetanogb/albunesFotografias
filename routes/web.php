<?php

use App\Http\Controllers\AlbunController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/perfil', [UserController::class, 'index'])->name('perfil');

    Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('editUser');

    Route::put('/user/edit/{id}', [UserController::class, 'update'])->name('updateUser');

    Route::delete('/user/delete/{id}', [UserController::class, 'destroy'])->name('deleteUser');

    Route::get('/albun', [AlbunController::class, 'index'])->name('indexAlbun');

    Route::get('/albun/show/{id}', [AlbunController::class, 'show'])->name('showAlbun');

    Route::get('/albun/create', [AlbunController::class, 'create'])->name('createAlbun');

    Route::post('/albun/create', [AlbunController::class, 'store'])->name('storeAlbun');

    Route::get('/albun/añadirFoto/{id}', [AlbunController::class, 'addFoto'])->name('addFoto');

    Route::post('/albun/añadirFoto/{id}', [AlbunController::class, 'storeFoto'])->name('storeFotoAlbun');

    Route::get('/albun/edit/{id}', [AlbunController::class, 'edit'])->name('editAlbun');

    Route::put('/albun/edit/{id}', [AlbunController::class, 'update'])->name('updateAlbun');

    Route::delete('/albun/delete/{id}', [AlbunController::class, 'destroy'])->name('deleteAlbun');

    Route::get('/foto', [FotoController::class, 'index'])->name('indexFoto');

    Route::put('/foto/{id}', [FotoController::class, 'destacado'])->name('destacadoFoto');

    Route::get('/foto/show/{id}', [FotoController::class, 'show'])->name('showFoto');

    Route::get('/foto/create', [FotoController::class, 'create'])->name('createFoto');

    Route::post('/foto/create', [FotoController::class, 'store'])->name('storeFoto');

    Route::get('/foto/edit/{id}', [FotoController::class, 'edit'])->name('editFoto');

    Route::put('/foto/edit/{id}', [FotoController::class, 'update'])->name('updateFoto');

    Route::delete('/foto/delete/{id}', [FotoController::class, 'destroy'])->name('deleteFoto');
});

require __DIR__ . '/auth.php';
