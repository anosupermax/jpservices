<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'JP Hexagon Services Ltd — Real Estate, Engineering, Logistics & More' }}</title>
    <meta name="description" content="{{ $description ?? 'JP Hexagon Services Ltd is a Nigerian multi-service company delivering real estate, engineering, logistics and transport, processing, electrical and electronic, luxury wears and more.' }}">
    <link rel="icon" type="image/jpeg" href="{{ asset('images/logo.jpg') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white font-sans text-navy-900 antialiased">
    <x-site-header />

    <main>
        {{ $slot }}
    </main>

    <x-site-footer />
</body>
</html>
