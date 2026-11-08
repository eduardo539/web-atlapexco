@extends('frontend.layouts.app')

@section('titulo', 'Galería de Atlapexco')

@section('contenido')

<!-- ============================================
     HERO SECTION: GALERÍA
============================================= -->
<section class="relative w-full h-[50vh] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('img/galeria-imagenes.webp') }}" alt="Galería Atlapexco" class="w-full h-full object-cover transform scale-105 animate-[pulse_20s_ease-in-out_infinite]">
        <div class="absolute inset-0 bg-[#7c1d45]/70 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-[#FDF9F1] to-transparent opacity-100"></div>
    </div>

    <div class="relative z-10 text-center px-6 max-w-4xl mx-auto transform translate-y-4 animate-[fade-in-up_1s_ease-out]">
        <span class="text-[#2D6656] font-bold tracking-[0.3em] uppercase text-sm mb-4 block">Un viaje visual</span>
        <h1 class="text-5xl md:text-7xl font-serif font-bold text-[#4a3b32] mb-6 drop-shadow-sm leading-tight">
            Miradas de Atlapexco
        </h1>
        <p class="text-lg md:text-xl text-[#5c4738] font-medium max-w-2xl mx-auto leading-relaxed">
            Descubre la esencia de nuestra tierra a través del lente. Colores, tradiciones y paisajes que capturan el alma huasteca.
        </p>
    </div>
</section>

<!-- ============================================
     CONTENIDO Y FILTROS DE GALERÍA
============================================= -->
<section class="max-w-7xl mx-auto px-6 py-12">

    <!-- Filtros Interactivos -->
    <div class="flex flex-wrap justify-center gap-3 mb-12" id="gallery-filters">
        <button onclick="filterGallery('todos', this)" class="filter-btn px-6 py-2 bg-[#7c1d45] text-white rounded-full text-sm font-semibold shadow-md transition-colors">Todos</button>
        <button onclick="filterGallery('naturaleza', this)" class="filter-btn px-6 py-2 bg-white text-[#5c4738] border border-[#e3d5c5] hover:bg-[#e8dac7] hover:text-[#7c1d45] rounded-full text-sm font-semibold transition-colors">Naturaleza</button>
        <button onclick="filterGallery('cultura', this)" class="filter-btn px-6 py-2 bg-white text-[#5c4738] border border-[#e3d5c5] hover:bg-[#e8dac7] hover:text-[#7c1d45] rounded-full text-sm font-semibold transition-colors">Cultura y Fiestas</button>
        <button onclick="filterGallery('gastronomia', this)" class="filter-btn px-6 py-2 bg-white text-[#5c4738] border border-[#e3d5c5] hover:bg-[#e8dac7] hover:text-[#7c1d45] rounded-full text-sm font-semibold transition-colors">Gastronomía</button>
    </div>

    <!-- MASONRY GRID -->
    <div class="columns-1 sm:columns-2 lg:columns-3 gap-6 space-y-6">

        <!-- FOTO 1 -->
        <div class="gallery-item naturaleza break-inside-avoid relative rounded-2xl overflow-hidden group cursor-pointer shadow-sm hover:shadow-xl transition-all duration-500 lightbox-trigger"
            data-image="{{ asset('img/rio-atlapexco.webp') }}"
            data-title="Río Atlapexco"
            data-desc="Refugio natural de aguas cristalinas.">
            <img src="{{ asset('img/rio-atlapexco.webp') }}" alt="Río Atlapexco" class="w-full h-auto object-cover transform group-hover:scale-110 transition-transform duration-700">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                <span class="text-[#2D6656] text-xs font-bold uppercase tracking-wider mb-1">Naturaleza</span>
                <h3 class="text-white text-xl font-serif font-bold">Río Atlapexco</h3>
            </div>
            <div class="absolute top-4 right-4 bg-white/30 backdrop-blur p-2 rounded-full text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path>
                </svg>
            </div>
        </div>

        <!-- FOTO 2 -->
        <div class="gallery-item cultura break-inside-avoid relative rounded-2xl overflow-hidden group cursor-pointer shadow-sm hover:shadow-xl transition-all duration-500 lightbox-trigger"
            data-image="{{ asset('img/xantolo.webp') }}"
            data-title="Danza de los Coles"
            data-desc="Tradición viva durante el Xantolo.">
            <img src="{{ asset('img/xantolo.webp') }}" alt="Xantolo" class="w-full h-auto object-cover transform group-hover:scale-110 transition-transform duration-700">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                <span class="text-[#EAAA00] text-xs font-bold uppercase tracking-wider mb-1">Cultura</span>
                <h3 class="text-white text-xl font-serif font-bold">Danza Tradicional</h3>
            </div>
        </div>

        <!-- FOTO 3 -->
        <div class="gallery-item cultura break-inside-avoid relative rounded-2xl overflow-hidden group cursor-pointer shadow-sm hover:shadow-xl transition-all duration-500 lightbox-trigger"
            data-image="{{ asset('img/reloj-atlapexco.webp') }}"
            data-title="Reloj Monumental"
            data-desc="Símbolo histórico del centro de Atlapexco.">
            <img src="{{ asset('img/reloj-atlapexco.webp') }}" alt="Reloj" class="w-full h-auto object-cover transform group-hover:scale-110 transition-transform duration-700">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                <span class="text-white text-xs font-bold uppercase tracking-wider mb-1">Cultura y Ciudad</span>
                <h3 class="text-white text-xl font-serif font-bold">Reloj Monumental</h3>
            </div>
        </div>

        <!-- FOTO 4 -->
        <div class="gallery-item gastronomia break-inside-avoid relative rounded-2xl overflow-hidden group cursor-pointer shadow-sm hover:shadow-xl transition-all duration-500 lightbox-trigger"
            data-image="{{ asset('img/zacahuil.webp') }}"
            data-title="Zacahuil Huasteco"
            data-desc="El rey de la gastronomía en nuestra región.">
            <img src="{{ asset('img/zacahuil.webp') }}" alt="Zacahuil" class="w-full h-auto object-cover transform group-hover:scale-110 transition-transform duration-700">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                <span class="text-[#7c1d45] text-xs font-bold uppercase tracking-wider mb-1">Gastronomía</span>
                <h3 class="text-white text-xl font-serif font-bold">Zacahuil Huasteco</h3>
            </div>
        </div>

        <!-- FOTO 5 -->
        <div class="gallery-item naturaleza break-inside-avoid relative rounded-2xl overflow-hidden group cursor-pointer shadow-sm hover:shadow-xl transition-all duration-500 lightbox-trigger"
            data-image="{{ asset('img/cascadas.webp') }}"
            data-title="Cascadas Vírgenes"
            data-desc="Senderismo y conexión con la naturaleza.">
            <img src="{{ asset('img/cascadas.webp') }}" alt="Cascadas" class="w-full h-auto object-cover transform group-hover:scale-110 transition-transform duration-700">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                <span class="text-[#2D6656] text-xs font-bold uppercase tracking-wider mb-1">Naturaleza</span>
                <h3 class="text-white text-xl font-serif font-bold">Cascadas Vírgenes</h3>
            </div>
        </div>

        <!-- FOTO 6 -->
        <div class="gallery-item cultura break-inside-avoid relative rounded-2xl overflow-hidden group cursor-pointer shadow-sm hover:shadow-xl transition-all duration-500 lightbox-trigger"
            data-image="{{ asset('img/iglesia-parroquia.webp') }}"
            data-title="Parroquia San José"
            data-desc="Fe y legado arquitectónico.">
            <img src="{{ asset('img/iglesia-parroquia.webp') }}" alt="Iglesia" class="w-full h-auto object-cover transform group-hover:scale-110 transition-transform duration-700">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                <span class="text-[#EAAA00] text-xs font-bold uppercase tracking-wider mb-1">Cultura</span>
                <h3 class="text-white text-xl font-serif font-bold">Parroquia Local</h3>
            </div>
        </div>

    </div>
</section>

<!-- ============================================
     LIGHTBOX / MODAL DE FOTO A PANTALLA COMPLETA
============================================= -->
<div id="lightbox" class="fixed inset-0 z-[110] hidden items-center justify-center bg-black/95 backdrop-blur-sm transition-opacity opacity-0 duration-300">
    <!-- Botón Cerrar -->
    <button onclick="closeLightbox()" class="absolute top-6 right-6 text-white/70 hover:text-white bg-black/50 hover:bg-black/80 rounded-full p-2 transition-colors z-20">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
    </button>

    <div class="relative w-full max-w-5xl px-4 flex flex-col items-center justify-center h-full transform scale-95 transition-transform duration-300" id="lightbox-content">
        <img id="lightbox-img" src="" alt="Vista ampliada" class="max-w-full max-h-[80vh] object-contain rounded-xl shadow-2xl">
        <div class="text-center mt-6">
            <h3 id="lightbox-title" class="text-2xl font-serif font-bold text-white mb-2"></h3>
            <p id="lightbox-desc" class="text-gray-300 text-sm max-w-2xl mx-auto"></p>
        </div>
    </div>
</div>

@endsection

<!-- ============================================
     SCRIPT: FILTROS Y LIGHTBOX CORREGIDO
============================================= -->
@push('js')
<script>
    // 1. LÓGICA DE FILTROS (Categorías)
    function filterGallery(category, btnElement) {
        const buttons = document.querySelectorAll('.filter-btn');
        buttons.forEach(btn => {
            btn.classList.remove('bg-[#7c1d45]', 'text-white', 'shadow-md');
            btn.classList.add('bg-white', 'text-[#5c4738]', 'border', 'border-[#e3d5c5]', 'hover:bg-[#e8dac7]');
        });

        btnElement.classList.remove('bg-white', 'text-[#5c4738]', 'border', 'border-[#e3d5c5]', 'hover:bg-[#e8dac7]');
        btnElement.classList.add('bg-[#7c1d45]', 'text-white', 'shadow-md');

        const items = document.querySelectorAll('.gallery-item');
        items.forEach(item => {
            if (category === 'todos') {
                item.style.display = 'block';
                item.animate([{
                    opacity: 0
                }, {
                    opacity: 1
                }], {
                    duration: 500,
                    fill: 'forwards'
                });
            } else {
                if (item.classList.contains(category)) {
                    item.style.display = 'block';
                    item.animate([{
                        opacity: 0
                    }, {
                        opacity: 1
                    }], {
                        duration: 500,
                        fill: 'forwards'
                    });
                } else {
                    item.style.display = 'none';
                }
            }
        });
    }

    // 2. LÓGICA DEL LIGHTBOX (Usando EventListeners en lugar de onclick)
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-img');
    const lightboxTitle = document.getElementById('lightbox-title');
    const lightboxDesc = document.getElementById('lightbox-desc');
    const lightboxContent = document.getElementById('lightbox-content');

    // Asignar el evento click a todas las fotos sin usar onclick en el HTML
    document.querySelectorAll('.lightbox-trigger').forEach(item => {
        item.addEventListener('click', function() {
            // Extraer la información de los atributos data-*
            const imageSrc = this.getAttribute('data-image');
            const title = this.getAttribute('data-title');
            const description = this.getAttribute('data-desc');

            // Asignar datos al modal
            lightboxImg.src = imageSrc;
            lightboxTitle.innerText = title;
            lightboxDesc.innerText = description;

            // Mostrar modal
            lightbox.classList.remove('hidden');
            lightbox.classList.add('flex');
            document.body.style.overflow = 'hidden';

            setTimeout(() => {
                lightbox.classList.remove('opacity-0');
                lightboxContent.classList.remove('scale-95');
            }, 10);
        });
    });

    function closeLightbox() {
        lightbox.classList.add('opacity-0');
        lightboxContent.classList.add('scale-95');
        document.body.style.overflow = 'auto';

        setTimeout(() => {
            lightbox.classList.add('hidden');
            lightbox.classList.remove('flex');
            lightboxImg.src = '';
        }, 300);
    }

    document.addEventListener('keydown', function(event) {
        if (event.key === "Escape" && !lightbox.classList.contains('hidden')) {
            closeLightbox();
        }
    });

    lightbox.addEventListener('click', function(event) {
        if (event.target === lightbox || event.target.id === 'lightbox-content') {
            closeLightbox();
        }
    });
</script>
@endpush