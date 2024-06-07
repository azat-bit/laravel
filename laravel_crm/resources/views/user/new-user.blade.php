<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>Kullanıcı Ekleme</title>

</head>
<body>
    <div class="container">
        <h1>Kullanıcı Ekleme</h1>
        <form id="newuser" method="post">
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <label for="ad">Ad:</label>
            <input type="text" id="name" name="name" required>

            <label for="soyad">Soyad:</label>
            <input type="text" id="soyad" name="soyad" required>

            <label for="email">E-posta:</label>
            <input type="email" id="email" name="email" autocomplete="current-password" required>

            <label for="sifre">Parola:</label>
            <input type="password" id="password" name="password" autocomplete="current-password" required>
            <a href="javascript:login()" class="btn action">Kullanıcıyı Ekle</button>
        </form>

        <div class="mesaj">
        </div>
    </div>

    <script> 
        var csrfToken = "{{ csrf_token() }}";
        var saveUserRoute = "{{ route('user.save') }}";

        function login(){
            var valid = true;
            if(!valid){
                OpenUsnackBar("{{__("hata")}}")
                return;
            }
            
            var formData = new FormData();
            formData.append('name', $("#name").val());
            formData.append('email', $("#email").val());
            formData.append('password', $("#password").val());
            formData.append("_token", csrfToken);

            $.ajax({
                url: saveUserRoute,
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                   top.location.href ="{{ route('login') }}";
                },
                error: function(xhr, status, error) {
                    
                }
            });
        }
    </script>
</body>
</html>
