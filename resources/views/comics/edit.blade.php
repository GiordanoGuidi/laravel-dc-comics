@extends('layouts.main')

@section('title','Modifica Fumetto')


{{--Main--}}
@section('main-content')
    <section id="create-comic">
        <div class="container">
            <div class="card-title d-flex justify-content-between my-4">
                <h1>Modifica Fumetto</h1>
                <a class="btn btn-secondary" href="{{route('comics.index')}}">Torna Indietro</a>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <h4>Some fileds are invalid</h4>
                    <ul>
                        @foreach ($errors->all() as $error )
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('comics.update', $comic->id)}}" method="POST">
                @csrf
                @method('PUT')
                <!--Title-->
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="title" value="{{old('title', $comic->title)}}">
                </div>
                <!--Description-->
                  <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="3">{{old('description', $comic->description)}}</textarea>
                  </div>
                <!--Thumb-->
                <div class="mb-3">
                    <label for="thumb" class="form-label">Thumb</label>
                    <input type="text" class="form-control" name="thumb" id="thumb" placeholder="url" value="{{old('thumb', $comic->thumb)}}">
                </div>
                <!--Price-->
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" name="price" id="price" placeholder="$" value="{{old('price', $comic->price)}}">    
                </div>
                <!--Series-->
                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" name="series" id="series" placeholder="series" value="{{old('series', $comic->series)}}">    
                </div>
                <!--Sale Date-->
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale Date</label>
                    <input type="date" class="form-control" name="date" id="sale_date" placeholder="Date" value="{{old('sale_date', $comic->sale_date)}}">    
                </div>
                <!--Type-->
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" class="form-control" name="type" id="type" placeholder="Type" value="{{old('type', $comic->type)}}">    
                </div>
                <!--Artists-->
                <div class="mb-3">
                    <label for="artists" class="form-label">Artists</label>
                    <input type="text" class="form-control" name="artists" id="artists" placeholder="artists" value="{{old('artists', $comic->artists)}}">    
                </div>
                <!--Writers-->
                <div class="mb-3">
                    <label for="writers" class="form-label">Writers</label>
                    <input type="text" class="form-control" name="writers" id="writers" placeholder="writers" value="{{old('writers', $comic->writers)}}">    
                </div>
                <div class="d-flex justify-content-center gap-3 my-3">
                    <button  class="btn btn-primary" type="reset">Svuota i campi</button>
                    <button class="btn btn-primary">Salva</button>
                </div>
            </form>
        </div>


    </section>
@endsection



