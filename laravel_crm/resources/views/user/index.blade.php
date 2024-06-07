<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>Giriş Yap</title>
   
</head>
<body>
    <div class="container">
        <h1>Giriş Yap</h1>

        <!-- Session Status -->
        @if (session('status'))
            <div>{{ session('status') }}</div>
        @endif

        <!-- Validation Errors -->
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form id="loginForm" method="POST">
                  @csrf
            <div class="form-group">
                <label for="email">Kullanıcı Adı:</label>
                <input type="text" id="email" name="email" placeholder="Kullanıcı Adınızı Giriniz" required>
            </div>

            <div class="form-group">
                <label for="password">Parola:</label>
                <input type="password" id="password" name="password" placeholder="Parolanızı Giriniz" required autocomplete="current-password">
            </div>  

            <!-- Remember Me -->
            <div class="form-group">
                <input id="remember_me" type="checkbox" name="remember">
                <label for="remember_me">Beni Hatırla</label>
            </div>

            <button type="submit">Giriş Yap</button>
        </form>

        <!-- Password Reset Link -->
        <a href="{{ route('password.request') }}">Unutulan Parola?</a>
        <a href="{{ route('register') }}">Kullanıcı ekle </a>
    </div>
    
</body>
</html>
