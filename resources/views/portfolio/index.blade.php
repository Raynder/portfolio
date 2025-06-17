<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kate Glover | Freelance Portfolio</title>
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
                <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" 
                     alt="Kate Glover" class="w-full h-full object-cover">
            </div>
            
            <!-- Name -->
            <h1 class="text-2xl font-bold text-gray-800 mb-2">Kate Glover</h1>
            
            <!-- Title -->
            <p class="text-blue-900 font-medium mb-6">Freelance Web Designer & Developer</p>
            
            <!-- Bio -->
            <p class="text-gray-600 text-center mb-8">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
            </p>
            
            <!-- Social Icons -->
            <div class="flex space-x-3 mb-8">
                <a href="#" class="w-10 h-10 flex items-center justify-center border border-gray-300 rounded-full text-blue-900 hover:bg-blue-900 hover:text-white transition">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="w-10 h-10 flex items-center justify-center border border-gray-300 rounded-full text-blue-900 hover:bg-blue-900 hover:text-white transition">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="w-10 h-10 flex items-center justify-center border border-gray-300 rounded-full text-blue-900 hover:bg-blue-900 hover:text-white transition">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="#" class="w-10 h-10 flex items-center justify-center border border-gray-300 rounded-full text-blue-900 hover:bg-blue-900 hover:text-white transition">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
            
            <!-- Hire Me Button -->
            <button class="w-full bg-blue-900 text-white py-3 rounded-lg font-medium hover:bg-blue-800 transition mb-6">
                Hire Me
            </button>
            
            <!-- Copyright -->
            <p class="text-gray-500 text-sm mt-auto">
                &copy; 2023 Kate Glover. All rights reserved.
            </p>
        </div>
        
        <!-- Main Content -->
        <div class="main-content w-full md:w-3/4 lg:w-4/5 xl:w-5/6 md:ml-[25%] lg:ml-[20%] xl:ml-[16.666667%] overflow-y-auto h-screen">
            <!-- Navbar -->
            <nav class="bg-blue-900 text-gray-300 p-4">
                <div class="container mx-auto flex justify-between items-center">
                    <ul class="hidden md:flex space-x-8">
                        <li><a href="#" class="active-nav hover:text-white">Home</a></li>
                        <li><a href="#" class="hover:text-white">About</a></li>
                        <li><a href="#" class="hover:text-white">Contact</a></li>
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
                <div class="carousel-item active">
                    <div class="bg-blue-900 text-white p-12 md:p-20">
                        <div class="container mx-auto">
                            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">Lorem ipsum dolor sit amet</h2>
                            <div class="flex flex-wrap items-center gap-4 mb-8">
                                <span class="flex items-center"><i class="far fa-calendar-alt mr-2"></i> 01-Jan-2045</span>
                                <span class="flex items-center"><i class="fas fa-tag mr-2"></i> Web Design</span>
                                <span class="flex items-center"><i class="far fa-comments mr-2"></i> 15 Comments</span>
                            </div>
                            <button class="border-2 border-white px-6 py-2 rounded hover:bg-white hover:text-blue-900 transition">
                                Read More
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="carousel-item hidden">
                    <div class="bg-gray-800 text-white p-12 md:p-20">
                        <div class="container mx-auto">
                            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">Consectetur adipiscing elit</h2>
                            <div class="flex flex-wrap items-center gap-4 mb-8">
                                <span class="flex items-center"><i class="far fa-calendar-alt mr-2"></i> 15-Feb-2045</span>
                                <span class="flex items-center"><i class="fas fa-tag mr-2"></i> UI/UX Design</span>
                                <span class="flex items-center"><i class="far fa-comments mr-2"></i> 8 Comments</span>
                            </div>
                            <button class="border-2 border-white px-6 py-2 rounded hover:bg-white hover:text-gray-800 transition">
                                Read More
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="carousel-item hidden">
                    <div class="bg-blue-700 text-white p-12 md:p-20">
                        <div class="container mx-auto">
                            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">Sed do eiusmod tempor</h2>
                            <div class="flex flex-wrap items-center gap-4 mb-8">
                                <span class="flex items-center"><i class="far fa-calendar-alt mr-2"></i> 30-Mar-2045</span>
                                <span class="flex items-center"><i class="fas fa-tag mr-2"></i> Frontend Development</span>
                                <span class="flex items-center"><i class="far fa-comments mr-2"></i> 22 Comments</span>
                            </div>
                            <button class="border-2 border-white px-6 py-2 rounded hover:bg-white hover:text-blue-700 transition">
                                Read More
                            </button>
                        </div>
                    </div>
                </div>
                
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
            <div class="container mx-auto p-6 md:p-12">
                <div class="flex flex-col md:flex-row gap-8 bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="md:w-1/2">
                        <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                             alt="Featured Project" class="w-full h-full object-cover">
                    </div>
                    <div class="md:w-1/2 p-6 md:p-8">
                        <h2 class="text-2xl md:text-3xl font-bold text-blue-900 mb-4">Latest Web Design Project</h2>
                        <div class="flex flex-wrap items-center gap-4 mb-6 text-gray-600">
                            <span class="flex items-center"><i class="far fa-calendar-alt mr-2"></i> 10-Jul-2045</span>
                            <span class="flex items-center"><i class="fas fa-tag mr-2"></i> Portfolio Design</span>
                            <span class="flex items-center"><i class="far fa-comments mr-2"></i> 5 Comments</span>
                        </div>
                        <p class="text-gray-600 mb-6">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <button class="bg-blue-900 text-white px-6 py-2 rounded hover:bg-blue-800 transition">
                            View Project
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Recent Projects Grid -->
            <div class="container mx-auto p-6 md:p-12">
                <h2 class="text-2xl md:text-3xl font-bold text-blue-900 mb-8 text-center">Recent Projects</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Project 1 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                        <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                             alt="Project 1" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-blue-900 mb-2">E-commerce Website</h3>
                            <div class="flex items-center text-gray-500 mb-4">
                                <i class="fas fa-tag mr-2"></i> Web Development
                            </div>
                            <p class="text-gray-600 mb-4">
                                A fully responsive e-commerce platform with payment integration.
                            </p>
                            <button class="text-blue-900 font-medium hover:text-blue-700 transition">
                                View Details <i class="fas fa-arrow-right ml-1"></i>
                            </button>
                        </div>
                    </div>
                    
                    <!-- Project 2 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                        <img src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                             alt="Project 2" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-blue-900 mb-2">Mobile App UI</h3>
                            <div class="flex items-center text-gray-500 mb-4">
                                <i class="fas fa-tag mr-2"></i> UI/UX Design
                            </div>
                            <p class="text-gray-600 mb-4">
                                Modern and intuitive mobile application interface design.
                            </p>
                            <button class="text-blue-900 font-medium hover:text-blue-700 transition">
                                View Details <i class="fas fa-arrow-right ml-1"></i>
                            </button>
                        </div>
                    </div>
                    
                    <!-- Project 3 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                        <img src="https://images.unsplash.com/photo-1541462608143-67571c6738dd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                             alt="Project 3" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-blue-900 mb-2">Corporate Branding</h3>
                            <div class="flex items-center text-gray-500 mb-4">
                                <i class="fas fa-tag mr-2"></i> Brand Identity
                            </div>
                            <p class="text-gray-600 mb-4">
                                Complete branding package including logo and style guide.
                            </p>
                            <button class="text-blue-900 font-medium hover:text-blue-700 transition">
                                View Details <i class="fas fa-arrow-right ml-1"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-10">
                    <button class="border-2 border-blue-900 text-blue-900 px-6 py-2 rounded font-medium hover:bg-blue-900 hover:text-white transition">
                        View All Projects
                    </button>
                </div>
            </div>
            
            <!-- Footer -->
            <footer class="bg-blue-900 text-white p-8">
                <div class="container mx-auto">
                    <div class="flex flex-col md:flex-row justify-between">
                        <div class="mb-6 md:mb-0">
                            <h3 class="text-xl font-bold mb-4">Kate Glover</h3>
                            <p class="text-gray-300 max-w-md">
                                Professional freelance web designer and developer creating modern, responsive websites and applications.
                            </p>
                        </div>
                        
                        <div class="mb-6 md:mb-0">
                            <h3 class="text-xl font-bold mb-4">Quick Links</h3>
                            <ul class="space-y-2">
                                <li><a href="#" class="text-gray-300 hover:text-white transition">Home</a></li>
                                <li><a href="#" class="text-gray-300 hover:text-white transition">About</a></li>
                                <li><a href="#" class="text-gray-300 hover:text-white transition">Portfolio</a></li>
                                <li><a href="#" class="text-gray-300 hover:text-white transition">Contact</a></li>
                            </ul>
                        </div>
                        
                        <div>
                            <h3 class="text-xl font-bold mb-4">Get In Touch</h3>
                            <ul class="space-y-2">
                                <li class="flex items-center">
                                    <i class="fas fa-envelope mr-2"></i> kate@example.com
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-phone mr-2"></i> +1 (555) 123-4567
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-map-marker-alt mr-2"></i> New York, USA
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="border-t border-blue-800 mt-8 pt-6 flex flex-col md:flex-row justify-between items-center">
                        <p class="text-gray-300 mb-4 md:mb-0">
                            &copy; 2023 Kate Glover. All rights reserved.
                        </p>
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-300 hover:text-white transition">
                                <i class="fab fa-twitter"></i>
                            </a>
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