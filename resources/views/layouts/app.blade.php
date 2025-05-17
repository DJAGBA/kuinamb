<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Ma Boutique')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- CSS du template Ultras -->
    <link rel="stylesheet" href="{{ asset('ultras/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('ultras/icomoon/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('ultras/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('ultras/css/style.css') }}">

    <!-- Polices Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    @stack('styles')
</head>
<body>

    @include('partials.header')

    @yield('content')

    @include('partials.footer')

    <!-- JS -->
    <script src="{{ asset('ultras/js/modernizr.js') }}"></script>
    <script src="{{ asset('ultras/js/jquery.min.js') }}"></script>
    <script src="{{ asset('ultras/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('ultras/js/script.js') }}"></script>

    @stack('scripts')
</body>
</html>
