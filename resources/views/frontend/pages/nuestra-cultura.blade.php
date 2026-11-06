@extends('frontend.layouts.app')

@section('titulo', 'Nuestra Cultura')

@section('contenido')

<!-- ============================================
     HERO SECTION: CULTURA
============================================= -->
<section class="relative w-full h-[60vh] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <!-- Reemplaza con una imagen representativa de cultura, ej. Xantolo -->
        <img src="{{ asset('img/cultura-hero.webp') }}" alt="Cultura de Atlapexco" class="w-full h-full object-cover transform scale-105 hover:scale-100 transition-transform duration-1000">
        <div class="absolute inset-0 bg-[#7c1d45]/70 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-[#fdfaf6] to-transparent opacity-90"></div>
    </div>

    <div class="relative z-10 text-center px-6 max-w-4xl mx-auto transform translate-y-8 animate-fade-in-up">
        <span class="text-[#2D6656] font-bold tracking-[0.3em] uppercase text-sm mb-4 block">Identidad Huasteca</span>
        <h1 class="text-5xl md:text-7xl font-serif font-bold text-[#4a3b32] mb-6 drop-shadow-sm">
            Nuestra Cultura
        </h1>
        <p class="text-lg md:text-xl text-[#5c4738] font-medium">
            Un viaje a través de las tradiciones, colores y sabores que definen el alma de Atlapexco.
        </p>
    </div>
</section>

<!-- ============================================
     SECCIÓN: INTRODUCCIÓN A LA RAÍZ NAHUA
============================================= -->
<section class="max-w-7xl mx-auto px-6 py-16 flex flex-col md:flex-row gap-12 items-center">
    <div class="md:w-1/2 space-y-6">
        <h2 class="text-3xl md:text-4xl font-serif font-bold text-[#7c1d45] leading-tight">
            El latido vivo de la <br> Huasteca Hidalguense
        </h2>
        <p class="text-[#5c4738] leading-relaxed text-justify">
            En Atlapexco, el pasado y el presente caminan de la mano. Nuestra identidad está profundamente arraigada en la cultura Nahua, preservando la lengua, la indumentaria y una cosmovisión única. Las calles resuenan con la música de viento y el huapango, mientras que los hogares mantienen vivas las costumbres de nuestros antepasados.
        </p>
        <div class="flex gap-4 pt-4">
            <div class="bg-[#f4ebe1] p-4 rounded-xl text-center shadow-sm w-1/2 border border-[#e3d5c5]">
                <svg class="w-8 h-8 mx-auto text-[#2D6656] mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                <span class="block font-bold text-[#4a3b32]">Música de Viento</span>
            </div>
            <div class="bg-[#f4ebe1] p-4 rounded-xl text-center shadow-sm w-1/2 border border-[#e3d5c5]">
                <svg class="w-8 h-8 mx-auto text-[#2D6656] mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span class="block font-bold text-[#4a3b32]">Lengua Nahua</span>
            </div>
        </div>
    </div>
    <div class="md:w-1/2 grid grid-cols-2 gap-4">
        <img src="{{ asset('img/tradicion-danza-meco.webp') }}" alt="Tradición 1" class="rounded-2xl h-48 w-full object-cover shadow-md hover:scale-105 transition-transform duration-300">
        <img src="{{ asset('img/cultura-2.webp') }}" alt="Tradición 2" class="rounded-2xl h-64 w-full object-cover shadow-md mt-8 hover:scale-105 transition-transform duration-300">
    </div>
</section>

<!-- ============================================
     SECCIÓN ESTRELLA: XANTOLO (El corazón de la Huasteca)
============================================= -->
<section class="w-full bg-[#7c1d45] py-24 relative overflow-hidden mt-12">
    <!-- Decoración de fondo (Cempasúchil abstracta) -->
    <div class="absolute top-0 right-0 opacity-10 pointer-events-none">
        <svg class="w-96 h-96 text-[#f4ebe1]" fill="currentColor" viewBox="0 0 100 100">
            <circle cx="50" cy="50" r="50" />
        </svg>
    </div>

    <div class="max-w-7xl mx-auto px-6 flex flex-col lg:flex-row items-center gap-16 relative z-10">
        <!-- Imagen destacada Xantolo -->
        <div class="lg:w-1/2 group relative">
            <div class="absolute inset-0 bg-[#2D6656] rounded-3xl transform -rotate-3 group-hover:rotate-0 transition-transform duration-500"></div>
            <img src="{{ asset('img/xantolo.webp') }}" alt="Xantolo" class="relative z-10 rounded-3xl w-full h-auto shadow-2xl object-cover transform group-hover:-translate-y-2 transition-transform duration-500">
        </div>

        <!-- Info Xantolo -->
        <div class="lg:w-1/2 text-white">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-[#96214A] rounded-full text-sm font-bold tracking-widest mb-6">
                <svg class="w-4 h-4 text-[#f4ebe1]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                </svg>
                LA FIESTA MÁS GRANDE
            </div>
            <h2 class="text-4xl md:text-5xl font-serif font-bold mb-6">Xantolo: El encuentro con nuestros ancestros</h2>
            <p class="text-white/80 text-lg leading-relaxed mb-6 text-justify">
                El <strong>Xantolo</strong> (Día de Muertos en la Huasteca) es la festividad más sagrada y esperada en Atlapexco. No es una época de luto, sino de profunda alegría, danza y convivencia entre los vivos y quienes se nos han adelantado.
            </p>
            <ul class="space-y-4">
                <li class="flex items-start">
                    <svg class="w-6 h-6 text-[#EAAA00] mr-4 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                    </svg>
                    <span><strong>Arcos y Altares:</strong> Adornados con flor de cempasúchil, palmilla, pan tradicional, fruta y tamales.</span>
                </li>
                <li class="flex items-start">
                    <svg class="w-6 h-6 text-[#EAAA00] mr-4 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span><strong>Los Coles o Viejos:</strong> Cuadrillas de danzantes enmascarados que bailan al son del violín y la jarana por las calles del pueblo.</span>
                </li>
                <li class="flex items-start">
                    <svg class="w-6 h-6 text-[#EAAA00] mr-4 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2v10z"></path>
                    </svg>
                    <span><strong>Ofrenda:</strong> El inconfundible olor a copal guía a las almas hacia el banquete que sus familias han preparado con amor.</span>
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- ============================================
     SECCIÓN: OTRAS FESTIVIDADES (Grid Cards Animadas)
============================================= -->
<section class="max-w-7xl mx-auto px-6 py-20">
    <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-serif font-bold text-[#4a3b32] mb-4">Un Calendario de Celebraciones</h2>
        <p class="text-[#5c4738] max-w-2xl mx-auto">La alegría de Atlapexco se extiende durante todo el año. Cada fiesta es una oportunidad para fortalecer los lazos de nuestra comunidad.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

        <!-- Fiestas Patronales (San José) -->
        <div class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 border border-[#e3d5c5] flex flex-col">
            <div class="h-48 overflow-hidden relative">
                <img src="{{ asset('img/sanjose.webp') }}" alt="Fiesta San José" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                <div class="absolute top-4 right-4 bg-white/90 p-2 rounded-full text-[#7c1d45]">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"></path>
                    </svg>
                </div>
            </div>
            <div class="p-6 flex-grow flex flex-col">
                <h3 class="text-xl font-bold text-[#7c1d45] mb-2">Fiesta a San José</h3>
                <p class="text-sm text-gray-600 mb-4 flex-grow text-justify">
                    El 19 de marzo celebramos a nuestro Santo Patrono, San José. Se realizan misas, cabalgatas, danzas autóctonas, quema de castillo pirotécnico y eventos artísticos en el teatro del pueblo.
                </p>
                <div class="text-xs font-bold text-[#2D6656] uppercase tracking-wider mt-auto">Marzo</div>
            </div>
        </div>

        <!-- Carnaval -->
        <div class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 border border-[#e3d5c5] flex flex-col">
            <div class="h-48 overflow-hidden relative">
                <img src="{{ asset('img/carnaval.webp') }}" alt="Carnaval" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                <div class="absolute top-4 right-4 bg-white/90 p-2 rounded-full text-[#7c1d45]">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
            </div>
            <div class="p-6 flex-grow flex flex-col">
                <h3 class="text-xl font-bold text-[#7c1d45] mb-2">El Carnaval de los Mecos</h3>
                <p class="text-sm text-gray-600 mb-4 flex-grow text-justify">
                    Previo a la cuaresma, las calles se llenan de colores con el tradicional Carnaval. Los participantes, pintados tradicionalmente y usando penachos, danzan al ritmo de música viva, compartiendo alegría.
                </p>
                <div class="text-xs font-bold text-[#2D6656] uppercase tracking-wider mt-auto">Febrero / Marzo</div>
            </div>
        </div>

        <!-- Navidad y Fin de Año -->
        <div class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 border border-[#e3d5c5] flex flex-col">
            <div class="h-48 overflow-hidden relative">
                <img src="{{ asset('img/navidad.webp') }}" alt="Navidad" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                <div class="absolute top-4 right-4 bg-white/90 p-2 rounded-full text-[#7c1d45]">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                    </svg>
                </div>
            </div>
            <div class="p-6 flex-grow flex flex-col">
                <h3 class="text-xl font-bold text-[#7c1d45] mb-2">Magia Decembrina</h3>
                <p class="text-sm text-gray-600 mb-4 flex-grow text-justify">
                    Las posadas tradicionales unen a los barrios del municipio. El frío de diciembre se combate con ponche caliente, tamales y la iluminación festiva de nuestra parroquia y plaza principal.
                </p>
                <div class="text-xs font-bold text-[#2D6656] uppercase tracking-wider mt-auto">Diciembre</div>
            </div>
        </div>

    </div>
</section>

<!-- ============================================
     SECCIÓN: GASTRONOMÍA (Banner final)
============================================= -->
<section class="max-w-7xl mx-auto px-6 pb-24">
    <div class="bg-[#f4ebe1] rounded-3xl p-8 md:p-12 flex flex-col md:flex-row items-center gap-10 border border-[#e3d5c5] shadow-sm">

        <div class="md:w-1/2">
            <h2 class="text-3xl font-serif font-bold text-[#7c1d45] mb-4">La Gastronomía, un Patrimonio</h2>
            <p class="text-[#5c4738] mb-6 text-justify">
                Nuestra cultura también se saborea. El majestuoso <strong>Zacahuil</strong> (el tamal más grande del mundo) cocido en horno de barro, los bocoles de queso, las enchiladas huastecas con cecina y el exquisito pan de horno artesanal son manjares que todo visitante debe probar.
            </p>
            <div class="flex flex-wrap gap-3">
                <span class="px-4 py-2 bg-white text-[#4a3b32] text-sm font-semibold rounded-full shadow-sm border border-[#e3d5c5]">Zacahuil</span>
                <span class="px-4 py-2 bg-white text-[#4a3b32] text-sm font-semibold rounded-full shadow-sm border border-[#e3d5c5]">Bocoles</span>
                <span class="px-4 py-2 bg-white text-[#4a3b32] text-sm font-semibold rounded-full shadow-sm border border-[#e3d5c5]">Enchiladas Huastecas</span>
            </div>
        </div>

        <div class="md:w-1/2 relative w-full h-64 md:h-80 rounded-2xl overflow-hidden shadow-lg group">
            <img src="{{ asset('img/gastronomia.webp') }}" alt="Gastronomía Huasteca" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-6">
                <span class="text-white font-bold text-xl">Sabor a Atlapexco</span>
            </div>
        </div>

    </div>
</section>

@endsection