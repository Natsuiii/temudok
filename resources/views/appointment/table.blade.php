@extends('layouts.dashboard')

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
        <div class="card">
            <div class="card-header" style="background-color: #0e2238">
                <div class="row text-light px-2">
                    All Appointment
                </div>
            </div>
            <div class="card-body overflow-auto">
                <a href="#"><button type="button" class="btn btn-danger"><i class="fas fa-xmark"></i> &nbsp; Cancel
                        Selected</button></a>
                <table id="appointment-table" class="table table-striped align-middle" style="width:100%">
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
                        <tr>
                            <td><input type="checkbox" class="row-select" data-id=""></td>
                            <td>Awokwok</td>
                            <td>20</td>
                            <td>Test</td>
                            <td>2022-12-12</td>
                            <td><span class="badge bg-success">Success</span></td>
                            <td>
                                <a href="" class="btn btn-warning btn-sm"><i class="fa-solid fa-eye"></i></a>
                                <a href="" class="btn btn-danger btn-sm"><i class="fa-solid fa-xmark"></i></a>
                                <a href="" class="btn btn-info btn-sm"><i class="fa-solid fa-bell"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.7/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.7/js/dataTables.bootstrap5.js"></script>
    <script>
        $("#appointment-table").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": false,
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
