<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> {{ config('app.name') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ URL::asset('public/css/app.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('public/css/style.css') }}" type="text/css">


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Scripts -->
    <script src="{{ URL::asset('public/js/app.js') }}"></script>
    <script src="{{ URL::asset('public/js/functions.js') }}"></script>

</head>
<body>
    <header>
        <div class="title">Terminals</div>
        <nav>
            <ul>
                <li><a href="{{URL::to('/')}}">main</a></li>
            </ul>
        </nav>
        <div class="clear"></div>
    </header>

        @yield('content')

    <footer>
        © 2018 test laravel app. All rights reserved.
    </footer>

</body>
</html>