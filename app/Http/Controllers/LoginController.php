<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function store(Request $request){
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6'],
        ]);

        // validação apenas dos campos necessários
        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);

        $authenticated = Auth::check();

        if(!$authenticated){
            return redirect()->route('login.index')->withErrors(['error' => 'email or password invalid']);
        }

        return redirect()->route('home.index')->with(['success' => 'logado com sucesso']);
    }


    public function destroy(){
        Auth::logout();
        return redirect()->route('login.index');
    }
}
