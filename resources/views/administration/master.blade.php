<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Visage') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    </head>
    <body>
        @include('layouts.navigation')
        <main>
            <div class="row d-flex">
                <div class="col-md-3 bg-secondary">
                    @include('administration.sideMenu')
                </div>
                <div class="col-md-9">
                    @yield('content')
                </div>
            </div>
        </main>
        <footer>
            @include('administration.footer')
        </footer>
    </body>
</html>
