<footer class="bg-dark text-white py-4 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-3 mb-md-0">
                <h5>
                    <i class="bi bi-book-fill me-2"></i>Perpustakaan Digital
                </h5>
                <p class="text-white-50 mb-0">
                    Sistem pengelolaan perpustakaan modern dan efisien
                </p>
            </div>
            <div class="col-md-3 mb-3 mb-md-0">
                <h6 class="mb-3">Menu</h6>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <a href="{{ route('dashboard', ['username' => request('username', 'Guest')]) }}" 
                           class="text-white-50 text-decoration-none">
                            <i class="bi bi-chevron-right me-1"></i>Dashboard
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('pengelolaan', ['username' => request('username', 'Guest')]) }}" 
                           class="text-white-50 text-decoration-none">
                            <i class="bi bi-chevron-right me-1"></i>Pengelolaan
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('profile', ['username' => request('username', 'Guest')]) }}" 
                           class="text-white-50 text-decoration-none">
                            <i class="bi bi-chevron-right me-1"></i>Profile
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <h6 class="mb-3">Kontak</h6>
                <ul class="list-unstyled text-white-50">
                    <li class="mb-2">
                        <i class="bi bi-envelope me-2"></i>info@perpustakaan.id
                    </li>
                    <li class="mb-2">
                        <i class="bi bi-telephone me-2"></i>+62 812-3456-7890
                    </li>
                    <li class="mb-2">
                        <i class="bi bi-geo-alt me-2"></i>Jember, Indonesia
                    </li>
                </ul>
            </div>
        </div>
        <hr class="bg-white-50 my-4">
        <div class="row">
            <div class="col-12 text-center">
                <p class="text-white-50 mb-0">
                    &copy; 2025 Perpustakaan Digital. Made with relzz
                </p>
            </div>
        </div>
    </div>
</footer>