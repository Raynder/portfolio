<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
        return view('portfolio.index');
    }
}
