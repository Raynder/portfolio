{{-- Partial para exibir o perfil --}}
<div class="flex flex-col md:flex-row items-center md:items-start gap-6">
    <img src="{{ asset('storage/' . ($profile->photo_url ?? 'perfil/default.png')) }}" alt="Foto de Perfil" class="w-32 h-32 rounded-full object-cover border-4 border-blue-200">
    <div>
        <h2 class="text-2xl font-bold text-blue-900">{{ $profile->name }}</h2>
        <p class="text-blue-700 font-semibold">{{ $profile->profession }}</p>
        <p class="text-gray-600 text-sm mt-2">{{ $profile->bio }}</p>
        <div class="mt-4 flex flex-col gap-1 text-gray-500 text-sm">
            <span><i class="fas fa-envelope mr-2"></i>{{ $profile->email }}</span>
            <span><i class="fas fa-phone mr-2"></i>{{ $profile->phone }}</span>
            <span><i class="fas fa-map-marker-alt mr-2"></i>{{ $profile->address }}</span>
        </div>
    </div>
</div>
