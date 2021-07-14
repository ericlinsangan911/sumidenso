<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AnimalsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/question1', [AnimalsController::class, 'manageAnimals'])->name('manageAnimals');
Route::get('/question2', [AnimalsController::class, 'guessGame'])->name('guessGame');
Route::get('/question3', [AnimalsController::class, 'grades'])->name('grades');
Route::get('/question4', [AnimalsController::class, 'tri'])->name('tri');
Route::post('/addAnimals', [AnimalsController::class, 'addAnimals'])->name('addAnimals');
Route::post('/addGrade', [AnimalsController::class, 'addGrade'])->name('addGrade');
Route::get('/flyAnimals', [AnimalsController::class, 'flyAnimals'])->name('flyAnimals');
Route::get('/runAnimals', [AnimalsController::class, 'runAnimals'])->name('runAnimals');
Route::post('/guess', [AnimalsController::class, 'gameRandom'])->name('guessSubmit');
Route::post('/triangle', [AnimalsController::class, 'triangle'])->name('triangle');