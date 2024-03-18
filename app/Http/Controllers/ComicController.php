<?php

namespace App\Http\Controllers;

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

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|unique:comics',
            'description' => 'nullable|string',
            'thumb' => 'url:http,https',
            'price' => 'string|required',
            'series' => 'string|required',
            'sale_date' => 'nullable|date',
            'type' => 'required|string',
            'artists' => 'required|string',
            'writers' => 'required|string',
        ]);
        // $data = $request->all();
        $comic = new Comic();
        $comic->fill($data);
        $comic->save();

        return to_route('comics.show', $comic->id);
    }


    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    public function update(Request $request, Comic $comic)
    {
        $data = $request->validate([
            'title' => ['required', 'string', Rule::unique('comics')->ignore($comic->id)],
            'description' => 'nullable|string',
            'thumb' => 'url:http,https',
            'price' => 'string|required',
            'series' => 'string|required',
            'sale_date' => 'nullable|date',
            'type' => 'required|string',
            'artists' => 'required|string',
            'writers' => 'required|string',
        ]);

        $data = $request->all();
        $comic->update($data);
        return to_route('comics.show', compact('comic'));
    }

    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route('comics.index');
    }
}
