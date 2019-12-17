<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('dashboard') }}" class="brand-link">
        <span class="brand-text font-weight-light">SPDE</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('surat-masuk.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-inbox"></i>
                        <p>
                            Surat Masuk
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('surat-keluar.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-paper-plane"></i>
                        <p>
                            Surat Keluar
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('disposisi.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-share"></i>
                        <p>
                            Surat Disposisi
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('petugas.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Manage Petugas
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>