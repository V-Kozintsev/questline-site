<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset ($title) ? $title . ' - Questline' : 'Questline' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-900 text-white font-sans flex flex-col min-h-screen">

    <x-header />

    <main class="flex-grow container mx-auto px-4 py-8">
        {{ $slot }}
    </main>

    <x-footer />
</body>
</html>