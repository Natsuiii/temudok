@extends('layouts.home')

@section('content')
<div class="container">
    <h4 class="fw-bold py-4">@lang('message.search_caption') "{{ $query }}"</h4>

    <div class="row" id="article-list">
        @forelse ($articles as $article)
            <div class="col-md-4 mb-4 article-item" data-category="{{ $article->category->category_name }}">
                <a href="{{ route('articles.detail', $article->slug) }}" class="text-decoration-none">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ $article->thumbnail ? asset($article->thumbnail) : asset('/img/home/journey.png') }}" class="card-img-top" style="height: 230px;" alt="">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">{{ $article->title }}</h5>
                            <span class="badge bg-primary mb-2">{{ $article->category->category_name }}</span>
                            <p class="card-text text-muted fs-6 fw-light text-truncate">
                                {!! strip_tags($article->content) !!}
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        @empty
            <p class="text-center text-muted">@lang('message.search_not_found')</p>
        @endforelse
    </div>
</div>
@endsection
