<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Detector</title>

    <link rel="icon" href="{{ asset('img/quality_restoration_20241018080944704-removebg-preview.png') }}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        html {
            scroll-behavior: smooth
        }
    </style>
</head>

<body class="bg-gray-100 dark:bg-gray-900 flex flex-col items-center pb-16">
    <x-header-home-page></x-header-home-page>

    <x-section-presentation></x-section-presentation>

    <x-section-about-project></x-section-about-project>

    <x-section-to-simulation></x-section-to-simulation>
</body>

</html>
