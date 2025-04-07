<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('app.name'))</title>

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    @stack('styles') <!-- Additional styles -->
</head>

<body x-data="{ menuExpanded: false, footerFixed: true }">

    @include('layouts.partials.header')

    <div aria-hidden class="absolute top-1/4" x-intersect:leave="menuExpanded = true"
        x-intersect:enter="menuExpanded = false">
    </div>

    @yield('content')

    @include('layouts.partials.footer')

    @stack('scripts') <!-- Additional scripts -->
</body>

</html>
