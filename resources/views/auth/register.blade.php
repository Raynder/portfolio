<x-guest-layout>
    <!-- Header/Navigation -->
    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center">
                <i class="fas fa-briefcase text-blue-600 text-2xl mr-2"></i>
                <span class="text-xl font-bold text-gray-800">PortfolioPro</span>
            </div>
            <nav class="hidden md:flex space-x-8">
                <a href="{{ route('home') }}" class="text-gray-600 hover:text-blue-600">Home</a>
            </nav>
            <button class="md:hidden text-gray-600">
                <i class="fas fa-bars text-xl"></i>
            </button>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-50 to-indigo-50 py-16 md:py-24">
        <div class="container mx-auto px-4 max-w-4xl">
            <div class="text-center mb-12 fade-in">
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-800 leading-tight mb-4">
                    Crie sua conta no <span class="text-blue-600">PortfolioPro</span>
                </h1>
                <p class="text-lg text-gray-600 mb-8">
                    Junte-se a milhares de profissionais que já estão sendo notados com portfólios incríveis.
                </p>
            </div>

            @if ($errors->any())
                <div class="mb-4">
                    <ul class="list-disc list-inside text-sm text-red-600">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="bg-white rounded-lg shadow-xl p-8 md:p-10 fade-in">
                <form action="{{ route('register.store') }}" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label for="name" class="block text-gray-700 font-medium mb-2">Nome Completo</label>
                        <input type="text" id="name" name="name" required 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                            placeholder="Digite seu nome completo">
                    </div>

                    <div>
                        <label for="email" class="block text-gray-700 font-medium mb-2">E-mail</label>
                        <input type="email" id="email" name="email" required 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                            placeholder="seu@email.com">
                    </div>

                    <div>
                        <label for="dominio" class="block text-gray-700 font-medium mb-2">Domínio do Portfólio</label>
                        <div class="flex items-center">
                            <input type="text" id="dominio" name="dominio" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-l-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                                placeholder="seu-nome-incrivel">
                            <span class="bg-gray-100 px-4 py-3 border-t border-b border-r border-gray-300 rounded-r-lg text-gray-600">.portfoliopro.com</span>
                        </div>
                        <small class="text-gray-500 text-sm mt-1 block">Este será o endereço do seu portfólio (ex: seu-nome-incrivel.portfoliopro.com)</small>
                    </div>

                    <div>
                        <label for="password" class="block text-gray-700 font-medium mb-2">Senha</label>
                        <input type="password" id="password" name="password" required 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                            placeholder="Crie uma senha segura">
                    </div>

                    <div>
                        <label for="password_confirmation" class="block text-gray-700 font-medium mb-2">Confirme sua Senha</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" required 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                            placeholder="Digite a senha novamente">
                    </div>

                    <div class="flex items-center">
                        <input id="terms" name="terms" type="checkbox" required
                            class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="terms" class="ml-2 block text-sm text-gray-700">
                            Concordo com os <a href="#" class="text-blue-600 hover:underline">Termos de Serviço</a> e <a href="#" class="text-blue-600 hover:underline">Política de Privacidade</a>
                        </label>
                    </div>

                    <button type="submit" 
                        class="w-full bg-orange-500 hover:bg-orange-600 text-white font-bold py-4 px-6 rounded-lg shadow-lg btn-hover transition duration-300">
                        <i class="fas fa-user-plus mr-2"></i> Criar minha conta
                    </button>

                    <div class="text-center text-gray-600 mt-4">
                        Já tem uma conta? <a href="#" class="text-blue-600 font-medium hover:underline">Faça login</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-guest-layout>
