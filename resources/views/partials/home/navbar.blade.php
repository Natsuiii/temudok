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
                  <a class="nav-link active text-white fw-semibold" aria-current="page" href="{{ route('home') }}">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link text-white fw-semibold" href="#about-us">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white fw-semibold" href="{{ route('login') }}">Appointment</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white fw-semibold" href="{{ route('login') }}">History</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white fw-semibold" href="#">Articles</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link text-white fw-semibold" href="#">Tutorial</a>
              </li>
          </ul>
          <a href="{{ route('login') }}" class="btn btn-warning rounded-pill px-4 py-2 fw-semibold ms-4" style="font-size: 0.9rem; transition: background-color 0.3s ease;">Login</a>
        </div>
      </div>
  </div>
</nav>
