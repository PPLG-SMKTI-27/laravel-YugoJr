<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\AuthController;

{
}

Route::get('/', function () {
    return view('home');
});

Route::get('/ProjectSaya', function () {
    return view('ProjectSaya');
});

Route::get('/Portofolio', [PortofolioController::class, 'index']);

Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'authenticate']);