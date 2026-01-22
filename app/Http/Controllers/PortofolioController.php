<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    public function index()
    {
        $data = [
            'nama' => 'Glenn',
            'profesi' => 'Web Developer',
            'tentang' => 'Saya pelajar yang sedang belajar Laravel dan Blade.',
            'email' => 'glenn@email.com',
            'projects' => [
                [
                    'title' => 'Website Sekolah',
                    'description' => 'Website profil sekolah berbasis Laravel.'
                ],
                [
                    'title' => 'Aplikasi Izin Siswa',
                    'description' => 'Aplikasi izin siswa menggunakan PHP & MySQL.'
                ]
            ]
        ];

        return view('Portofolio.index', $data);
    }
}