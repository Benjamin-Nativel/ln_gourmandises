<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    



    public function logout(Request $request)
    {
        Session::flush();
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/home');
    }
}
