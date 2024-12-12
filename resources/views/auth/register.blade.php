<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Temudok | Register</title>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <div class="cold-md-12">
                <div class="header-text text-center">
                    <h2>Welcome to Temudok</h2>
                    <p>Please register so you can book your doctor.</p>
                </div>
            </div>
            <form action="{{ route('register.store') }}" class="row" method="POST" id="form_register">
                @csrf
                <div class="col-md-12 mb-3">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                id="name" name="name">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                id="email" name="email">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                        name="password">
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12 mb-3">
                    <label for="password_confirm" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control @error('password_confirm') is-invalid @enderror"
                        id="password_confirm" name="password_confirm">
                    <div class="invalid-feedback" id="invalid-feedback">Password does not match</div>
                </div>
                <div class="col-md-4 mb-3">
                    <button type="submit" class="btn btn-primary" id="btn_register">Register</button>
                </div>
            </form>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<script>
    $('#btn_register').prop('disabled', true);
    $('#password_confirm').on('input', function() {
        if ($(this).val() !== $('#password').val()) {
            $('#invalid-feedback').show();
            $('#password_confirm').addClass('is-invalid');
            $('#btn_register').prop('disabled', true);
        } else {
            $('#invalid-feedback').hide();
            $('#password_confirm').removeClass('is-invalid');
            $('#btn_register').prop('disabled', false);
        }
    });
</script>

</html>
