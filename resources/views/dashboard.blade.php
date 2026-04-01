@extends('layouts.app')

@section('content')

    <div class="min-h-screen bg-orange-50 p-8">
        
                        <div class="flex justify-end mb-6">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="bg-orange-500 hover:bg-orange-600 text-white px-4 p-0 rounded-lg">
                    Logout
                </button>
            </form>
        </div>

        <div class="max-w-6xl mx-auto">

            <h1 class="text-4xl font-bold text-orange-600 mb-8">
                Dashboard Portofolio
            </h1>

            <div class="grid md:grid-cols-3 gap-6">

                <!-- Profile Card -->
                <div class="bg-white shadow-lg rounded-xl p-6 border-l-4 border-orange-500">
                    <h2 class="text-xl font-semibold text-orange-600 mb-2">
                        Profile
                    </h2>
                    <p class="text-gray-600">
                        Kelola informasi profil kamu di sini.
                    </p>

                    <a href="/profile"
                       class="inline-block mt-4 bg-orange-500 hover:bg-orange-600 text-white px-4 p-0 rounded-lg">
                        Edit Profile
                    </a>
                </div>

                <!-- Projects Card -->
                <div class="bg-white shadow-lg rounded-xl p-6 border-l-4 border-orange-500">
                    <h2 class="text-xl font-semibold text-orange-600 mb-2">
                        Projects
                    </h2>
                    <p class="text-gray-600">
                        Tambah atau ubah proyek portofolio.
                    </p>

                    <a href="{{ route('admin.projects.index') }}"
                       class="inline-block mt-4 bg-orange-500 hover:bg-orange-600 text-white px-4 p-0 rounded-lg">
                        Manage Projects
                    </a>
                </div>

                <!-- Stats Card -->
                <div class="bg-white shadow-lg rounded-xl p-6 border-l-4 border-orange-500">
                    <h2 class="text-xl font-semibold text-orange-600 mb-2">
                        Statistik
                    </h2>
                    <p class="text-gray-600">
                        Ringkasan aktivitas portofolio kamu.
                    </p>

                    <div class="mt-4 text-orange-500 text-3xl font-bold">
                        12
                    </div>
                    <p class="text-sm text-gray-500">
                        Total proyek
                    </p>
                </div>

            </div>

        </div>

    </div>
@endsection