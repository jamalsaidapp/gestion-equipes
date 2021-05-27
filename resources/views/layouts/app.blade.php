<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf" content="{{ csrf_token() }}">
    <!-- Auth User -->
    @auth
    <meta name="auth" content="{{auth()->user()}} " style="display: none">
    @endauth
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div class="h-100" id="app" style="background: rgb(236, 236, 236);">
        @auth
            <Layouts/>
        @else
            <div class="center_login">
                <Login/>
            </div>
        @endauth
    </div>
</body>
</html>
