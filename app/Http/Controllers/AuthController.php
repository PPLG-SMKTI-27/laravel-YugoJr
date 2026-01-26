<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function index()
    {
        return view('form');
    }

    // Proses login
    public function authenticate(Request $request)
    {

        if ($request->email === 'admin@email.com' && $request->password === '123456') {
            return redirect('/')->with('success', 'Login berhasil');
         }

            return back()->with('error', 'Email atau password salah');
    }
}
