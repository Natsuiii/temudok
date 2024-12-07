@extends('layouts.dashboard')

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
                    <h1 class="m-0">Edit User</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6 d-flex justify-content-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Edit User
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

    <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data" id="userForm">
        @csrf
        @method('PUT')
        <div class="container-fluid">
            <div class="row">
                {{-- Left Col --}}
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-header" style="background-color: #0e2238">
                            <div class="row text-light px-2">General Info</div>
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
                                        id="email" name="email" value="{{ $user->email }}" readonly>
                                    <div id="emailHelp" class="form-text">You can't change others user email.</div>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                id="password" name="password" readonly>
                            <div id="passwordHelp" class="form-text">You can't change others user password.</div>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="card p-0">
                        <div class="card-header" style="background-color: #0e2238">
                            <div class="row text-light px-2">Others</div>
                        </div>
                        <div class="card-body overflow-auto">
                            <label for="role" class="form-label">Roles</label>
                            <select class="form-select @error('role') is-invalid @enderror mb-3" name="role"
                                id="role">
                                <option value="" selected disabled>Please Choose One</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}" {{ $role->id == $user->role_id ? 'selected' : '' }}>
                                        {{ $role->name }}
                                    </option>
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
                </div>
                {{-- End Left Col --}}

                {{-- Right Col --}}
                <div class="col-md-4">
                    <div class="card p-0">
                        <div class="card-header" style="background-color: #0e2238">
                            <div class="row text-light px-2">Save</div>
                        </div>
                        <div class="card-body overflow-auto">
                            <button type="submit" class="btn btn-primary w-100">Save</button>
                        </div>
                    </div>
                </div>
                {{-- End Right Col --}}
            </div>
        </div>
    </form>
@endsection
