<x-layout>
    <div class="flex items-center justify-center">
        <img class="h-16 mr-6" src="{{ asset('images/psn.png') }}" alt="Psn" />
    </div>
    @livewire('wire-elements-modal')

    <div class="flex flex-wrap gap-4 pl-12">
        @foreach ($games as $game)
        @if ($game->platform_id == 2)
            <div class="w-60 h-96 bg-blue-900">
                <a class="w-60 h-96" href="{{ route('informacion', ['id'=>$game->id]) }}">
                    <img class="w-60 h-64 filter hover:bg-gray-500" src="{{ asset('images/'.$game->image) }}" alt="Prueba">
                    <p class="text-white pl-6 mb-3 mt-2 font-semibold">{{ $game->name }}</p>
                    <p class="text-green-300 pl-6 font-semibol">{{ $game->platform->name }}</p>
                    <p class="text-gray-500 font-bold pl-6">Desde</p>
                    <p class="text-white font-bold text-2xl pl-6">${{ $game->price }}</p>
                </a>
        </div>
        @endif
        @endforeach
    </div>
</x-layout>