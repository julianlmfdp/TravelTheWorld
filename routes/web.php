<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\SaludoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saludo', [SaludoController::class, 'index']);

Route::get('/inicio', [InicioController::class, 'index']);



