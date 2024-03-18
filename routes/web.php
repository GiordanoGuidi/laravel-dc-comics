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

// Rotta per lista fumetti
Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');

//Rotta per lista personaggi
Route::get('/characters', function () {
    return view('characters');
})->name('characters');

//Rotta per creazione fumetto
Route::get('/comics/create', [ComicController::class, 'create'])->name('comics.create');
//Rotta per salvare sul db il comic creato
Route::post('/comics', [ComicController::class, 'store'])->name('comics.store');

//Rotta per il singolo fumetto
Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comics.show');

//Rotta per modificare un fumetto
Route::get('/comics/{comic}/edit', [ComicController::class, 'edit'])->name('comics.edit');
//Rotta per salvare sul db le modifiche del fumetto
Route::put('/comics/{comic}', [ComicController::class, 'update'])->name('comics.update');

//Rotta per eliminare il fumetto
Route::delete('/comics/{comic}', [ComicController::class, 'destroy'])->name('comics.destroy');
