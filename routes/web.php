<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;


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

//Rotta Home
Route::get('/', function () {
    $comics = config('comics');
    return view('home', compact('comics'));
})->name('home');

//Rotta Comics Details
Route::get('comics/{comic}', [ComicController::class, 'show'])->name('comics.show');

// Rotta Comics List
Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');

//Rotta Characters
Route::get('/characters', function () {
    return view('characters');
})->name('characters');
