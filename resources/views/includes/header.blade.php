<header>
    <nav class="container">
        <figure class="nav_left">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="dc-logo.png">
        </figure>
        <div class="nav_right">

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
        </div>
    </nav>
</header>
