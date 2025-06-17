{{-- Partial para exibir um link social individual --}}

<a href="{{ $link->url }}" target="_blank" class="w-10 h-10 flex items-center justify-center border border-gray-300 rounded-full text-blue-900 hover:bg-blue-900 hover:text-white transition">
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
</a>

