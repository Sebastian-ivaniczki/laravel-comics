<footer>
    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col mt">
                    <div>
                        <div>
                            <h5>DC STORE</h5>
                        </div>
                        <ul>
                            <li><a href="{{ route('characters') }}">CHARACTERS</a></li>
                            <li><a href="{{ url('/') }}">COMICS</a></li>
                            <li><a href="{{ route('movies') }}">MOVIES</a></li>
                            <li><a href="#">TV</a></li>
                            <li><a href="#">GAMES</a></li>
                            <li><a href="#">COLLECTIBLES</a></li>
                            <li><a href="#">VIDEOS</a></li>
                            <li><a href="#">FANS</a></li>
                            <li><a href="#">NEWS</a></li>
                            <li><a href="#">SHOP</a></li>
                        </ul>
                        <div class="mt">
                            <h5>SHOP</h5>
                            <ul>
                                <li><a href="#">Shop DC</a></li>
                                <li><a href="#">Shop DC collectibles</a></li>
                            </ul>
                        </div>

                    </div>
                    <div>
                        <h5>DC</h5>
                        <ul>
                            <li><a href="#">Therm of use</a></li>
                            <li><a href="#">Privacy policy (New)</a></li>
                            <li><a href="#">ADD Choices</a></li>
                            <li><a href="#">Advertisign</a></li>
                            <li><a href="#">jobs</a></li>
                            <li><a href="#">Subscriptions</a></li>
                            <li><a href="#">Talent Workshops</a></li>
                            <li><a href="#">CPSC Certifications</a></li>
                            <li><a href="#">Ratings</a></li>
                            <li><a href="#">Shop Help</a></li>
                            <li><a href="#">Contacts US</a></li>
                        </ul>
                    </div>
                    <div>
                        <h5>SITES</h5>
                        <ul>
                            <li><a href="#">DC</a></li>
                            <li><a href="#">MAD Magazine</a></li>
                            <li><a href="#">DC Kids</a></li>
                            <li><a href="#">DC Universe</a></li>
                            <li><a href="#">DC Power Visa</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    {{-- footer bottom --}}

    <div class="footer-bottom">
        <div class="foot">
            <div class="container">
                <div class="row">
                    <div class="col-left">
                        <button><a href="#">SIGN-UP NOW!</a></button>
                    </div>
                    <div class="col-right">
                        <div>
                            <h4>FOLLOW US</h4>
                        </div>
                        <figure>
                            <img src="{{ Vite::asset('resources/img/footer-facebook.png') }}">
                            <img src="{{ Vite::asset('resources/img/footer-twitter.png') }}">
                            <img src="{{ Vite::asset('resources/img/footer-youtube.png') }}">
                            <img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}">
                            <img src="{{ Vite::asset('resources/img/footer-periscope.png') }}">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
