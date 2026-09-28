<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portal Akademik ITS')</title>
    <!-- Memuat Vite Asset Bundler -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-light">
    <!-- Navbar Navigasi -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4 shadow-sm">
        <div class="container">
            <a class="navbar-brand font-weight-bold" href="{{ route('home') }}">PBKK ITS — Secure Hub</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Beranda</a>
                <a class="nav-link {{ request()->routeIs('profil') ? 'active' : '' }}" href="{{ route('profil') }}">Profil</a>
                <a class="nav-link {{ request()->routeIs('ide.agent') ? 'active' : '' }}" href="{{ route('ide.agent') }}">Ide Agentic AI</a>
            </div>
        </div>
    </nav>

    <!-- Slot Konten Utama -->
    <main class="container py-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="text-center py-4 text-muted border-top mt-5 bg-white">
        <div class="container">
            <p class="mb-0">&copy; {{ date('Y') }} Departemen Teknik Informatika ITS. Hak Cipta Dilindungi.</p>
        </div>
    </footer>
</body>
</html>