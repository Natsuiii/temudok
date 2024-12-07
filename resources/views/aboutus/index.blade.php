@extends('layouts.dashboard')

@push('css')
    <link rel="stylesheet" href="about-us/style.css">
@endpush

@section('content')

    <!-- About -->
    <section class="about-section py-5">
        <div class="container-fluid px-4">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-4">
                    <img src="img/aboutus.jpg" class="img-fluid rounded" alt="Temudok Doctors">
                </div>
                <div class="col-lg-6">
                    <h2 class="fw-bold">Welcome to Temudok!</h2>
                    <p class="text-muted" style="text-align: justify;">
                        At Temudok, we simplify your healthcare journey by connecting you with top-rated doctors 
                        at your convenience. Our platform empowers you to book appointments, access medical 
                        information, and manage your health in one place.
                    </p>
                    <ul class="list-unstyled">
                        <li style="margin-bottom: 20px;">
                            <i class="fa-solid fa-check-circle text-success me-2"></i> Trusted and Verified Doctors
                        </li>
                        <li style="margin-bottom: 20px;">
                            <i class="fa-solid fa-check-circle text-success me-2"></i> Easy Booking Process
                        </li>
                        <li style="margin-bottom: 20px;">
                            <i class="fa-solid fa-check-circle text-success me-2"></i> Secure and Reliable Platform
                        </li>
                    </ul>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- Mission -->
    <section class="mission-section bg-light py-5">
        <div class="container text-center">
            <h2 class="fw-bold mb-4">Our Mission</h2>
            <p class="text-muted mb-5">
                At the core of our mission is enhancing access to healthcare, ensuring everyone, regardless of location or background, 
                has the opportunity to connect with medical professionals. We aim to revolutionize healthcare by providing an easy-to-use 
                platform where technology bridges the gap between patients and providers for a healthier future.
            </p>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <i class="fa-solid fa-heart-circle-check text-primary fa-2x mb-3"></i>
                            <h5 class="card-title">Compassionate Care</h5>
                            <p class="card-text text-muted" style="text-align: justify;">We understand that every patient is unique, and we prioritize your health and well-being with empathy. Our platform ensures that care is both personalized and compassionate, putting you at the center of everything we do. By connecting you with doctors who care, we strive to improve your health outcomes and experience.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <i class="fa-solid fa-user-md text-success fa-2x mb-3"></i>
                            <h5 class="card-title">Expert Network</h5>
                            <p class="card-text text-muted" style="text-align: justify;">Our platform gives you access to a vast network of highly experienced and skilled medical professionals. Whether you need specialized advice or general health support, we provide a wide range of medical expertise that you can trust. You can choose the right expert for your needs with ease and confidence.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <i class="fa-solid fa-shield-halved text-warning fa-2x mb-3"></i>
                            <h5 class="card-title">Secure Platform</h5>
                            <p class="card-text text-muted" style="text-align: justify;">Security and privacy are fundamental to the way we operate. We use cutting-edge encryption and data protection techniques to ensure that your medical information remains confidential and safe. Your trust is our priority, and we’re committed to maintaining a secure platform where you can receive care with peace of mind.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <!-- Team -->
    <section class="team-section py-5">
        <div class="container text-center">
            <h2 class="fw-bold mb-4">Meet Our Team</h2>
            <p class="text-muted mb-5">The people behind the platform making healthcare accessible for everyone.</p>
            <div class="row g-3" style="row-gap: 10px;">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="card border-0 shadow-sm" style="height: 450px; max-width: 300px; margin: 0 auto;">
                            <img src="img/team1.jpeg" class="card-img-top mx-auto mt-3" 
                                 style="height: 350px; width: 100%; object-fit: cover; object-position: center;" 
                                 alt="Owen Tamashi Buntoro">
                            <div class="card-body">
                                <h5 class="card-title">Owen Tamashi Buntoro</h5>
                                <p class="card-text text-muted">Lead Developer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card border-0 shadow-sm" style="height: 450px; max-width: 300px; margin: 0 auto;">
                            <img src="img/team2.jpeg" class="card-img-top mx-auto mt-3" 
                                 style="height: 350px; width: 100%; object-fit: cover; object-position: center;" 
                                 alt="Kevyn Aprilyanto">
                            <div class="card-body">
                                <h5 class="card-title">Kevyn Aprilyanto</h5>
                                <p class="card-text text-muted">Product Manager</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card border-0 shadow-sm" style="height: 450px; max-width: 300px; margin: 0 auto;">
                            <img src="img/team3.jpeg" class="card-img-top mx-auto mt-3" 
                                 style="height: 350px; width: 100%; object-fit: cover; object-position: center;" 
                                 alt="Be Justin Regan">
                            <div class="card-body">
                                <h5 class="card-title">Be Justin Regan</h5>
                                <p class="card-text text-muted">Quality Assurance</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-4 offset-lg-2 col-md-6">
                        <div class="card border-0 shadow-sm" style="height: 450px; max-width: 300px; margin: 0 auto;">
                            <img src="img/team4.jpeg" class="card-img-top mx-auto mt-3" 
                                 style="height: 350px; width: 100%; object-fit: cover; object-position: center;" 
                                 alt="Tiara Intan Kusuma">
                            <div class="card-body">
                                <h5 class="card-title">Tiara Intan Kusuma</h5>
                                <p class="card-text text-muted">UI/UX Designer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card border-0 shadow-sm" style="height: 450px; max-width: 300px; margin: 0 auto;">
                            <img src="img/team5.jpeg" class="card-img-top mx-auto mt-3" 
                                 style="height: 350px; width: 100%; object-fit: cover; object-position: center;" 
                                 alt="Fendy Wijaya">
                            <div class="card-body">
                                <h5 class="card-title">Fendy Wijaya</h5>
                                <p class="card-text text-muted">UI/UX Designer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection
