<header>
    <nav class="upper-header">
        <div class="small-container flex-end gap-50">
            <span>DC POWER VISA</span>
            <span>ADDITIONAL DC SITES <i class="fa-solid fa-caret-down"></i></span>
        </div>
    </nav>
    <nav class="small-container">
        <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="">
        <!--LINKS-LIST-->
        <ul class="links-list">
            @foreach(config('header_links') as $link)
            <li @if(Route::is($link['text'])) class="active" @endif>
                <a href="{{$link['text']}}">
                    {{strtoupper($link['text'])}}</a>
                </li>
        @endforeach
            <div>
                <span> Search <i class="fa-solid fa-magnifying-glass"></i></span>
            </div>
        </ul>
    </nav>
</header>