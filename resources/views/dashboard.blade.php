<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Карточка профиля -->
                <div class="bg-gray-800 p-6 rounded-lg">
                    <h3 class="text-xl font-bold mb-4">Мой профиль</h3>
                    <p>{{ Auth::user()->name }}</p>
                    <a href="{{ route('profile.edit') }}" class="text-yellow-400 hover:underline">Редактировать →</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
