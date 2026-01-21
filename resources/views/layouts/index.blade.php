<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <style>
        body { font-family: Arial, sans-serif; background:#f4f4f4; }
        .container { width: 80%; margin: auto; background: #fff; padding: 20px; }
        .project { border-left: 4px solid #3498db; padding-left: 10px; margin-bottom: 15px; }
        footer { text-align: center; margin-top: 20px; color: gray; }
    </style>
</head>
<body>

<div class="container">
    @yield('content')
</div>

<footer>
    © 2026 Portofolio Saya
</footer>

</body>
</html>