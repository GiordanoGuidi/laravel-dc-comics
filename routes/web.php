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

//Rotta Comics
Route::get('/', function () {
    $comics = config('comics');
    return view('home', compact('comics'));
})->name('home');

//Rotta Comics Details
Route::get('comics/{index}', function ($index) {
    $comics = config('comics');
    if (!is_numeric($index) || $index < 0 || $index >= count($comics)) {
        abort(404);
    }
    return view('products.show', ['comic' => $comics[$index]]);
})->name('products.show');

//Rotta Characters
Route::get('/characters', function () {
    return view('characters');
})->name('characters');
