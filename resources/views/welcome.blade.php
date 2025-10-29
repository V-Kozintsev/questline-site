<x-app-layout>
    <x-slot name="title">Главная</x-slot>
    <section class="relative h-[calc(100vh-4rem)] flex items-center justify-center overflow-hidden">
        <div class="relative container mx-auto h-screen flex items-center justify-center">
            <!-- Фон строго по контейнеру, картинка не обрезается -->
            <img src="{{ asset('images/mainpage.png') }}"
                alt="Фэнтези фон"
                class="absolute inset-0 w-full h-full object-contain opacity-90 z-0 rounded-xl pointer-events-none">

            <div class="absolute inset-0 bg-black opacity-20 z-10 rounded-xl"></div>

            <div class="relative z-20 flex flex-col items-center justify-center w-full h-full text-center text-yellow-300 px-6">
                <h1 class="text-5xl md:text-7xl font-black mb-4 drop-shadow-lg">
                    Questline
                </h1>
                <p class="max-w-3xl text-lg md:text-xl mb-8 drop-shadow-md">
                    Погрузись в мир эпических DnD квестов. <br>
                    Создавай приключения, делись идеями и следи за процессом.
                </p>
                <div class="flex space-x-6 justify-center">
                    <a href="{{ route('register') }}" class="bg-yellow-400 hover:bg-yellow-300 text-gray-900 font-bold py-3 px-8 rounded shadow-lg transition">
                        Регистрация
                    </a>
                    <a href="{{ route('about') }}" class="border border-yellow-400 text-yellow-400 hover:bg-yellow-400 hover:text-gray-900 font-semibold py-3 px-8 rounded transition">
                        Подробнее о проекте
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
