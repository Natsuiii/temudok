@extends('layouts.dashboard2')

@section('content')
    <div class="container-fluid p-0">

        <!-- Content Header (Page header) -->
        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>Dashboard</strong></h3>
            </div>

            <div class="col-auto ms-auto text-end mt-n1">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('article.index') }}">List Article</a>
                    </li>
                    <li class="breadcrumb-item active">
                        {{ $article->title }}
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.content-header -->

        <h1 class="h3 mb-3 mt-5">{{ $article->title }}</h1>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <img src="{{ $article->thumbnail ? asset('img/home/journey.png') : asset('img/home/journey.png') }}" alt="" width="100%" height="300">
                    </div>
                    <div class="card-body">
                        <p>{!! $article->content !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
