<nav class="navbar" style="background-color: #0e2238;">
    <div class="container-fluid d-flex justify-content-between">
        <!-- Logo di kiri -->
        <a class="navbar-brand" href="#">
            <img src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Bootstrap" width="30"
                height="24">
        </a>

        <!-- Profile di kanan -->
        <div class="d-flex align-items-center gap-5">
            <div class="dropstart">
                <div class="d-flex align-items-center" id="navbarDropdown" data-bs-toggle="dropdown"
                aria-expanded="false">
                    <i class="fa-regular fa-bell position-relative" style="color: white; "></i>
                    <p class="notification-count text-white bg-danger rounded position-absolute fw-bold d-flex align-items-center justify-content-center">3</p>
                </div>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    
                </ul>
            </div>
    
            <div class="dropdown">
                <img src="{{ asset('img/default-profile.png') }}" alt="Profile" class="img-fluid rounded-circle"
                    style="width: 40px; height: 40px;" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">
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
    </div>
</nav>
