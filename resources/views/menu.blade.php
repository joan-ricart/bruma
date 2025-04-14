@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <main class="container min-h-screen py-20">
        <div class="mb-4 text-center">
            <a href="{{ route('home') }}" class="inline-block">
                <img src="{{ asset('images/logo-bruma.png') }}" alt="Bruma Restaurant" width="191" height="57"
                    class="" />
            </a>
        </div>

        <div class="text-bruma-orange mb-16 text-center text-sm md:text-base">
            CARTA / MENU
        </div>

        <div class="mx-auto mb-8 grid max-w-lg gap-4 md:grid-cols-2 md:gap-8">
            @foreach ($menus as $menu)
                <div class="text-center">
                    <a href="{{ asset('storage/' . $menu->file_path) }}#toolbar=0" target="_blank"
                        class="text-bruma-orange border-bruma-orange text-orange-bruma block rounded border py-4 uppercase">
                        {{ strtoupper($menu->name) }}
                    </a>
                </div>
            @endforeach
        </div>

        <img src="{{ asset('images/ilustracion-carta.png') }}" alt="Bruma Restaurant" class="mx-auto" width="216" height="284" />
    </main>

@endsection
