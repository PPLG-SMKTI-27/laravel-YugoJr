<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        $admin = DB::table('admins')
            ->where('email', $request->email)
            ->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            return redirect('/')->with('success', 'Login berhasil');
        }

        return back()->with('error', 'Email atau password salah');
    }
}
