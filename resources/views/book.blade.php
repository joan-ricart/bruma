@extends('layouts.app')

@section('title', 'Home')

@php
    $iframeUrl = match ($lang) {
        'es' => 'https://www.covermanager.com/reserve/module_restaurant/restaurante-bruma/spanish',
        'en' => 'https://www.covermanager.com/reserve/module_restaurant/restaurante-bruma/english',
    };
@endphp

@section('content')

    <main class="min-h-screen py-20">
        <div class="mb-4 text-center">
            <a href="{{ route('home') }}" class="inline-block">
                <img src="{{ asset('images/logo-bruma.png') }}" alt="Bruma Restaurant" width="191" height="57"
                    class="" />
            </a>
        </div>

        <nav class="mb-8 text-center text-sm md:text-base">
            <a href="{{ route('book_es') }}"
                class="{{ $lang == 'es' ? 'pointer-events-none' : 'text-bruma-orange underline' }} uppercase">Reserva la
                teva taula</a>
            <span class="text-bruma-orange">/</span>
            <a href="{{ route('book_en') }}"
                class="{{ $lang == 'en' ? 'pointer-events-none' : 'text-bruma-orange underline' }} uppercase">Book a
                table</a>
        </nav>

        <div class="mx-4 mx-auto mb-8 max-w-lg">
            <script type="text/javascript" src="https://www.covermanager.com/js/iframeResizer.min.js"></script>
            <iframe id="restaurante-bruma" title="Reservas" src="{{ $iframeUrl }}" frameborder="0" height="1000"
                width="100%" onload="iFrameResize();" scrolling="no"></iframe>
        </div>

    </main>

@endsection
