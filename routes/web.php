<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home.home');
});

Route::get('/about', function () {
    return view('home.about');
});

Route::get('/why-us', function () {
    return view('home.why-us');
});

Route::get('/contact', function () {
    return view('home.contact');
});
