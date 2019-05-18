<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Divisima | eCommerce Template</title>
        <link href="{{ asset('img/favicon.ico') }}" rel="shortcut icon"/>

        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    </head>
    <body>

    <div id="preloder">
        <div class="loader"></div>
    </div>
    @include('user/partials/header')
    @yield('content')
    @include('user/partials/footer')

    <script src="{{ asset('js/app.js') }}"></script>

    </body>
</html>
