<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" integrity="sha512-ZnR2wlLbSbr8/c9AgLg3jQPAattCUImNsae6NHYnS9KrIwRdcY9DxFotXhNAKIKbAXlRnujIqUWoXXwqyFOeIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="newLogin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container loginBox">
        <div class="row justify-content-center">
            <div class="col-10 text-center">
                <form action="/login_user" method="POST">
                    @csrf
                    <h2 class="fw-bold text-center mt-3">Login In Now!!!</h2>
                    <hr>
                    <div class="input-group p-3">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                        <input type="text" class="form-control" name="username" placeholder="Username"
                               aria-label="Username" aria-describedby="basic-addon1" value="{{ old('username') }}">
                    </div>
                    <span class="text-danger">
                        @error('username') {{ $message }} @enderror
                    </span>       
                    <div class="input-group p-3">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-key-fill"></i></span>
                        <input type="password" class="form-control" name="password" placeholder="Password"
                               aria-label="Password" aria-describedby="basic-addon1">
                    </div>
                    <span class="text-danger">
                        @error('password') {{ $message }} @enderror
                    </span>
                    <button type="submit" class="btn btn-outline-light">Log In</button>
                    <a href="#" >Forgot Password?</a>

                    <div id="icons" class="mt-3">
                        <i class="bi bi-facebook p-3"></i>
                        <i class="bi bi-instagram p-3"></i>
                        <i class="bi bi-twitter p-3"></i>
                    </div>

                    <p class="text-light">Don't Have Account? <a href="/register">Register Now...</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
