<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;
use App\Models\Profile;
use App\Models\SocialLink;

class PortfolioController extends Controller
{
    // public function store(Request $request)
    // {
    //     $validated = $request->validate([
    //         'nome' => 'required|string|max:255',
    //         'email' => 'required|email|unique:users,email',
    //         'dominio' => 'required|string|alpha_dash|unique:users,dominio',
    //     ]);

    //     // Cria o usuário (ajuste conforme sua lógica)
    //     $user = User::create([
    //         'name' => $validated['nome'],
    //         'email' => $validated['email'],
    //         'dominio' => $validated['dominio'],
    //         'password' => bcrypt('senha_padrao'), // Troque por lógica de senha real
    //     ]);

    //     return redirect()->route('portfolio.cadastro')->with('success', 'Conta criada com sucesso!');
    // }

    public function index()
    {
        $tenantId = tenant('id'); // Se estiver usando stancl/tenancy
        $projetos = Project::where('tenant_id', $tenantId)->get();
        $links = SocialLink::where('tenant_id', $tenantId)->get();
        $profile = Profile::where('tenant_id', $tenantId)->first();
        return view('portfolio.index', compact('projetos', 'links', 'profile'));
    }
}
