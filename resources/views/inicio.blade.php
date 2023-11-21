<x-layout>
    @livewire('wire-elements-modal')

    

<div class="my-6">
  <h1 class="text-3xl md:text-3xl lg:text-3xl text-left pl-12 text-white font-bold">Recomendaciones para ti</h1>
</div>


<div class="flex flex-wrap gap-4 pl-12">
  <a href="#" class="block bg-blue-900 p-4 shadow-md w-1/6 m-2 relative overflow-hidden transform transition-transform hover:border-b-2 hover:border-blue-400">
      <div class="overflow-hidden flex items-center">
          <img class="w-full h-full object-cover object-center" src="{{ asset('images/Spider-Man.jpg') }}" alt="prueba">
      </div>
      <div class="p-2">
          <h3 class="text-lg font-semibold text-white my-2">Spider-Man</h3>
          <p class="text-gray-500 font-bold">Desde</p>
          <p class="text-white text-2xl font-bold">$99.99</p>
      </div>
  </a>


</div>



</x-layout>