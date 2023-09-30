<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthManager extends Controller
{
    function login() {
        return view('login');
    }

    function registration() {
        return view('registration');
    }

    function loginPost(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        $email_value = $request->only('email');
        if(Auth::attempt($credentials)) {
            return redirect()->intended(route('getEmail'))->with(['email' => $email_value]);
        }
        return redirect(route('login'))->with("error", "Identifiant ou mot de passe incorrect");
    }

    function registrationPost(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);

        $user = User::create($data);

        if(!$user) {
            return redirect(route('registration'))->with("error", "L'inscription a échouée, réessayez");
        }
        return redirect(route('login'))->with("success", "L'inscription a réussie, connecter vous pour continuer");
    }

    function logout() {
        Session::flush();
        Auth::logout();
        return redirect(route('home'));
    }

    function checkiflogin() {
        if(! auth()->check()) {
            return redirect(route('login'));
        }
        return redirect(route('checkListsExists'));
    }
}
