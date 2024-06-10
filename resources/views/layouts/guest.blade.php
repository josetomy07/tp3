<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="/bootstrap-5.3.0/css/bootstrap.min.css" rel="stylesheet">
        <script src="/bootstrap-5.3.0/js/popper.min.js"  rel="stylesheet"></script>
        <script src="/bootstrap-5.3.0/js/bootstrap.min.js" rel="stylesheet"></script>
        <link rel="stylesheet" href="/css/style.css">

    </head>
    <body>
        
        <main class="py-4">
            @yield('content')
        </main>
    </body>
</html>