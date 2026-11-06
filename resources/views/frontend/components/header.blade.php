<header class="bg-[#FDF9F1] relative z-50 flex items-center justify-between px-4 md:px-8 h-20 shadow-sm border-b border-[#ebdcca]">

    <!-- SECCIÓN IZQUIERDA: Menú Hamburguesa + Imagen decorativa + Navegación Desktop -->
    <div class="flex items-center flex-1">

        <!-- Botón Hamburguesa (Solo visible en móviles/tablets) -->
        <button onclick="document.getElementById('mobile-menu').classList.toggle('hidden')" class="lg:hidden text-[#7A1E41] hover:text-[#2D6656] focus:outline-none mr-4 transition-colors">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>

        <!-- Pequeño logo/imagen lateral izquierdo -->
        <img src="{{ asset('img/floral-izq.webp') }}" alt="Adorno izquierdo" class="hidden md:block h-9 lg:h-11 w-auto object-contain mr-4 lg:mr-8">

        <!-- Navegación de Escritorio -->
        <nav class="hidden lg:flex items-center gap-6 font-semibold text-sm">

            <a href="/" class="relative transition-colors {{ request()->routeIs('home') ? 'text-[#2D6656] after:absolute after:-bottom-1.5 after:left-0 after:w-full after:h-[2px] after:bg-[#2D6656]' : 'text-[#7A1E41] hover:text-[#2D6656]' }}">
                Inicio
            </a>

            <a href="{{ route('nuestra-cultura') }}" class="relative transition-colors {{ request()->routeIs('nuestra-cultura') ? 'text-[#2D6656] after:absolute after:-bottom-1.5 after:left-0 after:w-full after:h-[2px] after:bg-[#2D6656]' : 'text-[#7A1E41] hover:text-[#2D6656]' }}">
                Nuestra Cultura
            </a>

            <a href="{{ route('que-visitar') }}" class="relative transition-colors {{ request()->routeIs('que-visitar') ? 'text-[#2D6656] after:absolute after:-bottom-1.5 after:left-0 after:w-full after:h-[2px] after:bg-[#2D6656]' : 'text-[#7A1E41] hover:text-[#2D6656]' }}">
                Qué visitar
            </a>

            <a href="#" class="relative transition-colors {{ request()->is('galeria') ? 'text-[#2D6656] after:absolute after:-bottom-1.5 after:left-0 after:w-full after:h-[2px] after:bg-[#2D6656]' : 'text-[#7A1E41] hover:text-[#2D6656]' }}">
                Galería
            </a>

            <a href="#" class="relative transition-colors {{ request()->is('contacto') ? 'text-[#2D6656] after:absolute after:-bottom-1.5 after:left-0 after:w-full after:h-[2px] after:bg-[#2D6656]' : 'text-[#7A1E41] hover:text-[#2D6656]' }}">
                Contacto
            </a>

        </nav>
    </div>

    <!-- SECCIÓN CENTRAL: Logo Principal -->
    <div class="absolute left-1/2 top-0 -translate-x-1/2 bg-[#FDF9F1] rounded-b-[2rem] shadow-sm z-10 flex justify-center items-center overflow-hidden w-[100px] h-[90px] md:w-[150px] md:h-[130px] transition-all duration-300">
        <a href="/" class="w-full h-full block p-2 md:p-0">
            <img src="{{ asset('img/logo.webp') }}" alt="Logo Atlapexco" class="w-full h-full object-contain">
        </a>
    </div>

    <!-- SECCIÓN DERECHA: Botón + Imagen decorativa -->
    <div class="flex items-center justify-end flex-1 gap-3 lg:gap-5">
        <a href="{{ route('nuestra-cultura') }}" class="hidden xl:inline-flex items-center bg-[#96214A] hover:bg-[#731938] text-white px-6 py-2 rounded-full text-sm font-medium transition-colors">
            Descubre Atlapexco
            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
            </svg>
        </a>
        <img src="{{ asset('img/floral-der.webp') }}" alt="Adorno derecho" class="hidden md:block h-9 lg:h-11 w-auto object-contain ml-0 lg:ml-2">
    </div>

    <!-- ========================================== -->
    <!-- MENÚ DESPLEGABLE MÓVIL (Dinámico) -->
    <!-- ========================================== -->
    <div id="mobile-menu" class="hidden absolute top-20 left-0 w-full bg-[#FDF9F1] border-b border-[#ebdcca] shadow-lg lg:hidden z-40">
        <nav class="flex flex-col px-6 py-4 space-y-3 font-semibold text-center">

            <a href="/" class="border-b border-[#ebdcca]/50 pb-3 transition-colors {{ request()->routeIs('home') ? 'text-[#2D6656]' : 'text-[#7A1E41] hover:text-[#2D6656]' }}">
                Inicio
            </a>

            <a href="{{ route('nuestra-cultura') }}" class="border-b border-[#ebdcca]/50 pb-3 transition-colors {{ request()->routeIs('nuestra-cultura') ? 'text-[#2D6656]' : 'text-[#7A1E41] hover:text-[#2D6656]' }}">
                Nuestra Cultura
            </a>

            <a href="{{ route('que-visitar') }}" class="border-b border-[#ebdcca]/50 pb-3 transition-colors {{ request()->routeIs('que-visitar') ? 'text-[#2D6656]' : 'text-[#7A1E41] hover:text-[#2D6656]' }}">
                Qué visitar
            </a>

            <a href="#" class="border-b border-[#ebdcca]/50 pb-3 transition-colors {{ request()->is('galeria') ? 'text-[#2D6656]' : 'text-[#7A1E41] hover:text-[#2D6656]' }}">
                Galería
            </a>

            <a href="#" class="pb-2 transition-colors {{ request()->is('contacto') ? 'text-[#2D6656]' : 'text-[#7A1E41] hover:text-[#2D6656]' }}">
                Contacto
            </a>

            <!-- Botón de acción integrado en el menú móvil -->
            <a href="{{ route('nuestra-cultura') }}" class="inline-flex justify-center items-center bg-[#96214A] text-white px-6 py-2.5 rounded-full text-sm font-medium mx-auto w-max mt-2">
                Descubre Atlapexco
            </a>
        </nav>
    </div>

</header>