{{-- Partial para exibir um projeto individual --}}
<div class="border border-gray-200 rounded-lg overflow-hidden hover:shadow-md transition group cursor-pointer" onclick="carregarProjeto({{ $projeto->id }})">
    <img src="{{ $projeto->image_url }}" alt="{{ $projeto->title }}" class="w-full h-40 object-cover">
    <div class="p-4">
        <h4 class="font-bold text-lg text-blue-900">{{ $projeto->title }}</h4>
        <p class="text-gray-600 text-sm mb-2">{{ $projeto->category }}</p>
        <p class="text-gray-700 text-xs">{{ $projeto->description }}</p>
        <div class="mt-2 flex items-center justify-between">
            <span class="text-xs text-gray-400">{{ $projeto->published_at ? date('d/m/Y', strtotime($projeto->published_at)) : '' }}</span>
            @if($projeto->is_featured)
                <span class="bg-blue-800 text-white text-xs px-2 py-1 rounded">Destaque</span>
            @endif
        </div>
    </div>
</div>
