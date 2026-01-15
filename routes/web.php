<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\projectcontroller;

Route::get('/', function () {
    return view('portofolio');
});

Route::get('/Project', [projectcontroller::class, 'index']);

Route::get('/ProjectSaya', function () {
    return view('ProjectSaya');
});