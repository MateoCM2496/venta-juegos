<x-layout>
    <div class="flex flex-wrap gap-4">
        <div class="flex w-2/3 h-96 ml-12 mt-12 bg-blue-700">
            <div class="ml-4 my-12 w-52 h-72">
                <img class="w-52 h-72" src="{{ asset('images/'.$game->image) }}" alt="spider-man">
            </div>
            <div class="ml-6 mt-12 w-96 h-72">
                <h2 class="text-white font-bold text-4xl">{{ $game->name }}</h2>
                <button class="w-20 h-7 bg-blue-900 rounded-lg text-gray-300 my-12">{{ $game->gender }}</button>
                <div class="flex w-52 h-14 items-center">
                    @if ($game->platform_id == 1)
                        <img class="w-10 h-10 mx-2" src="{{ asset('images/xbox.png')}}" alt="image">
                    @endif
                    @if ($game->platform_id == 2)
                        <img class="w-10 h-10 mx-2" src="{{ asset('images/psn.png')}}" alt="image">
                    @endif
                    @if ($game->platform_id == 3)
                        <img class="w-20 h-10 mx-2" src="{{ asset('images/nintendo.png')}}" alt="image">
                    @endif
                    <p class="text-white font-semibold">{{ $game->platform->name }}</p>
                </div>
            </div>
        </div>
        <div class="w-80 h-60 bg-blue-700 mt-28">
            <div class="w-80 h-8 justify-center items-center bg-blue-900">
                <h1 class="text-green-500 justify-center items-center text-center font-semibold">LA OFERTA MAS BARATA</h1>
            </div>
            <h1 class="text-white font-semibold mt-2 mb-4 mx-4">Precio del producto</h1>
            <h1 class="text-white text-3xl mx-4 font-bold mb-4">${{ $game->price }}</h1>
            <button class="mx-4 mb-2 w-72 h-8 bg-yellow-400 font-bold hover:bg-yellow-600">Comprar ahora</button>
            <button class="mx-4 w-72 h-8 bg-blue-700 border border-white text-white font-bold hover:bg-blue-900">Añadir al carrito</button>
        </div>
    </div>
    <h1 class="text-white font-bold ml-12 mt-12 text-2xl">Descripcion del Juego</h1>
    <div class="w-2/3 h-auto my-4 ml-12 bg-blue-700">
        <div class="my-4 mx-6">
            <div class="w-auto h-auto mt-2">
                <h1 class="text-white text-2xl font-bold my-2">{{ $game->name }}</h1>
            </div>
            <div class="w-auto h-auto mt-2 mb-2">
                <p class="text-gray-300 mb-2">{{ $game->description }}</p>
            </div>
        </div>
    </div>
</x-layout>