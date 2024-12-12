@extends('layouts.dashboard2')

@push('css')
    <!-- Daterange picker -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
@endpush

@section('content')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Make Appointment</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6 d-flex justify-content-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Make Appointment
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

    <div class="container-fluid">
        <form action="{{ route('appointment.store') }}">
            <div class="card mb-3">
                <div class="card-header" style="background-color: #0e2238">
                    <div class="row text-light px-2">Start making your appointment!</div>
                </div>
                <div class="card-body overflow-auto row g-3">
                    <div class="col-md-6">
                        <label for="password" class="form-label">Name</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                        <div id="emailHelp" class="form-text">This email will be used to contact you.</div>
                    </div>
                    <div class="col-12">
                        <label for="reason" class="form-label">Appointment Reason</label>
                        <textarea name="reason" id="reason" class="form-control"></textarea>
                    </div>
                    <div class="col-md-4">
                        <label for="date_of_birth" class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" id="date_of_birth" name="date_of_birth">
                    </div>
                    <div class="col-md-4">
                        <label for="doctor" class="form-label">Doctor</label>
                        <select id="doctor" class="form-select" name="doctor">
                            <option selected disabled>Please select your doctor</option>

                            @foreach ($doctors as $doctor)
                                <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="appointment_date" class="form-label">Appointment Date</label>
                        <div class="spinner-border spinner-border-sm text-primary" role="status" id="loader">
                            <span class="visually-hidden"></span>
                        </div>
                        <input type="text" name="appointment_date" id="appointment_date" class="form-control"
                            autocomplete="off" />
                        <div id="appointment_dateHelp" class="form-text">We accepting appointment starting from 09.00 AM to
                            08.00 PM</div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
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
        $('#appointment_date').prop('disabled', true)
        $('#loader').hide();
        let disabledDates = [];
        document.getElementById('doctor').addEventListener('change', function() {
            let doctorId = this.value;
            $('#loader').show();
            $('#appointment_date').val('');
            $('#appointment_date').prop('disabled', true)
            if (doctorId) {
                fetch(`/get-unavailable-times/${doctorId}`) // Fetch Tanggal
                    .then(response => response.json())
                    .then(data => {
                        disabledDates = data.map(item => moment(item.unavailable_time).format('YYYY-MM-DD'));
                        $('#loader').hide();
                        $('#appointment_date').prop('disabled', false)
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            }
        });

        $('#appointment_date').daterangepicker({
            drops: 'up',
            singleDatePicker: true,
            timePicker: true,
            startDate: moment().startOf('hour'),
            endDate: moment().startOf('hour').add(32, 'hour'),
            minDate: moment(),
            locale: {
                format: 'DD MMMM YYYY / HH:mm'
            },
            isInvalidDate: function(date) {
                if (disabledDates.includes(date.format('YYYY-MM-DD'))) {
                    return true; // Tanggal disable
                }
                return false;
            },
            isCustomDate: function(date) {
                if (disabledDates.includes(date.format('YYYY-MM-DD'))) {
                    return 'bg-danger'; // Tambah warna merah
                }
                return '';
            },
        });

        $('#appointment_date').val('');
    </script>
@endpush
