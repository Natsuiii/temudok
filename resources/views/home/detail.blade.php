@extends('layouts.home')

@section('content')
    <div class="container">
        <!-- Article Header -->
        <h1 class="fw-bold pt-5">{{ $article->title }}</h1>
        <div class="align-items-center mb-4">
            <div class="mb-2">Kategori: <span class="badge bg-primary">{{ $article->category->category_name }}</span></div>
            <div class="mb-3"><span class="">Dibuat oleh <span class="fw-semibold text-primary">{{ $article->doctor->name }}</span> pada {{ date('j F Y', strtotime($article->created_at)) }}</span></div>
        </div>

        <!-- Article Image -->
        <img src="{{ $article->thumbnail ? asset('storage/' . $article->thumbnail) : asset('/img/home/journey.png') }}" alt="" class="img-fluid rounded" style="width: 600px; height: 400px; margin-bottom: 30px;"> <br>

        <!-- Article Content -->
        <div class="text-left">
            {!! $article->content !!}
        </div>
        <br>
    </div>
@endsection