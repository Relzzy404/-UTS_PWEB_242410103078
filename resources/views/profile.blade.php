@extends('layouts.app')

@section('title', 'Profile - Perpustakaan Digital')

@section('content')
<div class="row mb-4">
    <div class="col-12">
        <div class="card bg-white">
            <div class="card-body p-4">
                <h2 class="mb-2">
                    <i class="bi bi-person-circle me-2"></i>Profile Pengguna
                </h2>
                <p class="text-muted mb-0">Informasi akun Anda</p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-4 mb-4">
        <div class="card text-center">
            <div class="card-body p-5">
                <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 120px; height: 120px;">
                    <i class="bi bi-person fs-1 text-primary"></i>
                </div>
                <h4 class="mb-2">{{ $username }}</h4>
                <p class="text-muted mb-3">Administrator Perpustakaan</p>
                <span class="badge bg-success mb-3">
                    <i class="bi bi-check-circle me-1"></i>Aktif
                </span>
                <div class="d-grid gap-2 mt-4">
                    <button class="btn btn-outline-primary">
                        <i class="bi bi-pencil me-2"></i>Edit Profile
                    </button>
                    <button class="btn btn-outline-secondary">
                        <i class="bi bi-key me-2"></i>Ganti Password
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-8">
        <div class="card mb-4">
            <div class="card-header bg-white">
                <h5 class="mb-0">
                    <i class="bi bi-info-circle me-2"></i>Informasi Personal
                </h5>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-4">
                        <strong class="text-muted">Username:</strong>
                    </div>
                    <div class="col-md-8">
                        <span class="text-dark">{{ $username }}</span>
                    </div>
                </div>
                <hr>
                <div class="row mb-3">
                    <div class="col-md-4">
                        <strong class="text-muted">Email:</strong>
                    </div>
                    <div class="col-md-8">
                        <span class="text-dark">{{ strtolower($username) }}@perpustakaan.id</span>
                    </div>
                </div>
                <hr>
                <div class="row mb-3">
                    <div class="col-md-4">
                        <strong class="text-muted">Role:</strong>
                    </div>
                    <div class="col-md-8">
                        <span class="badge bg-primary">Administrator</span>
                    </div>
                </div>
                <hr>
                <div class="row mb-3">
                    <div class="col-md-4">
                        <strong class="text-muted">Tanggal Bergabung:</strong>
                    </div>
                    <div class="col-md-8">
                        <span class="text-dark">1 Oktober 2025</span>
                    </div>
                </div>
                <hr>
                <div class="row mb-0">
                    <div class="col-md-4">
                        <strong class="text-muted">Status Akun:</strong>
                    </div>
                    <div class="col-md-8">
                        <span class="badge bg-success">
                            <i class="bi bi-check-circle me-1"></i>Aktif
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header bg-white">
                <h5 class="mb-0">
                    <i class="bi bi-graph-up me-2"></i>Aktivitas
                </h5>
            </div>
            <div class="card-body">
                <div class="row text-center">
                    <div class="col-md-4 mb-3">
                        <div class="p-3 bg-light rounded">
                            <i class="bi bi-book-fill text-primary fs-2 mb-2 d-block"></i>
                            <h4 class="mb-1">8</h4>
                            <small class="text-muted">Buku Dikelola</small>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="p-3 bg-light rounded">
                            <i class="bi bi-clock-history text-info fs-2 mb-2 d-block"></i>
                            <h4 class="mb-1">24</h4>
                            <small class="text-muted">Hari Aktif</small>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="p-3 bg-light rounded">
                            <i class="bi bi-journal-check text-success fs-2 mb-2 d-block"></i>
                            <h4 class="mb-1">42</h4>
                            <small class="text-muted">Transaksi</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header bg-white">
                <h5 class="mb-0">
                    <i class="bi bi-bell me-2"></i>Notifikasi & Preferensi
                </h5>
            </div>
            <div class="card-body">
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input" type="checkbox" id="emailNotif" checked>
                    <label class="form-check-label" for="emailNotif">
                        Terima notifikasi via email
                    </label>
                </div>
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input" type="checkbox" id="stockAlert" checked>
                    <label class="form-check-label" for="stockAlert">
                        Alert stok buku menipis
                    </label>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="newBookAlert">
                    <label class="form-check-label" for="newBookAlert">
                        Notifikasi buku baru
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-12">
        <div class="card bg-gradient text-white" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
            <div class="card-body text-center p-4">
                <h5 class="text-white mb-2">Selamat Bekerja, {{ $username }}!</h5>
                <p class="text-white-50 mb-0">Terus tingkatkan pelayanan perpustakaan untuk masyarakat</p>
            </div>
        </div>
    </div>
</div>
@endsection