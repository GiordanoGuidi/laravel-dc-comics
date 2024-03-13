<footer>
    <!--UPPER FOOTER-->
    <div class="upper-footer small-container">
        <!--COL-->
        @foreach (config('upper_footer_links') as $upperFooterLink)
            <div class="col">
                <!--SINGLE LINKS LIST CREATE DYNAMICALLY-->
                <h4>{{ $upperFooterLink['title'] }}</h4>
                <ul class="list-links">
                    @foreach ($upperFooterLink['links'] as $link)
                    <li>
                        <a href="{{$link['url']}}">{{ $link['text'] }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        @endforeach
        <div class="small-container">
            <p>All Site Content TM and 2020 DC Entertainment,unless otherwise 
                <a href="">noted here</a>.All rights reserved.<br>
                <a href="">Cookie Settings</a>
            </p>
        </div>
        <div class="bg-footer">
            <img src="{{Vite::asset('resources/img/dc-logo-bg.png')}}" alt="">
        </div>
    </div>
    <!--BOTTOM-FOOTER-->
    <div class="bottom-footer">
        <div class="bottom-footer-info small-container">
            <!--SIGN BUTTON-->
            <a href="" class="fw-bold sign-button">SIGN UP NOW!</a>
            <div class="d-flex align-center">
                <span class="c-blue">FOLLOW US</span>
                <!--ICON LIST-->
                <ul class="icon-list">
                    <li>
                        <a href="#">
                            <img src="{{Vite::asset('resources/img/footer-facebook.png')}}" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{Vite::asset('resources/img/footer-periscope.png')}}" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{Vite::asset('resources/img/footer-pinterest.png')}}" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{Vite::asset('resources/img/footer-twitter.png')}}" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{Vite::asset('resources/img/footer-youtube.png')}}" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>