@extends('layouts.dashboard2')

@push('css')
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <style>
        .trix-button--icon-attach,
        .trix-button--icon-link,
        .trix-button--icon-decrease-nesting-level,
        .trix-button--icon-increase-nesting-level,
        .trix-button--icon-quote {
            display: none;
        }

        .trix-editor.is-invalid {
            border: 1px solid red;
        }
    </style>
@endpush

@section('content')
    <div class="container-fluid p-0">
        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>Dashboard</strong></h3>
            </div>

            <div class="col-auto ms-auto text-end mt-n1">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">
                        Add Article
                    </li>
                </ol>
            </div>
        </div>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <div class="alert-message">
                    {{ session('success') }}
                </div>
            </div>
        @endif

        <form action="{{ route('article.update', $article->id) }}" method="POST" enctype="multipart/form-data" id="userForm">
            @csrf
            @method('PUT')
            <div class="row">
                {{-- Left Col --}}
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-header" style="background-color: #222e3c">
                            <h5 class="card-title text-light">Edit Article</h5>
                        </div>
                        <div class="card-body overflow-auto">
                            <div class="row mb-3">
                                <div class="col-sm-6">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                                        id="title" name="title" value="{{ $article->title }}">
                                    @error('title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <label for="category" class="form-label">Category</label>
                                    <select name="category" id="category"
                                        class="form-select @error('category') is-invalid @enderror">
                                        <option value="" selected disabled>Please Choose One</option>
                                        <option value="1" {{ old('category') == '1' ? 'selected' : '' }}>Tes doang
                                        </option>
                                    </select>
                                    @error('category')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <label for="content" class="form-label">Content</label>
                                <trix-editor input="content" required></trix-editor>
                                <input type="hidden" class="form-control @error('content') is-invalid @enderror"
                                    id="content" name="content" value="{{ $article->content }}">
                                @error('content')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card p-0">
                        <div class="card-header" style="background-color: #222e3c">
                            <h5 class="card-title text-light">Others</h5>
                        </div>
                        <div class="card-body overflow-auto">
                            <label for="thumbnail" class="form-label">Thumbnail</label>
                            <input class="form-control @error('thumbnail') is-invalid @enderror" type="file"
                                id="thumbnail" name="thumbnail">
                            @error('thumbnail')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                {{-- End Left Col --}}

                {{-- Right Col --}}
                <div class="col-md-4">
                    <div class="card p-0">
                        <div class="card-header" style="background-color: #222e3c">
                            <h5 class="card-title text-light">Save</h5>
                        </div>
                        <div class="card-body overflow-auto">
                            <button type="submit" class="btn btn-primary w-100">Create</button>
                        </div>
                    </div>
                </div>
                {{-- End Right Col --}}
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
@endpush
