<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Temudok | Login</title>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
                style="background: #103cbe;">
                <div class="featured-image mb-3">
                    <img src="{{ asset('img/home/1.png') }}" class="img-fluid" style="width: 250px;">
                </div>
                <p class="text-white fs-2 text-center"
                    style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Login to access Dashboard
                </p>
                <small class="text-white text-wrap text-center"
                    style="width: 17rem;font-family: 'Courier New', Courier, monospace;"></small>
            </div>

            <form class="col-md-6 right-box" method="POST" action="{{ route('login.authenticate') }}">
                @csrf
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2>Hello There</h2>
                        <p>We are happy to have you back.</p>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text"
                            class="form-control form-control-lg bg-light fs-6 @error('email') is-invalid @enderror"
                            placeholder="Email address" name="email" id="email">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input-group mb-1">
                        <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password"
                            name="password" id="password">
                    </div>
                    <div class="input-group mb-5 d-flex justify-content-between">
                        <div class="forgot">
                            <small><a href="{{ route('home') }}">Go back</a></small>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <button class="btn btn-lg btn-primary w-100 fs-6" type="submit">Login</button>
                    </div>
                    <div class="row">
                        <small>Don't have account? <a href="#">Sign Up</a></small>
                    </div>
                </div>
            </form>

        </div>
    </div>
</body>

</html>
