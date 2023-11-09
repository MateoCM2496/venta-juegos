<footer class="text-sm text-center sm:p-5 text-black font-bold uppercase">
    @if (Auth::check())
        <header class="sm:p-5 px-4 border-t bg-white block sm:hidden">
            <div class="sm:container sm:mx-auto mx-0 flex justify-center items-center">
                <a class="openModalStorePost flex gap-2 py-2 px-4 rounded-lg items-center text-sm text-gray-800 hover:text-gray-950 font-semibold cursor-pointer"
                    type="button">
                    
                </a>
            </div>
        </header>
        <p class="hidden sm:block">Todos los derechos reservados {{ now()->year }}</p>
    @else
        Todos los derechos reservados {{ now()->year }}
    @endif
</footer>