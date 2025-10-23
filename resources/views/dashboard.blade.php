@extends('layouts.app')

@section('title', 'Dashboard - Perpustakaan Digital')

@section('content')
<div class="row mb-4">
    <div class="col-12">
        <div class="card bg-white">
            <div class="card-body p-4">
                <h2 class="mb-2">
                    <i class="bi bi-house-door me-2"></i>Selamat Datang, {{ $username }}!
                </h2>
                <p class="text-muted mb-0">Kelola koleksi buku perpustakaan dengan mudah</p>
            </div>
        </div>
    </div>
</div>

<div class="row g-4">
    <div class="col-md-4">
        <div class="card bg-gradient text-white" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-white-50 mb-2">Total Buku</h6>
                        <h2 class="mb-0">8</h2>
                    </div>
                    <div class="fs-1">
                        <i class="bi bi-book"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card bg-gradient text-white" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-white-50 mb-2">Total Stok</h6>
                        <h2 class="mb-0">130</h2>
                    </div>
                    <div class="fs-1">
                        <i class="bi bi-stack"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card bg-gradient text-white" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-white-50 mb-2">Kategori</h6>
                        <h2 class="mb-0">4</h2>
                    </div>
                    <div class="fs-1">
                        <i class="bi bi-grid"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header bg-white border-0 pt-4">
                <h5 class="mb-0">
                    <i class="bi bi-graph-up me-2"></i>Statistik Koleksi Buku
                </h5>
            </div>
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-6">
                        <div class="p-3 bg-light rounded">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-book text-primary fs-3 me-3"></i>
                                <div>
                                    <small class="text-muted">Novel</small>
                                    <h6 class="mb-0">5 Buku</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 bg-light rounded">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-lightbulb text-warning fs-3 me-3"></i>
                                <div>
                                    <small class="text-muted">Self Improvement</small>
                                    <h6 class="mb-0">2 Buku</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 bg-light rounded">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-clock-history text-info fs-3 me-3"></i>
                                <div>
                                    <small class="text-muted">Sejarah</small>
                                    <h6 class="mb-0">1 Buku</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 bg-light rounded">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-journal-text text-success fs-3 me-3"></i>
                                <div>
                                    <small class="text-muted">Novel Sejarah</small>
                                    <h6 class="mb-0">1 Buku</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card">
            <div class="card-header bg-white border-0 pt-4">
                <h5 class="mb-0">
                    <i class="bi bi-star me-2"></i>Menu Cepat
                </h5>
            </div>
            <div class="card-body">
                <div class="d-grid gap-2">
                    <a href="{{ route('pengelolaan', ['username' => $username]) }}" class="btn btn-outline-primary">
                        <i class="bi bi-list-check me-2"></i>Kelola Buku
                    </a>
                    <a href="{{ route('profile', ['username' => $username]) }}" class="btn btn-outline-secondary">
                        <i class="bi bi-person me-2"></i>Lihat Profile
                    </a>
                    <a href="{{ route('login') }}" class="btn btn-outline-danger">
                        <i class="bi bi-box-arrow-right me-2"></i>Logout
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection