<aside id="sidebar" class="expand">
    <div class="d-flex">
        <button class="toggle-btn" type="button">
            <i class="lni lni-grid-alt"></i>
        </button>
        <div class="sidebar-logo">
            <a href="#">Temudok - {{ Auth::user()->role->name }}</a>
        </div>
    </div>
    <ul class="sidebar-nav">
        <li class="sidebar-item" data-bs-toggle="tooltip" data-bs-title="Dashboard" data-bs-placement="right">
            <a href="{{ route('dashboard') }}" class="sidebar-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <i class="fa-solid fa-gauge-high"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link collapsed has-dropdown {{ request()->routeIs('appointment.create', 'appointment.index') ? 'active collapsed' : '' }}" data-bs-toggle="collapse" data-bs-target="#appointment" aria-expanded="false" aria-controls="appointment">
                <i class="fa-solid fa-calendar-check"></i>
                <span>Appointment</span>
            </a>
            <ul id="appointment" class="sidebar-dropdown list-unstyled collapse {{ request()->routeIs('appointment.create', 'appointment.index') ? 'show' : '' }}" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                    <a href="{{ route('appointment.index') }}" class="sidebar-link">Appointment List</a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('appointment.create') }}" class="sidebar-link">Create Appointment</a>
                </li>
            </ul>
        </li>
        <li class="sidebar-item" >
            <a href="#" class="sidebar-link collapsed has-dropdown {{ request()->routeIs('user.create', 'user.index') ? 'active collapsed' : '' }}" data-bs-toggle="collapse" data-bs-target="#user" aria-expanded="false" aria-controls="user">
                <i class="fa-solid fa-user"></i>
                <span>User</span>
            </a>
            <ul id="user" class="sidebar-dropdown list-unstyled collapse {{ request()->routeIs('user.create', 'user.index') ? 'show' : '' }}" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                    <a href="{{ route('user.index') }}" class="sidebar-link">User List</a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('user.create') }}" class="sidebar-link">Create User</a>
                </li>
            </ul>
        </li>
        <li class="sidebar-item">
            <a href="{{ route('calendar') }}" class="sidebar-link">
                <i class="lni lni-popup"></i>
                <span>Calendar</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link">
                <i class="lni lni-cog"></i>
                <span>Setting</span>
            </a>
        </li>
    </ul>
    <div class="sidebar-footer">
        
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <a href="#" class="sidebar-link">
                <i class="lni lni-exit"></i>
                {{-- <span>Logout</span> --}}
                <button type="submit" class="btn btn-link text-decoration-none text-white">Logout</button>
            </a>
        </form>
    </div>
</aside>
