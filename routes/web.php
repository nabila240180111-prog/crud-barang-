<?php

use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/barang');
});

Route::resource('barang', BarangController::class);