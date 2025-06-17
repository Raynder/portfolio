<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ $profile?->name ?? 'Portfolio' }} | {{ $profile?->profession ?? '' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .profile-pic {
            border: 6px solid #2c3e50;
        }
        .active-nav {
            color: white;
            position: relative;
        }
        .active-nav::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 100%;
            height: 3px;
            background-color: white;
        }
        .carousel-item {
            transition: opacity 0.5s ease;
        }
        .carousel-item.hidden {
            opacity: 0;
            display: none;
        }
        .carousel-item.active {
            opacity: 1;
            display: block;
        }
        .dropdown:hover .dropdown-menu {
            display: block;
        }
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
                transition: transform 0.3s ease;
                position: fixed;
                z-index: 50;
                height: 100vh;
            }
            .sidebar.open {
                transform: translateX(0);
            }
            .main-content {
                width: 100%;
            }
            .mobile-menu-btn {
                display: block;
            }
        }
    </style>
</head>
<body class="bg-gray-100 font-sans">
    <div class="flex flex-col md:flex-row">
        <!-- Mobile Menu Button -->
        <button class="md:hidden fixed top-4 left-4 z-50 bg-blue-900 text-white p-2 rounded-lg mobile-menu-btn" onclick="toggleSidebar()">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Sidebar -->
        <div class="sidebar bg-white w-full md:w-1/4 lg:w-1/5 xl:w-1/6 p-6 flex flex-col items-center fixed h-screen">
            <!-- Profile Picture -->
            <div class="profile-pic w-32 h-32 rounded-full overflow-hidden mb-6">
                <img src="{{ $profile?->photo_url ?? 'https://via.placeholder.com/150' }}" 
                     alt="{{ $profile?->name ?? 'Profile' }}" class="w-full h-full object-cover">
            </div>
            
            <!-- Name -->
            <h1 class="text-center text-2xl font-bold text-gray-800 mb-2">{{ $profile?->name ?? 'Nome do Usuário' }}</h1>
            
            <!-- Title -->
            <p class="text-center text-blue-900 font-medium mb-6">{{ $profile?->profession ?? 'Título Profissional' }}</p>
            
            <!-- Bio -->
            <p class="text-gray-600 text-center mb-8">
                {{ $profile?->bio ?? 'Adicione uma bio para seu perfil.' }}
            </p>
            
            <!-- Social Icons -->
            <div class="flex space-x-3 mb-8">
                @foreach($links as $link)
                    @include('portfolio.partials.social-link', ['link' => $link])
                @endforeach
            </div>
            
            <!-- Hire Me Button -->
            <button class="w-full bg-blue-900 text-white py-3 rounded-lg font-medium hover:bg-blue-800 transition mb-6">
                Contatar
            </button>
            
            <!-- Copyright -->
            <p class="text-gray-500 text-sm mt-auto">
                &copy; {{ date('Y') }} Raynder Cardoso
            </p>
        </div>
        
        <!-- Main Content -->
        <div class="main-content w-full md:w-3/4 lg:w-4/5 xl:w-5/6 md:ml-[25%] lg:ml-[20%] xl:ml-[16.666667%] overflow-y-auto h-screen">
            <!-- Navbar -->
            <nav class="bg-blue-900 text-gray-300 p-4">
                <div class="container mx-auto flex justify-between items-center">
                    <ul class="hidden md:flex space-x-8">
                        <li><a href="#" class="active-nav hover:text-white">Inicio</a></li>
                        <li><a href="#" class="hover:text-white">Sobre</a></li>
                        <li><a href="#" class="hover:text-white">Contato</a></li>
                    </ul>
                    
                    {{--
                    <div class="flex items-center space-x-4">
                        <a href="#" class="hover:text-white">
                            <i class="fas fa-search"></i>
                        </a>
                        <button class="bg-white text-blue-900 px-4 py-1 rounded hover:bg-gray-200 transition">
                            Subscribe
                        </button>
                    </div>
                    --}}
                </div>
            </nav>
            
            <!-- Hero Carousel -->
            <div class="relative overflow-hidden">
                <!-- Carousel Items -->
                @php
                    $featuredProjects = $projetos->where('is_featured', true)->values();
                @endphp
                @forelse($featuredProjects as $index => $projeto)
                    <div class="carousel-item {{ $index === 0 ? 'active' : 'hidden' }} relative" style="background: url('{{ $projeto->image_url }}') center center / cover no-repeat; min-height: 350px;">
                        <div class="absolute inset-0 bg-blue-900" style="opacity: 0.4;"></div>
                        <div class="relative z-10 text-white p-12 md:p-20 h-full w-full">
                            <div class="container mx-auto">
                                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">{{ $projeto->title }}</h2>
                                <div class="flex flex-wrap items-center gap-4 mb-8">
                                    <span class="flex items-center">
                                        <i class="far fa-calendar-alt mr-2"></i>
                                        {{ $projeto->published_at ? \Carbon\Carbon::parse($projeto->published_at)->format('d-M-Y') : '' }}
                                    </span>
                                    <span class="flex items-center">
                                        <i class="fas fa-tag mr-2"></i>
                                        {{ $projeto->category ?? 'Categoria' }}
                                    </span>
                                    <span class="flex items-center">
                                        <i class="far fa-comments mr-2"></i>
                                        {{ $projeto->comments_count ?? 0 }} Comentários
                                    </span>
                                </div>
                                <button class="border-2 border-white px-6 py-2 rounded hover:bg-white hover:text-blue-900 transition">
                                    Ver Projeto
                                </button>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="carousel-item active">
                        <div class="bg-blue-900 text-white p-12 md:p-20">
                            <div class="container mx-auto">
                                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">Nenhum projeto em destaque</h2>
                            </div>
                        </div>
                    </div>
                @endforelse
                <!-- Carousel Controls -->
                <button class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-30 text-white p-2 rounded-full hover:bg-opacity-50 transition" onclick="prevSlide()">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-30 text-white p-2 rounded-full hover:bg-opacity-50 transition" onclick="nextSlide()">
                    <i class="fas fa-chevron-right"></i>
                </button>
                <!-- Carousel Indicators -->
                <div class="absolute bottom-4 left-0 right-0 flex justify-center space-x-2">
                    <button class="w-3 h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100 transition" onclick="goToSlide(0)"></button>
                    <button class="w-3 h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100 transition" onclick="goToSlide(1)"></button>
                    <button class="w-3 h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100 transition" onclick="goToSlide(2)"></button>
                </div>
            </div>
            
            <!-- Featured Project -->
            @php
                $ultimoProjeto = $projetos->sortByDesc('published_at')->first();
            @endphp

            @if($ultimoProjeto)
            <div class="container mx-auto p-6 md:p-12">
                <div class="flex flex-col md:flex-row gap-8 bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="md:w-1/2">
                        <img src="{{ $ultimoProjeto->image_url ?? 'https://via.placeholder.com/800x400' }}" 
                             alt="{{ $ultimoProjeto->title }}" class="w-full h-full object-cover">
                    </div>
                    <div class="md:w-1/2 p-6 md:p-8">
                        <h2 class="text-2xl md:text-3xl font-bold text-blue-900 mb-4">{{ $ultimoProjeto->title }}</h2>
                        <div class="flex flex-wrap items-center gap-4 mb-6 text-gray-600">
                            <span class="flex items-center">
                                <i class="far fa-calendar-alt mr-2"></i>
                                {{ $ultimoProjeto->published_at ? \Carbon\Carbon::parse($ultimoProjeto->published_at)->format('d/m/Y') : '' }}
                            </span>
                            <span class="flex items-center">
                                <i class="fas fa-tag mr-2"></i>
                                {{ $ultimoProjeto->category ?? 'Categoria' }}
                            </span>
                            <span class="flex items-center">
                                <i class="far fa-comments mr-2"></i>
                                {{ $ultimoProjeto->comments_count ?? 0 }} Comentários
                            </span>
                        </div>
                        <p class="text-gray-600 mb-6">
                            {{ $ultimoProjeto->description }}
                        </p>
                        <button class="bg-blue-900 text-white px-6 py-2 rounded hover:bg-blue-800 transition">
                            Ver Projeto
                        </button>
                    </div>
                </div>
            </div>
            @endif
            
            <!-- Recent Projects Grid -->
            <div class="container mx-auto p-6 md:p-12">
                <h2 class="text-2xl md:text-3xl font-bold text-blue-900 mb-8 text-center">Ultimos Publicados</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @forelse($projetos as $projeto)
                        @include('portfolio.partials.project', ['projeto' => $projeto])
                    @empty
                        <div class="col-span-3 text-center text-gray-500">Nenhum projeto cadastrado.</div>
                    @endforelse
                </div>
                {{-- 
                <div class="text-center mt-10">
                    <button class="border-2 border-blue-900 text-blue-900 px-6 py-2 rounded font-medium hover:bg-blue-900 hover:text-white transition">
                        View All Projects
                    </button>
                </div>
                --}}
            </div>
            
            <!-- Footer -->
            <footer class="bg-blue-900 text-white p-8">
                <div class="container mx-auto">
                    <div class="flex flex-col md:flex-row justify-between">
                        <div class="mb-6 md:mb-0">
                            <h3 class="text-xl font-bold mb-4">{{ $profile->name }}</h3>
                            <p class="text-gray-300 max-w-md">
                                {{ $profile->bio ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.' }}
                            </p>
                        </div>
                        
                        <div class="mb-6 md:mb-0">
                            <h3 class="text-xl font-bold mb-4">Links Úteis</h3>
                            <ul class="space-y-2">
                                <li><a href="#" class="text-gray-300 hover:text-white transition">Inicio</a></li>
                                <li><a href="#" class="text-gray-300 hover:text-white transition">Sobre</a></li>
                                <li><a href="#" class="text-gray-300 hover:text-white transition">Contato</a></li>
                            </ul>
                        </div>
                        
                        <div>
                            <h3 class="text-xl font-bold mb-4">Entre em Contato</h3>
                            <ul class="space-y-2">
                                <li class="flex items-center">
                                    <i class="fas fa-envelope mr-2"></i> {{ $profile->email ?? '' }}
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-phone mr-2"></i>  {{ $profile->phone ?? '' }}
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-map-marker-alt mr-2"></i> 
                                    {{ $profile->address ?? 'Endereço não disponível' }}
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="border-t border-blue-800 mt-8 pt-6 flex flex-col md:flex-row justify-between items-center">
                        <p class="text-gray-300 mb-4 md:mb-0">
                            &copy; {{ date('Y') }} Raynder Cardoso, Todos os direitos reservados.
                        </p>
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-300 hover:text-white transition">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="text-gray-300 hover:text-white transition">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="text-gray-300 hover:text-white transition">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script>
        // Carousel functionality
        let currentSlide = 0;
        const slides = document.querySelectorAll('.carousel-item');
        const totalSlides = slides.length;
        
        function showSlide(index) {
            slides.forEach((slide, i) => {
                if (i === index) {
                    slide.classList.remove('hidden');
                    slide.classList.add('active');
                } else {
                    slide.classList.add('hidden');
                    slide.classList.remove('active');
                }
            });
        }
        
        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            showSlide(currentSlide);
        }
        
        function prevSlide() {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            showSlide(currentSlide);
        }
        
        function goToSlide(index) {
            currentSlide = index;
            showSlide(currentSlide);
        }
        
        // Auto-rotate carousel
        setInterval(nextSlide, 5000);
        
        // Mobile sidebar toggle
        function toggleSidebar() {
            const sidebar = document.querySelector('.sidebar');
            sidebar.classList.toggle('open');
        }
        
        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', function(event) {
            const sidebar = document.querySelector('.sidebar');
            const mobileBtn = document.querySelector('.mobile-menu-btn');
            
            if (window.innerWidth <= 768 && !sidebar.contains(event.target) && event.target !== mobileBtn && !mobileBtn.contains(event.target)) {
                sidebar.classList.remove('open');
            }
        });
    </script>
</body>
</html>