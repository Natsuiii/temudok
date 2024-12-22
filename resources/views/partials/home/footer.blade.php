<footer class="text-white pt-4" style="background-color: #0272ce;">
    <div class="container">
        <div class="row">
            <!-- Logo and Title -->
            {{-- Nanti masukin logo ya fen --}}
            <div class="col-md-3 mb-3">
                <img src="img/logo.png" alt="Temudok Logo" style="max-width: 100px;" class="mb-2">
                <h6 class="fw-bold text-uppercase" style="padding-top: 50px">Temudok</h6>
            </div>

            <!-- Features -->
            {{-- Untuk features ntar berarti link-innya ke page yang sesuai --}}
            <div class="col-md-3 mb-3">
                <h6 class="fw-bold text-uppercase">@lang('message.features')</h6>
                <ul class="list-unstyled">
                    <li><a class="text-white text-decoration-none" href="#about-us">@lang('message.about')</a></li>
                    <li><a class="text-white text-decoration-none" href="{{ route('login') }}">@lang('message.appointment')</a></li>
                    <li><a class="text-white text-decoration-none" href="{{ route('articles') }}">@lang('message.articles')</a></li>
                    <li><a class="text-white text-decoration-none" href="{{ route('tutorial') }}">@lang('message.tutorial')</a></li>
                </ul>
            </div>

            <!-- Company -->
            {{-- Ini gabisa di pencet --}}
            <div class="col-md-3 mb-3">
                <h6 class="fw-bold text-uppercase">@lang('message.company')</h6>
                <ul class="list-unstyled">
                    <li><a class="text-white text-decoration-none" href="#">Blog</a></li>
                    <li><a class="text-white text-decoration-none" href="#">@lang('message.partnerships')</a></li>
                    <li><a class="text-white text-decoration-none" href="#">@lang('message.careers')</a></li>
                    <li><a class="text-white text-decoration-none" href="#">@lang('message.termscondition')</a></li>
                    <li><a class="text-white text-decoration-none" href="#">@lang('message.privacy')</a></li>
                </ul>
            </div>

            <!-- Address -->
            <div class="col-md-3 mb-3">
                <h6 class="fw-bold text-uppercase">@lang('message.address')</h6>
                <p>@lang('message.jakarta'), Indonesia 11530</p>
                <h6 class="fw-bold text-uppercase mt-4">@lang('message.getintouch')</h6>
                <div class="d-flex">
                    <a href="#" class="text-white me-3">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-white me-3">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="text-white">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="text-center py-3" style="background-color:  #013c6c; width: 100%;">
        <p class="mb-0">© 2024 Temudok. All rights reserved.</p>
    </div>
</footer>
