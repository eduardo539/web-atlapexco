<!DOCTYPE html>
<html lang="es" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turismo Atlapexco - @yield('titulo', 'Inicio')</title>

    <script src="https://cdn.tailwindcss.com"></script>
    @stack('css')
</head>

<body class="antialiased bg-[#fdfaf6] text-gray-800 font-sans flex flex-col min-h-screen">

    <!-- Navegación Superior -->
    @include('frontend.components.header')

    <!-- Contenedor Principal -->
    <main class="flex-grow w-full">
        @yield('contenido')
    </main>

    <!-- Pie de página -->
    @include('frontend.components.footer')

    @stack('js')
</body>

</html>