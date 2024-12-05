<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="newLogin.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="loginBox">
        <div class="container text-center p-3">
            <h3 class="my-3 text-white">Register Here!!!</h3>
            <div class="row justify-content-center align-items-center">
                <div class="col-10">
                    <form action="/register_user" method="post">
                        @csrf
                        <div class="input-group my-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                            <input name="username" type="text" class="form-control" placeholder="Username" aria-label="Username" value="{{ old('username') }}">
                        </div>
                        <span class="text-danger">@error('username') {{$message}} @enderror</span>

                        <div class="input-group my-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-key"></i></span>
                            <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password">
                        </div>
                        <span class="text-danger">@error('password') {{$message}} @enderror</span>

                        <div class="input-group my-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-key"></i></span>
                            <input type="password" name="con_password" class="form-control" placeholder="Confirm Password" aria-label="Confirm Password">
                        </div>
                        <span class="text-danger">@error('con_password') {{$message}} @enderror</span>

                        <div class="input-group my-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                            <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Email" value="{{ old('email') }}">
                        </div>
                        <span class="text-danger">@error('email') {{$message}} @enderror</span>

                        <div class="input-group my-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-phone"></i></span>
                            <input type="text" name="mobileno" class="form-control" placeholder="Mobile No" aria-label="Mobile No" value="{{ old('mobileno') }}">
                        </div>
                        <span class="text-danger">@error('mobileno') {{$message}} @enderror</span>

                        <div class="input-group my-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                            <input type="text" name="fullname" class="form-control" placeholder="Full Name" aria-label="Full Name" value="{{ old('fullname') }}">
                        </div>
                        <span class="text-danger">@error('fullname') {{$message}} @enderror</span>

                        <div class="input-group my-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-map"></i></span>
                            <input type="text" name="address" class="form-control" placeholder="Address" aria-label="Address" value="{{ old('address') }}">
                        </div>
                        <span class="text-danger">@error('address') {{$message}} @enderror</span>

                        <div class="d-grid gap-2 my-3">
                            <button type="submit" class="btn btn-outline-light">Register</button>
                            <a href="#">Forgot Password</a>
                            <div class="icon">
                                <i class="fa-brands fa-facebook"></i>
                                <i class="fa-brands fa-instagram"></i>
                                <i class="fa-brands fa-whatsapp"></i>
                            </div>
                            <p class="text-white">Don't Have an Account? <a href="/login">Sign In Now!!!</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
