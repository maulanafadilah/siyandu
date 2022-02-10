<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        $page_title = 'Masuk';
        $page_description = 'Masuk Sebagai Kader Posyandu';
		
		$action = __FUNCTION__;

        return view('login.index', compact('page_title', 'page_description','action'));
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'nomor_telepon' => 'required',
            'password' => 'required',
            'role' => 'required|in:Kader'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->with('loginError', 'Login Gagal, Nomor Telepon atau Kata Sandi Salah!');
    }

    public function logout(){
        
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/login');
    }
}
