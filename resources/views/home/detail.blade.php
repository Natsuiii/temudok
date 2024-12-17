@extends('layouts.home')

@section('content')
    <div class="container">
        <!-- Article Header -->
        <h1 class="fw-bold pt-5">{{ $article->title }}</h1>
        <div class="align-items-center mb-4">
            <div class="mb-2">Kategori: <span class="badge bg-primary">{{ $article->doctor->category->category_name }}</span></div>
            <div class="mb-3"><span class="">Dibuat oleh <span class="fw-semibold text-primary">{{ $article->doctor->doctor_name }}</span> pada {{ date('j F Y', strtotime($article->post_date)) }}</span></div>
        </div>

        <!-- Article Image -->
        <img src="{{ asset($article->image_url) }}" alt="" class="img-fluid rounded" style="width: 800px; height: 500px; margin-bottom: 30px;">

        <!-- Article Content -->
        <p>{{ $article->content }}</p>
    </div>
@endsection