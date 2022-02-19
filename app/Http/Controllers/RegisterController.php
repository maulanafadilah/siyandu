<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        $page_title = 'Registrasi';
        $page_description = 'Registrasi Kader Posyandu';
		
		$action = __FUNCTION__;

        return view('register.index', compact('page_title', 'page_description','action'));
    }

    public function store(Request $request)
    {
       $validatedData = $request->validate([
           'nomor_telepon' => ['required', 'min:10', 'max:13', 'unique:users'],
            'nama_lengkap' => 'required',
            'password' => 'required|min:5|max:255',
            'posyandu' => 'required',
            'role' => 'required',
            'kode_registrasi' => 'exists:posyandus,kode'
       ]);

       $validatedData['password'] = Hash::make($validatedData['password']);

       User::create($validatedData);

       $request->session()->flash('success', 'Registrasi Berhasil! Silahkan Masuk ke Akun Anda!');

       return redirect('/login');
    }

}
