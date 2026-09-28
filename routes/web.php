<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/produk', function () {
    $produk = [
        ['nama' => 'Sepatu Lari', 'harga' => 350000],
        ['nama' => 'Kaos Polos', 'harga' => 75000],
        ['nama' => 'Topi Baseball', 'harga' => 60000],
    ];
    return view('produk', ['produk' => $produk]);
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact', ["nama" => "abiyu rafi khambali", "instagram" => "@buterskot"]);
});
