@extends('frontend.layouts.app')

@section('titulo', 'Contacto')

@section('contenido')

<!-- ============================================
     HERO SECTION: CONTACTO (Sin Imagen)
============================================= -->
<section class="w-full bg-[#FDF9F1] pt-24 pb-12 md:pt-32 md:pb-16 border-b border-[#e3d5c5]">
    <div class="max-w-4xl mx-auto px-6 text-center transform animate-[fade-in-up_1s_ease-out]">
        <span class="inline-block px-4 py-1 mb-6 text-xs font-bold tracking-[0.2em] text-[#7c1d45] uppercase bg-white border border-[#e3d5c5] rounded-full shadow-sm">
            Atención al Turista
        </span>
        <h1 class="text-5xl md:text-6xl font-serif font-bold text-[#4a3b32] mb-6 leading-tight">
            Estamos para ayudarte
        </h1>
        <p class="text-lg text-[#5c4738] font-medium max-w-2xl mx-auto leading-relaxed">
            ¿Planeas tu viaje o necesitas más información? Escríbenos y con gusto te orientaremos para que tu visita a Atlapexco sea inolvidable.
        </p>
    </div>
</section>

<!-- ============================================
     SECCIÓN PRINCIPAL: INFO Y FORMULARIO
============================================= -->
<section class="max-w-7xl mx-auto px-6 py-16">
    <div class="flex flex-col lg:flex-row gap-12 lg:gap-20">

        <!-- COLUMNA IZQUIERDA: Información de Contacto -->
        <div class="lg:w-5/12 flex flex-col justify-center">
            <h2 class="text-3xl font-serif font-bold text-[#7c1d45] mb-6">Ponte en contacto</h2>
            <p class="text-[#5c4738] mb-10 leading-relaxed text-justify">
                El H. Ayuntamiento de Atlapexco a través de la Dirección de Turismo está a tu entera disposición. Contáctanos por cualquiera de nuestros canales oficiales.
            </p>

            <div class="space-y-8">
                <!-- Dirección -->
                <div class="flex items-start group">
                    <div class="bg-[#FDF9F1] p-4 rounded-2xl text-[#7c1d45] group-hover:bg-[#7c1d45] group-hover:text-white transition-colors border border-[#e3d5c5] shadow-sm">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <div class="ml-5">
                        <h4 class="font-bold text-[#4a3b32] text-lg">Dirección</h4>
                        <p class="text-sm text-gray-600 mt-1">Palacio Municipal S/N, Centro.<br>Atlapexco, Hidalgo. C.P. 43060</p>
                    </div>
                </div>

                <!-- Teléfono -->
                <div class="flex items-start group">
                    <div class="bg-[#FDF9F1] p-4 rounded-2xl text-[#7c1d45] group-hover:bg-[#7c1d45] group-hover:text-white transition-colors border border-[#e3d5c5] shadow-sm">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                    </div>
                    <div class="ml-5">
                        <h4 class="font-bold text-[#4a3b32] text-lg">Teléfono</h4>
                        <p class="text-sm text-gray-600 mt-1">+52 (771) 000 0000<br><span class="text-xs text-gray-500">Lunes a Viernes, 9:00 AM - 4:00 PM</span></p>
                    </div>
                </div>

                <!-- Correo -->
                <div class="flex items-start group">
                    <div class="bg-[#FDF9F1] p-4 rounded-2xl text-[#7c1d45] group-hover:bg-[#7c1d45] group-hover:text-white transition-colors border border-[#e3d5c5] shadow-sm">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div class="ml-5">
                        <h4 class="font-bold text-[#4a3b32] text-lg">Correo Electrónico</h4>
                        <p class="text-sm text-gray-600 mt-1">turismo@atlapexco.gob.mx</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- COLUMNA DERECHA: Formulario de Contacto -->
        <div class="lg:w-7/12">
            <div class="bg-white p-8 md:p-10 rounded-3xl shadow-lg border border-[#e3d5c5] relative overflow-hidden">
                <!-- Adorno visual -->
                <div class="absolute top-0 right-0 w-32 h-32 bg-[#FDF9F1] rounded-bl-full -z-0 opacity-50"></div>

                <h3 class="text-2xl font-serif font-bold text-[#4a3b32] mb-6 relative z-10">Envíanos un mensaje</h3>

                <!-- Formulario visual -->
                <form action="#" method="POST" class="relative z-10 space-y-5" onsubmit="event.preventDefault();">

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <!-- Nombre -->
                        <div>
                            <label class="block text-sm font-semibold text-[#5c4738] mb-2">Nombre completo</label>
                            <input type="text" placeholder="Ej. Juan Pérez" class="w-full px-4 py-3 rounded-xl border border-[#e3d5c5] focus:outline-none focus:border-[#7c1d45] focus:ring-1 focus:ring-[#7c1d45] bg-[#FDF9F1] text-[#4a3b32] transition-colors">
                        </div>
                        <!-- Correo -->
                        <div>
                            <label class="block text-sm font-semibold text-[#5c4738] mb-2">Correo electrónico</label>
                            <input type="email" placeholder="juan@ejemplo.com" class="w-full px-4 py-3 rounded-xl border border-[#e3d5c5] focus:outline-none focus:border-[#7c1d45] focus:ring-1 focus:ring-[#7c1d45] bg-[#FDF9F1] text-[#4a3b32] transition-colors">
                        </div>
                    </div>

                    <!-- Asunto -->
                    <div>
                        <label class="block text-sm font-semibold text-[#5c4738] mb-2">Asunto</label>
                        <select class="w-full px-4 py-3 rounded-xl border border-[#e3d5c5] focus:outline-none focus:border-[#7c1d45] focus:ring-1 focus:ring-[#7c1d45] bg-[#FDF9F1] text-[#4a3b32] transition-colors appearance-none">
                            <option value="">Selecciona un motivo...</option>
                            <option value="informacion">Información turística</option>
                            <option value="grupos">Visitas grupales</option>
                            <option value="festividades">Festividades y eventos</option>
                            <option value="otro">Otro</option>
                        </select>
                    </div>

                    <!-- Mensaje -->
                    <div>
                        <label class="block text-sm font-semibold text-[#5c4738] mb-2">Mensaje</label>
                        <textarea rows="4" placeholder="¿En qué podemos ayudarte?" class="w-full px-4 py-3 rounded-xl border border-[#e3d5c5] focus:outline-none focus:border-[#7c1d45] focus:ring-1 focus:ring-[#7c1d45] bg-[#FDF9F1] text-[#4a3b32] transition-colors resize-none"></textarea>
                    </div>

                    <!-- Botón -->
                    <div class="pt-2">
                        <button type="submit" class="w-full md:w-auto inline-flex justify-center items-center px-8 py-3 bg-[#7c1d45] hover:bg-[#96214A] text-white rounded-full font-bold transition-all duration-300 shadow-md hover:shadow-lg transform hover:-translate-y-1">
                            Enviar mensaje
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                            </svg>
                        </button>
                    </div>
                </form>

            </div>
        </div>

    </div>
</section>

<!-- ============================================
     SECCIÓN DEL MAPA (Google Maps)
============================================= -->
<section class="max-w-7xl mx-auto px-6 pb-20">
    <div class="bg-white rounded-3xl shadow-sm border border-[#e3d5c5] p-2 overflow-hidden">
        <div class="w-full h-[400px] md:h-[500px] rounded-2xl overflow-hidden relative group">

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14873.743228834945!2d-98.45524335541991!3d21.053227499999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d73b069d350993%3A0xe54e38e6bebbd5ec!2s43060%20Atlapexco%2C%20Hgo.!5e0!3m2!1ses-419!2smx!4v1700000000000!5m2!1ses-419!2smx"
                width="100%"
                height="100%"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                class="grayscale-[20%] contrast-[95%] group-hover:grayscale-0 transition-all duration-700">
            </iframe>

            <div class="absolute inset-0 bg-[#7c1d45]/5 pointer-events-none group-hover:bg-transparent transition-colors duration-700"></div>
        </div>
    </div>
</section>

@endsection