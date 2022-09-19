<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registered(Request $request)
    {
        dd($request);
        $validate = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|unique:users,email|max:255',
            'password' => 'required',
            'password' => 'required|confirmed|min:6'
        ]);

        $user = new User();
        $user->name = $validate['nom'];
        $user->prenom = $validate['prenom'];
        $user->email = $validate['email'];
        $user->password = Hash::make($validate['password']);
        $user->save();
        return redirect()->back();
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials, $remember = true)) {
            if (Auth::user()->actif == '1') {
                $request->session()->regenerate();
                return redirect()->back()->with('success', 'log ok');
            } else {
                Session::flush();
                Auth::logout();
                $request->session()->invalidate();
                return redirect()->back()->with('desactivate', 'log');
            }
        }
        return redirect()->back()->with('error', 'log');
    }



    public function logout(Request $request)
    {
        Session::flush();
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/');
    }
}
