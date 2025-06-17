<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;
use App\Models\Profile;
use App\Models\SocialLink;

class PortfolioController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'dominio' => 'required|string|alpha_dash|unique:users,dominio',
        ]);

        // Cria o usuário (ajuste conforme sua lógica)
        $user = User::create([
            'name' => $validated['nome'],
            'email' => $validated['email'],
            'dominio' => $validated['dominio'],
            'password' => bcrypt('senha_padrao'), // Troque por lógica de senha real
        ]);

        return redirect()->route('portfolio.cadastro')->with('success', 'Conta criada com sucesso!');
    }

    public function cadastro()
    {
        return view('portfolio.cadastro');
    }
    public function login()
    {
        return view('portfolio.login');
    }
    public function index()
    {
        $tenantId = tenant('id'); // Se estiver usando stancl/tenancy
        $projetos = Project::where('tenant_id', $tenantId)->get();
        $links = SocialLink::where('tenant_id', $tenantId)->get();
        $profile = Profile::where('tenant_id', $tenantId)->first();
        return view('portfolio.index', compact('projetos', 'links', 'profile'));
    }
    public function admin()
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }
        $user = auth()->user();
        $projetos = Project::where('tenant_id', $user->dominio)->get();
        $links = SocialLink::where('tenant_id', $user->dominio)->get();
        $profile = Profile::where('tenant_id', $user->dominio)->first();
        return view('portfolio.admin', compact('projetos', 'links', 'profile', 'user'));
    }

    // Deletar projeto
    public function destroyProject($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();
        return response()->json(['success' => true]);
    }

    // Buscar dados do projeto
    public function getProject($id)
    {
        $project = Project::findOrFail($id);
        return response()->json($project);
    }

    // Atualizar projeto
    public function updateProject(Request $request, $id)
    {
        $project = Project::findOrFail($id);
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'nullable|string|max:255',
            'image_url' => 'nullable|string|max:255',
            'comments_count' => 'nullable|integer',
            'description' => 'nullable|string',
            'published_at' => 'nullable|date',
            'is_featured' => 'nullable|boolean',
        ]);
        $project->update($data);
        return response()->json(['success' => true, 'project' => $project]);
    }
}
