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
            {{--Alert--}}
            @include('includes.form.alert')
            {{--Form--}}
            @include('includes.comics.form')
        </div>
    </section>
@endsection

@section('scripts')
    @vite('resources/js/preview.js')
@endsection



