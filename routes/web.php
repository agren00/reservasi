<?php

use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\UndanganController;
use App\Models\Reservasi;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/reservasi',[ReservasiController::class, 'reservasi'])->name('reservasi');

