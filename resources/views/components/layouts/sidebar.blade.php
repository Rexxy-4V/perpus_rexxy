<nav class="col-md-2 bg-dark sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active text-white" href="{{ route('home') }}">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('member') }}">
                    <span data-feather="users"></span>
                    Manage Members
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('buku') }}">
                    <span data-feather="book"></span>
                    Manage Books
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('pinjam') }}">
                    <span data-feather="file"></span>
                    Manage Loans
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('kembali') }}">
                    <span data-feather="check-circle"></span>
                    Manage Returns
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('kategori') }}">
                    <span data-feather="tag"></span>
                    Manage Categories
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('user') }}">
                    <span data-feather="user"></span>
                    Manage Staff
                </a>
            </li>
        </ul>
    </div>
</nav>

<!-- Sidebar -->
{{-- <div class="sidebar">
    <div class="logo">
        <svg width="100" height="40" viewBox="0 0 100 40">
            <path d="M12,15 L30,15 L24,27 L12,27 Z" fill="#4270F4" />
            <text x="38" y="27" fill="#262A39" font-size="20" font-weight="bold">
                Rexxy
            </text>
        </svg>
    </div>

    <div class="nav-menu">
        <a href="#" class="nav-item active">
            <i class="fas fa-home"></i>
            <span>Home</span>
        </a>
        <a href="#" class="nav-item">
            <i class="fas fa-user-circle"></i>
            <span>Account</span>
        </a>
        <a href="#" class="nav-item">
            <i class="fas fa-wallet"></i>
            <span>Payments</span>
        </a>
        <a href="#" class="nav-item">
            <i class="fas fa-sliders-h"></i>
            <span>Preferences</span>
        </a>
        <a href="#" class="nav-item">
            <i class="fas fa-comment-dots"></i>
            <span>Inbox</span>
        </a>
        <a href="#" class="nav-item">
            <i class="fas fa-chart-line"></i>
            <span>Insights</span>
        </a>
        <a href="#" class="nav-item">
            <i class="fas fa-life-ring"></i>
            <span>Help Center</span>
        </a>
    </div> --}}
