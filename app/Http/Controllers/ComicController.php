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
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }
    // Funzione che mostra pagina per creare Comic
    public function create()
    {
        return view('comics.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $comic = new Comic();
        $comic->fill($data);
        $comic->save();

        return to_route('comics.show', $comic->id);
    }
}
