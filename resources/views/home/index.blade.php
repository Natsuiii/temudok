@extends('layouts.home')

@section('content')
<div class="hero-section d-flex align-items-center justify-content-center text-center m-0 p-0 position-relative" 
     style="height: 80vh; background: url('{{ asset('img/home/banner.jpg') }}') no-repeat center center; background-size: cover;">

    <!-- Overlay -->
    <div style="background-color: rgba(0, 0, 0, 0.6); z-index: 1;" class="position-absolute top-0 left-0 w-100 h-100"></div>
    
    <!-- Content -->
    <div class="container position-relative" style="z-index: 2; color: #fff;">
        <h1 class="fw-bold mb-3 display-4 m-0">@lang('message.hero_title')</h1>
        <p class="mb-4 lead m-auto" style="max-width: 750px;">
            @lang('message.hero_description')
        </p>
        
        <!-- Features Section -->
        <div class="features-section d-flex justify-content-center mt-4 text-white">
            <div class="feature-item text-center mx-3">
                <div class="icon" style="font-size: 2.5rem; color: #17a2b8;">
                    <i class="fas fa-calendar-check"></i>
                </div>
                <h5 class="mt-2" style="font-size: 1.1rem; font-weight: bold;">@lang('message.online_booking')</h5>
            </div>
            <div class="feature-item text-center mx-3">
                <div class="icon" style="font-size: 2.5rem; color: #28a745;">
                    <i class="fas fa-user-md"></i>
                </div>
                <h5 class="mt-2" style="font-size: 1.1rem; font-weight: bold;">@lang('message.medical_support')</h5>
            </div>
            <div class="feature-item text-center mx-3">
                <div class="icon" style="font-size: 2.5rem; color: #ffc107;">
                    <i class="fas fa-heartbeat"></i>
                </div>
                <h5 class="mt-2" style="font-size: 1.1rem; font-weight: bold;">@lang('message.healty_first')</h5>
            </div>
        </div>

        <!-- Learn More Button -->
        <a href="{{ url('#about-us') }}" class="btn btn-outline-light px-4 py-2 mt-4 text-decoration-none" 
           style="font-size: 1rem; border: 2px solid #fff; border-radius: 25px; transition: all 0.3s ease-in-out;">
           @lang('message.learn_more')
        </a>
    </div>
</div>

<div class="container my-5">
    <!-- What is Temudok? -->
    <div class="text-center mb-5">
        <h1 class="fw-bold" id="about-us">@lang('message.about_title')</h1>
        <p class="lead" style="line-height: 1.6;">
            @lang('message.about_description')
        </p>
    </div>

    <!-- Our Mission and Story -->
    <div class="row mb-4 align-items-center" style="background-color: # f5f5f5; padding: 2rem;">
        <div class="col-md-6">
          <img src="{{ asset('/img/home/mission.jpg') }}" alt="Our Mission" class="img-fluid rounded w-100 h-auto object-fit-cover">
        </div>
        <div class="col-md-6">
          <h2 class="fw-bold">@lang('message.mission_title')</h2>
          <p class="lead" style="margin-right: 1rem; text-align: justify;">
            @lang('message.mission_description')
          </p>
        </div>
      </div>
      <div class="row mb-4 align-items-center" style="background-color: #f5f5f5; padding: 2rem;">
        <div class="col-md-6">
          <h2 class="fw-bold">@lang('message.history_title')</h2>
          <p class="lead" style="margin-right: 1rem; text-align: justify;">
            @lang('message.history_description')
          </p>
        </div>
        <div class="col-md-6">
          <img src="{{ asset('/img/home/journey.png') }}" alt="Our Story" class="img-fluid rounded w-100 h-auto object-fit-cover">
        </div>
      </div>
      
    <!-- Our Member -->
    <div class="text-center mb-5">
        <h2 class="fw-bold">@lang('message.team_title')</h2>
        <div class="row mt-4">
            <div class="col-md-4 mb-3">
                <img src="{{ asset('/img/home/team1.jpeg') }}" alt="CEO" class="img-fluid rounded-circle object-fit-cover" style="width: 150px; height: 150px;">
                <h5 class="mt-3">Owen Tamashi Buntoro</h5>
                <p>CEO</p>
            </div>
            <div class="col-md-4 mb-3">
                <img src="{{ asset('/img/home/team2.jpeg') }}" alt="Lead Developer" class="img-fluid rounded-circle object-fit-cover" style="width: 150px; height: 150px;">
                <h5 class="mt-3">Be Justin Regan</h5>
                <p>Lead Developer</p>
            </div>
            <div class="col-md-4 mb-3">
                <img src="{{ asset('/img/home/team3.jpeg') }}" alt="Product Management" class="img-fluid rounded-circle object-fit-cover" style="width: 150px; height: 150px;">
                <h5 class="mt-3">Kevyn Aprilyanto</h5>
                <p>Product Management</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 mb-3">
                <img src="{{ asset('/img/home/team4.jpg') }}" alt="Front End Developer" class="img-fluid rounded-circle object-fit-cover" style="width: 150px; height: 150px;">
                <h5 class="mt-3">Tiara Intan Kusuma</h5>
                <p>Front End Developer</p>
            </div>
            <div class="col-md-4 mb-3">
                <img src="{{ asset('/img/home/team5.jpeg') }}" alt="Back End Developer" class="img-fluid rounded-circle object-fit-cover" style="width: 150px; height: 150px;">
                <h5 class="mt-3">Fendy Wijaya</h5>
                <p>Back End Developer</p>
            </div>
        </div>
    </div>

    <!-- Frequently Asked Questions -->
    <div class="text-center mb-5">
        <h2 class="fw-bold">@lang('message.faq_title')</h2>
        <div class="accordion mt-4" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq1">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                        @lang('message.about_title')
                    </button>
                </h2>
                <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="faq1" data-bs-parent="#faqAccordion">
                    <div class="accordion-body no-padding">
                        @lang('message.faq_1_answer')
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="faq2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                        @lang('message.faq_2')
                    </button>
                </h2>
                <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="faq2" data-bs-parent="#faqAccordion">
                    <div class="accordion-body no-padding">
                        @lang('message.faq_2_answer')
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="faq3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                        @lang('message.faq_3')
                    </button>
                </h2>
                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="faq3" data-bs-parent="#faqAccordion">
                    <div class="accordion-body no-padding">
                        @lang('message.faq_3_answer')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection