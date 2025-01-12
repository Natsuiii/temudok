@extends('layouts.dashboard2')

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
                        Edit User
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

        <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data" id="userForm">
            @csrf
            @method('PUT')
            <div class="row">
                {{-- Left Col --}}
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-header" style="background-color: #222e3c">
                            <h5 class="card-title text-light">General Info</h5>
                            <h6 class="card-subtitle text-light text-muted">
                                Enter user info here
                            </h6>
                        </div>
                        <div class="card-body overflow-auto">
                            <div class="row mb-3">
                                <div class="col-sm-6">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="name" name="name" value="{{ $user->name }}">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        id="email" name="email" value="{{ $user->email }}">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" readonly value=""
                                id="password" name="password">
                            <div id="passwordHelp" class="form-text">You can't change the password</div>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="card p-0">
                        <div class="card-header" style="background-color: #222e3c">
                            <h5 class="card-title text-light">Others</h5>
                        </div>
                        <div class="card-body overflow-auto">
                            <label for="role" class="form-label">Roles</label>
                            <select class="form-select @error('role') is-invalid @enderror mb-3" name="role"
                                id="role">
                                <option value="" selected disabled>Please Choose One</option>
                                @foreach ($roles as $role)
                                    @if ($user->role_id == $role->id)
                                        <option value="{{ $role->id }}" selected>{{ $role->name }}</option>
                                    @else
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('role')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                            <label for="profile" class="form-label">Profile Picture</label>
                            <input class="form-control @error('profile') is-invalid @enderror" type="file" id="profile"
                                name="profile">
                            @error('profile')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="card p-0" id="specialization">
                        <div class="card-header" style="background-color: #222e3c">
                            <h5 class="card-title text-light">Doctor Specialization</h5>
                        </div>
                        <div class="card-body overflow-auto">
                            <label for="category" class="form-label">Specilization</label>
                            <select class="form-select @error('category') is-invalid @enderror mb-3" name="category"
                                id="category">
                                <option value="" selected disabled>Please Choose One</option>
                                @foreach ($categories as $category)
                                    @if ($user->specialization_id == $category->id)
                                        <option value="{{ $category->id }}" selected>{{ $category->category_name }}</option>
                                    @else
                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('category')
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
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script>
        window.onload = function() {
            if ($('#role').val() == 2) {
                $('#specialization').show();
            } else {
                $('#specialization').hide();
                $('#category').val('');
            }
        }

        $('#role').on('change', function() {
            if ($(this).val() == 2) {
                $('#specialization').show();
            } else {
                $('#specialization').hide();
                $('#category').val('');
            }
        });
    </script>
@endpush
