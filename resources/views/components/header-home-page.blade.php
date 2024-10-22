<header
    class="border w-full flex justify-around bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700 fixed shadow-xl">
    <div class="flex items-center justify-center">
        <x-application-logo widthPersonalized="60"></x-application-logo>
    </div>
    @if (Route::has('login'))
        <nav class="flex flex-1 items-center px-4 justify-end gap-3">
            <a href="#about"
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                quem somos
            </a>
            <a href="#try"
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                experimente
            </a>
            @auth
                <a href="{{ url('/simulator') }}"
                    class="bg-blue-500 rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white ">
                    Simulador
                </a>
            @else
                <a href="{{ route('login') }}"
                    class="bg-blue-500 rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                    Entrar
                </a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="bg-blue-500 rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Cadastrar-se
                    </a>
                @endif
            @endauth
        </nav>
    @endif
</header>
