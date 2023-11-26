<x-layout>
    @livewire('wire-elements-modal')

    <div class="w-full h-60 mb-20 mt-2">
        <img class="w-full h-60" src="{{ asset('images/imagen.png') }}" alt="imagen">
    </div>

    <div class="my-6">
        <h1 class="text-3xl md:text-3xl lg:text-3xl text-left pl-12 text-white font-bold">Recomendaciones para ti</h1>
    </div>

    <div class="flex flex-wrap gap-4 pl-12">
        @foreach ($games as $game)
        <div class="w-60 h-96 bg-blue-900">
            <a class="w-60 h-96" href="{{ route('informacion') }}">
                <img class="w-60 h-64 filter hover:bg-gray-500" src="{{ asset('images/'.$game->image) }}" alt="Prueba">
                <p class="text-white pl-6 mb-8 mt-2">{{ $game->name }}</p>
                <p class="text-gray-500 font-bold pl-6">Desde</p>
                <p class="text-white font-bold text-2xl pl-6">${{ $game->price }}</p>
            </a>
        </div>
        @endforeach
    </div>

</x-layout>
