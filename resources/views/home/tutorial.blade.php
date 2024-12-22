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
            <h3 class="pb-3">@lang('message.tutorial_headbar')</h3>
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
                            <h5 class="card-title">@lang('message.tutor1')</h5>
                            <p class="card-text">@lang('message.tutor1_desc')</p>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-outline-primary w-8" data-bs-target="#atmStepsCarousel" data-bs-slide="prev">@lang('message.prev')</button>
                                <button class="btn btn-primary w-8" data-bs-target="#atmStepsCarousel" data-bs-slide="next">@lang('message.next')</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="card mx-auto" style="width: 60rem;">
                        <img src="{{ asset('icons/2.png') }}" alt="">
                        <div class="card-body">
                            <h5 class="card-title">@lang('message.tutor2')</h5>
                            <p class="card-text">@lang('message.tutor2_desc')</p>
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
                            <h5 class="card-title">@lang('message.tutor3')</h5>
                            <p class="card-text">@lang('message.tutor3_desc')</p>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-outline-primary w-8" data-bs-target="#atmStepsCarousel" data-bs-slide="prev">@lang('message.prev')</button>
                                <button class="btn btn-primary w-8" data-bs-target="#atmStepsCarousel" data-bs-slide="next">@lang('message.next')</button>
                            </div>
                        </div>                         
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="carousel-item">
                    <div class="card mx-auto" style="width: 60rem;">
                        <img src="{{ asset('icons/4.png') }}" alt="">
                        <div class="card-body">
                            <h5 class="card-title">@lang('message.tutor4')</h5>
                            <p class="card-text">@lang('message.tutor4_desc')</p>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-outline-primary w-8" data-bs-target="#atmStepsCarousel" data-bs-slide="prev">@lang('message.prev')</button>
                                <button class="btn btn-primary w-8" data-bs-target="#atmStepsCarousel" data-bs-slide="next">@lang('message.next')</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 5 -->
                <div class="carousel-item">
                    <div class="card mx-auto" style="width: 60rem;">
                        <img src="{{ asset('icons/5.png') }}" alt="">
                        <div class="card-body">
                            <h5 class="card-title">@lang('message.tutor5')</h5>
                            <p class="card-text">@lang('message.tutor5_desc')</p>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-outline-primary w-8" data-bs-target="#atmStepsCarousel" data-bs-slide="prev">@lang('message.prev')</button>
                                <button class="btn btn-primary w-8" data-bs-target="#atmStepsCarousel" data-bs-slide="next">@lang('message.next')</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 6 -->
                <div class="carousel-item">
                    <div class="card mx-auto" style="width: 60rem;">
                        <img src="{{ asset('icons/6.png') }}" alt="">
                        <div class="card-body">
                            <h5 class="card-title">@lang('message.tutor6')</h5>
                            <p class="card-text">@lang('message.tutor6_desc')</p>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-outline-primary w-8" data-bs-target="#atmStepsCarousel" data-bs-slide="prev">@lang('message.prev')</button>
                                <button class="btn btn-primary w-8" data-bs-target="#atmStepsCarousel" data-bs-slide="next">@lang('message.next')</button>
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