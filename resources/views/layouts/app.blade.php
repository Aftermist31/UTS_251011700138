<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'DYNARA | Electronic Store')</title>

    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.8-dist/css/bootstrap.min.css') }}">

    <style>
        :root {
            --burgundy: #2A0001;
            --pink: #D9A6AD;
            --ivory: #F7F1ED;
            --charcoal: #29252A;
        }

        body {
            background-color: var(--ivory);
            color: var(--charcoal);
        }

        .navbar {
            background-color: var(--burgundy);
        }

        .brand-name {
            color: white;
            font-weight: bold;
            letter-spacing: 3px;
        }

        .brand-name:hover {
            color: var(--pink);
        }

        footer {
            background-color: var(--burgundy);
            color: white;
        }
    </style>

    @yield('styles')
</head>
<body>  

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container py-2">
        <a class="navbar-brand brand-name" href="{{ route('home') }}">
            DYNARA
        </a>

        <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarDYNARA"
            aria-controls="navbarDYNARA" aria-expanded="false"
            aria-label="Buka navigasi">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarDYNARA">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('electronics.index') }}">Koleksi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


    <main>
        @yield('content')
    </main>

    <footer class="text-center py-4 mt-4">
        <p class="fw-bold mb-1">DYNARA</p>
        <small>Elegant Technology for Everyday Life</small>
    </footer>

    <script src="{{ asset('bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js') }}"></script>

    @yield('scripts')
</body>
</html>