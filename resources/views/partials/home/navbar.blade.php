<nav class="navbar navbar-expand-lg" style="background-color: #2196F3; margin-bottom: 0; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
  <div class="container-fluid">
      <!-- Brand Logo -->
      <a class="navbar-brand fw-bold text-white" href="#">
        {{-- Ini aku belum urus untuk size nya, jd sesuain aja ya fen --}}
          <img src="" alt="Logo" class="rounded-circle me-2"> Temudok
      </a>
      <!-- Toggler Button -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Navbar Links -->
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <!-- Menu Items -->
          {{-- Linknya di atur ya bang --}}
          <ul class="navbar-nav ms-auto gap-4">
              <li class="nav-item">
                  <a class="nav-link text-white fw-semibold {{ Route::is('home') ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">@lang('message.home')</a>
              </li>
              @if(Route::is('home'))
                  <a class="nav-link text-white fw-semibold" href="#about-us">@lang('message.about')</a>
              @else
                  <a class="nav-link text-white fw-semibold" href="{{ route('home') }}">@lang('message.about')</a>
              @endif
              <li class="nav-item">
                <a class="nav-link text-white fw-semibold" href="{{ route('login') }}">@lang('message.appointment')</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white fw-semibold" href="{{ route('login') }}">@lang('message.history')</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white fw-semibold {{ Route::is('articles', 'articles.detail') ? 'active' : '' }}" href="{{ route('articles') }}">@lang('message.articles')</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link text-white fw-semibold {{ Route::is('tutorial') ? 'active' : '' }}" href="{{ route('tutorial') }}">@lang('message.tutorial')</a>
              </li>
              <li class="nav-item dropdown d-flex align-items-center justify-content-center">
                <a class="" href="#" data-bs-toggle="dropdown">
                    <img src="{{ asset('img/dashboard/flags/us.png') }}" alt="English" width="20">
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
          </ul>
          <a href="{{ route('login') }}" class="btn btn-warning rounded-pill px-4 py-2 fw-semibold ms-4" style="font-size: 0.9rem; transition: background-color 0.3s ease;">@lang('message.login')</a>
        </div>
      </div>
  </div>
</nav>
