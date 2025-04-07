<header class="fixed left-0 right-0 top-0 z-30 p-4 transition-colors"
    :class="menuExpanded ? 'bg-bruma-orange text-white' : 'text-bruma-orange'">
    <nav class="grid grid-cols-2 gap-4 text-sm 2xl:container md:grid-cols-3 md:text-base">
        <div class="">
            {{-- <div x-show="menuExpanded" class="flex gap-6 max-md:hidden">
                <a href="{{ route('book_es') }}" class="uppercase underline">Reserva</a>
                <a href="{{ route('menu') }}" class="uppercase underline">Carta</a>
            </div> --}}
            @if (isset($showBookButton) && $showBookButton)
                <a x-show="!menuExpanded" href="{{ route('book_es') }}" class="uppercase underline">Reserva</a>
            @endif
            @if (isset($showMenuButton) && $showMenuButton)
                <a x-show="!menuExpanded" href="{{ route('menu') }}" class="uppercase underline">Carta</a>
            @endif

            <a x-show="menuExpanded" href="{{ route('home') }}" class="inline-block md:hidden">
                <img src="{{ asset('images/logo-bruma-small-white.png') }}" alt="Logo Bruma Restaurant" class=""
                    width="73" height="22">
            </a>
        </div>
        <div class="text-center max-md:hidden">
            <a x-show="menuExpanded" href="{{ route('home') }}" class="inline-block max-md:hidden">
                <img src="{{ asset('images/logo-bruma-small-white.png') }}" alt="Logo Bruma Restaurant" class=""
                    width="73" height="22">
            </a>
        </div>
        <div class="text-right">
            <img x-show="!menuExpanded" class="ml-auto" src="{{ asset('images/logo-grup-soma.png') }}" width="100"
                height="20" />
            <img x-show="menuExpanded" class="ml-auto" src="{{ asset('images/logo-grup-soma-white.png') }}"
                width="100" height="20" />
        </div>
    </nav>
</header>

{{-- <div x-intersect:leave="menuExpanded = true" x-intersect:enter="menuExpanded = false" aria-hidden
    class="transparent pointer-events-none absolute left-0 top-1/2 z-50 h-[1px] w-[1px]">
</div> --}}
