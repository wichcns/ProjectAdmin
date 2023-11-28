<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }
    public function checkLogin(Request $request)
    {
        $credentials = $request->validate([
            'username'     => ['required', 'username'],
            'password'  =>['required']
        ]);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended('/');
        }
        return back()->withErrors([
            'username' => 'credentials do not match our records.'
        ]);
    }
    public function logout()
    {
       auth()->logout();
       session()->invalidate();
       session()->regenerateToken();

       return redirect(route('login'));
    }
}
