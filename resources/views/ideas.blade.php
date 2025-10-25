<x-app-layout>
    <x-slot name="title">Идеи</x-slot>

    <div class="max-w-4xl mx-auto">
        <h1 class="text-4xl font-bold mb-6">Ваши идеи для проекта</h1>

        <!-- Сообщение об успехе -->
        @if(session('success'))
            <div class="bg-green-600 text-white p-4 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif

        <!-- Форма отправки идеи -->
        <div class="bg-gray-800 p-6 rounded-lg mb-8">
            <h2 class="text-2xl font-bold mb-4">Отправить идею</h2>
            <form method="POST" action="{{ route('ideas.store') }}">
                @csrf
                
                <div class="mb-4">
                    <label class="block mb-2">Ваше имя *</label>
                    <input type="text" name="author_name" required 
                           class="w-full p-2 bg-gray-700 rounded border border-gray-600 focus:border-yellow-400"
                           value="{{ old('author_name') }}">
                    @error('author_name')
                        <span class="text-red-400 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block mb-2">Email (необязательно)</label>
                    <input type="email" name="email" 
                           class="w-full p-2 bg-gray-700 rounded border border-gray-600 focus:border-yellow-400"
                           value="{{ old('email') }}">
                    @error('email')
                        <span class="text-red-400 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block mb-2">Описание идеи *</label>
                    <textarea name="description" rows="5" required 
                              class="w-full p-2 bg-gray-700 rounded border border-gray-600 focus:border-yellow-400">{{ old('description') }}</textarea>
                    @error('description')
                        <span class="text-red-400 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="bg-yellow-400 text-gray-900 px-6 py-2 rounded font-bold hover:bg-yellow-300">
                    Отправить идею
                </button>
            </form>
        </div>

        <!-- Список отправленных идей -->
        <div>
            <h2 class="text-2xl font-bold mb-4">Недавние идеи</h2>
            @forelse($ideas as $idea)
                <div class="bg-gray-800 p-4 rounded-lg mb-4">
                    <div class="flex justify-between items-start mb-2">
                        <span class="font-bold text-yellow-400">{{ $idea->author_name }}</span>
                        <span class="text-sm text-gray-400">{{ $idea->created_at->diffForHumans() }}</span>
                    </div>
                    <p class="text-gray-300">{{ $idea->description }}</p>
                </div>
            @empty
                <p class="text-gray-400">Пока нет идей. Будьте первым!</p>
            @endforelse
        </div>
    </div>
</x-app-layout>
