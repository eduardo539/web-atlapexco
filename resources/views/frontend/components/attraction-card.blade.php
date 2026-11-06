<article class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition-all duration-300 flex flex-col h-full">
    <div class="h-40 w-full relative">
        <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-full object-cover">
        <div class="absolute -bottom-3 left-4 bg-teal-600 text-white w-7 h-7 flex items-center justify-center rounded-full text-xs font-bold border-2 border-white">
            {{ $id }}
        </div>
    </div>

    <div class="p-4 pt-6 flex flex-col flex-grow">
        <h3 class="text-sm font-bold text-gray-900 leading-tight mb-1">{{ $title }}</h3>
        <div class="flex items-center text-xs text-gray-500 mb-4 mt-auto">
            <span class="mr-1 text-teal-700">{!! $icon !!}</span>
            {{ $category }}
        </div>
        <a href="#" class="mt-auto block w-full text-center bg-[#7c1d45] hover:bg-[#5a1532] text-white text-xs font-medium py-2 rounded-lg transition-colors">
            Ver más &rarr;
        </a>
    </div>
</article>