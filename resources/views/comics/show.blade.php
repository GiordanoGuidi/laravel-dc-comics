<div>
   @extends('layouts.main')
   @section('title', 'Comic')

   @section('main-content')
   <div class="separator">
      <div class="comic-container">
         <div class="thumb">
            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
         </div>
      </div>
   </div>
   <!-- Comic-Details -->
   <section id="comic-details">
      <div class="comic-container">
         <div class="row d-flex gap-40 m-4rem">
            <div class="col-70">
               <h2>ACTION COMICS #1000: THE DELUXE EDITION</h2>
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
               <p class="description">The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic tha won raves when it hit comics shop in April! This hardcover includes all the stories from that issues, plus the table by writer Paul Levitz and artist Neal Adams that appeared in the action Comics: 80 Years of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman's neew look, scripts for the stories,the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all-the Superman stories Action Comics #1 and 2 from 1938!</p>
            </div>
            <div class="col-30">
               <p class="advertisement-text">ADVERTISEMENT</p>
               <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="">
            </div>
         </div>
      </div>
   </section>
   <!--Comic Info-->
   <section id="comic-info">
      <div class="wrapper">
         <div class="row comic-container gap-40">
            <div class="col-50">
               <h3 class="border-b p-tb-30">Talent</h3>
               <div class="row border-b p-tb-5">
                  <div class="col-30">
                     <p>Art by:</p>
                  </div>
                  <div class="col-70">
                     @foreach ($comic['artists'] as $artist ) 
                     <a href="#">{{$artist}}</a>
                     @if (!$loop->last)
                     ,
                     @endif
                     @endforeach
                  </div>
               </div>
               <div class="row border-b p-tb-5">
                  <div class="col-30">
                     <p>Written by:</p>
                  </div>
                  <div class="col-70">
                     @foreach ($comic['writers'] as $writer ) 
                     <a href="#">{{$writer}}</a>
                     @if (!$loop->last)
                     ,
                     @endif
                     @endforeach
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
                  <div>
                     <img src="" alt="#">
                  </div>
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
   </div>