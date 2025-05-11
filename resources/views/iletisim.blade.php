<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>İletişim</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2>İletişim Formu</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ url('/iletisim') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="ad" class="form-label">Adınız</label>
                <input type="text" name="ad" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">E-posta</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="mesaj" class="form-label">Mesajınız</label>
                <textarea name="mesaj" class="form-control" rows="5" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Gönder</button>
        </form>
    </div>
</body>
</html>
