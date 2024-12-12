@extends('layouts.dashboard2')

@push('css')
    <!-- Daterange picker -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
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
                        Add Unavailable Time
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

        <form action="{{ route('schedule.store') }}" method="POST" enctype="multipart/form-data" id="userForm">
            @csrf
            <div class="row">
                {{-- Left Col --}}
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-header" style="background-color: #222e3c">
                            <h5 class="card-title text-light">General Info</h5>
                            <h6 class="card-subtitle text-light text-muted">
                                Enter your info here
                            </h6>
                        </div>
                        <div class="card-body overflow-auto">
                            <label for="unavailable_time" class="form-label">Unavailable Time</label>
                            <input type="text" name="unavailable_time" id="unavailable_time" class="form-control @error('unavailable_time') is-invalid @enderror"
                                autocomplete="off" />
                            @error('unavailable_time')
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
                            <h6 class="card-subtitle text-light text-muted">
                                Submit here
                            </h6>
                        </div>
                        <div class="card-body overflow-auto">
                            <button type="submit" class="btn btn-primary w-100">Submit</button>
                        </div>
                    </div>
                </div>
                {{-- End Right Col --}}
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <!-- daterangepicker -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script>
        $('#unavailable_time').daterangepicker({
            drops: 'right',
            singleDatePicker: true,
            startDate: moment(),
            endDate: moment().startOf('hour').add(32, 'hour'),
            minDate: moment(),
            locale: {
              format: 'DD MMMM YYYY'
            },
        });

        $('#unavailable_time').val('');
    </script>
@endpush
