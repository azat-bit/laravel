<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>Parola Yenileme</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Parola Yenileme</h1>
        <form action="{{ route('password.email') }}" method="post">
            <label for="email">E-posta:</label>
            <input type="email" id="email" name="email" required>

            <button type="submit">Parolayı Yenile</button>
        </form>

        <div class="mesaj">
            </div>
    </div>
</body>
</html>
