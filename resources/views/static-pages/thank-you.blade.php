<?php
// filename: resources/views/static-pages/index.blade.php
?><!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us | {{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net"/>
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600"
          rel="stylesheet"/>
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json'))
            || file_exists(public_path('hot')))
        @vite([
            'resources/css/app.css',
            'resources/js/app.js'
            ])
    @else
        <style>
            /* Styles not used by our page */
        </style>
    @endif
</head>
<body>

<h1 class="text-4xl text-blue-500">
   Thank you
</h1>

</body>
</html>
