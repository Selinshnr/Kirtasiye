<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Ol</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Kayıt Ol</h2>

    <!-- Hata Mesajları -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Kayıt Formu -->
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Ad Soyad</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Ad Soyad" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email Adresi</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Şifre</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Şifre" required>
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Şifre Tekrar</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Şifre Tekrar" required>
        </div>
        <button type="submit" class="btn btn-primary">Kayıt Ol</button>
    </form>

    <p class="mt-3">
        Zaten bir hesabınız var mı? <a href="{{ route('login.form') }}">Giriş Yap</a>
    </p>
</div>
</body>
</html>
