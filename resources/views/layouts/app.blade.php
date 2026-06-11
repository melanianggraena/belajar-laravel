{{-- File: resources/views/layouts/app.blade.php --}}
{{-- Ini adalah layout utama yang akan diwarisi oleh halaman lain --}}

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- @yield('title') akan diisi oleh halaman turunan --}}
    <title>@yield('title', 'Aplikasi Laravel') | Belajar Laravel</title>

    {{-- Vite akan mengelola aset CSS dan JS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Slot untuk CSS tambahan khusus halaman tertentu --}}
    @stack('styles')
</head>
<body class="d-flex flex-column min-vh-100">
    {{-- ===== NAVIGASI ===== --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold text-danger" href="{{ url('/') }}">
                🔴 Belajar Laravel
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarMain">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarMain">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tentang') }}">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('kontak') }}">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- ===== KONTEN UTAMA ===== --}}
    <main class="container my-4 flex-grow-1">
        {{-- Flash message untuk notifikasi --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        {{-- @yield('content') akan diisi oleh konten halaman turunan --}}
        @yield('content')
    </main>

    {{-- ===== FOOTER ===== --}}
    <footer class="bg-dark text-light py-4 mt-5">
        <div class="container text-center">
            <p class="mb-0">
                &copy; {{ date('Y') }} Belajar Laravel. Dibuat dengan ❤️ menggunakan Laravel 13.
            </p>

        </div>
    </footer>

    {{-- Slot untuk JavaScript tambahan khusus halaman tertentu --}}
    @stack('scripts')
</body>
</html>



