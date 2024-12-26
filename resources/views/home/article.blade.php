@extends('layouts.home')

@section('content')
    <div class="container">
        <!-- Header Section -->
        <h3 class="fw-bold py-4">@lang('message.article_headbar')</h3>

        <!-- Search Bar -->
        <form action="{{ route('articles.search') }}" method="POST" class="d-flex mb-4">
            @csrf
            <input class="form-control me-2" type="search" name="query" placeholder="@lang('message.search_placeholder')" aria-label="Search">
            <button class="btn btn-primary" type="submit">@lang('message.search')</button>
        </form>

        <!-- Tabs -->
        <ul class="nav nav-pills mb-3 d-flex gap-3 overflow-x-auto" id="category-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="{{ request()->fullUrlWithQuery(['category' => 'all']) }}"
                    data-category="all">@lang('message.category')</a>
            </li>
            @foreach ($categories as $c)
                <li class="nav-item">
                    <a class="nav-link" href="{{ request()->fullUrlWithQuery(['category' => $c->category_name]) }}"
                        data-category="{{ $c->category_name }}">{{ $c->category_name }}</a>
                </li>
            @endforeach
        </ul>

        <div class="row" id="article-list">
            @foreach ($articles as $article)
                <div class="col-md-4 mb-4 article-item" data-category="{{ $article->category->category_name }}">
                    <a href="{{ route('articles.detail', $article->slug) }}"
                        class="text-decoration-none">
                        <div class="card h-100 shadow-sm">
                            <img src="{{ $article->thumbnail ? asset('storage/' . $article->thumbnail) : asset('/img/home/journey.png') }}"
                                class="card-img-top" style="height: 230px;" alt="">
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
            @endforeach
        </div>
        {{-- @endforeach --}}
    </div>

    <div class="d-flex align-items-center justify-content-center">
        {{ $articles->links() }}
    </div>

    @endsection

@push('scripts')
    <script>
        const categoryTabs = document.querySelectorAll('[data-category]');
        const articles = document.querySelectorAll('.article-item');

        function filterArticles(category) {
            articles.forEach(article => {
                if (category === 'all' || article.getAttribute('data-category') === category) {
                    article.style.display = 'block';
                } else {
                    article.style.display = 'none';
                }
            });
        }

        const urlParams = new URLSearchParams(window.location.search);
        const selectedCategory = urlParams.get('category') || 'all'; // Jika tidak ada, default ke 'all'

        // Menentukan kategori yang aktif berdasarkan URL
        categoryTabs.forEach(tab => {
            const category = tab.getAttribute('data-category');
            if (category === selectedCategory) {
                tab.classList.add('active');
            } else {
                tab.classList.remove('active');
            }
        });

        // Filter artikel sesuai kategori yang dipilih berdasarkan URL
        filterArticles(selectedCategory);

        // Event listener untuk kategori tabs
        categoryTabs.forEach(tab => {
            tab.addEventListener('click', function() {
                // Mengubah tampilan kategori yang aktif
                categoryTabs.forEach(tab => tab.classList.remove('active'));
                this.classList.add('active');

                // Ambil kategori yang dipilih
                const category = this.getAttribute('data-category');

                // Perbarui URL dengan kategori yang dipilih tanpa reload halaman
                const newUrl = new URL(window.location);
                newUrl.searchParams.set('category', category);
                window.history.pushState({}, '', newUrl);

                // Panggil fungsi untuk filter artikel
                filterArticles(category);
            });
        });
    </script>
@endpush
