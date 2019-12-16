<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fas fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span
                    class="dropdown-item dropdown-header">{{-- Auth::user()->nama_depan . Auth::user()->nama_belakang --}}</span>
                <div class="dropdown-divider"></div>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="dropdown-item"><i class="fas fa-sign-out-alt mr-2"></i> Logout</button>
                </form>
            </div>
        </li>
    </ul>
</nav>