{{-- Partial para exibir um link social no admin --}}
@php use App\Helpers\SocialHelper; @endphp

<div class="border border-gray-200 rounded-lg p-4 flex items-center justify-between cursor-pointer" onclick="carregarSocial({{ $link->id }})">
    <div class="flex items-center">
        @if(strtolower($link->platform) === 't')
            <i class="fab fa-twitter"></i>
        @elseif(strtolower($link->platform) === 'f')
            <i class="fab fa-facebook-f"></i>
        @elseif(strtolower($link->platform) === 'l')
            <i class="fab fa-linkedin-in"></i>
        @elseif(strtolower($link->platform) === 'i')
            <i class="fab fa-instagram"></i>
        @else
            <i class="fas fa-link"></i>
        @endif
        <span class="text-gray-600">&nbsp;{{ $link->url }}</span>
    </div>
    <button class="text-red-600 hover:text-red-800 ml-4" onclick="event.stopPropagation(); deletarSocial({{ $link->id }})">
        <i class="fas fa-trash"></i>
    </button>
</div>

