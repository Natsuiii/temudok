{{-- navbar2.blade.php --}}
<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav navbar-align">
            <li class="nav-item dropdown">
                <a class="nav-flag dropdown-toggle" href="#" data-bs-toggle="dropdown">
                    @if(session('locale') == 'id')
                        <img src="{{ asset('img/dashboard/flags/id.png') }}" alt="Indonesia" width="20">
                    @else
                        <img src="{{ asset('img/dashboard/flags/us.png') }}" alt="English" width="20">
                    @endif
                  </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdown">
                    <a class="dropdown-item" href="{{ route('switch.language', ['lang' => 'en']) }}">
                        <img src="{{ asset('img/dashboard/flags/us.png') }}" alt="English" width="20" class="align-middle me-1">
                        <span class="align-middle">English</span>
                    </a>
                    <a class="dropdown-item" href="{{ route('switch.language', ['lang' => 'id']) }}">
                        <img src="{{ asset('img/dashboard/flags/id.png') }}" alt="Indonesia" width="20" class="align-middle me-1">
                        <span class="align-middle">Indonesia</span>
                    </a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-icon js-fullscreen d-none d-lg-block" href="#">
                    <div class="position-relative">
                        <i class="align-middle" data-feather="maximize"></i>
                    </div>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-icon pe-md-0 dropdown-toggle" href="#" data-bs-toggle="dropdown">
                    <img src="{{ Auth::user()->profile_photo_path ? asset('storage/' . Auth::user()->profile_photo_path) : asset('img/dashboard/default-admin.jpeg') }}" class="avatar img-fluid rounded" alt="Jassa">
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="{{ route('home') }}">@lang('message.back')</a>
                    
                    <div class="dropdown-divider"></div>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item dropdown-footer">@lang('message.ds_logout')</button>
                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>