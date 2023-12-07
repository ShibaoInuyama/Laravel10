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
    return view('accueil');
});

Route::get('/', function () {
    return view('cours');
});

Route::get('/', function () {
    return view('tarifs');
});

Route::get('/', function () {
    return view('contact');
});

Route::get('/', function () {
    return view('mentions-legales');
});
