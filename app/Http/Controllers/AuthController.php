<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller {
    public function login() {
        return view('auth.login');
    }

    public function fazerLogin(Request $request) {
        $credentials = $request->only('login', 'senha');

        if (Auth::guard('professor')->attempt($credentials)) {
            // Autenticação foi bem-sucedida
            return redirect()->intended('dashboard');
        }

        // Autenticação falhou
        return back()->withErrors([
            'login' => 'As credenciais fornecidas não correspondem aos nossos registros.',
        ]);
    }
}
