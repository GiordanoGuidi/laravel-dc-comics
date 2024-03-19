<div>
   @extends('layouts.main')
   @section('title', 'Dettaglio Fumetto')

   @section('main-content')
   <div class="separator">
      <div class="comic-container">
         <div class="thumb">
            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
         </div>
      </div>
   </div>
   <div class="comic-container my-3">
      {{--Alert message--}}
      @include('includes.alert')
   </div>
   <!-- Comic-Details -->
   <section id="comic-details">
      <div class="comic-container">
         <div class="row d-flex gap-40 my-5 flex-nowrap">
            <div class="col-70">
               <h2>{{$comic->title}}</h2>
               <!--Availability-Bar-->
               <div class="row availability-bar">
                     <div class="big-col">
                        <div class="price-status">
                           <div class="price">
                              <p class="c-ligthgreen">U.S Price:<span class="c-white">{{$comic['price']}}</span></p>
                           </div>
                           <div class="status">
                              <p class="c-ligthgreen">AVAILABLE</p>
                           </div>
                        </div>
                     </div>
                     <div class="small-col">
                        <div class="check-availability">
                           <p class="c-white">Check-Availability</p>
                        </div>
                     </div>
               </div>
               <!--Description-->
               <p class="description">{{$comic->description}}</p>
            </div>
            <div class="col-30">
               <p class="advertisement-text">ADVERTISEMENT</p>
               <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="">
            </div>
         </div>
         <div class="d-flex  gap-5 mb-3">
            <!--Bottone per tornare alla lista-->
            <a href="{{route('comics.index')}}" class="btn btn-secondary cursor-pointer align-self-start">Torna indietro</a>
            <div class="d-flex ms-5 gap-3">
               <!--Bottone per modificare il fumetto-->
               <a href="{{route('comics.edit',$comic->id)}}" class="btn btn-warning cursor pointer">Modifica</a>
               <!--Bottone per eliminare il fumetto-->
               <form action="{{route('comics.destroy',$comic->id)}}" method="POST" id="delete-form">
                  @csrf
                  @method('DELETE')
                  <input  type="submit" class="btn btn-danger" value="Elimina"></input>
              </form>    
            </div>
         </div>
      </div>
   </section>
   <!--Comic Info-->
   <section id="comic-info">
      <div class="wrapper">
         <div class="row comic-container gap-40 mx-auto">
            <div class="col-50">
               <h3 class="border-b p-tb-30">Talent</h3>
               <div class="row border-b p-tb-5">
                  <div class="col-30">
                     <p>Art by:</p>
                  </div>
                  <div class="col-70">
                     {{-- @foreach ($comic['artists'] as $artist )  --}}
                     <a href="#">{{$comic['artist']}}</a>
                     {{-- @if (!$loop->last)
                     ,
                     @endif
                     @endforeach --}}
                  </div>
               </div>
               <div class="row border-b p-tb-5">
                  <div class="col-30">
                     <p>Written by:</p>
                  </div>
                  <div class="col-70">
                     {{-- @foreach ($comic['writers'] as $writer )  --}}
                     <a href="#">{{$comic['writers']}}</a>
                     {{-- @if (!$loop->last)
                     ,
                     @endif
                     @endforeach --}}
                  </div>
               </div>
            </div>
            <div class="col-50">
               <h3 class="border-b p-tb-30">Specs</h3>
               <div class="row border-b p-tb-5">
                  <div class="col-30">
                     <p>Series:</p>
                  </div>
                  <div class="col-70">
                     <a href="#">{{strtoupper($comic['series'])}}</a>
                  </div>
               </div>
               <div class="row border-b p-tb-5">
                  <div class="col-30">
                     <p>U.S Price:</p>
                  </div>
                  <div class="col-70">
                     <p>{{$comic['price']}}</p>
                  </div>
               </div>
               <div class="row border-b p-tb-5">
                  <div class="col-30">
                     <p>On Sale Date:</p>
                  </div>
                  <div class="col-70">
                     <p>{{$comic['sale_date']}}</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="dc-shop">
            <div class="comic-container d-flex h-100">
               <div class="col-25 border-l ">
                  <h4>DIGITAL COMICS</h4>
               </div>
               <div class="col-25 border-l ">
                  <h4>SHOP DC</h4>
               </div>
               <div class="col-25 border-l ">
                  <h4>COMIC SHOP LOCATOR</h4>
               </div>
               <div class="col-25 border-l border-r">
                  <h4>SUBSCRIPTIONS</h4>
               </div>
            </div>
         </div>
      </div>
      </section>
      @endsection
      @section('scripts')
         <script>
            const deleteForm = document.getElementById('delete-form')
            deleteForm.addEventListener('submit', e => {
               e.preventDefault();
               const confirmation = confirm('Sei sicuro di voler eliminare il fumetto {{$comic->title}} fumetto?');
               if(confirmation) deleteForm.submit();
            })
         </script>
      @endsection
   </div>