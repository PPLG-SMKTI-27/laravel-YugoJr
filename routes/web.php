<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\projectcontroller;
use App\Http\Controllers\PortofolioController;

Route::get('/', function () {
    return view('portofolio2');
});

Route::get('/Project', [projectcontroller::class, 'index']);

Route::get('/ProjectSaya', function () {
    return view('ProjectSaya');
});

Route::get('/Portofolio', [PortofolioController::class, 'index']);
