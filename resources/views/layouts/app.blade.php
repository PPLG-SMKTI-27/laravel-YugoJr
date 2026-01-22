<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <style>
        body { font-family: Arial, sans-serif; background:#f4f4f4; }
        .container {width: 80%;margin: 40px auto;background: #ffffff;     /* warna netral */padding: 30px;           /* jarak isi ke tepi */border-radius: 8px;      /* sudut halus */box-shadow: 0 0 10px rgba(0,0,0,0.1);}
        .project { border-left: 4px solid #3498db; padding-left: 10px; margin-bottom: 15px; }
        footer { text-align: center; margin-top: 20px; color: gray; }
    </style>
</head>
<body>
@include('partials.navbar')
<div class="container">
    @yield('content')
</div>

<footer>
    © 2026 Portofolio Saya
</footer>

</body>
</html>