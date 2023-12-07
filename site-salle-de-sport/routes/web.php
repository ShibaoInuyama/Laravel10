<?php

use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'AccueilController'])->name('main.accueil');

Route::get('/cours', [MainController::class, 'CoursController'])->name('main.cours');

Route::get('/tarifs', [MainController::class, 'Tarifscontroller'])->name('main.tarifs');

Route::get('/contact', [MainController::class, 'ContactController'])->name('main.contact');

Route::get('/mentions-legales', [MainController::class, 'MentionsLegalesController'])->name('main.mentions-legales');