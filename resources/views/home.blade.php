@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <main>
        <div class="flex flex-col items-center justify-center overflow-hidden py-24 md:py-32">
            <video class="md:scale-120 sm:scale-140 relative w-[760px] max-w-full scale-150 pb-6" autoplay loop muted
                playsinline src="{{ asset('bruma-intro.mp4') }}"></video>

            <nav
                class="z-10 -mt-16 flex items-center justify-center gap-4 px-4 py-3 text-center sm:-mt-20 md:-mt-32 md:gap-5">
                <a href="{{ route('book_es') }}"
                    class="border-bruma-orange text-bruma-orange inline-block w-28 whitespace-nowrap rounded border bg-white p-2 text-center uppercase md:w-32 md:text-lg">Reserva</a>
                <a href="{{ route('menu') }}"
                    class="border-bruma-orange text-bruma-orange inline-block w-28 whitespace-nowrap rounded border bg-white p-2 text-center uppercase md:w-32 md:text-lg">Carta</a>
            </nav>
        </div>

        @php
            $images = [
                [
                    'src' => asset('images/slider-home/Image-1.jpg'),
                    'alt' => 'Image 1',
                ],
                [
                    'src' => asset('images/slider-home/Image-2.jpg'),
                    'alt' => 'Image 2',
                ],
                [
                    'src' => asset('images/slider-home/Image-3.jpg'),
                    'alt' => 'Image 3',
                ],
                [
                    'src' => asset('images/slider-home/Image-4.jpg'),
                    'alt' => 'Image 4',
                ],
                [
                    'src' => asset('images/slider-home/Image-5.jpg'),
                    'alt' => 'Image 5',
                ],
                [
                    'src' => asset('images/slider-home/Image-6.jpg'),
                    'alt' => 'Image 6',
                ],
            ];
        @endphp
        <div class="swiper relative">
            <div class="swiper-wrapper">
                @foreach ($images as $image)
                    <div class="swiper-slide">
                        <img src="{{ $image['src'] }}" alt="{{ $image['alt'] }}" />
                    </div>
                @endforeach
            </div>

            <div class="swiper-prev absolute left-4 top-1/2 z-10 -translate-y-1/2 transform">
                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="26" viewBox="0 0 17 26" fill="none">
                    <g filter="url(#filter0_d_138_82)">
                        <path d="M12.7739 3L4.70711 11.0668C4.31658 11.4573 4.31658 12.0904 4.70711 12.481L12.7739 20.5477"
                            stroke="white" stroke-width="4" stroke-linecap="round" />
                    </g>
                    <defs>
                        <filter id="filter0_d_138_82" x="0.414215" y="0" width="16.3596" height="25.5477"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" type="matrix"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                            <feOffset dy="1" />
                            <feGaussianBlur stdDeviation="1" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.45 0" />
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_138_82" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_138_82" result="shape" />
                        </filter>
                    </defs>
                </svg>
            </div>
            <div class="swiper-next absolute right-4 top-1/2 z-10 -translate-y-1/2 transform">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="26" viewBox="0 0 18 26" fill="none">
                    <g filter="url(#filter0_d_138_83)">
                        <path d="M4.77399 20.5477L12.8407 12.481C13.2313 12.0904 13.2313 11.4573 12.8407 11.0668L4.77399 3"
                            stroke="white" stroke-width="4" stroke-linecap="round" />
                    </g>
                    <defs>
                        <filter id="filter0_d_138_83" x="0.774048" y="0" width="16.3596" height="25.5477"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" type="matrix"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                            <feOffset dy="1" />
                            <feGaussianBlur stdDeviation="1" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.45 0" />
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_138_83" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_138_83" result="shape" />
                        </filter>
                    </defs>
                </svg>
            </div>
        </div>

        <div class="container max-w-xl py-20 text-center">
            <h2 class="text-bruma-orange mb-4 text-lg uppercase">Sobre nosaltres</h2>
            <p class="text-bruma-dark mb-2">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore
                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
            </p>
            <p class="text-bruma-dark mb-8">
                <b>DINARS I SOPARS 7/7</b>
            </p>
            <p class="text-bruma-dark mb-2">
                Segueix-nos al nostre Instagram <br>
                <a href="https://www.instagram.com/brumarestaurant" class="text-bruma-orange uppercase underline"
                    target="_blank">@BRUMARESTAURANT</a>
            </p>
            <img class="mx-auto mt-4 inline-block max-w-full" src="{{ asset('images/ilustracion-about-us.png') }}"
                width="297" height="420" />
        </div>
    </main>
@endsection
