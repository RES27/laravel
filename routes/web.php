<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/daftar-menu', function () {
    $jsonData = [
        'status' => 'success',
        'data' => [
            ['id' => 1, 'name' => 'Bakso = Rp.12.000'],
            ['id' => 2, 'name' => 'Mie Ayam = Rp.10.000'],
            ['id' => 3, 'name' => 'Sate Kambing = Rp.20.000']
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
