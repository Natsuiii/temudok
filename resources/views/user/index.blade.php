@extends('layouts.dashboard')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.7/css/dataTables.bootstrap5.css">
@endpush

@section('content')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @error('ids')
        <div class="alert alert-danger alert-dismissible">
            {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @enderror
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">User List</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6 d-flex justify-content-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">
                            User List
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
                    All User
                </div>
            </div>
            <div class="card-body overflow-auto">
                <!-- Tombol untuk melakukan bulk destroy -->
                <form action="{{ route('users.bulkDestroy') }}" method="POST" id="bulk-delete-form">
                    @csrf
                    @method('DELETE')
                    <input type="text" name="ids" id="bulk-ids">
                    <button type="submit" class="btn btn-danger"><i class="fas fa-xmark"></i> &nbsp; Delete
                        Selected</button>
                </form>
                <table id="user-table" class="table table-striped align-middle" style="width:100%">
                    <thead>
                        <tr>
                            <th style="width: 5%"><input type="checkbox" id="select-all"></th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td><input type="checkbox" class="row-select" data-id="{{ $user->id }}"></td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @if ($user->role->name == 'Admin')
                                        <span class="badge bg-success">{{ $user->role->name }}</span>
                                    @elseif ($user->role->name == 'Guest')
                                        <span class="badge bg-warning">{{ $user->role->name }}</span>
                                    @elseif ($user->role->name == 'Doctor')
                                        <span class="badge bg-info">{{ $user->role->name }}</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="" class="btn btn-warning btn-sm"><i class="fa-solid fa-bell"></i></a>
                                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-info btn-sm"><i
                                            class="fa-solid fa-pencil"></i></a>
                                    <form action="{{ route('user.destroy', $user->id) }}" method="POST"
                                        style="display:inline;" id="single-delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                class="fa-solid fa-xmark"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $("#user-table").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": false,
            columnDefs: [{
                    orderable: false,
                    targets: 4
                }, // Menonaktifkan sorting untuk kolom action
                {
                    orderable: false,
                    targets: 0
                }, // Menonaktifkan sorting untuk kolom checkbox
            ]
        });

        $('#select-all').on('click', function() {
            var rows = $('#user-table').DataTable().rows({
                'search': 'applied'
            }).nodes();

            // Tandai checkbox pada setiap baris sesuai dengan status checkbox master
            $('input[type="checkbox"]', rows).prop('checked', this.checked);

            // Jika ada perubahan, update array ids
            updateBulkIds();
        });

        $('#user-table tbody').on('change', 'input[type="checkbox"]', function() {
            updateBulkIds();
        });

        function updateBulkIds() {
            var selectedIds = [];
            $('#user-table tbody input[type="checkbox"]:checked').each(function() {
                selectedIds.push($(this).data('id'));
            });

            // Set array ids ke input hidden pada form bulk delete
            $('#bulk-ids').val(selectedIds);
        }
    </script>
@endpush
