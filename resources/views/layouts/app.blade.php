<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questline @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-900 text-white font-sans">

    <header class="bg-gray-800 p-4 shadow">
        <nav class="container mx-auto flex justify-between">
            <a href="{{ route('home') }}" class="text-2xl font-bold text-yellow-400">Questline</a>
            <div>
                <a href="{{ route('about') }}" class="px-3 hover:text-yellow-300">О проекте</a>
                <a href="{{ route('process') }}" class="px-3 hover:text-yellow-300">Процесс</a>
                <a href="{{ route('ideas') }}" class="px-3 hover:text-yellow-300">Идеи</a>
                @auth
                    <a href="{{ route('dashboard') }}" class="px-3 hover:text-yellow-300">Профиль</a>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="px-3 hover:text-yellow-300">Выйти</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="px-3 hover:text-yellow-300">Войти</a>
                    <a href="{{ route('register') }}" class="px-3 hover:text-yellow-300">Регистрация</a>
                @endauth
            </div>
        </nav>
    </header>

    <main class="container mx-auto p-4">
        @yield('content')
    </main>

    <footer class="bg-gray-800 p-4 text-center text-yellow-400">
        &copy; 2025 Questline | Все права защищены
    </footer>
</body>
</html>
