<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login() {
        return view('login', ["title" => "Login"]);
    }

    public function loginproses(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            // PERBAIKAN: Diarahkan ke Home ('/') setelah login sukses
            return redirect('/');
        }

        return back()->with('loginError', 'Login Gagal! Periksa email dan password Anda.');
    }

    public function register() {
        return view('register', ["title" => "Daftar Akun"]);
    }

    public function registerproses(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['role'] = 'user'; 

        User::create($validatedData);

        // PERBAIKAN: Setelah daftar, diarahkan ke login dengan pesan sukses
        // Atau jika ingin langsung login dan ke home, bisa pakai Auth::login()
        return redirect('/login')->with('success', 'Pendaftaran berhasil! Silakan login.');
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        // Tetap diarahkan ke Home setelah logout
        return redirect('/');
    }
}