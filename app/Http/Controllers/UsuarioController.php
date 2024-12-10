<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function index()
    {
        // Perform the Query
        $usuarios = Usuario::all();

        // Pass Data to the View
        return view('usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'cpf' => 'required|string|size:11|unique:usuarios,cpf',
            'email' => 'required|email|unique:usuarios,email',
            'nome' => 'required|string|max:255',
            'tipoUsuario' => 'required|string|in:Entregador,Lojista,Cliente',
        ]);

        // Create the user
        Usuario::create($request->all());

        return redirect()->route('usuarios.index')->with('success', 'Usuário criado com sucesso.');
    }

    public function edit($cpf)
    {
        $usuario = Usuario::findOrFail($cpf);
        return view('usuarios.edit', compact('usuario'));
    }

    public function update(Request $request, $cpf)
    {
        $usuario = Usuario::findOrFail($cpf);

        // Validate the request
        $request->validate([
            'email' => 'required|email|unique:usuarios,email,' . $usuario->cpf . ',cpf',
            'nome' => 'required|string|max:255',
            'tipoUsuario' => 'required|string|in:Entregador,Lojista,Cliente',
        ]);

        // Update the user
        $usuario->update($request->all());

        return redirect()->route('usuarios.index')->with('success', 'Usuário atualizado com sucesso.');
    }

    public function destroy($cpf)
    {
        try {
            $usuario = Usuario::findOrFail($cpf);
            $usuario->delete();
            return redirect()->route('usuarios.index')->with('success', 'Usuário excluído com sucesso.');
        } catch (\Exception $e) {
            return redirect()->route('usuarios.index')->with('error', 'Usuário não pode ser excluído.');
        }
    }
}
