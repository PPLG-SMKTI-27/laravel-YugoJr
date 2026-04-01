<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortofolioSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('portofolio_profiles')->insert([
            'nama' => 'Glenn',
            'profesi' => 'Web Developer',
            'tentang' => 'Saya pelajar yang sedang belajar Laravel dan Blade.',
            'email' => 'glenn@email.com',
            'skills' => 'HTML,CSS,JavaScript,PHP,Laravel',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('portofolio_projects')->insert([
            [
                'title' => 'Website Sekolah',
                'description' => 'Website profil sekolah berbasis Laravel.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Aplikasi Izin Siswa',
                'description' => 'Aplikasi izin siswa menggunakan PHP & MySQL.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
