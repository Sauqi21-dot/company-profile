@extends('layouts.app')

@section('title', 'Tentang Kami — ' . \App\Models\CompanySetting::getVal('company_name', 'Nusantara Digital Solution'))

@section('content')

    <!-- HEADER HALAMAN -->
    <section class="hero-section" style="padding: 70px 0 60px;">
        <div class="container">
            <span class="badge bg-info text-dark fw-semibold px-3 py-2 rounded-pill mb-3">
                <i class="bi bi-building me-1"></i> Profil Perusahaan
            </span>
            <h1 class="display-5 fw-bold mb-2">Tentang Kami</h1>
            <p class="lead text-light opacity-75 mb-0">
                {{ \App\Models\CompanySetting::getVal('company_name', 'Nusantara Digital Solution') }}
            </p>
        </div>
    </section>

    <!-- PROFIL LENGKAP -->
    <section class="py-5">
        <div class="container py-3">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-7">
                    <h6 class="text-primary fw-bold text-uppercase">Profil Lengkap</h6>
                    <h2 class="fw-bold mb-3">Mitra Solusi Rekayasa Perangkat Lunak</h2>
                    <p class="text-muted">{{ \App\Models\CompanySetting::getVal('about_us') }}</p>
                    <p class="text-muted">
                        Kami membantu organisasi merancang, membangun, dan mengamankan sistem informasi, mulai dari
                        pengembangan aplikasi web, arsitektur server dan cloud, hingga audit keamanan berstandar OWASP Top 10.
                    </p>
                </div>
                <div class="col-lg-5">
                    <div class="card border-0 shadow-sm rounded-4 p-4">
                        <ul class="list-unstyled small mb-0">
                            <li class="mb-3 d-flex gap-2">
                                <i class="bi bi-geo-alt-fill text-primary"></i>
                                <span>{{ \App\Models\CompanySetting::getVal('address', 'Palembang, Sumatera Selatan') }}</span>
                            </li>
                            <li class="mb-3 d-flex gap-2">
                                <i class="bi bi-envelope-fill text-primary"></i>
                                <span>{{ \App\Models\CompanySetting::getVal('contact_email', 'info@nusantaradigital.co.id') }}</span>
                            </li>
                            <li class="d-flex gap-2">
                                <i class="bi bi-telephone-fill text-primary"></i>
                                <span>{{ \App\Models\CompanySetting::getVal('contact_phone', '+62 711 445566') }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- VISI & MISI -->
    <section class="py-5 bg-light">
        <div class="container py-3">
            <div class="row g-4">
                <div class="col-md-5">
                    <div class="card h-100 border-0 shadow-sm rounded-4 p-4">
                        <div class="icon-box mb-3"><i class="bi bi-eye"></i></div>
                        <h4 class="fw-bold">Visi</h4>
                        <p class="text-muted mb-0">
                            Menjadi mitra terpercaya dalam transformasi digital dan keamanan siber bagi institusi di Indonesia.
                        </p>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="card h-100 border-0 shadow-sm rounded-4 p-4">
                        <div class="icon-box mb-3"><i class="bi bi-bullseye"></i></div>
                        <h4 class="fw-bold">Misi</h4>
                        <ul class="text-muted mb-0">
                            <li>Membangun sistem informasi yang skalabel, rapi, dan mudah dirawat.</li>
                            <li>Menerapkan standar keamanan OWASP Top 10 pada setiap proyek.</li>
                            <li>Memberikan layanan monitoring dan respons insiden yang andal.</li>
                            <li>Mengembangkan talenta engineer yang kompeten dan berintegritas.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TIM ENGINEER -->
    <section class="py-5">
        <div class="container py-3">
            <div class="text-center mb-5">
                <h6 class="text-primary fw-bold text-uppercase">Tim Kami</h6>
                <h2 class="fw-bold">Tim Engineer</h2>
            </div>
            @php
                $team = [
                    ['name' => 'Rizky Pratama', 'role' => 'Lead Web Engineer', 'icon' => 'bi-code-slash'],
                    ['name' => 'Salsabila Putri', 'role' => 'UI/UX Designer', 'icon' => 'bi-palette'],
                    ['name' => 'Fajar Nugraha', 'role' => 'Cloud & Server Engineer', 'icon' => 'bi-hdd-network'],
                    ['name' => 'Anindya Lestari', 'role' => 'Cybersecurity Analyst', 'icon' => 'bi-shield-lock'],
                ];
            @endphp
            <div class="row g-4">
                @foreach ($team as $member)
                    <div class="col-sm-6 col-lg-3">
                        <div class="card h-100 text-center p-4 rounded-4 service-card shadow-sm">
                            <div class="icon-box mx-auto mb-3"><i class="bi {{ $member['icon'] }}"></i></div>
                            <h5 class="fw-bold mb-1">{{ $member['name'] }}</h5>
                            <p class="text-muted small mb-0">{{ $member['role'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection