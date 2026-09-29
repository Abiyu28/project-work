<?php

use App\Http\Controllers\ProdukController;
use App\Models\Produk;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/produk',[ProdukController::class, 'index']);

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact', ["nama" => "abiyu rafi khambali", "instagram" => "@buterskot"]);
});
