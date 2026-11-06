@extends('frontend.layouts.app')

@section('titulo', 'Atlapexco')

@section('contenido')
<!-- ============================================
     HERO SECTION
============================================= -->
<section class="relative w-full min-h-[75vh] flex items-center overflow-hidden">
    <!-- Fondo de Imagen y Overlay oscuro -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('img/atlapexco.webp') }}" alt="Paisaje de Atlapexco" class="w-full h-full object-cover">
        <!-- Gradiente oscuro de izquierda a derecha -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/40 to-transparent"></div>
    </div>

    <!-- Contenido del Hero -->
    <div class="relative z-10 w-full max-w-7xl mx-auto px-6 md:px-12 pt-20 pb-32">
        <div class="max-w-2xl text-white">
            <h1 class="text-5xl md:text-6xl font-serif font-bold mb-6 leading-tight drop-shadow-lg">
                Descubre la magia de <br> <span class="text-[#f4ebe1]">Atlapexco</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-200 mb-8 leading-relaxed drop-shadow-md font-light">
                Sumérgete en el corazón de la Huasteca hidalguense. Explora nuestros ríos, cascadas, tradiciones vivas y la calidez inigualable de nuestra gente. Un destino donde la cultura y la naturaleza se abrazan.
            </p>
            <a href="{{ route('que-visitar') }}" class="inline-flex items-center px-8 py-3 bg-[#7c1d45] hover:bg-[#5a1532] text-white rounded-full font-semibold transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                Explorar lugares
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
    </div>

    <!-- Efecto de Onda (Wave) inferior -->
    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-[0] transform translate-y-1">
        <svg class="relative block w-full h-[70px] md:h-[120px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C52.16,93.87,103.48,77.49,155,67.69,209.68,57.34,264.44,67.31,321.39,56.44Z" fill="#fdfaf6"></path>
        </svg>
    </div>
</section>


<!-- ============================================
     SECCIÓN 1: ATRACTIVOS (Info Izq, Cards Der)
============================================= -->
<section class="max-w-7xl mx-auto px-6 py-20 flex flex-col lg:flex-row gap-8">

    <!-- Izquierda: Información (Reducida a 1/4 del ancho) -->
    <div class="lg:w-1/4 flex flex-col justify-start pt-2">
        <div class="inline-block px-3 py-1 mb-4 text-[10px] font-bold tracking-wider text-[#7c1d45] uppercase bg-[#f4ebe1] rounded-full w-max">Turismo local</div>
        <h2 class="text-3xl font-serif font-bold text-[#4a3b32] mb-4 leading-tight">
            Conoce nuestros principales atractivos
        </h2>
        <p class="text-[#5c4738] text-sm mb-6 leading-relaxed">
            Explora ríos cristalinos, arquitectura histórica y parajes naturales inigualables. Conecta con nuestras raíces.
        </p>
    </div>

    <!-- Derecha: Cards de atractivos (Grid de 4 columnas, la 5ta se irá abajo automáticamente) -->
    <div class="lg:w-3/4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">

        <!-- Card 1 -->
        <div class="bg-white rounded-xl shadow-sm border border-[#e3d5c5] overflow-hidden flex flex-col hover:shadow-md transition-shadow">
            <img src="{{ asset('img/rio-atlapexco.webp') }}" alt="Río Atlapexco" class="h-32 w-full object-cover bg-gray-200">
            <div class="p-4 flex flex-col flex-grow">
                <h3 class="font-bold text-base text-[#4a3b32] mb-1">Río Atlapexco</h3>
                <p class="text-xs text-gray-600 mb-3 flex-grow line-clamp-3">Aguas cristalinas rodeadas de abundante vegetación, ideal para la familia.</p>
                <a href="#" class="block text-center bg-[#f4ebe1] text-[#7c1d45] hover:bg-[#7c1d45] hover:text-white text-xs font-medium py-2 px-3 rounded-lg transition-colors">Visitar sitio</a>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white rounded-xl shadow-sm border border-[#e3d5c5] overflow-hidden flex flex-col hover:shadow-md transition-shadow">
            <img src="{{ asset('img/reloj-monumental.webp') }}" alt="Reloj Monumental" class="h-32 w-full object-cover bg-gray-200">
            <div class="p-4 flex flex-col flex-grow">
                <h3 class="font-bold text-base text-[#4a3b32] mb-1">Reloj Monumental</h3>
                <p class="text-xs text-gray-600 mb-3 flex-grow line-clamp-3">Símbolo arquitectónico y corazón histórico de nuestro hermoso municipio.</p>
                <a href="#" class="block text-center bg-[#f4ebe1] text-[#7c1d45] hover:bg-[#7c1d45] hover:text-white text-xs font-medium py-2 px-3 rounded-lg transition-colors">Visitar sitio</a>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white rounded-xl shadow-sm border border-[#e3d5c5] overflow-hidden flex flex-col hover:shadow-md transition-shadow">
            <img src="{{ asset('img/cascadas.webp') }}" alt="Cascadas" class="h-32 w-full object-cover bg-gray-200">
            <div class="p-4 flex flex-col flex-grow">
                <h3 class="font-bold text-base text-[#4a3b32] mb-1">Cascadas</h3>
                <p class="text-xs text-gray-600 mb-3 flex-grow line-clamp-3">Impresionantes caídas de agua perfectas para el ecoturismo y aventura.</p>
                <a href="#" class="block text-center bg-[#f4ebe1] text-[#7c1d45] hover:bg-[#7c1d45] hover:text-white text-xs font-medium py-2 px-3 rounded-lg transition-colors">Visitar sitio</a>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="bg-white rounded-xl shadow-sm border border-[#e3d5c5] overflow-hidden flex flex-col hover:shadow-md transition-shadow">
            <img src="{{ asset('img/iglesia.webp') }}" alt="Parroquia" class="h-32 w-full object-cover bg-gray-200">
            <div class="p-4 flex flex-col flex-grow">
                <h3 class="font-bold text-base text-[#4a3b32] mb-1">Parroquia Local</h3>
                <p class="text-xs text-gray-600 mb-3 flex-grow line-clamp-3">Joya colonial que resguarda la fe y las tradiciones de nuestro pueblo.</p>
                <a href="#" class="block text-center bg-[#f4ebe1] text-[#7c1d45] hover:bg-[#7c1d45] hover:text-white text-xs font-medium py-2 px-3 rounded-lg transition-colors">Visitar sitio</a>
            </div>
        </div>

        <!-- Puedes agregar una 5ta tarjeta aquí y automáticamente se colocará abajo -->

    </div>
</section>


<!-- ============================================
     SECCIÓN 2: INFO (Info Izq, Imagen Der)
============================================= -->
<section class="max-w-7xl mx-auto px-6 py-12 flex flex-col-reverse lg:flex-row items-center gap-12">
    <!-- Izquierda: Información -->
    <div class="lg:w-1/2">
        <h2 class="text-3xl md:text-4xl font-serif font-bold text-[#4a3b32] mb-6">
            Un legado que se respira en cada rincón
        </h2>
        <p class="text-[#5c4738] leading-relaxed mb-6">
            Atlapexco no es solo un destino, es una experiencia viva. Caminar por nuestras calles es viajar en el tiempo, donde la arquitectura tradicional se mezcla con el vibrante colorido de nuestras festividades.
        </p>
        <p class="text-[#5c4738] leading-relaxed mb-8">
            Aquí, la identidad Huasteca se refleja en la calidez de su gente, en la música de viento que adorna las tardes y en la pasión con la que preservamos nuestras raíces para compartirlas con el mundo.
        </p>
        <ul class="space-y-3 mb-8">
            <li class="flex items-center text-[#4a3b32] font-medium"><svg class="w-5 h-5 text-[#7c1d45] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg> Tradición milenaria</li>
            <li class="flex items-center text-[#4a3b32] font-medium"><svg class="w-5 h-5 text-[#7c1d45] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg> Cálida hospitalidad local</li>
        </ul>
    </div>

    <!-- Derecha: Imagen -->
    <div class="lg:w-1/2 w-full">
        <!-- Contenedor con efecto visual (offset border) -->
        <div class="relative">
            <div class="absolute inset-0 bg-[#7c1d45] rounded-2xl transform translate-x-4 translate-y-4"></div>
            <img src="{{ asset('img/cultura-atlapexco.webp') }}" alt="Cultura de Atlapexco" class="relative z-10 w-full h-auto object-cover rounded-2xl shadow-lg bg-gray-300">
        </div>
    </div>
</section>


<!-- ============================================
     SECCIÓN 3: DETALLES DE IDENTIDAD (Pequeñas Cards)
============================================= -->
<section class="bg-[#f4ebe1] py-20 mt-12 border-y border-[#e3d5c5]">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center max-w-2xl mx-auto mb-12">
            <h2 class="text-3xl font-serif font-bold text-[#7c1d45] mb-4">La Esencia de Atlapexco</h2>
            <p class="text-[#5c4738]">Todo lo que nos da identidad y orgullo, resumido en la riqueza de nuestra tierra y cultura.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Ubicación -->
            <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow flex items-start border border-white hover:border-[#e3d5c5]">
                <div class="bg-[#fdfaf6] p-3 rounded-lg text-[#7c1d45] mr-4 shadow-sm">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <div>
                    <h4 class="font-bold text-[#4a3b32] text-lg mb-1">Ubicación</h4>
                    <p class="text-sm text-gray-600">Enclavado en la majestuosa Huasteca hidalguense.</p>
                </div>
            </div>
            <!-- Historia -->
            <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow flex items-start border border-white hover:border-[#e3d5c5]">
                <div class="bg-[#fdfaf6] p-3 rounded-lg text-[#7c1d45] mr-4 shadow-sm">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div>
                    <h4 class="font-bold text-[#4a3b32] text-lg mb-1">Historia</h4>
                    <p class="text-sm text-gray-600">Un legado que trasciende a través de los siglos y generaciones.</p>
                </div>
            </div>
            <!-- Identidad Nahua -->
            <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow flex items-start border border-white hover:border-[#e3d5c5]">
                <div class="bg-[#fdfaf6] p-3 rounded-lg text-[#7c1d45] mr-4 shadow-sm">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <div>
                    <h4 class="font-bold text-[#4a3b32] text-lg mb-1">Identidad Nahua</h4>
                    <p class="text-sm text-gray-600">Lengua, vestimenta y raíces indígenas vivas y vibrantes.</p>
                </div>
            </div>
            <!-- Gastronomía -->
            <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow flex items-start border border-white hover:border-[#e3d5c5]">
                <div class="bg-[#fdfaf6] p-3 rounded-lg text-[#7c1d45] mr-4 shadow-sm">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                    </svg>
                </div>
                <div>
                    <h4 class="font-bold text-[#4a3b32] text-lg mb-1">Gastronomía</h4>
                    <p class="text-sm text-gray-600">Zacahuil, bocoles y sabores únicos que enamoran al paladar.</p>
                </div>
            </div>
            <!-- Fiestas y Tradiciones -->
            <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow flex items-start border border-white hover:border-[#e3d5c5]">
                <div class="bg-[#fdfaf6] p-3 rounded-lg text-[#7c1d45] mr-4 shadow-sm">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div>
                    <h4 class="font-bold text-[#4a3b32] text-lg mb-1">Fiestas Tradicionales</h4>
                    <p class="text-sm text-gray-600">Xantolo, carnavales y celebraciones llenas de danza y color.</p>
                </div>
            </div>
            <!-- Naturaleza -->
            <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow flex items-start border border-white hover:border-[#e3d5c5]">
                <div class="bg-[#fdfaf6] p-3 rounded-lg text-[#7c1d45] mr-4 shadow-sm">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div>
                    <h4 class="font-bold text-[#4a3b32] text-lg mb-1">Naturaleza</h4>
                    <p class="text-sm text-gray-600">Paisajes verdes, ríos y cascadas que invitan a la aventura.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================================
     SECCIÓN 4: GALERÍA PREVIA
============================================= -->
<section class="max-w-7xl mx-auto px-6 py-20 text-center">
    <h2 class="text-3xl font-serif font-bold text-[#7c1d45] mb-2">Imágenes de nuestra tierra</h2>
    <p class="text-[#5c4738] mb-10">Un pequeño vistazo a los hermosos paisajes y momentos de Atlapexco.</p>

    <!-- Grid de Galería -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-10">
        <div class="aspect-square rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow">
            <img src="{{ asset('img/galeria-1.webp') }}" alt="Galería 1" class="w-full h-full object-cover bg-gray-200 hover:scale-110 transition-transform duration-500">
        </div>
        <div class="aspect-square rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow">
            <img src="{{ asset('img/galeria-2.webp') }}" alt="Galería 2" class="w-full h-full object-cover bg-gray-200 hover:scale-110 transition-transform duration-500">
        </div>
        <div class="aspect-square rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow">
            <img src="{{ asset('img/galeria-3.webp') }}" alt="Galería 3" class="w-full h-full object-cover bg-gray-200 hover:scale-110 transition-transform duration-500">
        </div>
        <div class="aspect-square rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow">
            <img src="{{ asset('img/galeria-4.webp') }}" alt="Galería 4" class="w-full h-full object-cover bg-gray-200 hover:scale-110 transition-transform duration-500">
        </div>
    </div>

    <a href="{{ route('nuestra-cultura') }}" class="inline-flex items-center px-8 py-3 bg-[#7c1d45] hover:bg-[#5a1532] text-white rounded-full font-semibold transition-colors shadow-sm">
        Descubre más
        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
        </svg>
    </a>
</section>

@endsection