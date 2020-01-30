<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>

    <!-- Scripts -->


    <!-- Styles -->
    <link href="{{ asset('css/bp.css') }}" rel="stylesheet">
    <link href="https://ams-01.diegor.nl/semantic/dist/semantic.min.css" rel="stylesheet">
    <script src="https://ams-01.diegor.nl/semantic/dist/semantic.min.js"></script>
    <link href="https://ams-01.diegor.nl/semantic/bani.css" rel="stylesheet">
</head>
<body style="background-color: #edec00;" class="Site">
<header>
    @include('includes.header2')
</header>

<main class="Site-content">
    @yield('content')
</main>

<footer>
    @include('includes.footer')
</footer>
</body>
</html>
