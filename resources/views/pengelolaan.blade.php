@extends('layouts.app')

@section('title', 'Pengelolaan Buku - Perpustakaan Digital')

@section('content')
<div class="row mb-4">
    <div class="col-12">
        <div class="card bg-white">
            <div class="card-body p-4">
                <h2 class="mb-2">
                    <i class="bi bi-list-check me-2"></i>Pengelolaan Koleksi Buku
                </h2>
                <p class="text-muted mb-0">Daftar lengkap koleksi buku perpustakaan</p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th width="5%">No</th>
                                <th width="25%">Judul Buku</th>
                                <th width="20%">Penulis</th>
                                <th width="10%">Tahun</th>
                                <th width="20%">Kategori</th>
                                <th width="10%">Stok</th>
                                <th width="10%">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($books as $book)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="bg-primary bg-opacity-10 rounded p-2 me-3">
                                            <i class="bi bi-book text-primary"></i>
                                        </div>
                                        <strong>{{ $book['judul'] }}</strong>
                                    </div>
                                </td>
                                <td>{{ $book['penulis'] }}</td>
                                <td>
                                    <span class="badge bg-secondary">{{ $book['tahun'] }}</span>
                                </td>
                                <td>
                                    <span class="badge bg-info">{{ $book['kategori'] }}</span>
                                </td>
                                <td>
                                    <strong class="text-primary">{{ $book['stok'] }}</strong> buku
                                </td>
                                <td>
                                    @if($book['stok'] > 15)
                                        <span class="badge bg-success">
                                            <i class="bi bi-check-circle me-1"></i>Tersedia
                                        </span>
                                    @elseif($book['stok'] > 5)
                                        <span class="badge bg-warning">
                                            <i class="bi bi-exclamation-triangle me-1"></i>Terbatas
                                        </span>
                                    @else
                                        <span class="badge bg-danger">
                                            <i class="bi bi-x-circle me-1"></i>Hampir Habis
                                        </span>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-12">
        <h4 class="mb-3">
            <i class="bi bi-grid-3x3-gap me-2"></i>Tampilan Card
        </h4>
    </div>
    @foreach($books as $book)
    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <div class="text-center mb-3">
                    <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                        <i class="bi bi-book fs-2 text-primary"></i>
                    </div>
                </div>
                <h6 class="card-title text-center mb-2">{{ $book['judul'] }}</h6>
                <p class="text-muted text-center small mb-3">{{ $book['penulis'] }}</p>
                
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <small class="text-muted">Tahun:</small>
                    <span class="badge bg-secondary">{{ $book['tahun'] }}</span>
                </div>
                
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <small class="text-muted">Kategori:</small>
                    <span class="badge bg-info">{{ $book['kategori'] }}</span>
                </div>
                
                <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">Stok:</small>
                    <strong class="text-primary">{{ $book['stok'] }} buku</strong>
                </div>
            </div>
            <div class="card-footer bg-white border-0 text-center">
                @if($book['stok'] > 15)
                    <span class="badge bg-success w-100">
                        <i class="bi bi-check-circle me-1"></i>Tersedia
                    </span>
                @elseif($book['stok'] > 5)
                    <span class="badge bg-warning w-100">
                        <i class="bi bi-exclamation-triangle me-1"></i>Terbatas
                    </span>
                @else
                    <span class="badge bg-danger w-100">
                        <i class="bi bi-x-circle me-1"></i>Hampir Habis
                    </span>
                @endif
            </div>
        </div>
    </div>
    @endforeach
</div>

<div class="row mt-4">
    <div class="col-12">
        <div class="card bg-light">
            <div class="card-body text-center">
                <i class="bi bi-info-circle text-primary fs-1 mb-3"></i>
                <p class="mb-0">Total <strong>{{ count($books) }}</strong> koleksi buku tersedia di perpustakaan</p>
            </div>
        </div>
    </div>
</div>
@endsection