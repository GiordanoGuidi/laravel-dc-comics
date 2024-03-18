<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;
use App\Models\Comic;
use Illuminate\Http\Request;
use function Laravel\Prompts\error;
use Illuminate\Validation\Rule;


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
        return view('comics.create', ['comic' => new Comic()]);
    }

    public function store(StoreComicRequest $request)
    {
        $data = $request->validated();
        $comic = new Comic();
        $comic->fill($data);
        $comic->save();

        return to_route('comics.show', $comic->id);
    }


    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    public function update(UpdateComicRequest $request, Comic $comic)
    {
        $data = $request->validated();
        $comic->update($data);
        return to_route('comics.show', compact('comic'));
    }

    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route('comics.index')->with('message', "Fumetto {$comic->title} eliminato correttamente.");
    }
}
