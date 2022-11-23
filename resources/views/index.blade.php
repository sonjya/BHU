<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BHU Health Care Profiling and Reporting System</title>
    @extends('common.css')
</head>
<body class="body-bg">
    <div class="container">
        <h1 class="login-title">Sign in</h1>
        <h6 class="login-subtitle">Sign in and start managing your coordinates!</h6>
        <form action="/login" method="post">
            @csrf
            <div class="row">
                <div class="col-4">
    
                </div>
                <div class="col-4">
                    <input type="text" class="form-control form-control-login" name="username" placeholder="Username" required>
                    <input type="password" class="form-control form-control-login" name="password" placeholder="Password" required>
                    <div class="row mt-3">
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Remember me
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <a href="#">Forgot password?</a>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-outline-primary mt-4 col-12" value="LOGIN">

                    @if (session('error_message'))
                        <div class="login-error-messages mt-3">
                            <div class="alert alert-danger">
                                {{session('error_message')}}
                            </div>
                        </div>
                    @endif

                </div>
                <div class="col-4">
                    
                </div>
            </div>
        </form>
    </div>



    @extends('common.scripts')
</body>
<style>
    .body-bg {
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .login-title {
        margin-top:250px;
        text-align: center;
    }
    .login-subtitle {
        margin-top: 50px;
        text-align: center;
    }
    .form-control-login {
        margin-top:30px;
        align-content: center;
    }
    .login-error-messages {

    }
</style>
</html>