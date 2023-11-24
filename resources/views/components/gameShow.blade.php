<div class="w-60 h-96 bg-blue-900">
    <a class="w-60 h-96" href="{{ route('informacion') }}">
        <img class="w-60 h-64 filter hover:bg-gray-500" src="{{ $game->image }}" alt="prueba">
        <p class="text-white pl-6 mb-8 mt-2">{{ $game->name }}</p>
        <p class="text-gray-500 font-bold pl-6">Desde</p>
        <p class="text-white font-bold text-2xl pl-6">{{ $game->price }}</p>
    </a>
</div>