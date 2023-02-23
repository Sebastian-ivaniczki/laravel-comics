<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>comics</title>
    @vite('resources/js/app.js')
</head>

<body>
    @include('includes.header')


    {{-- main --}}

    <main>
        <div class="content">
            <div class="container">
                <div class="card-container">
                    @foreach ($comics as $comic)
                        <div class="card">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                            <h4>{{ $comic['title'] }}</h4>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
    {{-- footer --}}
    @include('includes.footer')
</body>

</html>
