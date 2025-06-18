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
<body class="font-sans bg-gray-50">
    <!-- Floating CTA Button -->
    <div class="fixed bottom-6 right-6 z-50">
        <a href="{{ route('register') }}" class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-4 px-6 rounded-full shadow-lg btn-hover flex items-center floating-btn">
            <i class="fas fa-bullseye mr-2"></i> Comece agora
        </a>
    </div>

    <!-- Header/Navigation -->
    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center">
                <i class="fas fa-briefcase text-blue-600 text-2xl mr-2"></i>
                <span class="text-xl font-bold text-gray-800">PortfolioPro</span>
            </div>
            <nav class="hidden md:flex space-x-8">
                <a href="#benefits" class="text-gray-600 hover:text-blue-600">Benefícios</a>
                <a href="#how-it-works" class="text-gray-600 hover:text-blue-600">Como funciona</a>
                <a href="#testimonials" class="text-gray-600 hover:text-blue-600">Depoimentos</a>
            </nav>
            <button class="md:hidden text-gray-600">
                <i class="fas fa-bars text-xl"></i>
            </button>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-50 to-indigo-50 py-16 md:py-24">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0 fade-in">
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-800 leading-tight mb-4">
                        Quem não é visto, não é lembrado. <span class="text-blue-600">Crie seu portfólio agora</span> e comece a ser notado.
                    </h1>
                    <p class="text-lg text-gray-600 mb-8">
                        Conquiste mais oportunidades, destaque-se da concorrência e mostre ao mundo o que só você sabe fazer — de forma simples, rápida e profissional.
                    </p>
                    <a href="{{ route('register') }}">
                        <button type="button" class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-4 px-8 rounded-lg shadow-lg btn-hover inline-flex items-center" data-bs-toggle="modal" data-bs-target="#cadastroModal">
                            <i class="fas fa-bullseye mr-2"></i> Comece seu portfólio agora — é rápido, simples e acessível
                        </button>
                    </a>
                </div>
                <div class="md:w-1/2 flex justify-center fade-in">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Portfólio profissional" class="rounded-lg shadow-xl w-full max-w-md">
                        <div class="absolute -bottom-6 -right-6 bg-white p-4 rounded-lg shadow-lg hidden md:block">
                            <div class="flex items-center">
                                <div class="bg-green-100 p-3 rounded-full mr-3">
                                    <i class="fas fa-check text-green-600"></i>
                                </div>
                                <p class="text-sm font-medium text-gray-700">+5.000 portfólios criados</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Texto Persuasivo -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 max-w-4xl">
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">Por que seu portfólio online é essencial?</h2>
                <div class="w-20 h-1 bg-blue-600 mx-auto"></div>
            </div>
            <div class="text-gray-700 text-lg leading-relaxed space-y-6">
                <p>Em um mundo cada vez mais digital, sua presença online pode ser o diferencial entre ser contratado ou passar despercebido. Enquanto currículos são esquecidos em pilhas de papel, um portfólio online permanece acessível 24 horas por dia, 7 dias por semana, pronto para impressionar potenciais clientes ou empregadores a qualquer momento.</p>
                <p>Imagine poder compartilhar seu trabalho com um simples link no seu perfil do LinkedIn, e-mail ou WhatsApp. Cada projeto que você adiciona conta sua história profissional de forma visual e impactante, muito além do que palavras em um papel poderiam transmitir.</p>
                <p>Com nosso serviço, você não precisa ser designer ou ter conhecimentos técnicos. Em minutos, você terá um portfólio profissional que mostra exatamente quem você é e o valor que oferece. E o melhor: você pode atualizar sempre que quiser, mantendo seu perfil sempre atualizado com seus últimos trabalhos e conquistas.</p>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section id="benefits" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">Tudo o que você precisa em um só lugar</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Um portfólio profissional pode abrir portas que você nem imagina</p>
                <div class="w-20 h-1 bg-blue-600 mx-auto mt-4"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Benefit 1 -->
                <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="bg-blue-100 w-14 h-14 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-check-circle text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Sem burocracia ou planos complicados</h3>
                    <p class="text-gray-600">Crie e publique seu portfólio em minutos, sem cadastros complexos ou processos demorados.</p>
                </div>
                
                <!-- Benefit 2 -->
                <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="bg-purple-100 w-14 h-14 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-palette text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Layouts prontos e profissionais</h3>
                    <p class="text-gray-600">Escolha entre diversos templates modernos e profissionais, todos otimizados para qualquer dispositivo.</p>
                </div>
                
                <!-- Benefit 3 -->
                <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="bg-green-100 w-14 h-14 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-project-diagram text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Mostre seus projetos com facilidade</h3>
                    <p class="text-gray-600">Adicione imagens, vídeos e descrições dos seus trabalhos de forma intuitiva e organizada.</p>
                </div>
                
                <!-- Benefit 4 -->
                <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="bg-orange-100 w-14 h-14 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-link text-orange-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Link personalizado para compartilhar</h3>
                    <p class="text-gray-600">Seu portfólio terá um link único e personalizável para incluir em e-mails, redes sociais e currículos.</p>
                </div>
                
                <!-- Benefit 5 -->
                <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="bg-red-100 w-14 h-14 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-sync-alt text-red-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Atualize sempre que quiser</h3>
                    <p class="text-gray-600">Adicione novos projetos, habilidades e experiências a qualquer momento, sem custos adicionais.</p>
                </div>
                
                <!-- Benefit 6 -->
                <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="bg-yellow-100 w-14 h-14 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-coins text-yellow-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Investimento simbólico, só após criação</h3>
                    <p class="text-gray-600">Pague apenas quando estiver satisfeito com seu portfólio pronto, sem surpresas ou cobranças antecipadas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section id="how-it-works" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">Como funciona</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Em apenas 3 passos simples, você terá um portfólio profissional</p>
                <div class="w-20 h-1 bg-blue-600 mx-auto mt-4"></div>
            </div>
            
            <div class="flex flex-col md:flex-row justify-between items-center md:items-start space-y-10 md:space-y-0">
                <!-- Step 1 -->
                <div class="flex flex-col items-center text-center max-w-xs">
                    <div class="bg-blue-100 w-20 h-20 rounded-full flex items-center justify-center mb-6">
                        <span class="text-blue-600 font-bold text-2xl">1</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Escolha seu template</h3>
                    <p class="text-gray-600">Selecione entre nossos modelos profissionais o que melhor representa seu estilo e área de atuação.</p>
                </div>
                
                <!-- Arrow -->
                <div class="hidden md:block">
                    <i class="fas fa-arrow-right text-gray-300 text-3xl"></i>
                </div>
                
                <!-- Step 2 -->
                <div class="flex flex-col items-center text-center max-w-xs">
                    <div class="bg-blue-100 w-20 h-20 rounded-full flex items-center justify-center mb-6">
                        <span class="text-blue-600 font-bold text-2xl">2</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Personalize seu conteúdo</h3>
                    <p class="text-gray-600">Adicione seus projetos, informações profissionais e fotos de forma fácil e intuitiva.</p>
                </div>
                
                <!-- Arrow -->
                <div class="hidden md:block">
                    <i class="fas fa-arrow-right text-gray-300 text-3xl"></i>
                </div>
                
                <!-- Step 3 -->
                <div class="flex flex-col items-center text-center max-w-xs">
                    <div class="bg-blue-100 w-20 h-20 rounded-full flex items-center justify-center mb-6">
                        <span class="text-blue-600 font-bold text-2xl">3</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Publique e compartilhe</h3>
                    <p class="text-gray-600">Seu portfólio estará online com um link único para compartilhar com o mundo.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">O que nossos usuários dizem</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Veja como o PortfolioPro transformou a carreira de profissionais como você</p>
                <div class="w-20 h-1 bg-blue-600 mx-auto mt-4"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                <!-- Testimonial 1 -->
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center mr-4">
                            <i class="fas fa-user text-blue-600"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800">Lucas A.</h4>
                            <p class="text-gray-500 text-sm">Designer Gráfico</p>
                        </div>
                    </div>
                    <p class="text-gray-700 italic">"Comecei usando só pra testar e acabei usando no meu currículo! Recebi mais retorno do que com LinkedIn. Em duas semanas já tinha três propostas de trabalho graças ao portfólio que criei aqui."</p>
                    <div class="flex mt-4">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full bg-purple-100 flex items-center justify-center mr-4">
                            <i class="fas fa-user text-purple-600"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800">Raiane M.</h4>
                            <p class="text-gray-500 text-sm">Desenvolvedora Front-end</p>
                        </div>
                    </div>
                    <p class="text-gray-700 italic">"Vale muito mais do que o valor que cobram. É simples, bonito e direto ao ponto. Consegui meu emprego atual porque o recrutador ficou impressionado com como meus projetos estavam organizados no portfólio."</p>
                    <div class="flex mt-4">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Urgency Trigger -->
    <section class="py-12 bg-blue-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-2xl md:text-3xl font-bold mb-6">Enquanto você espera, outras pessoas já estão sendo encontradas online.</h2>
            <p class="text-xl mb-8">Não deixe passar mais oportunidades.</p>
            <a href="{{ route('register') }}" class="bg-white text-blue-600 hover:bg-gray-100 font-bold py-4 px-8 rounded-lg shadow-lg btn-hover inline-flex items-center">
                <i class="fas fa-bullseye mr-2"></i> Criar meu portfólio agora
            </a>
        </div>
    </section>

    <!-- Portfolio Examples -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">Exemplos de portfólios criados</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Veja como seu portfólio pode ficar</p>
                <div class="w-20 h-1 bg-blue-600 mx-auto mt-4"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Example 1 -->
                <div class="bg-gray-50 p-4 rounded-lg shadow-md">
                    <img src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80" alt="Portfólio exemplo" class="rounded-lg mb-4">
                    <h3 class="font-bold text-gray-800 mb-2">Portfólio Minimalista</h3>
                    <p class="text-gray-600 text-sm">Ideal para designers e fotógrafos que querem destacar seu trabalho.</p>
                </div>
                
                <!-- Example 2 -->
                <div class="bg-gray-50 p-4 rounded-lg shadow-md">
                    <img src="https://images.unsplash.com/photo-1559028012-481c04fa702d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1636&q=80" alt="Portfólio exemplo" class="rounded-lg mb-4">
                    <h3 class="font-bold text-gray-800 mb-2">Portfólio Profissional</h3>
                    <p class="text-gray-600 text-sm">Perfeito para desenvolvedores e profissionais técnicos.</p>
                </div>
                
                <!-- Example 3 -->
                <div class="bg-gray-50 p-4 rounded-lg shadow-md">
                    <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1528&q=80" alt="Portfólio exemplo" class="rounded-lg mb-4">
                    <h3 class="font-bold text-gray-800 mb-2">Portfólio Criativo</h3>
                    <p class="text-gray-600 text-sm">Para quem quer mostrar personalidade e estilo único.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="py-16 bg-gradient-to-r from-blue-50 to-indigo-50">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-6">Pronto para transformar sua carreira?</h2>
            <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">Crie seu portfólio profissional hoje mesmo e comece a receber mais oportunidades</p>
            <a href="{{ route('register') }}" class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-4 px-8 rounded-lg shadow-lg btn-hover inline-flex items-center" data-bs-toggle="modal" data-bs-target="#cadastroModal">
                <i class="fas fa-bullseye mr-2"></i> Comece agora — é grátis para criar
            </a>
        </div>
    </section>

    <!-- Footer -->
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