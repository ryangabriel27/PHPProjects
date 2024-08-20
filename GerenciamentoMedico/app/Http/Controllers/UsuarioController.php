<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    // Exibir o formulário de login
    public function showLoginForm()
    {
        return view('usuarios.login');
    }


    // Processar o login do usuário
    public function login(Request $request)
    {
        // Validações para o login
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


        // Tenta autenticar com o guard 'usuario'
        if (Auth::guard('usuario')->attempt($credentials)) {
            $request->session()->regenerate(); // Regenera a sessão para evitar fixação de sessão
            return redirect()->intended('/dashboard');
        }


        // Se falhar, retorna com erro
        return back()->withErrors([
            'email' => 'As credenciais não correspondem aos nossos registros.',
        ])->onlyInput('email');
    }


    // Exibir o formulário de registro
    public function showRegisterForm()
    {
        return view('usuarios.register');
    }


    // Processar o register de um novo usuário
    public function register(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:usuarios',
            'password' => 'required|string|min:8|confirmed',
            'tipo' => 'required|in:paciente,medico',
            'cpf' => 'required|string|max:14', 
            'cidade' => 'required|string|max:255',
            'estado' => 'required|string|max:2',
            'cep' => 'required|string|max:10', 
            'crm' => 'nullable|string|max:10'
        ]);
        
        // Cria um novo usuário
        $usuario = Usuario::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'tipo' => $request->tipo,
            'cpf' => $request->cpf,
            'cidade' => $request->cidade,
            'estado' => $request->estado,
            'cep' => $request->cep,
            'crm' => $request->tipo == 'medico' ? $request->crm : null,
        ]);


        // Faz login automático do novo usuário
        Auth::guard('usuario')->login($usuario);


        return redirect('/dashboard');
    }


    // Realizar o logout do usuário
    public function logout(Request $request)
    {
        Auth::guard('usuario')->logout(); // Logout do guard 'usuario'
        $request->session()->regenerateToken(); // Regenera o token da sessão


        $request->session()->invalidate();
        $request->session()->regenerate();// Invalida a sessão


        return redirect('/');
    }
}
