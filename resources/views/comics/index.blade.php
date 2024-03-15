@extends('layouts.main')

@section('title', 'Comics')


@section('main-content')
{{--Main--}}
    <!--CARDS-CONTAINER-->
    <div class="comics-container">
        <section id="comics-list" class="small-container card-container">
            <button class="series">CURRENT SERIES</button>
            <button class="load">LOAD MORE</button>
            <a href="{{route('comics.create')}}" class="create-comic">Crea</a>
            <ul class="cards-list">
                @foreach ( $comics as $comic )
                <!--SINGLE-CARD-->
                <li class="comic-book-card">
                    <a href="{{route('comics.show',$comic->id)}}">
                        <div class="thumb">
                            <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
                        </div>
                        <h3>{{ $comic->series }}</h3>
                    </a>
                </li>
                @endforeach
            </ul>
        </section>
    </div>
    @include('includes.dc_shop')
@endsection
</html>