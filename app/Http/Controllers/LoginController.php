<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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
            // 'role' => 'required'
            // 'role' => 'required|in:Kader, Admin'
        ]);

        // $role = User::find($request->nomor_telepon);

        $role = User::where('nomor_telepon', $request->nomor_telepon)->get('role')[0];

        // return $role;

        

        if(Auth::attempt($credentials)){

            if($role->role == 'Orang Tua'){
                $page_title = 'Page Error 403';
                $page_description = 'Some description for the page';
                
                $action = __FUNCTION__;
    
                return view('login.error', compact('page_title', 'page_description','action'));
            } else{
                $request->session()->regenerate();
                return redirect()->intended('/');
            }

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
