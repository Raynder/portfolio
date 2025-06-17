<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Project;
use App\Models\SocialLink;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }
        $user = auth()->user();
        $projetos = Project::where('tenant_id', $user->dominio)->get();
        $links = SocialLink::where('tenant_id', $user->dominio)->get();
        $profile = Profile::where('tenant_id', $user->dominio)->first();
        return view('admin.index', compact('projetos', 'links', 'profile', 'user'));
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

    // Criar novo projeto
    public function storeProject(Request $request)
    {
        $user = auth()->user();
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'nullable|string|max:255',
            'image_url' => 'nullable|string|max:255',
            'comments_count' => 'nullable|integer',
            'description' => 'nullable|string',
            'published_at' => 'nullable|date',
            'is_featured' => 'nullable|boolean',
        ]);
        $data['tenant_id'] = $user->dominio;
        $project = Project::create($data);
        return response()->json(['success' => true, 'project' => $project]);
    }

    // CRUD Social Links
    public function destroySocial($id)
    {
        $link = SocialLink::findOrFail($id);
        $link->delete();
        return response()->json(['success' => true]);
    }

    public function getSocial($id)
    {
        $link = SocialLink::findOrFail($id);
        return response()->json($link);
    }

    public function updateSocial(Request $request, $id)
    {
        $link = SocialLink::findOrFail($id);
        $data = $request->all();
        // Permite aceitar tanto 'site' quanto 'platform' como nome do campo
        $data['platform'] = $data['site'] ?? $data['platform'] ?? null;
        $validated = validator($data, [
            'platform' => 'required|string|max:1',
            'url' => 'required|string|max:255',
            'icon' => 'nullable|string|max:255',
        ])->validate();
        $link->update($validated);
        return response()->json(['success' => true, 'link' => $link]);
    }

    public function storeSocial(Request $request)
    {
        $user = auth()->user();
        $data = $request->all();
        // Permite aceitar tanto 'site' quanto 'platform' como nome do campo
        $data['platform'] = $data['site'] ?? $data['platform'] ?? null;
        $validated = validator($data, [
            'platform' => 'required|string|max:1',
            'url' => 'required|string|max:255',
            'icon' => 'nullable|string|max:255',
        ])->validate();
        $validated['tenant_id'] = $user->dominio;
        $link = SocialLink::create($validated);
        return response()->json(['success' => true, 'link' => $link]);
    }

    // Atualizar perfil
    public function updateProfile(Request $request)
    {
        $user = auth()->user();
        $profile = \App\Models\Profile::where('tenant_id', $user->dominio)->first();
        if (!$profile) {
            $profile = new \App\Models\Profile();
            $profile->tenant_id = $user->dominio;
        }
        $data = $request->validate([
            'photo_url' => 'nullable|string|max:255',
            'name' => 'required|string|max:255',
            'profession' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:30',
            'address' => 'nullable|string|max:255',
            'bio' => 'nullable|string',
        ]);
        $profile->fill($data);
        $profile->save();
        return response()->json(['success' => true, 'profile' => $profile]);
    }
}
