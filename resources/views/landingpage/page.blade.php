@extends('landingpage.layout.dashboard')

@section('content')
<div class="hero-section d-flex align-items-center justify-content-center text-center" 
     style="height: 80vh; margin: 0; padding: 0; background: url('{{ asset('img/banner.jpg') }}') no-repeat center center; background-size: cover; position: relative;">

    <!-- Overlay -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.6); z-index: 1;"></div>
    
    <!-- Content -->
    <div class="container" style="position: relative; z-index: 2; color: #fff;">
        <h1 class="fw-bold mb-3" style="font-size: 3.5rem; margin: 0; padding: 0;">Temukan Dokter, Temukan Solusi</h1>
        <p class="mb-4" style="font-size: 1.2rem; line-height: 1.6; margin: 0 auto; padding: 0; max-width: 750px; text-align: center;">
            Temudok mempermudah Anda untuk menemukan dan memesan jadwal konsultasi dokter terbaik sesuai kebutuhan, kapan saja dan di mana saja.
        </p>
        

        <!-- Features Section -->
        <div class="features-section d-flex justify-content-center mt-4" style="color: #fff;">
            <div class="feature-item text-center mx-3">
                <div class="icon" style="font-size: 2.5rem; color: #17a2b8;">
                    <i class="fas fa-calendar-check"></i>
                </div>
                <h5 class="mt-2" style="font-size: 1.1rem; font-weight: bold;">Online Booking</h5>
            </div>
            <div class="feature-item text-center mx-3">
                <div class="icon" style="font-size: 2.5rem; color: #28a745;">
                    <i class="fas fa-user-md"></i>
                </div>
                <h5 class="mt-2" style="font-size: 1.1rem; font-weight: bold;">Medical Support</h5>
            </div>
            <div class="feature-item text-center mx-3">
                <div class="icon" style="font-size: 2.5rem; color: #ffc107;">
                    <i class="fas fa-heartbeat"></i>
                </div>
                <h5 class="mt-2" style="font-size: 1.1rem; font-weight: bold;">Healthy First</h5>
            </div>
        </div>

        <!-- Learn More Button -->
        {{-- LEARN MORE NTR LGSG NGESCROLL AJA KE ABOUT US --}}
        <a href="{{ url('/about-us') }}" class="btn btn-outline-light px-4 py-2 mt-4 " 
           style="font-size: 1rem; text-decoration: none; background-color: #ffffff color: #007bff; border: 2px solid #fff; border-radius: 25px; transition: all 0.3s ease-in-out;">
           Learn More
        </a>
    </div>
</div>

<div class="container my-5">
    <!-- What is Temudok? -->
    <div class="text-center mb-5">
        <h1 class="fw-bold">What is Temudok?</h1>
        <p style="font-size: 1.2rem; line-height: 1.6;">
            Temudok adalah platform online booking untuk kebutuhan medis yang mempermudah Anda 
            menemukan dokter terbaik, memesan konsultasi, dan mengatur jadwal secara efisien, 
            kapan saja dan di mana saja. Solusi praktis untuk kesehatan Anda!
        </p>
    </div>

    <!-- Our Mission and Story -->
    <div class="row mb-4 align-items-center" style="background-color: #f5f5f5; padding: 2rem;">
        <div class="col-md-6">
          <img src="/img/mission.jpg" alt="Our Mission" class="img-fluid rounded" style="width: 100%; height: 300px; object-fit: cover;">
        </div>
        <div class="col-md-6">
          <h2 class="fw-bold" style="max-width: 500px;">Our Mission: Helping Everyone Stay Healthy</h2>
          <p style="font-size: 1rem; line-height: 1.6; margin-right: 1rem; text-align: justify; text-justify: inter-word; max-width: 500px;">
            Kami percaya kesehatan adalah hak semua orang. Misi kami adalah membantu Anda dengan akses yang mudah ke layanan medis terbaik di sekitar Anda, memadukan teknologi modern dengan kebutuhan sehari-hari. Kami berkomitmen untuk mempermudah akses kesehatan bagi semua orang, sehingga setiap individu dapat menjalani hidup yang sehat dan bahagia.
          </p>
        </div>
      </div>
      <div class="row mb-4 align-items-center" style="background-color: #f5f5f5; padding: 2rem;">
        <div class="col-md-6">
          <h2 class="fw-bold" style="max-width: 500px;">Our Story</h2>
          <p style="font-size: 1rem; line-height: 1.6; margin-right: 1rem; text-align: justify; text-justify: inter-word; max-width: 500px;">
            Didirikan pada tahun 2024 oleh tim yang bersemangat, Temudok bertujuan untuk memodernisasi pengalaman kesehatan masyarakat. Dimulai dari ide sederhana, kini kami menjadi salah satu solusi terdepan untuk layanan kesehatan berbasis digital. Kami terus berinovasi dan mengembangkan teknologi terbaru untuk memberikan pengalaman layanan kesehatan yang lebih baik bagi setiap orang.
          </p>
        </div>
        <div class="col-md-6">
          <img src="/img/journey.png" alt="Our Story" class="img-fluid rounded" style="width: 100%;  height: 300px; object-fit: cover;">
        </div>
      </div>
      
    

    <!-- Our Member -->
    <div class="text-center mb-5">
        <h2 class="fw-bold">Our Team</h2>
        <div class="row mt-4">
            <!-- Baris pertama -->
            <div class="col-md-4 mb-3">
                <img src="/img/team1.jpeg" alt="CEO" class="img-fluid rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
                <h5 class="mt-3">Owen Tamashi Buntoro</h5>
                <p>CEO</p>
            </div>
            <div class="col-md-4 mb-3">
                <img src="/img/team2.jpeg" alt="Lead Developer" class="img-fluid rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
                <h5 class="mt-3">Be Justin Regan</h5>
                <p>Lead Developer</p>
            </div>
            <div class="col-md-4 mb-3">
                <img src="/img/team3.jpeg" alt="Product Management" class="img-fluid rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
                <h5 class="mt-3">Kevyn Aprilyanto</h5>
                <p>Product Management</p>
            </div>
        </div>
        <!-- Baris kedua -->
        <div class="row justify-content-center">
            <div class="col-md-4 mb-3">
                <img src="/img/team4.jpg" alt="Front End Developer" class="img-fluid rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
                <h5 class="mt-3">Tiara Intan Kusuma</h5>
                <p>Front End Developer</p>
            </div>
            <div class="col-md-4 mb-3">
                <img src="/img/team5.jpeg" alt="Back End Developer" class="img-fluid rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
                <h5 class="mt-3">Fendy Wijaya</h5>
                <p>Back End Developer</p>
            </div>
        </div>
    </div>
    

    

    <!-- Frequently Asked Questions -->
  <div class="text-center mb-5">
    <h2 class="fw-bold">Frequently Asked Questions</h2>
    <div class="accordion mt-4" id="faqAccordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="faq1">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                    Apa itu Temudok?
                </button>
            </h2>
            <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="faq1" data-bs-parent="#faqAccordion">
                <div class="accordion-body no-padding">
                    Temudok adalah platform online booking yang memudahkan Anda dalam melakukan pemesanan konsultasi dengan memilih dokter yang tersedia.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="faq2">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                    Apakah Temudok menyediakan fitur untuk pengguna baru?
                </button>
            </h2>
            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="faq2" data-bs-parent="#faqAccordion">
                <div class="accordion-body no-padding">
                    Ya, Temudok menyediakan pendaftaran akun yang mudah dan tutorial untuk memandu Anda dalam melakukan pemesanan.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="faq3">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                    Bagaimana cara menggunakan Temudok untuk pertama kali?
                </button>
            </h2>
            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="faq3" data-bs-parent="#faqAccordion">
                <div class="accordion-body no-padding">
                    Untuk pertama kali menggunakan Temudok, Anda bisa mengunjungi halaman tutorial kami di menu Help atau Tutorial. 
                </div>
            </div>
        </div>
    </div>
</div>

@endsection




