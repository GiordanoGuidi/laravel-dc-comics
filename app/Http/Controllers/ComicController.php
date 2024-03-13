<?php

namespace App\Http\Controllers;

use App\Models\Comic;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    //Funzione per mostare la lista dei fumetti
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    //Funzione per mostare il singolo fumetto
    public function show()
    {
    }
}
