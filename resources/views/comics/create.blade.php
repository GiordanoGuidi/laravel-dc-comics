@extends('layouts.main')

@section('title','Create comic')


{{--Main--}}
@section('main-content')
    <section id="create-comic">
        <div class="container">
            <div class="card-title d-flex justify-content-between my-4">
                <div>
                    <h1>Create Comic</h1>
                </div>
                <div>
                    <a class="btn btn-secondary" href="{{route('comics.index')}}">Torna Indietro</a>
                </div>
            </div>
            {{--Alert--}}
           @include('includes.alert')
           {{--Form--}}
            @include('includes.comics.form')
        </div>
    </section>
@endsection
@section('scripts')
    @vite('resources/js/preview.js')
@endsection



