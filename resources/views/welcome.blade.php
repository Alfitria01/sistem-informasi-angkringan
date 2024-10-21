<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Angkringan Information System</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite(['resources/js/app.js', 'resources/sass/app.scss'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-image: url('https://source.unsplash.com/1600x900/?food,restaurant');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        .content-box {
            background: rgba(255, 255, 255, 0.85);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: rgba(0,0,0,0.7);
            color: white;
            text-align: center;
            padding: 10px;
        }
        .btn-lg {
            transition: transform 0.3s ease;
        }
        .btn-lg:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="text-center content-box">
            <h1 class="display-4 fw-bold">Selamat Datang di Angkringan Putra Pandawa</h1>
            <p class="lead mb-4">Temukan informasi dan layanan angkringan terbaik di sekitar Anda.</p>
            <div class="d-flex justify-content-center">
                <a href="{{ route('login') }}" class="btn btn-primary btn-lg me-3">Login</a>
                <a href="{{ route('register') }}" class="btn btn-success btn-lg">Daftar</a>
            </div>
        </div>
    </div>

    <footer>
        <p class="mb-0">© 2024 Angkringan Putra Pandawa. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
