@extends('layouts.auth', ['title' => 'Sign In'])

@section('content')
<div class="login-form-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8">
                <div class="login-form">

                    <div class="login-heading">
                        <span>Login</span>
                        <p>Enter Login details to get access</p>
                    </div>
                    <div class="input-box" method="POST">
                        <div class="single-input-fields">
                            <label>Username</label>
                            <input type="text" placeholder="Username">
                        </div>
                        <div class="single-input-fields">
                            <label>Password</label>
                            <input type="password" placeholder="Enter Password">
                        </div>
                        <div class="single-input-fields login-check">
                            <input type="checkbox" id="fruit1" name="keep-log">
                            <label for="fruit1">Keep me logged in</label>
                            <a href="#" class="f-right">Forgot Password?</a>
                        </div>
                    </div>
                    <div class="login-footer">
                        <p>Don’t have an account? <a href="{{asset('/signup')}}">Sign Up</a> here</p>
                        <button type="submit" class="submit-btn3">Login</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection