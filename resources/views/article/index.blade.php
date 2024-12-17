@extends('layouts.dashboard2')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.7/css/dataTables.bootstrap5.css">
@endpush

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
                    <li class="breadcrumb-item active">
                        List Article
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.content-header -->

        @if (session('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <div class="alert-message">
                    {{ session('success') }}
                </div>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <div class="alert-message">
                    {{ session('error') }}
                </div>
            </div>
        @endif

        @error('ids')
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <div class="alert-message">
                    {{ $message }}
                </div>
            </div>
        @enderror

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Article List</h5>
                        <h6 class="card-subtitle text-muted">If you want to add more, click <a
                                href="{{ route('article.create') }}" rel="noopener noreferrer nofollow">here</a>.</h6>
                    </div>
                    <div class="card-body overflow-auto">
                        <!-- Tombol untuk melakukan bulk destroy -->
                        <form action="{{ route('articles.bulkDestroy') }}" method="POST" id="bulk-delete-form">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="ids" id="bulk-ids">
                            <button type="submit" class="btn btn-danger" id="bulk-delete"><i class="fas fa-xmark"></i>
                                &nbsp;

                                Delete
                                Selected</button>
                        </form>
                        <table id="user-table" class="table table-striped align-middle" style="width:100%">
                            <thead>
                                <tr>
                                    <th style="width: 5%"><input type="checkbox" id="select-all"></th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Short Content Preview</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($articles as $article)
                                    <tr>
                                        <td><input type="checkbox" class="row-select" data-id="{{ $article->id }}"></td>
                                        <td>{{ $article->title }}</td>
                                        <td>{{ $article->category_id }}</td>
                                        <td>
                                            {!! Str::limit($article->content, 30, '...') !!}
                                        </td>
                                        <td>
                                            <a href="{{ route('article.show', $article->slug) }}" class="btn btn-primary btn-sm"><i
                                                class="fa-solid fa-eye"></i></a>
                                            <a href="{{ route('article.edit', $article->slug) }}" class="btn btn-warning btn-sm"><i
                                                    class="fa-solid fa-pencil"></i></a>
                                            <form action="{{ route('article.destroy', $article->id) }}" method="POST"
                                                style="display:inline;" id="single-delete-form">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" id="delete-single"><i
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
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.7/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.7/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- <script src="{{ asset('js/confirmSubmit.js') }}"></script> --}}
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

        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('#delete-single').forEach(function(button) {
                button.addEventListener('click', function(event) {
                    event.preventDefault();
                    let form = this.closest('#single-delete-form');

                    let confirmed = window.confirm('Are you sure?');

                    if (confirmed) {
                        form.submit();
                    } else {
                        return false;
                    }
                });
            });
        });
    </script>
@endpush
