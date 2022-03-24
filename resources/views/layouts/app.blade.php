<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Inventory</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        
    </head>
    <body class="antialiased">
        <div id="app">

            
            @yield('content')

        </div>
       {{-- <script src="{{ mix('js/app.js') }}"></script> --}}
    </body>
</html>

    <!-- function myFunction() {
        var element = document.getElementById("myDIV");
        element.classList.toggle("mystyle");
    } -->