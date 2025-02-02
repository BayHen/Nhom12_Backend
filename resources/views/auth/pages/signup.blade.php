@extends('layouts.auth', ['title' => 'Sign Up'])

@section('content')
<div class="register-form-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="register-form text-center">
                    <div class="register-heading">
                        <span>Sign Up</span>
                        <p>Create your account to get full access</p>
                    </div>
                    <form class="login-form" method="POST">
                        @csrf
                        <div class="input-box">
                            <div class="single-input-fields">
                                <label>Full name</label>
                                <input name="username" type="text" placeholder="Enter full name">
                            </div>
                            <div class="single-input-fields">
                                <label>Email Address</label>
                                <input name="email" type="email" placeholder="Enter email address">
                            </div>
                            <div class="single-input-fields">
                                <label>Password</label>
                                <input name="password" type="password" placeholder="Enter Password">
                            </div>
                            <div class="single-input-fields">
                                <label>Confirm Password</label>
                                <input name="repassword" type="password" placeholder="Confirm Password">
                            </div>
                        </div>
                        <div class="register-footer">
                            <p> Already have an account? <a href="{{asset('/log-in')}}"> Login</a> here</p>
                            <button type="submit" class="submit-btn3">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection