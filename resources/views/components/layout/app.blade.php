<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="description" content="Aden Anteng">
    <meta name="author" content="Aden Anteng">
    <meta charset="utf-8">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <!--  Essential META Tags -->
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="Aden Anteng"/>
    <meta name="twitter:description" content="It's just lorem ipsum dolor sit amet."/>
    <meta name="twitter:site" content="@adenanteng"/>
    <meta name="twitter:image" content="{{ asset('img/logo-me-black.png') }}"/>
    <meta name="twitter:creator" content="@adenanteng"/>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ url('favicon.ico') }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600;700&family=Poppins:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>

</head>
<body x-data="{ darkMode: localStorage.getItem('dark') === 'true', name:'' } "
      x-init="$watch('darkMode', val => localStorage.setItem('dark', val))"
      x-bind:class="{ 'dark': darkMode }"
>
    <div class="font-sans relative min-h-screen antialiased transition duration-500">
        {{ $slot }}
    </div>

</body>
</html>
