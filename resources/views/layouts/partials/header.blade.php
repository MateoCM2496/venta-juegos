<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <div class="flex justify-start items-center pr-5">
        <h1 class="text-2xl font-bold">Panel de Control</h1>
    </div>
    <div class="flex justify-center items-center pr-5">
        <input type="text" id="search-navbar"
            class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Buscar...">
    </div>
    <div class="flex items-center">
        @if (Auth::check())
        <a href="{{ route('logout') }}"
            class="flex text-black bg-gray-100 bg-transparent md:p-0 dark:text-black md:dark:text-black dark:bg-gray-700  md:dark:bg-transparent dark:border-gray-700"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesion
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf <!-- Agrega el token CSRF -->
        </form>
        @endif
    </div>
</nav>
