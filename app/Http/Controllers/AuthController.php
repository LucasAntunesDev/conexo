<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Professor;


class AuthController extends Controller {
    public function login() {
        return view('auth.login');
    }

    public function fazerLogin(Request $request) {
        $login = $request->input('login');
        $senha = $request->input('senha');
    
        $user = Professor::where('login', $login)->first();
    
        // Verifica se o usuário existe e se a senha está correta
        if ($user && $user->senha === $senha) {
            // Faz o login do usuário sem verificar o hash
            Auth::login($user);
    
            return redirect()->intended('/');
        }
    
        return back()->withErrors([
            'login' => 'As credenciais fornecidas não correspondem aos nossos registros.',
        ]);
    }

    public function logout() {
        Auth::guard('web')->logout();
        
        // Redireciona para a página de login
        return redirect('/');
        // Ou, se preferir, redirecione para a página inicial
        // return redirect('/');
    }
}
