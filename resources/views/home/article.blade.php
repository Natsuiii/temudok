@extends('layouts.home')

@section('content')
    <div class="container">
        <!-- Header Section -->
        <h3 class="fw-bold py-4">Baca Artikel Terbaik dari Dokter Terbaik</h3>
        <!-- Tabs -->
        <ul class="nav nav-pills mb-3 d-flex gap-3">
            <li class="nav-item"><a class="nav-link active bg-white text-primary border border-primary" href="#">Semua</a></li>
            <li class="nav-item"><a class="nav-link text-dark border" href="#">Penyakit Dalam</a></li>
            <li class="nav-item"><a class="nav-link text-dark border" href="#">Kulit dan Kecantikan</a></li>
            <li class="nav-item"><a class="nav-link text-dark border" href="#">Telinga, Hidung, dan Tenggorokan</a></li>
            <li class="nav-item"><a class="nav-link text-dark border" href="#">Gizi dan Makanan Sehat</a></li>
            <li class="nav-item"><a class="nav-link text-dark border" href="#">Kehamilan</a></li>
            <li class="nav-item"><a class="nav-link text-dark border" href="#">Perawatan Gigi</a></li>
        </ul>
        <!-- Section Title -->
        <h4 class="fw-bold mt-4">Obat & Vitamin</h4>
        <p class="text-muted">Dapatkan informasi seputar kandungan, aturan, petunjuk penggunaan obat dan vitamin di sini</p>
        <!-- Cards Section -->
        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="Obat Batuk">
                    <div class="card-body">
                        <h6 class="card-title fw-bold">Rekomendasi Obat Batuk Actifed Atasi Batuk Kering dan Berdahak</h6>
                        <span class="badge bg-info text-dark mb-2">Batuk</span>
                        <p class="card-text text-muted">"Batuk menjadi gejala infeksi pada saluran pernapasan. Ada beberapa pilihan obat..."</p>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="ASI Eksklusif">
                    <div class="card-body">
                        <h6 class="card-title fw-bold">Dukung ASI Eksklusif, Ini Pentingnya Peranan Konselor Laktasi</h6>
                        <span class="badge bg-success mb-2">ASI Eksklusif</span>
                        <span class="badge bg-secondary mb-2">Konselor Laktasi</span>
                        <p class="card-text text-muted">"Selama masa menyusui, ibu biasanya mengalami beberapa kendala, seperti..."</p>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="Kesehatan Mental">
                    <div class="card-body">
                        <h6 class="card-title fw-bold">Ini 5 Cara Efektif Menjaga Kesehatan Mental di Lingkungan Kerja</h6>
                        <span class="badge bg-primary mb-2">Kesehatan Mental</span>
                        <p class="card-text text-muted">"Pekerjaan dapat menjadi sumber stres yang mengganggu kesehatan mental bagi..."</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection