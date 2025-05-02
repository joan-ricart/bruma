<header class="fixed left-0 right-0 top-0 z-30 flex h-10 w-full items-center px-4 transition-colors"
    :class="menuExpanded ? 'bg-bruma-orange text-white' : 'text-bruma-orange'">
    <nav class="grid w-full grid-cols-2 items-center gap-4 text-sm 2xl:container md:grid-cols-3 md:text-base">
        <div class="">
            <img x-show="!menuExpanded" class="" src="{{ asset('images/grup-soma.png') }}" width="100"
                height="20" />

            {{-- @if (isset($showBookButton) && $showBookButton)
                <a x-show="!menuExpanded" href="{{ route('book_es') }}" class="uppercase underline">Reserva</a>
            @endif

            @if (isset($showMenuButton) && $showMenuButton)
                <a x-show="!menuExpanded" href="{{ route('menu') }}" class="uppercase underline">Carta</a>
            @endif --}}
            <a x-show="menuExpanded" href="{{ route('home') }}">
                <img src="{{ asset('images/logo-bruma-small-white.png') }}" alt="Logo Bruma Restaurant" class=""
                    width="73" height="22">
            </a>
        </div>
        <div class="text-center max-md:hidden">
            {{-- <a x-show="menuExpanded" href="{{ route('home') }}" class="inline-block max-md:hidden">
                <img src="{{ asset('images/logo-bruma-small-white.png') }}" alt="Logo Bruma Restaurant" class=""
                    width="73" height="22">
            </a> --}}
        </div>
        <div class="text-right">
            {{-- <img x-show="!menuExpanded" class="ml-auto" src="{{ asset('images/grup-soma.png') }}" width="100"
                height="20" />
            <img x-show="menuExpanded" class="ml-auto" src="{{ asset('images/logo-grup-soma-white.png') }}"
                width="100" height="20" /> --}}

            <nav class="flex items-center justify-end gap-4">
                {{-- <a x-show="menuExpanded || true" href="{{ route('menu') }}" class="uppercase underline">Carta</a> --}}
                {{-- @if (!Route::is('home'))
                    <a x-cloak x-show="menuExpanded || true" href="{{ route('home') }}"
                        class="uppercase underline">Inici</a>
                @endif --}}
                <a x-cloak x-show="menuExpanded || true" href="{{ route('book_es') }}"
                    class="uppercase underline">Reserva</a>
                <a x-cloak x-show="menuExpanded || true" href="{{ route('menu') }}"
                    class="uppercase underline">Carta</a>
            </nav>

        </div>
    </nav>
</header>
