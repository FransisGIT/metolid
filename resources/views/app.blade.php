<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $title ?? '' }} &mdash; {{ config('app.name') }}</title>

    {{-- CSS eksternal atau tambahan --}}
    @include('home.partials.metadata')
    @include('home.partials.links')
    {{-- @vite('resources/css/app.css') --}}
    {{-- Leaflet CSS --}}
</head>

<body>
    {{-- Main content --}}
    @yield('content')

    {{-- JS Scripts --}}
    @include('home.partials.scripts')

    @stack('script')
    {{-- SCRIPT UNTUK LEAFLET NYA --}}
</body>

</html>
