<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('dashboard', ['username' => request('username', 'Guest')]) }}">
            <i class="bi bi-book-fill me-2"></i>
            <strong>Perpustakaan Digital</strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" 
                       href="{{ route('dashboard', ['username' => request('username', 'Guest')]) }}">
                        <i class="bi bi-house-door me-1"></i>Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('pengelolaan') ? 'active' : '' }}" 
                       href="{{ route('pengelolaan', ['username' => request('username', 'Guest')]) }}">
                        <i class="bi bi-list-check me-1"></i>Pengelolaan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('profile') ? 'active' : '' }}" 
                       href="{{ route('profile', ['username' => request('username', 'Guest')]) }}">
                        <i class="bi bi-person-circle me-1"></i>Profile
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="{{ route('login') }}">
                        <i class="bi bi-box-arrow-right me-1"></i>Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>