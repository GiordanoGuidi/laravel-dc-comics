@extends('layouts.main')

@section('title','Modifica Fumetto')


{{--Main--}}
@section('main-content')
    <section id="edit-comic">
        <div class="container">
            <div class="card-title d-flex justify-content-between my-4">
                <div>
                    <h1>Modifica Fumetto</h1>
                </div>
                <div>
                    <a class="btn btn-secondary" href="{{route('comics.index')}}">Torna Indietro</a>
                </div>
            </div>
            @include('includes.alert')
            <form class="d-flex flex-wrap" action="{{route('comics.update', $comic->id)}}" method="POST">
                @csrf
                @method('PUT')
                <!--Title-->
                <div class="col-6 p-2">
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="title" value="{{old('title', $comic->title)}}">
                    </div>
                </div>
                <!--Thumb-->
                <div class="col-5 p-2">
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Thumb</label>
                        <input type="text" class="form-control" name="thumb" id="thumb" placeholder="url" value="{{old('thumb', $comic->thumb)}}">
                    </div>
                </div>
                <div class="col-1">
                    <img class="img-fluid" id="preview" src="https://media.istockphoto.com/id/1147544807/vector/thumbnail-image-vector-graphic.jpg?s=612x612&w=0&k=20&c=rnCKVbdxqkjlcs3xH87-9gocETqpspHFXu5dIGB4wuM=" alt="">
                </div>
                <!--Price-->
                <div class="col-6 p-2">
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" name="price" id="price" placeholder="$" value="{{old('price', $comic->price)}}">    
                    </div>
                </div>
                <!--Series-->
                <div class="col-6 p-2">
                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" class="form-control" name="series" id="series" placeholder="series" value="{{old('series', $comic->series)}}">    
                    </div>
                </div>
                <!--Sale Date-->
                <div class="col-6 p-2">
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Sale Date</label>
                        <input type="date" class="form-control" name="date" id="sale_date" placeholder="Date" value="{{old('sale_date', $comic->date)}}">    
                    </div>
                </div>
                <!--Type-->
                <div class="col-6 p-2">
                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" class="form-control" name="type" id="type" placeholder="Type" value="{{old('type', $comic->type)}}">    
                    </div>
                </div>
                <!--Writers-->
                <div class="col-6 p-2">
                    <div class="mb-3">
                        <label for="writers" class="form-label">Writers</label>
                        <input type="text" class="form-control" name="writers" id="writers" placeholder="writers" value="{{old('writers', $comic->writers)}}">    
                    </div>
                </div>
                <!--Artists-->
                <div class="col-6 p-2">
                    <div class="mb-3">
                        <label for="artists" class="form-label">Artists</label>
                        <input type="text" class="form-control" name="artists" id="artists" placeholder="artists" value="{{old('artists', $comic->artists)}}">    
                    </div>
                </div>
                <!--Description-->
                <div class="col-12">
                    <div class="mb-3">
                      <label for="description" class="form-label">Description</label>
                      <textarea class="form-control" name="description" id="description" rows="3">{{old('description', $comic->description)}}</textarea>
                    </div>
                </div>
                <div class="col-12">
                    <div class="d-flex justify-content-center gap-3 my-3">
                        <button  class="btn btn-primary" type="reset">Svuota i campi</button>
                        <button class="btn btn-success">Salva</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection

@section('scripts')
    @vite('resources/js/preview.js')
@endsection



