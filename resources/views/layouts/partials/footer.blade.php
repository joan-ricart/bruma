<footer class="relative z-20" x-intersect:enter.margin.-48px="footerFixed = false"
    x-intersect:leave.margin.-48px="footerFixed = true" class="relative z-40 text-sm uppercase text-white"
    :class="footerFixed ? 'pb-[50px]' : ''">
    <div :class="footerFixed ? 'fixed bottom-0 left-0 right-0' : ''">
        @if (isset($showBottomButtons))
            <nav x-show="menuExpanded" x-transition
                class="absolute bottom-full left-0 right-0 flex items-center justify-center gap-5 py-5 text-center">
                <a href="{{ route('book_es') }}"
                    class="border-bruma-orange text-bruma-orange inline-block w-32 whitespace-nowrap rounded border bg-white p-2 text-center uppercase">Reserva</a>
                <a href="{{ route('menu') }}"
                    class="border-bruma-orange text-bruma-orange inline-block w-32 whitespace-nowrap rounded border bg-white p-2 text-center uppercase">Carta</a>
            </nav>
        @endif
        <div class="bg-bruma-orange py-3 text-center">
            <a href="https://maps.app.goo.gl/pX9CzP1VVuRkye6t9" target="_blank" class="uppercase text-white underline">
                C/ d'Aribau 31, Barcelona
            </a>
        </div>
    </div>
    <nav x-show="!footerFixed" class="bg-bruma-lightorange">
        <div
            class="text-bruma-orange px-4 py-3 uppercase max-md:text-center md:flex md:items-center md:justify-between">
            <div class="max-md:pb-1.5">
                <a href="tel:632.754.453" class="max-md:block max-md:pb-1.5">632.754.453</a>
                <span class="max-md:hidden">-</span>
                <a href="mailto:reserva@brumarestaurant.com">reserva@brumarestaurant.com</a>
            </div>
            <div class="text-xs max-md:pt-1.5">
                <span>BRUMA&copy; 2025</span>
                ·
                <a href="" target="_blank" class="text-bruma-orange underline"><span
                        class="max-md:hidden">POLITICA DE</span> PRIVACIDAD</a>
                -
                <a href="" target="_blank" class="text-bruma-orange underline">ACCESIBILIDAD</a>
            </div>
        </div>
    </nav>
</footer>
