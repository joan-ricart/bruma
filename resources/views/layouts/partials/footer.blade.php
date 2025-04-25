<div class="relative py-8 text-center">
    <div class="absolute left-0 right-0 top-1/2 z-[1] h-[1px] bg-[#224567]"></div>
    <div class="relative z-[2] inline-block bg-white px-4">
        <img class="" src="{{ asset('images/grup-soma.png') }}" alt="GRUP SOMA - SOMA - BRUMA" width="298"
            height="28" />
    </div>
</div>

<div class="bg-bruma-orange sticky bottom-0 z-20 flex h-10 items-center justify-center text-center">
    {{-- @if (isset($showBottomButtons))
        <nav x-show="menuExpanded" x-transition
            class="absolute bottom-full left-0 right-0 flex items-center justify-center gap-5 py-5 text-center">
            <a href="{{ route('book_es') }}"
                class="border-bruma-orange text-bruma-orange inline-block w-32 whitespace-nowrap rounded border bg-white p-2 text-center uppercase">Reserva</a>
            <a href="{{ route('menu') }}"
                class="border-bruma-orange text-bruma-orange inline-block w-32 whitespace-nowrap rounded border bg-white p-2 text-center uppercase">Carta</a>
        </nav>
    @endif --}}
    <a href="https://maps.app.goo.gl/pX9CzP1VVuRkye6t9" target="_blank" class="text-sm uppercase text-white underline">
        C/ d'Aribau 31, Barcelona
    </a>
</div>

<footer class="relative z-20">
    <nav class="bg-bruma-lightorange flex items-center md:h-10">
        <div
            class="text-bruma-orange w-full px-4 py-3 uppercase max-md:text-center md:flex md:items-center md:justify-between">
            <div class="text-sm max-md:pb-1.5">
                <a href="tel:632754453" class="max-md:block max-md:pb-1.5">632.754.453</a>
                <span class="max-md:hidden">-</span>
                <a href="mailto:reserva@brumarestaurant.com">reserva@brumarestaurant.com</a>
            </div>
            <div class="text-xs max-md:pt-1.5">
                <span>BRUMA&copy; 2025</span>
                ·
                <a href="{{ route('privacy') }}" target="_blank" class="text-bruma-orange underline"><span
                        class="max-md:hidden">POLITICA DE</span> PRIVACIDAD</a>
                -
                <a href="{{ route('accessibility') }}" target="_blank"
                    class="text-bruma-orange underline">ACCESIBILIDAD</a>
            </div>
        </div>
    </nav>
</footer>
