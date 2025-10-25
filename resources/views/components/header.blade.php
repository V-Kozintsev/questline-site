<header class="bg-gray-800 p-4 shadow">
    <nav class="container mx-auto flex justify-between items-center">
        <a href="{{ route('home') }}" class="text-2xl font-bold text-yellow-400">Questline</a>
        
        <div class="flex items-center gap-4">
            <a href="{{ route('about') }}" class="px-3 hover:text-yellow-300">О проекте</a>
            <a href="{{ route('process') }}" class="px-3 hover:text-yellow-300">Процесс</a>
            <a href="{{ route('ideas') }}" class="px-3 hover:text-yellow-300">Идеи</a>
            
            @auth
                <div class="relative inline-block" x-data="{ open: false }">
                    <button @click="open = !open" class="px-3 hover:text-yellow-300 flex items-center gap-2">
                        <span>{{ Auth::user()->name }}</span>
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </button>
                    
                    <div x-show="open" 
                         @click.away="open = false"
                         x-transition
                         class="absolute right-0 mt-2 w-48 bg-gray-700 rounded-lg shadow-lg py-2 z-50">
                        <a href="{{ route('dashboard') }}" class="block px-4 py-2 hover:bg-gray-600 rounded">Личный кабинет</a>
                        <a href="{{ route('profile.edit') }}" class="block px-4 py-2 hover:bg-gray-600 rounded">Настройки профиля</a>
                        <hr class="border-gray-600 my-2">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="block w-full text-left px-4 py-2 hover:bg-gray-600 rounded">Выйти</button>
                        </form>
                    </div>
                </div>
            @else
                <a href="{{ route('login') }}" class="px-3 hover:text-yellow-300">Войти</a>
                <a href="{{ route('register') }}" class="px-3 hover:text-yellow-300">Регистрация</a>
            @endauth
        </div>
    </nav>
</header>
