<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel welcome minimal</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com"> 
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
        <link href="https://fonts.googleapis.com/css2?family=Darker+Grotesque:wght@400;600&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <style>
            body {
                font-family: 'Darker Grotesque', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
       <h1>COUCOU</h1>
       <x-ox.button>coucou</x-ox.button>
       <x-ox.footer.minimal-more>Copyright © {{ config('app.name', 'Laravel') }} - all rigths reserved</x-ox-footer.minimal-more>
       <x-ox.footer.minimal>Copyright © {{ config('app.name', 'Laravel') }} - all rigths reserved</x-ox-footer.minimal>
    </body>
</html>