<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PixController;
use App\Http\Controllers\CashController;

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/auth',[LoginController::class,'auth'])->name('auth.user');
Route::post('/store',[LoginController::class,'store'])->name('store.user');
Route::get('/registrar', [LoginController::class, 'registrar'])->name('registrar');
Route::post('/logout',[LoginController::class,'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/pix', [PixController::class, 'index'])->name('pix');
    Route::get('/pix/buscar', [PixController::class, 'buscar'])->name('pix.buscar');
    Route::get('/pix/novo', [PixController::class, 'create'])->name('pix.novo');
    Route::post('/pix/store', [PixController::class, 'store'])->name('pix.store');
    Route::get('/pix/{id}', [PixController::class, 'show'])->name('pix.show');
    Route::get('/pix/editar/{id}', [PixController::class, 'edit'])->name('pix.editar');
    Route::put('/pix/update/{id}', [PixController::class, 'update'])->name('pix.update');
    Route::get('/pix/remover/{id}', [PixController::class, 'destroy'])->name('pix.remover');

    Route::get('/cash', [CashController::class, 'index'])->name('cash');
    Route::get('/cash/buscar', [CashController::class, 'buscar'])->name('cash.buscar');
    Route::get('/cash/novo', [CashController::class, 'create'])->name('cash.novo');
    Route::post('/cash/store', [CashController::class, 'store'])->name('cash.store');
    Route::get('/cash/{id}', [CashController::class, 'show'])->name('cash.show');
    Route::get('/cash/editar/{id}', [CashController::class, 'edit'])->name('cash.editar');
    Route::put('/cash/update/{id}', [CashController::class, 'update'])->name('cash.update');
    Route::get('/cash/remover/{id}', [CashController::class, 'destroy'])->name('cash.remover');
});
