<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/daftar-menu', function () {
    $jsonData = [
        'status' => 'success',
        'data' => [
            ['id' => 1, 'nama' => 'Bakso', 'harga' => 'Rp.12.000'],
            ['id' => 2, 'name' => 'Mie Ayam', 'harga' => 'Rp.10.000'],
            ['id' => 3, 'name' => 'Sate Kambing', 'harga' => 'Rp.20.000']
        ]
    ];
    return response()->json($jsonData);
});
Route::group(['prefix' => 'admin'], function (){
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/user-list', function () {
        return view('admin.daftar-user');
    });
});
