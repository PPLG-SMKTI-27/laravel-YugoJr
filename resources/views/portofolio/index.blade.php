@extends('layouts.app')

@section('title', 'Portofolio Saya')

@section('content')
    <h1>Halo, saya {{ $nama }}</h1>
    <p><strong>Profesi:</strong> {{ $profesi }}</p>
    <p>{{ $tentang }}</p>

    <h2>Proyek Saya</h2>

    @foreach($projects as $project)
        <div>
            <h3>{{ $project['title'] }}</h3>
            <p>{{ $project['description'] }}</p>
        </div>
    @endforeach

    <h2>Kontak</h2>
    <p>Email: {{ $email }}</p>

@section('scripts')
<script>
    console.log('Halaman Portofolio');
</script>
@endsection