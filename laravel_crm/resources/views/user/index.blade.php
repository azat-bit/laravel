<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
    <div class="container">
        <h1>Giriş Yap</h1>
        <form action="{{ route('users.login') }}" method="POST">
        @csrf
        @if($errors->any())
           @foreach($errors->all() as $error)
            <div>{{$error}}</div>
            @endforeach
            @endif
            <div class="form-group">
                <label for="email">Kullanıcı Adı:</label>
                <input type="text" id="email" name="email" placeholder="Kullanıcı Adınızı Giriniz">
            </div>
            <div class="form-group">
                <label for="password">Parola:</label>
                <input type="password" id="password" name="password" placeholder="Parolanızı Giriniz">
            </div>
            <button type="submit">Giriş Yap</button>
            <a href="#">Unutulan Parola?</a>
        </form>
    </div>
</body>
</html>
