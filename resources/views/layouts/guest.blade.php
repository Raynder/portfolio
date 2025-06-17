<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PortfolioPro - Crie seu portfólio online profissional</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        .floating-btn {
            animation: float 3s ease-in-out infinite;
        }
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        .btn-hover {
            transition: all 0.3s ease;
        }
        .btn-hover:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        .fade-in {
            animation: fadeIn 1s ease-in;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
    <body class="font-sans text-gray-900 antialiased">
        {{ $slot }}
        <footer class="bg-gray-800 text-white py-12">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div>
                        <div class="flex items-center mb-4">
                            <i class="fas fa-briefcase text-blue-400 text-2xl mr-2"></i>
                            <span class="text-xl font-bold">PortfolioPro</span>
                        </div>
                        <p class="text-gray-400">A maneira mais simples e eficaz de criar seu portfólio profissional online.</p>
                    </div>
                    
                    <div>
                        <h4 class="font-bold text-lg mb-4">Links úteis</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-400 hover:text-white">Sobre nós</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">Perguntas frequentes</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">Termos de uso</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">Política de privacidade</a></li>
                        </ul>
                    </div>
                    
                    <div>
                        <h4 class="font-bold text-lg mb-4">Contato</h4>
                        <ul class="space-y-2">
                            <li class="flex items-center"><i class="fas fa-envelope mr-2 text-gray-400"></i> <span class="text-gray-400">contato@portfoliopro.com</span></li>
                            <li class="flex items-center"><i class="fas fa-phone mr-2 text-gray-400"></i> <span class="text-gray-400">(11) 1234-5678</span></li>
                        </ul>
                    </div>
                    
                    <div>
                        <h4 class="font-bold text-lg mb-4">Redes sociais</h4>
                        <div class="flex space-x-4">
                            <a href="#" class="bg-blue-600 w-10 h-10 rounded-full flex items-center justify-center"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="bg-blue-400 w-10 h-10 rounded-full flex items-center justify-center"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="bg-pink-600 w-10 h-10 rounded-full flex items-center justify-center"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="bg-blue-700 w-10 h-10 rounded-full flex items-center justify-center"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                    <p>&copy; 2023 PortfolioPro. Todos os direitos reservados.</p>
                </div>
            </div>
        </footer>
        

        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('animate-fadeIn');
                        }
                    });
                }, {threshold: 0.1});
                
                document.querySelectorAll('.fade-in').forEach(el => {
                    observer.observe(el);
                });
            });
        </script>
    </body>
</html>