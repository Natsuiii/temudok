@extends('layouts.dashboard2')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.7/css/dataTables.bootstrap5.css">
@endpush

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Appointment</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6 d-flex justify-content-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Appointment
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
        {{-- @if (Auth::user()->role_id == '2') --}}
        <div class="card">
            <div class="card-header" style="background-color: #0e2238">
                <div class="row text-light px-2">
                    All Appointment
                </div>
            </div>
            <div class="card-body">
                <a href="#"><button type="button" class="btn btn-danger" id="bulk-delete"><i class="fas fa-xmark"></i>
                        &nbsp;
                        Cancel
                        Selected</button></a>
                <div class="table-responsive">
                    <table id="appointment-table" class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width: 5%"><input type="checkbox" id="select-all"></th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Description</th>
                                <th>Appointment Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($appointments as $appointment)
                                <tr>
                                    <td><input type="checkbox" class="row-select" data-id="{{ $appointment->id }}"></td>
                                    <td>{{ $appointment->name }}</td>
                                    <td>{{ (new \DateTime($appointment->date_of_birth))->diff(new \DateTime('now'))->y }}</td>
                                    <td>{{ $appointment->reason }}</td>
                                    <td>{{ $appointment->appointment_date }}</td>
                                    <td><span class="badge bg-{{ $appointment->status->status_name == 'Accept' ? 'success' : ($appointment->status->status_name == 'Reject' ? 'danger' : 'warning') }}">{{ $appointment->status->status_name }}</span></td>
                                    <td>
                                        <form action="{{ route('appointment.update', $appointment->id) }}" method="POST" style="display:inline;" id="single-delete-form">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" name="action" value="accepted" class="btn btn-success btn-sm">
                                                <i class="fa-solid fa-check"></i>
                                            </button>
                                            <button type="submit" name="action" value="rejected" class="btn btn-danger btn-sm">
                                                <i class="fa-solid fa-xmark"></i>
                                            </button>
                                            <button type="submit" name="action" value="rescheduled" class="btn btn-warning btn-sm">
                                                <i class="fa-solid fa-calendar"></i>
                                            </button>
                                        </form>

                                        <a href="" class="btn btn-primary btn-sm"><i class="fa-solid fa-eye"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- @endif --}}
    </div>
@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.7/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.7/js/dataTables.bootstrap5.js"></script>
    <script src="{{ asset('js/confirmSubmit.js') }}"></script>
    <script>
        $("#appointment-table").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,

        });

        $('#select-all').on('click', function() {
            var rows = $('#appointment-table').DataTable().rows({
                'search': 'applied'
            }).nodes();
            $('input[type="checkbox"]', rows).prop('checked', this.checked);
        });

        // Select/Deselect a row
        $('#appointment-table tbody').on('change', 'input[type="checkbox"]', function() {
            if (!this.checked) {
                var el = $('#select-all').get(0);
                if (el && el.checked && ('indeterminate' in el)) {
                    el.indeterminate = true;
                }
            }
        });
    </script>
@endpush
