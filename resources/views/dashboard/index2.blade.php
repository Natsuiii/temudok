@extends('layouts.dashboard2')

@push('css')
    <link rel="stylesheet" href="small-box/style.css">
@endpush

@section('content')
    <div class="container-fluid p-0">
        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>@lang('message.dashboard')</strong></h3>
            </div>

            <div class="col-auto ms-auto text-end mt-n1">
                <ol class="breadcrumb">             
                    <li class="breadcrumb-item active">
                        <a href="{{ route('dashboard') }}">@lang('message.dashboard')</a>
                    </li>
                </ol>
            </div>
        </div>

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <div class="alert-message">
                    {{ session('error') }}
                </div>
            </div>
        @endif

        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <!-- small box -->
                <div class="small-box bg-primary">
                    <div class="inner text-white">
                        <h3 style="color: white">150</h3>

                        <p>@lang('message.scheduled')</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-calendar"></i>
                    </div>
                    <a href="#" class="small-box-footer">@lang('message.more') <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-sm-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner text-white">
                        <h3 style="color: white">53</h3>

                        <p>@lang('message.done')</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-square-check"></i>
                    </div>
                    <a href="#" class="small-box-footer">@lang('message.more') <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-sm-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3 >44</h3>

                        <p>@lang('message.pending')</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-hourglass-half"></i>
                    </div>
                    <a href="#" class="small-box-footer">@lang('message.more') <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-sm-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner text-white">
                        <h3 style="color: white">65</h3>

                        <p>@lang('message.cancel')</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-xmark"></i>
                    </div>
                    <a href="#" class="small-box-footer">@lang('message.more') <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
@endsection