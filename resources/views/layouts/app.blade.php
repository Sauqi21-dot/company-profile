<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Nusantara Digital Solution — Rekayasa Web & Keamanan Siber')</title>

    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap 5.3 CSS & Bootstrap Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <!-- Custom Corporate Stylesheet via asset() helper -->
    <link rel="stylesheet" href="{{ asset('css/nds-style.css') }}">
    @stack('styles')
</head>
<body class="d-flex flex-column min-vh-100">

    <!-- Menyisipkan Komponen Navigasi Atas -->
    @include('partials.navbar')

    <!-- Area Konten Utama yang Dinamis untuk Setiap Halaman -->
    <main class="flex-grow-1">
        @yield('content')
    </main>

    <!-- Menyisipkan Komponen Footer Bawah -->
    @include('partials.footer')

    @include('partials.whatsapp-float')

    <!-- Bootstrap 5.3 Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>