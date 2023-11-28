@extends('frontEnd.master')
@section('title','Home')
@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image:url({{asset('front')}}/images/background/17.png)">
        <div class="auto-container">
            <h1>login</h1>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Login Container -->
    <div class="login-container margin">
        <div class="top-layer" style="background-image:url({{asset('front')}}/images/background/20.png)"></div>
        <div class="bottom-layer" style="background-image:url({{asset('front')}}/images/background/21.png)"></div>
        <div class="auto-container">
            <div class="inner-container">

                <div class="image">
                    <img src="{{asset('front')}}/images/resource/login.jpg" alt="" />

                    <!-- Login Form -->
                    <div class="login-form">
                        <div class="pattern-layer" style="background-image:url({{asset('front')}}/images/background/18.png)"></div>
                        <div class="pattern-layer-2" style="background-image:url({{asset('front')}}/images/background/19.png)"></div>
                        <a href="#" class="facebook-login"><span class="fa fa-facebook-f"></span>&nbsp; Login In with Facebook</a>
                        <div class="fill">or fill the form</div>

                        <!-- Register Form -->
                        <form method="post">

                            <div class="form-group">
                                <input type="text" name="username" placeholder="User Name" required>
                            </div>

                            <div class="form-group">
                                <input type="password" name="password" placeholder="Password" required>
                            </div>

                            <div class="form-group">
                                <div class="check-box"><input type="checkbox" name="shipping-option" id="account-option"> &ensp; <label for="account-option">Remember me</label> <a href="#">Forgot password?</a></div>
                            </div>

                            <div class="form-group">
                                <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="txt">Login</span></button>
                                Don't have an account? <a href="login.html">Sign Up</a>
                            </div>

                        </form>

                    </div>
                    <!-- End Register Form -->

                </div>

            </div>
        </div>
    </div>
    <!-- End Register Container -->

@endsection
