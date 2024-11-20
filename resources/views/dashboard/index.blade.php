@extends('layouts.dashboard')

@push('css')
    <link rel="stylesheet" href="small-box/style.css">
@endpush

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6 d-flex justify-content-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <a href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <div class="container-fluid px-4">
        <div class="row g-3 my-2">
            <div class="col-lg-3 col-sm-6">
                <!-- small box -->
                <div class="small-box bg-primary">
                    <div class="inner text-white">
                        <h3>150</h3>

                        <p>Scheduled</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-calendar"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-sm-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner text-white">
                        <h3>53<sup class="fs-5">%</sup></h3>

                        <p>Success</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-square-check"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-sm-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>44</h3>

                        <p>Pending</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-hourglass-half"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-sm-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner text-white">
                        <h3>65</h3>

                        <p>Canceled</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-xmark"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
    </div>
@endsection

