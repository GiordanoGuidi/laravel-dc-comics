@extends('layouts.main')

@section('title', 'Comics')


@section('main-content')
{{--Main--}}
    <!--CARDS-CONTAINER-->
    <div class="comics-container">
        <div class="small-container py-4">
            {{--Alert message--}}
            @include('includes.alert')
        </div>
        <section id="comics-list" class="small-container card-container">
            <button class="series">CURRENT SERIES</button>
            <button class="load">LOAD MORE</button>
            <!--Bottone per creare fumetto-->
            <a href="{{route('comics.create')}}" class="btn btn-success create-comic">Crea</a>
            <ul class="cards-list cursor-pointer">
                @foreach ( $comics as $comic )
                <!--SINGLE-CARD-->
                <li class="comic-book-card text-center">
                    <a href="{{route('comics.show',$comic->id)}}">
                        <div class="thumb">
                            <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
                        </div>
                        <h3>{{ $comic->series }}</h3>
                    </a>
                    <div class="d-flex gap-2 justify-content-center">
                        <!--Bottone per vedere il singolo fumetto-->
                        <a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary cursor-pointer">Vedi</a>
                        <!--Bottone per eliminare il fumetto-->
                        <form action="{{route('comics.destroy',$comic->id)}}" method="POST" class="delete-form" data-comic="{{$comic->title}}">
                            @csrf
                            @method('DELETE')
                            <input  type="submit" class="btn btn-danger" value="Elimina"></input>
                        </form>    
                    </div>
                </li>
                @endforeach
            </ul>
        </section>
    </div>
    @include('includes.dc_shop')
    @endsection
    @section('scripts')
        <script>
            const deleteForms = document.querySelectorAll('.delete-form');
            deleteForms.forEach(form => {
                form.addEventListener('submit', e => {
                    e.preventDefault();
                    const comic = form.dataset.comic;
                    const confirmation = confirm(`Sei sicuro di voler eliminare il fumetto ${comic} fumetto?`);
                    if(confirmation) form.submit();
                    })
            })
        </script>
    @endsection
</html>