<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TPFinal</title>

    @yield('css')
    <!-- Fonts-->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="/bootstrap-5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="/bootstrap-5.3.0/js/popper.min.js"  rel="stylesheet"></script>
    <script src="/bootstrap-5.3.0/js/bootstrap.min.js" rel="stylesheet"></script>
   

    

</head>
    <body>
        <div id="app">
            @include('layouts.navigation')

            <main class="py-4">
                @yield('content')
            </main>
        </div>
        
        @yield('js')
    </body>
</html>
