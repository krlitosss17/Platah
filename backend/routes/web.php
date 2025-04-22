<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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

// Ruta para la landing page
Route::get('/', [PublicController::class, 'home'])->name('home');

// Ruta para la sección de vacantes
Route::get('/vacantes', [PublicController::class, 'vacancies'])->name('vacancies');




