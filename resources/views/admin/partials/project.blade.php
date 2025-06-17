{{-- Partial para exibir um projeto no admin --}}
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
        <div class="mt-4 flex gap-2">
            <button class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600" onclick="event.stopPropagation(); carregarProjeto({{ $projeto->id }})"><i class="fas fa-edit"></i></button>
            <button class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700" onclick="event.stopPropagation(); deletarProjeto({{ $projeto->id }})"><i class="fas fa-trash"></i></button>
        </div>
    </div>
</div>

{{-- 
<div class="border border-gray-200 rounded-lg overflow-hidden hover:shadow-md transition group cursor-pointer" onclick="carregarProjeto({{ $projeto->id }})">
    <img src="{{ $projeto->image_url }}" alt="{{ $projeto->title }}" class="w-full h-48 object-cover">
    <div class="p-4">
        <h4 class="font-semibold">{{ $projeto->title }}</h4>
        <p class="text-sm text-gray-600 mb-2">{{ $projeto->category }}</p>
        <p class="text-sm text-gray-500">Publicado: {{ $projeto->published_at ? \Carbon\Carbon::parse($projeto->published_at)->format('d/m/Y') : '' }}</p>
        <div class="mt-3 flex justify-between items-center">
            <span class="text-sm text-blue-600">{{ $projeto->comments_count ?? 0 }} Comentários</span>
            @if($projeto->is_featured)
                <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full">Destaque</span>
            @endif
            <button class="ml-2 text-red-600 hover:text-red-800" onclick="event.stopPropagation(); deletarProjeto({{ $projeto->id }})">
                <i class="fas fa-trash"></i>
            </button>
        </div>
    </div>
</div>
--}}

