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

Route::get('/index', function () {
    return view('index');
});
Route::get('/content', function () {
    return view('content');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/agenda', function () {
    return view('agenda');
});
Route::get('/berita', function () {
    return view('berita');
});
Route::get('/kalender', function () {
    return view('kalender');
});