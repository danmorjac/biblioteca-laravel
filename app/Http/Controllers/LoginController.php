<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',
        ['only' => ['create', 'store', 'edit', 'update', 'destroy']]);
    }
    public function loginForm()
    {
    return view('auth.login');
    }

    public function login(Request $request)
    {
        $credenciales = $request->only('nombre', 'password');
        if (Auth::attempt($credenciales))
        {
        // Autenticación exitosa
        return redirect()->intended(route('libros.index'));
        } else {
        $error = 'Usuario incorrecto';
        return view('auth.login', compact('error'));
        }
    }

    public function logout()
    {
    Auth::logout();
    // ... Renderizar la vista deseada
    }
}
