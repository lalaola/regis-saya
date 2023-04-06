<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

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

Route::get('/', [RegisterController::class, 'showRegistrationForm'])->name('register.create');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register.create');
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::delete('/register/{id}', [RegisterController::class, 'destroy'])->name('register.destroy');