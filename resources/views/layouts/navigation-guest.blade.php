<header class="w-full dark:bg-gray-900 bg-white text-sm p-4 not-has-[nav]:hidden flex-row">
    <nav class="flex items-center gap-4">
        <a href="/" class="px-5 dark:text-[#EDEDEC] text-lg text-[#1b1b18]">Felvételi Menedzsment Rendszer</a>
        <div class="grow"></div>
        @if (Route::has('login'))
            @auth
                <a
                    href="{{ route('dashboard') }}"
                    class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                >
                    Irányítópult
                </a>
            @else
                <a
                    href="{{ route('login') }}"
                    class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
                >
                    Bejelentkezés
                </a>

                @if (Route::has('register'))
                    <a
                        href="{{ route('register') }}"
                        class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                        Regisztráció
                    </a>
                @endif
            @endauth
        @endif
    </nav>
</header>
