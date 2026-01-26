<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-box {
            width: 350px;
            background: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        .login-box h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #ff7a00;
        }

        .login-box label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        .login-box input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            outline: none;
        }

        .login-box input:focus {
            border-color: #ff7a00;
        }

        .login-box button {
            width: 100%;
            padding: 10px;
            background: #ff7a00;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        .login-box button:hover {
            background: #e86b00;
        }

        .login-box p {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }

        .login-box a {
            color: #ff7a00;
            text-decoration: none;
        }
    </style>
</head>
<body>

<div class="login-box">
    <h2>Login</h2>
    @if(session('error'))
        <div style="color: red; margin-bottom: 15px;">
            {{session('error') }}
        </div>
    @endif
        
    <form method="POST" action="/login">
        @csrf


        <label>Email</label> 
        <input name="email" type="email" placeholder="Masukkan email" value="{{ old('email') }}" required>

        <label>Password</label>
        <input name="password" type="password" placeholder="Masukkan password" required>

        <button type="submit">Login</button>
    </form>

    <p>Belum punya akun? <a href="#">Daftar</a></p>
</div>

</body>
</html>
