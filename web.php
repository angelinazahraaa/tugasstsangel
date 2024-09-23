<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Fcades\HomeController;


// Route::get('/',[HomeController::class, "tampil"]);

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/projects', function () {
    return view('projects');
});
Route::get('/kontak', function () {
    return view('kontak');
});
