@extends('layouts.home')

@section('content')
    <style>
        .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            text-align: center;
        }
        .card img {
            max-width: 120px;
            margin: 20px auto;
        }
        .carousel-indicators [data-bs-target] {
            background-color: #333;
        }
    </style>

    <div class="container py-5">
        <div class="d-flex justify-content-center">
            <h3 class="pb-3"></h3>
        </div>

        <!-- Carousel -->
        <div id="atmStepsCarousel" class="carousel slide" data-bs-ride="carousel">
            <!-- Indicators -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#atmStepsCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#atmStepsCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#atmStepsCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#atmStepsCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#atmStepsCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#atmStepsCarousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
            </div>

            <!-- Slides -->
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="card mx-auto" style="width: 60rem;">
                        <img src="{{ asset('icons/1.png') }}" alt="">
                        <div class="card-body">
                            <h5 class="card-title">1.  Login untuk Mengakses Lebih Lanjut</h5>
                            <p class="card-text">Anda perlu login untuk bisa mengakses fitur-fitur unggulan kami. Jika Anda belum memiliki akun, Anda dapat mendaftar terlebih dahulu agar bisa login ke TemuDok.</p>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-outline-primary w-8" data-bs-target="#atmStepsCarousel" data-bs-slide="prev">@lang('message.prev')</button>
                                <button class="btn btn-primary w-8" data-bs-target="#atmStepsCarousel" data-bs-slide="next">NEXT</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="card mx-auto" style="width: 60rem;">
                        <img src="{{ asset('icons/2.png') }}" alt="">
                        <div class="card-body">
                            <h5 class="card-title">2.  Pilih Menu Appointment</h5>
                            <p class="card-text">Setelah berhasil login, Anda akan masuk ke Dashboard. Selanjutnya, Anda dapat memilih menu appointment untuk melakukan booking konsultasi.</p>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-outline-primary w-8" data-bs-target="#atmStepsCarousel" data-bs-slide="prev">@lang('message.prev')</button>
                                <button class="btn btn-primary w-8" data-bs-target="#atmStepsCarousel" data-bs-slide="next">@lang('message.next')</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item">
                    <div class="card mx-auto" style="width: 60rem;">
                        <img src="{{ asset('icons/3.png') }}" alt="">
                        <div class="card-body">
                            <h5 class="card-title">3.  Pilih Dokter yang Diinginkan</h5>
                            <p class="card-text">Di menu appointment, Anda dapat memilih dokter yang tersedia. Anda bebas memilih dokter yang mungkin Anda sudah kenal atau mencari pengalaman konsultasi baru dengan dokter kami.</p>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-outline-primary w-8" data-bs-target="#atmStepsCarousel" data-bs-slide="prev">@lang('message.prev')</button>
                                <button class="btn btn-primary w-8" data-bs-target="#atmStepsCarousel" data-bs-slide="next"></button>
                            </div>
                        </div>                         
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="carousel-item">
                    <div class="card mx-auto" style="width: 60rem;">
                        <img src="{{ asset('icons/4.png') }}" alt="">
                        <div class="card-body">
                            <h5 class="card-title">4.  Booking Dokter yang Telah Dipilih</h5>
                            <p class="card-text">Anda dapat memilih jadwal konsultasi dengan dokter yang telah Anda pilih. TemuDok juga dapat menyesuaikan ketersediaan jadwal dokter sehingga Anda hanya dapat memilih jadwal yang memang tersedia untuk dokter tersebut.</p>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-outline-primary w-8" data-bs-target="#atmStepsCarousel" data-bs-slide="prev">@lang('message.prev')</button>
                                <button class="btn btn-primary w-8" data-bs-target="#atmStepsCarousel" data-bs-slide="next">NEXT</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 5 -->
                <div class="carousel-item">
                    <div class="card mx-auto" style="width: 60rem;">
                        <img src="{{ asset('icons/5.png') }}" alt="">
                        <div class="card-body">
                            <h5 class="card-title">5.  Lakukan Pembayaran</h5>
                            <p class="card-text">Setelah booking, Anda dapat melanjutkan proses dengan melakukan pembayaran. Kami mendukung pembayaran dengan berbagai metode sehingga Anda hanya perlu memilih metode pembayaran yang sesuai dengan Anda.</p>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-outline-primary w-8" data-bs-target="#atmStepsCarousel" data-bs-slide="prev">@lang('message.prev')</button>
                                <button class="btn btn-primary w-8" data-bs-target="#atmStepsCarousel" data-bs-slide="next">NEXT</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 6 -->
                <div class="carousel-item">
                    <div class="card mx-auto" style="width: 60rem;">
                        <img src="{{ asset('icons/6.png') }}" alt="">
                        <div class="card-body">
                            <h5 class="card-title">6.  Selesai</h5>
                            <p class="card-text">Proses selesai! Anda akan memperoleh tautan Zoom untuk berkonsultasi secara daring dengan dokter yang telah Anda pilih. Selamat berkonsultasi dengan nyaman dan aman!</p>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-outline-primary w-8" data-bs-target="#atmStepsCarousel" data-bs-slide="prev">@lang('message.prev')</button>
                                <button class="btn btn-primary w-8" data-bs-target="#atmStepsCarousel" data-bs-slide="next">NEXT</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#atmStepsCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#atmStepsCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

@endsection