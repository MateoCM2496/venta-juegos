<x-layout>
    @livewire('wire-elements-modal')



    <div class="my-6">
        <h1 class="text-3xl md:text-3xl lg:text-3xl text-left pl-12 text-white font-bold">Recomendaciones para ti</h1>
    </div>


    {{--<div class="mx-12 mt-8 w-60 h-96 bg-blue-900">
        <a class="w-60 h-96" href="#">
            <img class="w-60 h-64" src="{{ asset('images/Spider-Man.jpg') }}" alt="prueba">
            <p class="text-white pl-6 mb-8">Spider-Man</p>
            <p class="text-gray-500 font-bold pl-6">Desde</p>
            <p class="text-white font-bold text-2xl pl-6">$90,00</p>
        </a>

    </div>--}}
    <div class="flex flex-wrap gap-4 pl-12">
        <div class="w-60 h-96 bg-blue-900">
            <a class="w-60 h-96" href="#">
                <img class="w-60 h-64" src="{{ asset('images/Spider-Man.jpg') }}" alt="prueba">
                <p class="text-white pl-6 mb-8">Spider-Man</p>
                <p class="text-gray-500 font-bold pl-6">Desde</p>
                <p class="text-white font-bold text-2xl pl-6">$90,00</p>
            </a>
        </div>
        <div class="w-60 h-96 bg-blue-900">
            <a class="w-60 h-96" href="#">
                <img class="w-60 h-64" src="{{ asset('images/cod.jpg') }}" alt="prueba">
                <p class="text-white pl-6 mb-8">CoD modern warfare</p>
                <p class="text-gray-500 font-bold pl-6">Desde</p>
                <p class="text-white font-bold text-2xl pl-6">$80,00</p>
            </a>
        </div>
        
    </div>

</x-layout>
