@extends('frontend.layouts.app')

@section('titulo', 'Qué visitar en Atlapexco')

@section('contenido')

<!-- ============================================
     HERO SECTION: QUÉ VISITAR (Gran formato)
============================================= -->
<section class="relative w-full h-[60vh] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('img/hero-atractivos.webp') }}" alt="Turismo Atlapexco" class="w-full h-full object-cover transform scale-105 animate-[pulse_20s_ease-in-out_infinite]">
        <div class="absolute inset-0 bg-[#7c1d45]/70 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-[#FDF9F1] to-transparent opacity-100"></div>
    </div>

    <div class="relative z-10 text-center px-6 max-w-4xl mx-auto transform translate-y-4 animate-[fade-in-up_1s_ease-out]">
        <span class="text-[#2D6656] font-bold tracking-[0.3em] uppercase text-sm mb-4 block">Guía de Destinos 2026</span>
        <h1 class="text-5xl md:text-7xl font-serif font-bold text-[#4a3b32] mb-6 drop-shadow-sm leading-tight">
            Descubre Atlapexco
        </h1>
        <p class="text-lg md:text-xl text-[#5c4738] font-medium max-w-2xl mx-auto leading-relaxed">
            Explora rincones naturales, históricos y culturales. Un recorrido inolvidable por la majestuosa Huasteca Hidalguense.
        </p>
    </div>
</section>

<!-- ============================================
     SECCIÓN DE BIENVENIDA Y CLIMA
============================================= -->
<section class="max-w-7xl mx-auto px-6 py-12 flex flex-col md:flex-row gap-12 items-center">
    <div class="md:w-1/2 space-y-6">
        <div class="inline-block px-4 py-1 text-xs font-bold tracking-wider text-[#2D6656] uppercase bg-white border border-[#2D6656]/20 rounded-full shadow-sm">¿Por qué visitarnos?</div>
        <h2 class="text-3xl md:text-4xl font-serif font-bold text-[#7c1d45] leading-tight">
            Un paraíso escondido entre montañas y ríos
        </h2>
        <p class="text-[#5c4738] leading-relaxed text-justify">
            Atlapexco te recibe con los brazos abiertos. Nuestro clima cálido-húmedo durante la mayor parte del año es perfecto para actividades al aire libre. Ya sea que busques la tranquilidad de la naturaleza, sumergirte en pozas cristalinas o admirar la arquitectura con siglos de historia, aquí encontrarás un espacio para conectar contigo mismo y con nuestras raíces.
        </p>
        <div class="flex items-center gap-4 bg-white p-4 rounded-2xl shadow-sm border border-[#e3d5c5]">
            <svg class="w-10 h-10 text-[#EAAA00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
            </svg>
            <div>
                <span class="block text-sm text-gray-500 font-medium">Clima Promedio</span>
                <span class="block text-[#4a3b32] font-bold text-lg">24°C - 32°C (Cálido)</span>
            </div>
        </div>
    </div>
    <div class="md:w-1/2 relative h-80 rounded-3xl overflow-hidden shadow-lg group">
        <img src="{{ asset('img/paisaje-atlapexco.webp') }}" alt="Vista panorámica" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
        <div class="absolute inset-0 bg-gradient-to-t from-[#7c1d45]/80 to-transparent flex items-end p-8">
            <span class="text-white font-serif italic text-2xl">"La perla de la Huasteca"</span>
        </div>
    </div>
</section>

<!-- ============================================
     CATÁLOGO DE ATRACTIVOS (Grid Extendido a 6)
============================================= -->
<section class="bg-white py-20 border-y border-[#e3d5c5]">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-12">
            <h2 class="text-4xl font-serif font-bold text-[#4a3b32] mb-4">Catálogo de Destinos</h2>
            <p class="text-[#5c4738]">Selecciona una categoría o explora todo lo que tenemos para ti.</p>
        </div>

        <!-- Filtros visuales UX -->
        <div class="flex flex-wrap justify-center gap-3 mb-12">
            <span class="px-6 py-2 bg-[#7c1d45] text-white rounded-full text-sm font-semibold shadow-md cursor-pointer">Todos los destinos</span>
            <span class="px-6 py-2 bg-[#FDF9F1] text-[#5c4738] border border-[#e3d5c5] hover:bg-[#e8dac7] hover:text-[#7c1d45] rounded-full text-sm font-semibold transition-colors cursor-pointer">Naturaleza pura</span>
            <span class="px-6 py-2 bg-[#FDF9F1] text-[#5c4738] border border-[#e3d5c5] hover:bg-[#e8dac7] hover:text-[#7c1d45] rounded-full text-sm font-semibold transition-colors cursor-pointer">Histórico y Urbano</span>
            <span class="px-6 py-2 bg-[#FDF9F1] text-[#5c4738] border border-[#e3d5c5] hover:bg-[#e8dac7] hover:text-[#7c1d45] rounded-full text-sm font-semibold transition-colors cursor-pointer">Gastronomía</span>
        </div>

        <!-- GRID 3 Columnas -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- 1. Río Atlapexco -->
            <article class="bg-[#FDF9F1] rounded-2xl shadow-sm hover:shadow-xl border border-[#e3d5c5] overflow-hidden flex flex-col group cursor-pointer transition-all duration-300 transform hover:-translate-y-2" onclick="openModal('modal-rio')">
                <div class="h-60 overflow-hidden relative">
                    <img src="{{ asset('img/rio-atlapexco-visitar.webp') }}" alt="Río Atlapexco" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute top-4 left-4 bg-white/95 backdrop-blur px-3 py-1 rounded-full text-xs font-bold text-[#2D6656] shadow-sm">Naturaleza</div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-2xl font-bold text-[#7c1d45] mb-2 font-serif">Río Atlapexco</h3>
                    <p class="text-[#5c4738] text-sm mb-4 line-clamp-3">Un paraíso de aguas cristalinas rodeado de selva huasteca, ideal para nadar y pasar un día familiar inolvidable.</p>
                    <div class="mt-auto flex justify-between items-center pt-4 border-t border-[#e3d5c5]">
                        <span class="text-[#7c1d45] font-bold text-sm flex items-center group-hover:text-[#96214A]">Ver detalles <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg></span>
                    </div>
                </div>
            </article>

            <!-- 2. Reloj Monumental -->
            <article class="bg-[#FDF9F1] rounded-2xl shadow-sm hover:shadow-xl border border-[#e3d5c5] overflow-hidden flex flex-col group cursor-pointer transition-all duration-300 transform hover:-translate-y-2" onclick="openModal('modal-reloj')">
                <div class="h-60 overflow-hidden relative">
                    <img src="{{ asset('img/reloj-monumental-atlapexco.webp') }}" alt="Reloj" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute top-4 left-4 bg-white/95 backdrop-blur px-3 py-1 rounded-full text-xs font-bold text-[#7c1d45] shadow-sm">Histórico</div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-2xl font-bold text-[#7c1d45] mb-2 font-serif">Reloj Monumental</h3>
                    <p class="text-[#5c4738] text-sm mb-4 line-clamp-3">El corazón vibrante de nuestro municipio. Una joya arquitectónica rodeada de jardines y vida comunitaria.</p>
                    <div class="mt-auto flex justify-between items-center pt-4 border-t border-[#e3d5c5]">
                        <span class="text-[#7c1d45] font-bold text-sm flex items-center group-hover:text-[#96214A]">Ver detalles <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg></span>
                    </div>
                </div>
            </article>

            <!-- 3. Cascadas -->
            <article class="bg-[#FDF9F1] rounded-2xl shadow-sm hover:shadow-xl border border-[#e3d5c5] overflow-hidden flex flex-col group cursor-pointer transition-all duration-300 transform hover:-translate-y-2" onclick="openModal('modal-cascadas')">
                <div class="h-60 overflow-hidden relative">
                    <img src="{{ asset('img/cascadas.webp') }}" alt="Cascadas" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute top-4 left-4 bg-white/95 backdrop-blur px-3 py-1 rounded-full text-xs font-bold text-[#2D6656] shadow-sm">Ecoturismo</div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-2xl font-bold text-[#7c1d45] mb-2 font-serif">Cascadas Vírgenes</h3>
                    <p class="text-[#5c4738] text-sm mb-4 line-clamp-3">Espectaculares caídas de agua escondidas en la montaña, el lugar perfecto para el senderismo, refrescarse y la fotografía de naturaleza.</p>
                    <div class="mt-auto flex justify-between items-center pt-4 border-t border-[#e3d5c5]">
                        <span class="text-[#7c1d45] font-bold text-sm flex items-center group-hover:text-[#96214A]">Ver detalles <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg></span>
                    </div>
                </div>
            </article>

            <!-- 4. Parroquia San José -->
            <article class="bg-[#FDF9F1] rounded-2xl shadow-sm hover:shadow-xl border border-[#e3d5c5] overflow-hidden flex flex-col group cursor-pointer transition-all duration-300 transform hover:-translate-y-2" onclick="openModal('modal-parroquia')">
                <div class="h-60 overflow-hidden relative">
                    <img src="{{ asset('img/iglesia-parroquia.webp') }}" alt="Parroquia" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute top-4 left-4 bg-white/95 backdrop-blur px-3 py-1 rounded-full text-xs font-bold text-[#7c1d45] shadow-sm">Histórico</div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-2xl font-bold text-[#7c1d45] mb-2 font-serif">Parroquia de San José</h3>
                    <p class="text-[#5c4738] text-sm mb-4 line-clamp-3">Refugio de fe colonial, con una fachada tradicional que resguarda la historia religiosa y cultural de nuestro pueblo.</p>
                    <div class="mt-auto flex justify-between items-center pt-4 border-t border-[#e3d5c5]">
                        <span class="text-[#7c1d45] font-bold text-sm flex items-center group-hover:text-[#96214A]">Ver detalles <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg></span>
                    </div>
                </div>
            </article>

            <!-- 5. Mercado Tradicional -->
            <article class="bg-[#FDF9F1] rounded-2xl shadow-sm hover:shadow-xl border border-[#e3d5c5] overflow-hidden flex flex-col group cursor-pointer transition-all duration-300 transform hover:-translate-y-2" onclick="openModal('modal-mercado')">
                <div class="h-60 overflow-hidden relative">
                    <img src="{{ asset('img/gastronomia-mercado.webp') }}" alt="Mercado" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute top-4 left-4 bg-white/95 backdrop-blur px-3 py-1 rounded-full text-xs font-bold text-[#EAAA00] shadow-sm">Gastronomía</div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-2xl font-bold text-[#7c1d45] mb-2 font-serif">Mercado Municipal</h3>
                    <p class="text-[#5c4738] text-sm mb-4 line-clamp-3">Un festín para los sentidos. Aquí encontrarás bordados, artesanías y los más exquisitos platillos típicos como el zacahuil y los bocoles.</p>
                    <div class="mt-auto flex justify-between items-center pt-4 border-t border-[#e3d5c5]">
                        <span class="text-[#7c1d45] font-bold text-sm flex items-center group-hover:text-[#96214A]">Ver detalles <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg></span>
                    </div>
                </div>
            </article>

            <!-- 6. Letras Monumentales / Plaza -->
            <article class="bg-[#FDF9F1] rounded-2xl shadow-sm hover:shadow-xl border border-[#e3d5c5] overflow-hidden flex flex-col group cursor-pointer transition-all duration-300 transform hover:-translate-y-2" onclick="openModal('modal-letras')">
                <div class="h-60 overflow-hidden relative">
                    <img src="{{ asset('img/atlapexco-letras.webp') }}" alt="Letras" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute top-4 left-4 bg-white/95 backdrop-blur px-3 py-1 rounded-full text-xs font-bold text-[#7c1d45] shadow-sm">Urbano</div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-2xl font-bold text-[#7c1d45] mb-2 font-serif">Letras Monumentales</h3>
                    <p class="text-[#5c4738] text-sm mb-4 line-clamp-3">El spot fotográfico por excelencia. Cada letra cuenta con detalles pintados a mano que representan nuestra flora, fauna y bordados nahuas.</p>
                    <div class="mt-auto flex justify-between items-center pt-4 border-t border-[#e3d5c5]">
                        <span class="text-[#7c1d45] font-bold text-sm flex items-center group-hover:text-[#96214A]">Ver detalles <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg></span>
                    </div>
                </div>
            </article>

        </div>
    </div>
</section>

<!-- ============================================
     SECCIÓN: RUTAS SUGERIDAS (Itinerarios)
============================================= -->
<section class="bg-[#2D6656] py-20 text-white relative overflow-hidden">
    <!-- Adorno de fondo -->
    <div class="absolute -top-24 -left-24 opacity-10">
        <svg class="w-96 h-96" fill="currentColor" viewBox="0 0 100 100">
            <circle cx="50" cy="50" r="50" />
        </svg>
    </div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-serif font-bold text-[#FDF9F1] mb-4">Rutas sugeridas para tu visita</h2>
            <p class="text-[#e3d5c5] max-w-2xl mx-auto text-lg">Organizamos lo mejor de Atlapexco para que aproveches tu tiempo al máximo.</p>
        </div>

        <div class="grid md:grid-cols-2 gap-10">
            <!-- Ruta 1 -->
            <div class="bg-white/10 backdrop-blur-md rounded-3xl p-8 border border-white/20 hover:bg-white/15 transition-colors">
                <div class="flex items-center gap-4 mb-6">
                    <div class="bg-[#FDF9F1] text-[#2D6656] p-4 rounded-2xl">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-white">Ruta del Agua y Ecoturismo</h3>
                        <p class="text-[#e3d5c5] text-sm">Duración recomendada: 1 Día completo</p>
                    </div>
                </div>
                <ul class="space-y-4 text-[#FDF9F1]">
                    <li class="flex items-center"><span class="w-8 h-8 rounded-full bg-[#7c1d45] flex items-center justify-center font-bold mr-4 text-sm">1</span> <strong>Mañana:</strong> Desayuno ligero y visita a las Cascadas Vírgenes.</li>
                    <li class="flex items-center"><span class="w-8 h-8 rounded-full bg-[#7c1d45] flex items-center justify-center font-bold mr-4 text-sm">2</span> <strong>Tarde:</strong> Comida ribereña y chapuzón en el Río Atlapexco.</li>
                    <li class="flex items-center"><span class="w-8 h-8 rounded-full bg-[#7c1d45] flex items-center justify-center font-bold mr-4 text-sm">3</span> <strong>Ocaso:</strong> Caminata por los senderos boscosos para tomar fotos.</li>
                </ul>
            </div>

            <!-- Ruta 2 -->
            <div class="bg-white/10 backdrop-blur-md rounded-3xl p-8 border border-white/20 hover:bg-white/15 transition-colors">
                <div class="flex items-center gap-4 mb-6">
                    <div class="bg-[#FDF9F1] text-[#7c1d45] p-4 rounded-2xl">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-white">Ruta Histórica y de Sabor</h3>
                        <p class="text-[#e3d5c5] text-sm">Duración recomendada: Medio Día</p>
                    </div>
                </div>
                <ul class="space-y-4 text-[#FDF9F1]">
                    <li class="flex items-center"><span class="w-8 h-8 rounded-full bg-[#2D6656] flex items-center justify-center font-bold mr-4 text-sm">1</span> <strong>Mañana:</strong> Almuerzo (zacahuil) en el Mercado Municipal.</li>
                    <li class="flex items-center"><span class="w-8 h-8 rounded-full bg-[#2D6656] flex items-center justify-center font-bold mr-4 text-sm">2</span> <strong>Mediodía:</strong> Recorrido por la Parroquia de San José.</li>
                    <li class="flex items-center"><span class="w-8 h-8 rounded-full bg-[#2D6656] flex items-center justify-center font-bold mr-4 text-sm">3</span> <strong>Tarde:</strong> Fotos en las Letras Monumentales y descanso bajo el Reloj.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     TIPS DE VIAJE PARA EL TURISTA
============================================= -->
<section class="max-w-7xl mx-auto px-6 py-20">
    <div class="text-center mb-12">
        <h2 class="text-3xl font-serif font-bold text-[#7c1d45] mb-2">Consejos para el viajero</h2>
        <p class="text-[#5c4738]">Todo lo que necesitas saber antes de empacar.</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Vestimenta -->
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-[#e3d5c5] text-center">
            <svg class="w-10 h-10 mx-auto text-[#2D6656] mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5"></path>
            </svg>
            <h4 class="font-bold text-[#4a3b32] mb-2">Vestimenta</h4>
            <p class="text-sm text-[#5c4738]">Ropa ligera de algodón y calzado cómodo (antiderrapante si vas a las cascadas).</p>
        </div>
        <!-- Dinero -->
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-[#e3d5c5] text-center">
            <svg class="w-10 h-10 mx-auto text-[#2D6656] mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <h4 class="font-bold text-[#4a3b32] mb-2">Efectivo</h4>
            <p class="text-sm text-[#5c4738]">Muchos comercios locales y artesanos manejan pago en efectivo. Lleva billetes de baja denominación.</p>
        </div>
        <!-- Salud -->
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-[#e3d5c5] text-center">
            <svg class="w-10 h-10 mx-auto text-[#2D6656] mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
            </svg>
            <h4 class="font-bold text-[#4a3b32] mb-2">Salud y Sol</h4>
            <p class="text-sm text-[#5c4738]">Usa protector solar ecológico, lleva repelente para mosquitos y mantente muy bien hidratado.</p>
        </div>
        <!-- Transporte -->
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-[#e3d5c5] text-center">
            <svg class="w-10 h-10 mx-auto text-[#2D6656] mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
            </svg>
            <h4 class="font-bold text-[#4a3b32] mb-2">Transporte Local</h4>
            <p class="text-sm text-[#5c4738]">Puedes moverte fácilmente en taxis locales o transporte público (combis) hacia las zonas naturales.</p>
        </div>
    </div>
</section>

<!-- ============================================
     MODALES INTERACTIVOS (Vanilla JS)
     (Incluyo 6 modales para las 6 tarjetas)
============================================= -->

<!-- 1. Modal: Río Atlapexco -->
<div id="modal-rio" class="fixed inset-0 z-[100] hidden items-center justify-center p-4 sm:p-6" role="dialog" aria-modal="true">
    <div class="fixed inset-0 bg-black/70 backdrop-blur-sm transition-opacity opacity-0 modal-backdrop" onclick="closeModal('modal-rio')"></div>
    <div class="relative w-full max-w-5xl bg-[#FDF9F1] rounded-3xl shadow-2xl overflow-hidden transform scale-95 opacity-0 transition-all duration-300 modal-content flex flex-col md:flex-row max-h-[90vh]">
        <button onclick="closeModal('modal-rio')" class="absolute top-4 right-4 z-10 w-10 h-10 bg-white/50 hover:bg-white rounded-full flex items-center justify-center text-[#7c1d45] transition-colors shadow-sm">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        <div class="w-full md:w-1/2 h-64 md:h-auto relative"><img src="{{ asset('img/rio-atlapexco-visitar.webp') }}" class="w-full h-full object-cover"></div>
        <div class="w-full md:w-1/2 p-8 overflow-y-auto">
            <div class="inline-block px-3 py-1 mb-3 text-[10px] font-bold text-white bg-[#2D6656] rounded-full uppercase">Naturaleza Pura</div>
            <h2 class="text-3xl font-serif font-bold text-[#7c1d45] mb-4">Río Atlapexco</h2>
            <p class="text-[#5c4738] mb-6 text-justify">El Río Atlapexco es uno de los pulmones naturales más hermosos de la región. Sus aguas limpias y cristalinas recorren el municipio ofreciendo paisajes inigualables, ideal para nadar y acampar en sus riberas.</p>
            <h4 class="font-bold text-[#4a3b32] mb-2 flex items-center"><svg class="w-5 h-5 mr-2 text-[#7c1d45]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                </svg> Ubicación y Acceso</h4>
            <p class="text-sm text-[#5c4738]">Acceso a 5 minutos del centro del municipio. Camino pavimentado hasta el estacionamiento.</p>
        </div>
    </div>
</div>

<!-- 2. Modal: Reloj -->
<div id="modal-reloj" class="fixed inset-0 z-[100] hidden items-center justify-center p-4 sm:p-6" role="dialog" aria-modal="true">
    <div class="fixed inset-0 bg-black/70 backdrop-blur-sm transition-opacity opacity-0 modal-backdrop" onclick="closeModal('modal-reloj')"></div>
    <div class="relative w-full max-w-5xl bg-[#FDF9F1] rounded-3xl shadow-2xl overflow-hidden transform scale-95 opacity-0 transition-all duration-300 modal-content flex flex-col md:flex-row max-h-[90vh]">
        <button onclick="closeModal('modal-reloj')" class="absolute top-4 right-4 z-10 w-10 h-10 bg-white/50 hover:bg-white rounded-full flex items-center justify-center text-[#7c1d45] transition-colors shadow-sm">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        <div class="w-full md:w-1/2 h-64 md:h-auto relative"><img src="{{ asset('img/reloj-monumental.webp') }}" class="w-full h-full object-cover"></div>
        <div class="w-full md:w-1/2 p-8 overflow-y-auto">
            <div class="inline-block px-3 py-1 mb-3 text-[10px] font-bold text-white bg-[#7c1d45] rounded-full uppercase">Centro Histórico</div>
            <h2 class="text-3xl font-serif font-bold text-[#7c1d45] mb-4">Reloj Monumental</h2>
            <p class="text-[#5c4738] mb-6 text-justify">Rodeado por la plaza principal, es el escenario de eventos cívicos, tardes de huapango y festivales tradicionales. Su iluminación escénica nocturna lo hace perfecto para las fotos del recuerdo.</p>
            <h4 class="font-bold text-[#4a3b32] mb-2 flex items-center"><svg class="w-5 h-5 mr-2 text-[#7c1d45]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                </svg> Ubicación Central</h4>
            <p class="text-sm text-[#5c4738]">Ubicado exactamente en el centro de Atlapexco, frente a la Presidencia Municipal.</p>
        </div>
    </div>
</div>

<!-- 3. Modal: Cascadas -->
<div id="modal-cascadas" class="fixed inset-0 z-[100] hidden items-center justify-center p-4 sm:p-6" role="dialog" aria-modal="true">
    <div class="fixed inset-0 bg-black/70 backdrop-blur-sm transition-opacity opacity-0 modal-backdrop" onclick="closeModal('modal-cascadas')"></div>
    <div class="relative w-full max-w-5xl bg-[#FDF9F1] rounded-3xl shadow-2xl overflow-hidden transform scale-95 opacity-0 transition-all duration-300 modal-content flex flex-col md:flex-row max-h-[90vh]">
        <button onclick="closeModal('modal-cascadas')" class="absolute top-4 right-4 z-10 w-10 h-10 bg-white/50 hover:bg-white rounded-full flex items-center justify-center text-[#7c1d45] transition-colors shadow-sm">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        <div class="w-full md:w-1/2 h-64 md:h-auto relative"><img src="{{ asset('img/cascadas-tlachapa.webp') }}" class="w-full h-full object-cover"></div>
        <div class="w-full md:w-1/2 p-8 overflow-y-auto">
            <div class="inline-block px-3 py-1 mb-3 text-[10px] font-bold text-white bg-[#2D6656] rounded-full uppercase">Ecoturismo Aventura</div>
            <h2 class="text-3xl font-serif font-bold text-[#7c1d45] mb-4">Cascadas Vírgenes</h2>
            <p class="text-[#5c4738] mb-6 text-justify">Un rincón escondido en las montañas. La densa vegetación y la fuerza del agua crean un ambiente místico. Requiere caminata ligera, por lo que es vital llevar agua y zapatos seguros.</p>
            <h4 class="font-bold text-[#4a3b32] mb-2 flex items-center"><svg class="w-5 h-5 mr-2 text-[#7c1d45]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg> Horario Sugerido</h4>
            <p class="text-sm text-[#5c4738]">Visitar entre 8:00 AM y 4:00 PM para aprovechar la luz natural del sol.</p>
        </div>
    </div>
</div>

<!-- 4. Modal: Parroquia -->
<div id="modal-parroquia" class="fixed inset-0 z-[100] hidden items-center justify-center p-4 sm:p-6" role="dialog" aria-modal="true">
    <div class="fixed inset-0 bg-black/70 backdrop-blur-sm transition-opacity opacity-0 modal-backdrop" onclick="closeModal('modal-parroquia')"></div>
    <div class="relative w-full max-w-5xl bg-[#FDF9F1] rounded-3xl shadow-2xl overflow-hidden transform scale-95 opacity-0 transition-all duration-300 modal-content flex flex-col md:flex-row max-h-[90vh]">
        <button onclick="closeModal('modal-parroquia')" class="absolute top-4 right-4 z-10 w-10 h-10 bg-white/50 hover:bg-white rounded-full flex items-center justify-center text-[#7c1d45] transition-colors shadow-sm">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        <div class="w-full md:w-1/2 h-64 md:h-auto relative"><img src="{{ asset('img/iglesia.webp') }}" class="w-full h-full object-cover"></div>
        <div class="w-full md:w-1/2 p-8 overflow-y-auto">
            <div class="inline-block px-3 py-1 mb-3 text-[10px] font-bold text-white bg-[#7c1d45] rounded-full uppercase">Arquitectura Religiosa</div>
            <h2 class="text-3xl font-serif font-bold text-[#7c1d45] mb-4">Parroquia San José</h2>
            <p class="text-[#5c4738] mb-6 text-justify">Con su fachada antigua y su campanario que resuena cada hora, la parroquia es un baluarte de la fe. Sus interiores resguardan arte sacro y es el centro de nuestra festividad principal en Marzo.</p>
        </div>
    </div>
</div>

<!-- 5. Modal: Mercado -->
<div id="modal-mercado" class="fixed inset-0 z-[100] hidden items-center justify-center p-4 sm:p-6" role="dialog" aria-modal="true">
    <div class="fixed inset-0 bg-black/70 backdrop-blur-sm transition-opacity opacity-0 modal-backdrop" onclick="closeModal('modal-mercado')"></div>
    <div class="relative w-full max-w-5xl bg-[#FDF9F1] rounded-3xl shadow-2xl overflow-hidden transform scale-95 opacity-0 transition-all duration-300 modal-content flex flex-col md:flex-row max-h-[90vh]">
        <button onclick="closeModal('modal-mercado')" class="absolute top-4 right-4 z-10 w-10 h-10 bg-white/50 hover:bg-white rounded-full flex items-center justify-center text-[#7c1d45] transition-colors shadow-sm">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        <div class="w-full md:w-1/2 h-64 md:h-auto relative"><img src="{{ asset('img/gastronomia-mercado.webp') }}" class="w-full h-full object-cover"></div>
        <div class="w-full md:w-1/2 p-8 overflow-y-auto">
            <div class="inline-block px-3 py-1 mb-3 text-[10px] font-bold text-white bg-[#EAAA00] rounded-full uppercase">Gastronomía y Arte</div>
            <h2 class="text-3xl font-serif font-bold text-[#7c1d45] mb-4">Mercado Tradicional</h2>
            <p class="text-[#5c4738] mb-6 text-justify">Conoce los aromas y sabores reales de la Huasteca. Aquí podrás adquirir pan de horno, enchiladas artesanales, cecina y los hermosos bordados típicos que las mujeres nahuas elaboran a mano.</p>
        </div>
    </div>
</div>

<!-- 6. Modal: Letras -->
<div id="modal-letras" class="fixed inset-0 z-[100] hidden items-center justify-center p-4 sm:p-6" role="dialog" aria-modal="true">
    <div class="fixed inset-0 bg-black/70 backdrop-blur-sm transition-opacity opacity-0 modal-backdrop" onclick="closeModal('modal-letras')"></div>
    <div class="relative w-full max-w-5xl bg-[#FDF9F1] rounded-3xl shadow-2xl overflow-hidden transform scale-95 opacity-0 transition-all duration-300 modal-content flex flex-col md:flex-row max-h-[90vh]">
        <button onclick="closeModal('modal-letras')" class="absolute top-4 right-4 z-10 w-10 h-10 bg-white/50 hover:bg-white rounded-full flex items-center justify-center text-[#7c1d45] transition-colors shadow-sm">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        <div class="w-full md:w-1/2 h-64 md:h-auto relative"><img src="{{ asset('img/atlapexco-letras.webp') }}" class="w-full h-full object-cover"></div>
        <div class="w-full md:w-1/2 p-8 overflow-y-auto">
            <div class="inline-block px-3 py-1 mb-3 text-[10px] font-bold text-white bg-[#7c1d45] rounded-full uppercase">Fotografía Urbana</div>
            <h2 class="text-3xl font-serif font-bold text-[#7c1d45] mb-4">Letras Monumentales</h2>
            <p class="text-[#5c4738] mb-6 text-justify">La foto obligatoria de tu viaje. Las letras de gran formato pintadas a mano rinden homenaje al Xantolo, la flora silvestre y la identidad de nuestra comunidad. ¡No te vayas sin tu postal!</p>
        </div>
    </div>
</div>

@endsection

<!-- ============================================
     JAVASCRIPT (Controlador de Modales Vainilla)
============================================= -->
@push('js')
<script>
    function openModal(modalId) {
        const modal = document.getElementById(modalId);
        const backdrop = modal.querySelector('.modal-backdrop');
        const content = modal.querySelector('.modal-content');

        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.style.overflow = 'hidden'; // Bloquea el scroll del fondo

        setTimeout(() => {
            backdrop.classList.remove('opacity-0');
            backdrop.classList.add('opacity-100');
            content.classList.remove('opacity-0', 'scale-95');
            content.classList.add('opacity-100', 'scale-100');
        }, 10);
    }

    function closeModal(modalId) {
        const modal = document.getElementById(modalId);
        const backdrop = modal.querySelector('.modal-backdrop');
        const content = modal.querySelector('.modal-content');

        backdrop.classList.remove('opacity-100');
        backdrop.classList.add('opacity-0');
        content.classList.remove('opacity-100', 'scale-100');
        content.classList.add('opacity-0', 'scale-95');

        document.body.style.overflow = 'auto'; // Devuelve el scroll

        setTimeout(() => {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }, 300);
    }

    // Cierra modal con la tecla escape
    document.addEventListener('keydown', function(event) {
        if (event.key === "Escape") {
            const modals = document.querySelectorAll('[id^="modal-"]');
            modals.forEach(modal => {
                if (!modal.classList.contains('hidden')) {
                    closeModal(modal.id);
                }
            });
        }
    });
</script>
@endpush