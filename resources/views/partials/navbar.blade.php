<nav class="navbar" style="background-color: #0e2238;">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Bootstrap" width="30"
                height="24">
        </a>
        <div class="dropdown ms-auto">
            <img src="{{ asset('img/default-profile.png') }}" alt="" class="img-fluid rounded-circle" style="width: 40px; height: 40px;" id="navbarDropdown" data-bs-toggle="dropdown"
            aria-expanded="false">
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Go to web</a></li>
                <li><a class="dropdown-item" href="#">Setting</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item dropdown-footer">Logout</button>
                </form>
            </ul>
        </div>
    </div>
</nav>
