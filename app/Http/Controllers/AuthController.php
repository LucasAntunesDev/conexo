<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Professor;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller {
    public function login() {
        return view('auth.login');
    }

    public function fazerLogin(Request $request) {
        $login = $request->input('login');
        $senha = $request->input('senha');
    
        $user = Professor::where('login', $login)->first();

        if ($user && Hash::check($senha, $user->senha)) {
            Auth::login($user);
    
            return redirect()->intended('/');
        }
    
        return back()->withErrors([
            'login' => 'As credenciais fornecidas não correspondem aos nossos registros.',
        ]);
    }

    public function logout() {
        Auth::guard('web')->logout();
        
        return redirect('/');
    }
}
