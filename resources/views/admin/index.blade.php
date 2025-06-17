<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Admin | {{ $profile->name ?? 'Portfólio' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .sidebar-link {
            @apply flex items-center p-3 rounded-lg transition-colors;
        }
        .sidebar-link:hover {
            @apply bg-blue-100 text-blue-800;
        }
        .sidebar-link.active {
            @apply bg-blue-800 text-white;
        }
        .form-input {
            @apply w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500;
        }
        .form-label {
            @apply block text-gray-700 font-medium mb-2;
        }
        .toggle-checkbox:checked {
            @apply right-0 border-blue-800;
        }
        .toggle-checkbox:checked + .toggle-label {
            @apply bg-blue-800;
        }
    </style>
</head>
<body class="bg-gray-50">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-white shadow-md">
            <div class="p-4 border-b">
                <h1 class="text-xl font-bold text-blue-800">Painel Admin</h1>
                <p class="text-sm text-gray-500">Gerencie o conteúdo do portfólio</p>
            </div>
            <nav class="p-4 flex flex-col space-y-1">
                <a href="#profile" class="sidebar-link active bg-blue-100 text-blue-800">
                    <i class="fas fa-user mr-3"></i> Perfil
                </a>
                <a href="#projects" class="sidebar-link">
                    <i class="fas fa-project-diagram mr-3"></i> Projetos
                </a>
                <a href="#social" class="sidebar-link">
                    <i class="fas fa-share-alt mr-3"></i> Redes Sociais
                </a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 overflow-auto">
            <header class="bg-white shadow-sm p-4">
                <div class="flex justify-between items-center">
                    <h2 class="text-lg font-semibold text-gray-800" id="section-title">Configurações do Perfil</h2>
                </div>
            </header>

            <main class="p-6">
                <!-- Profile Form -->
                <div id="profile-form" class="section-form">
                    <div class="bg-white rounded-lg shadow p-6 mb-6">
                        <form id="form-perfil">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="form-label font-bold text-blue-900 uppercase tracking-wide">Foto de Perfil</label>
                                    <input type="text" class="form-input text-gray-500 font-normal bg-gray-50" id="profile_photo_url" value="{{ $profile->photo_url ?? '' }}" placeholder="https://example.com/photo.jpg">
                                </div>
                                <div>
                                    <label class="form-label font-bold text-blue-900 uppercase tracking-wide">Nome</label>
                                    <input type="text" class="form-input text-gray-500 font-normal bg-gray-50" id="profile_name" value="{{ $profile->name ?? '' }}" placeholder="Nome completo">
                                </div>
                                <div>
                                    <label class="form-label font-bold text-blue-900 uppercase tracking-wide">Profissão</label>
                                    <input type="text" class="form-input text-gray-500 font-normal bg-gray-50" id="profile_profession" value="{{ $profile->profession ?? '' }}" placeholder="Profissão">
                                </div>
                                <div>
                                    <label class="form-label font-bold text-blue-900 uppercase tracking-wide">Email</label>
                                    <input type="email" class="form-input text-gray-500 font-normal bg-gray-50" id="profile_email" value="{{ $profile->email ?? '' }}" placeholder="email@exemplo.com">
                                </div>
                                <div>
                                    <label class="form-label font-bold text-blue-900 uppercase tracking-wide">Telefone</label>
                                    <input type="tel" class="form-input text-gray-500 font-normal bg-gray-50" id="profile_phone" value="{{ $profile->phone ?? '' }}" placeholder="(99) 99999-9999">
                                </div>
                                <div>
                                    <label class="form-label font-bold text-blue-900 uppercase tracking-wide">Endereço</label>
                                    <input type="text" class="form-input text-gray-500 font-normal bg-gray-50" id="profile_address" value="{{ $profile->address ?? '' }}" placeholder="Cidade, Estado">
                                </div>
                            </div>
                            <div class="mt-6">
                                <label class="form-label font-bold text-blue-900 uppercase tracking-wide">Bio</label>
                                <textarea class="form-input h-32 w-full text-gray-500 font-normal bg-gray-50" id="profile_bio" placeholder="Escreva uma breve bio...">{{ $profile->bio ?? '' }}</textarea>
                            </div>
                            <div class="mt-6 flex justify-end">
                                <button type="submit" class="bg-blue-800 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition" id="btn-perfil-salvar">
                                    <i class="fas fa-save mr-2"></i> Salvar Perfil
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Projects Form -->
                <div id="projects-form" class="section-form hidden">
                    <div class="bg-white rounded-lg shadow p-6 mb-6">
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="text-lg font-semibold">Adicionar/Editar Projeto</h3>
                            <button class="bg-blue-800 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition" onclick="limparFormularioProjeto()">
                                <i class="fas fa-plus mr-2"></i> Novo Projeto
                            </button>
                        </div>
                        <form id="form-projeto">
                            <input type="hidden" id="projeto_id">
                            <div class="space-y-6">
                                <div class="border-2 border-blue-200 rounded-lg p-4 bg-blue-50">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <label class="form-label">Título</label>
                                            <input type="text" class="form-input" id="projeto_titulo" placeholder="Título do Projeto">
                                        </div>
                                        <div>
                                            <label class="form-label">Categoria</label>
                                            <input type="text" class="form-input" id="projeto_categoria" placeholder="Web Design">
                                        </div>
                                        <div>
                                            <label class="form-label">URL da Imagem</label>
                                            <input type="text" class="form-input" id="projeto_imagem" placeholder="https://example.com/project.jpg">
                                        </div>
                                        <div>
                                            <label class="form-label">Contagem de Comentários</label>
                                            <input type="number" class="form-input" id="projeto_comentarios" placeholder="15">
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <label class="form-label">Descrição</label>
                                        <textarea class="form-input h-24" id="projeto_descricao" placeholder="Descrição do projeto..."></textarea>
                                    </div>
                                    <div class="mt-4 flex items-center justify-between">
                                        <div>
                                            <label class="form-label">Publicado Em</label>
                                            <input type="date" class="form-input" id="projeto_data">
                                        </div>
                                        <div class="flex items-center">
                                            <span class="form-label mr-4">Destaque</span>
                                            <div class="relative inline-block w-10 mr-2 align-middle select-none">
                                                <input type="checkbox" id="featured-toggle" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
                                                <label for="featured-toggle" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4 flex justify-end space-x-3">
                                        <button id="btn-atualizar" type="button" class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 transition hidden" onclick="atualizarProjeto(event)">
                                            <i class="fas fa-sync-alt mr-2"></i> Atualizar
                                        </button>
                                        <button id="btn-salvar" type="button" class="bg-blue-800 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition" onclick="salvarProjeto(event)">
                                            <i class="fas fa-save mr-2"></i> Salvar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-semibold mb-6">Seus Projetos</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            @forelse($projetos as $projeto)
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
                            @empty
                                <div class="col-span-3 text-center text-gray-500">Nenhum projeto cadastrado.</div>
                            @endforelse
                        </div>
                    </div>
                </div>

                <!-- Social Links Form -->
                <div id="social-form" class="section-form hidden">
                    <div class="bg-white rounded-lg shadow p-6 mb-6">
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="text-lg font-semibold">Adicionar/Editar Rede Social</h3>
                            <button class="bg-blue-800 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition" onclick="limparFormularioSocial()">
                                <i class="fas fa-plus mr-2"></i> Nova Rede
                            </button>
                        </div>
                        <form id="form-social">
                            <input type="hidden" id="social_id">
                            <div class="space-y-6">
                                <div class="border-2 border-blue-200 rounded-lg p-4 bg-blue-50">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <label class="form-label">Plataforma</label>
                                            <select class="form-input" id="social_platform">
                                                <option value="">Selecione</option>
                                                <option value="f">Facebook</option>
                                                <option value="t">Twitter</option>
                                                <option value="l">LinkedIn</option>
                                                <option value="i">Instagram</option>
                                                <option value="g">GitHub</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label class="form-label">URL</label>
                                            <input type="url" class="form-input" id="social_url" placeholder="https://example.com/profile">
                                        </div>
                                    </div>
                                    <div class="mt-4 flex justify-end space-x-3">
                                        <button id="btn-social-atualizar" type="button" class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 transition hidden" onclick="atualizarSocial(event)">
                                            <i class="fas fa-sync-alt mr-2"></i> Atualizar
                                        </button>
                                        <button id="btn-social-salvar" type="button" class="bg-blue-800 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition" onclick="salvarSocial(event)">
                                            <i class="fas fa-save mr-2"></i> Salvar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-semibold mb-6">Suas Redes Sociais</h3>
                        <div class="space-y-4">
                            @forelse($links as $link)
                                <div class="border border-gray-200 rounded-lg p-4 flex items-center justify-between cursor-pointer" onclick="carregarSocial({{ $link->id }})">
                                    <div class="flex items-center">
                                        @php $nomeSocial = \App\Helpers\SocialHelper::get($link->platform); @endphp
                                        <span class="font-bold text-blue-900 mr-2">{{ $nomeSocial }}</span>
                                        <span class="text-gray-600">{{ $link->url }}</span>
                                    </div>
                                    <button class="text-red-600 hover:text-red-800 ml-4" onclick="event.stopPropagation(); deletarSocial({{ $link->id }})">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            @empty
                                <div class="text-center text-gray-500">Nenhum link cadastrado.</div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        // Navigation between sections
        document.querySelectorAll('.sidebar-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Update active link
                document.querySelectorAll('.sidebar-link').forEach(el => {
                    el.classList.remove('active');
                    el.classList.remove('bg-blue-100', 'text-blue-800');
                });
                this.classList.add('active');
                this.classList.add('bg-blue-100', 'text-blue-800');
                
                // Update section title
                const sectionId = this.getAttribute('href').substring(1);
                const sectionTitle = {
                    'profile': 'Perfil Pessoal',
                    'projects': 'Projetos',
                    'social': 'Redes Sociais'
                }[sectionId];
                document.getElementById('section-title').textContent = sectionTitle;
                
                // Show correct form section
                document.querySelectorAll('.section-form').forEach(form => {
                    form.classList.add('hidden');
                });
                document.getElementById(`${sectionId}-form`).classList.remove('hidden');
            });
        });

        // Toggle switch functionality
        document.querySelectorAll('.toggle-checkbox').forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                const label = document.querySelector(`label[for="${this.id}"]`);
                if (this.checked) {
                    label.classList.add('bg-blue-800');
                    label.classList.remove('bg-gray-300');
                } else {
                    label.classList.remove('bg-blue-800');
                    label.classList.add('bg-gray-300');
                }
            });
        });

        function deletarProjeto(id) {
            if (!confirm('Tem certeza que deseja deletar este projeto?')) return;
            fetch(`/projetos/${id}`, {
                method: 'DELETE',
                headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'}
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) location.reload();
                else alert('Erro ao deletar projeto.');
            });
        }

        function carregarProjeto(id) {
            fetch(`/projetos/${id}`)
            .then(res => res.json())
            .then(projeto => {
                document.getElementById('projeto_id').value = projeto.id;
                document.getElementById('projeto_titulo').value = projeto.title ?? '';
                document.getElementById('projeto_categoria').value = projeto.category ?? '';
                document.getElementById('projeto_imagem').value = projeto.image_url ?? '';
                document.getElementById('projeto_comentarios').value = projeto.comments_count ?? '';
                document.getElementById('projeto_descricao').value = projeto.description ?? '';
                document.getElementById('projeto_data').value = projeto.published_at ? projeto.published_at.substring(0,10) : '';
                document.getElementById('featured-toggle').checked = !!projeto.is_featured;
                document.getElementById('btn-atualizar').classList.remove('hidden');
                document.getElementById('btn-salvar').classList.add('hidden');
            });
        }

        function atualizarProjeto(e) {
            e.preventDefault();
            const id = document.getElementById('projeto_id').value;
            fetch(`/projetos/${id}`, {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    title: document.getElementById('projeto_titulo').value,
                    category: document.getElementById('projeto_categoria').value,
                    image_url: document.getElementById('projeto_imagem').value,
                    comments_count: document.getElementById('projeto_comentarios').value,
                    description: document.getElementById('projeto_descricao').value,
                    published_at: document.getElementById('projeto_data').value,
                    is_featured: document.getElementById('featured-toggle').checked ? 1 : 0
                })
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) location.reload();
                else alert('Erro ao atualizar projeto.');
            });
        }

        function salvarProjeto(e) {
            e.preventDefault();
            fetch('/projetos', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    title: document.getElementById('projeto_titulo').value,
                    category: document.getElementById('projeto_categoria').value,
                    image_url: document.getElementById('projeto_imagem').value,
                    comments_count: document.getElementById('projeto_comentarios').value,
                    description: document.getElementById('projeto_descricao').value,
                    published_at: document.getElementById('projeto_data').value,
                    is_featured: document.getElementById('featured-toggle').checked ? 1 : 0
                })
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) location.reload();
                else alert('Erro ao salvar projeto.');
            });
        }

        function deletarSocial(id) {
            if (!confirm('Tem certeza que deseja deletar este link?')) return;
            fetch(`/social/${id}`, {
                method: 'DELETE',
                headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'}
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) location.reload();
                else alert('Erro ao deletar link.');
            });
        }

        function carregarSocial(id) {
            fetch(`/social/${id}`)
            .then(res => res.json())
            .then(link => {
                document.getElementById('social_id').value = link.id;
                document.getElementById('social_platform').value = link.platform;
                document.getElementById('social_url').value = link.url;
                document.getElementById('btn-social-atualizar').classList.remove('hidden');
                document.getElementById('btn-social-salvar').classList.add('hidden');
            });
        }

        function atualizarSocial(e) {
            e.preventDefault();
            const id = document.getElementById('social_id').value;
            fetch(`/social/${id}`, {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    site: document.getElementById('social_platform').value,
                    url: document.getElementById('social_url').value
                })
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) location.reload();
                else alert('Erro ao atualizar link.');
            });
        }

        function salvarSocial(e) {
            e.preventDefault();
            fetch('/social', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    site: document.getElementById('social_platform').value,
                    url: document.getElementById('social_url').value
                })
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) location.reload();
                else alert('Erro ao salvar link.');
            });
        }

        // Corrige toggle destaque para funcionar ao clicar no label
        const featuredToggle = document.getElementById('featured-toggle');
        const featuredLabel = document.querySelector('label[for="featured-toggle"]');
        if (featuredToggle && featuredLabel) {
            featuredLabel.addEventListener('click', function() {
                featuredToggle.checked = !featuredToggle.checked;
            });
        }

        function limparFormularioProjeto() {
            document.getElementById('projeto_id').value = '';
            document.getElementById('projeto_titulo').value = '';
            document.getElementById('projeto_categoria').value = '';
            document.getElementById('projeto_imagem').value = '';
            document.getElementById('projeto_comentarios').value = '';
            document.getElementById('projeto_descricao').value = '';
            document.getElementById('projeto_data').value = '';
            document.getElementById('featured-toggle').checked = false;
            document.getElementById('btn-atualizar').classList.add('hidden');
            document.getElementById('btn-salvar').classList.remove('hidden');
        }

        function limparFormularioSocial() {
            document.getElementById('social_id').value = '';
            document.getElementById('social_platform').value = '';
            document.getElementById('social_url').value = '';
            document.getElementById('btn-social-atualizar').classList.add('hidden');
            document.getElementById('btn-social-salvar').classList.remove('hidden');
        }

        document.getElementById('form-perfil').addEventListener('submit', function(e) {
            e.preventDefault();
            fetch('/perfil', {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    photo_url: document.getElementById('profile_photo_url').value,
                    name: document.getElementById('profile_name').value,
                    profession: document.getElementById('profile_profession').value,
                    email: document.getElementById('profile_email').value,
                    phone: document.getElementById('profile_phone').value,
                    address: document.getElementById('profile_address').value,
                    bio: document.getElementById('profile_bio').value
                })
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    alert('Perfil atualizado com sucesso!');
                    location.reload();
                } else {
                    alert('Erro ao atualizar perfil.');
                }
            });
        });
    </script>
</body>
</html>
