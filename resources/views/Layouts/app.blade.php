<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'QR Page Builder')</title>

    <!-- Carga de CSS (Sass) y JS via Vite -->
    @vite(['resources/css/sass/app.scss', 'resources/js/app.js'])

    @stack('styles')
</head>
<body>
    <header class="doc-header">
        @include('partials.navbar')
    </header>

    <main class="flex-grow-1">
        @yield('content')
    </main>

    @include('partials.footer')

    @stack('scripts')
</body>
</html>