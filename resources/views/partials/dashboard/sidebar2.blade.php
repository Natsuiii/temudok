<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{ route('dashboard') }}">
            <span class= "sidebar-brand-text align-middle">
                Temu
                <sup><small class="badge bg-primary text-uppercase">Dok</small></sup>
            </span>
            <svg class="sidebar-brand-icon align-middle" width="32px" height="32px" viewbox="0 0 24 24" fill="none"
                stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="miter" color="#FFFFFF"
                style="margin-left: -3px">
                <path d="M12 4L20 8.00004L12 12L4 8.00004L12 4Z"></path>
                <path d="M20 12L12 16L4 12"></path>
                <path d="M20 16L12 20L4 16"></path>
            </svg>
        </a>

        <div class="sidebar-user">
            <div class="d-flex justify-content-center">
                <div class="flex-shrink-0">
                    <img src="{{ asset('img/dashboard/default-admin.jpeg') }}" class="avatar img-fluid rounded me-1"
                        alt="Jassa">
                </div>
                <div class="flex-grow-1 ps-2">
                    <a class="sidebar-user-title dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-start">
                        <a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1"
                                data-feather="user"></i> Profile</a>
                        <a class="dropdown-item" href="#"><i class="align-middle me-1"
                                data-feather="pie-chart"></i> Analytics</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="pages-settings.html"><i class="align-middle me-1"
                                data-feather="settings"></i> Settings &
                            Privacy</a>
                        <a class="dropdown-item" href="#"><i class="align-middle me-1"
                                data-feather="help-circle"></i> Help Center</a>
                        <div class="dropdown-divider"></div>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item dropdown-footer">Logout</button>
                        </form>
                    </div>

                    <div class="sidebar-user-subtitle">{{ Auth::user()->role->name }}</div>
                </div>
            </div>
        </div>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Admin
            </li>
            <li class="sidebar-item {{ Route::is('dashboard') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('dashboard') }}">
                    <i class="fa-solid fa-sliders align-middle"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>
            <li class="sidebar-item {{ Route::is('user.*') ? 'active' : '' }}">
                <a data-bs-target="#user" data-bs-toggle="collapse" class="sidebar-link collapsed" aria-expanded="{{ Route::is('user.*') ? 'true' : 'false' }}">
                    <i class="fa-regular fa-user align-middle"></i> <span class="align-middle">User</span>
                </a>
                <ul id="user" class="sidebar-dropdown list-unstyled collapse {{ Route::is('user.*') ? 'show' : '' }}" data-bs-parent="#sidebar">
                    <li class="sidebar-item {{ Route::is('user.create') ? 'active' : '' }}"><a class="sidebar-link" href="{{ route('user.create') }}">Create</a></li>
                    <li class="sidebar-item {{ Route::is('user.index') ? 'active' : '' }}"><a class="sidebar-link" href="{{ route('user.index') }}">List</a></li>
                </ul>
            </li>

            <li class="sidebar-header">
                Doctor
            </li>
            <li class="sidebar-item {{ Route::is('schedule.*') ? 'active' : '' }}">
                <a data-bs-target="#schedule" data-bs-toggle="collapse" class="sidebar-link collapsed" aria-expanded="{{ Route::is('schedule.*') ? 'true' : 'false' }}">
                    <i class="fa-regular fa-calendar align-middle"></i> <span class="align-middle">Manage Schedule</span>
                </a>
                <ul id="schedule" class="sidebar-dropdown list-unstyled collapse {{ Route::is('schedule.*') ? 'show' : '' }}" data-bs-parent="#sidebar">
                    <li class="sidebar-item {{ Route::is('schedule.create') ? 'active' : '' }}"><a class="sidebar-link" href="{{ route('schedule.create') }}">Create</a></li>
                    <li class="sidebar-item {{ Route::is('schedule.index') ? 'active' : '' }}"><a class="sidebar-link" href="{{ route('schedule.index') }}">List</a></li>
                </ul>
            </li>
            <li class="sidebar-item {{ Route::is('article.*') ? 'active' : '' }}">
                <a data-bs-target="#article" data-bs-toggle="collapse" class="sidebar-link collapsed" aria-expanded="{{ Route::is('article.*') ? 'true' : 'false' }}">
                    <i class="fa-regular fa-newspaper align-middle"></i> <span class="align-middle">Article</span>
                </a>
                <ul id="article" class="sidebar-dropdown list-unstyled collapse {{ Route::is('article.*') ? 'show' : '' }}" data-bs-parent="#sidebar">
                    <li class="sidebar-item {{ Route::is('article.create') ? 'active' : '' }}"><a class="sidebar-link" href="{{ route('article.create') }}">Create</a></li>
                    <li class="sidebar-item {{ Route::is('article.index') ? 'active' : '' }}"><a class="sidebar-link" href="{{ route('article.index') }}">List</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
