<div class="max-w-5xl mx-auto px-4 py-8 bg-gray-900 min-h-screen">
    <h1 class="text-4xl font-bold mb-8 text-center text-white">Lista de Filmes</h1>

    <div class="grid gap-8 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
        @foreach($films as $film)
        <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden flex flex-col transition-transform duration-300 hover:scale-105">
            <img
                src="{{ asset('storage/' . $film->cover) }}"
                alt=""
                class="h-64 w-full">
            <div class="p-6 flex flex-col flex-grow">
                <h2 class="text-xl font-semibold text-white mb-2">{{ $film->title }}</h2>
                <p class="text-gray-300 flex-grow">{{ Str::limit($film->summary, 120, '...') }}</p>
            </div>
        </div>
        @endforeach
    </div>

    <div class="mt-8">
        {{ $films->links() }}
    </div>
</div>