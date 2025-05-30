<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <title>Yönetim Paneli Giriş</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!-- FontAwesome -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    
    <!-- Özel CSS -->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
<div class="container mt-5">
    <form class="form-signin" action="{{ route('yonetim.oturumac') }}" method="POST">
        @csrf

        <div class="text-center mb-4">
            <img src="{{ asset('img/logo.png') }}" class="logo" alt="Logo">
        </div>

        <!-- Hata mesajları -->
        @include('layouts.partials.errors')

        <div class="form-group">
            <label for="email">E-posta</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}"
                   class="form-control" placeholder="Email" required autofocus>
        </div>

        <div class="form-group">
            <label for="sifre">Şifre</label>
            <input type="password" id="sifre" name="sifre" class="form-control" placeholder="Şifre" required>
        </div>

        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" name="benihatirla" value="1" id="benihatirla" checked>
            <label class="form-check-label" for="benihatirla">
                Beni Hatırla
            </label>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Giriş Yap</button>

        <div class="text-center mt-3">
            <a href="{{ route('anasayfa') }}">&larr; Siteye Dön</a>
        </div>
    </form>
</div>

<!-- JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

</body>

</html>
