@extends('layouts.home')

@section('content')
    <div class="container">
        <!-- Header Section -->
        <h3 class="fw-bold py-4">Baca Artikel Terbaik dari Dokter Terbaik</h3>
        <!-- Tabs -->
        <ul class="nav nav-pills mb-3 d-flex gap-3">
            @foreach ($category as $c)
                <li class="nav-item"><a class="nav-link active bg-white text-primary border border-primary" href="#">{{ $c->category_name }}</a></li>
            @endforeach
        </ul>
        <!-- Section Title -->
        @foreach ($category as $c)
            <h4 class="fw-bold my-4">{{ $c->category_name }}</h4>

            <!-- Cards Section -->
            @php
                $articles = $c->doctors->flatMap->articles;
            @endphp
    
            <div class="row">
                @foreach ($articles as $article)
                    <div class="col-md-4 mb-4">
                        <a href="{{ route('articles.detail', ['category_id' => $c->id, 'article_id' => $article->id]) }}" class="text-decoration-none">
                            <div class="card h-100 shadow-sm">
                                <img src="{{ asset($article->image_url) }}" class="card-img-top" style="height: 230px;" alt="">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">{{ $article->title }}</h5>
                                    <span class="badge bg-primary mb-2">{{ $c->category_name }}</span>
                                    <p class="card-text text-muted fs-6 fw-light">{{ $article->description }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection