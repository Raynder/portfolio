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
                    Acessar meu <span class="text-blue-600">PortfolioPro</span>
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
                <form action="{{ route('login') }}" method="POST" class="space-y-6">
                    @csrf

                    <div>
                        <label for="email" class="block text-gray-700 font-medium mb-2">E-mail</label>
                        <input type="email" id="email" name="email" required 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                            placeholder="seu@email.com">
                    </div>


                    <div>
                        <label for="password" class="block text-gray-700 font-medium mb-2">Senha</label>
                        <input type="password" id="password" name="password" required 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                            placeholder="Crie uma senha segura">
                    </div>

                    <button type="submit" 
                        class="w-full bg-orange-500 hover:bg-orange-600 text-white font-bold py-4 px-6 rounded-lg shadow-lg btn-hover transition duration-300">
                        <i class="fas fa-user-plus mr-2"></i> Entrar
                    </button>

                    <div class="text-center text-gray-600 mt-4">
                        Não tem uma conta? <a href="#" class="text-blue-600 font-medium hover:underline">Cadastre-se</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-guest-layout>
