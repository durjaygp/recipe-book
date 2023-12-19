{{--<x-guest-layout>--}}
{{--    <!-- Session Status -->--}}
{{--    <x-auth-session-status class="mb-4" :status="session('status')" />--}}

{{--    <form method="POST" action="{{ route('login') }}">--}}
{{--        @csrf--}}

{{--        <!-- Email Address -->--}}
{{--        <div>--}}
{{--            <x-input-label for="email" :value="__('Email')" />--}}
{{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password" :value="__('Password')" />--}}

{{--            <x-text-input id="password" class="block mt-1 w-full"--}}
{{--                            type="password"--}}
{{--                            name="password"--}}
{{--                            required autocomplete="current-password" />--}}

{{--            <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Remember Me -->--}}
{{--        <div class="block mt-4">--}}
{{--            <label for="remember_me" class="inline-flex items-center">--}}
{{--                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">--}}
{{--                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>--}}
{{--            </label>--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            @if (Route::has('password.request'))--}}
{{--                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">--}}
{{--                    {{ __('Forgot your password?') }}--}}
{{--                </a>--}}
{{--            @endif--}}

{{--            <x-primary-button class="ms-3">--}}
{{--                {{ __('Log in') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</x-guest-layout>--}}
@extends('frontEnd.master')
@section('title','Login')
@section('content')
    <!-- Page Title -->
    <section class="page-title">
        <div class="auto-container">
            <h1 style="color: #D6BC94;">login</h1>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Login Container -->
    <div class="register-container margin">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">

                    <!-- Image Column -->
                    <div class="col-lg-3"></div>
                    <div class="form-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="pattern-layer" style="background-image:url({{asset('front')}}/images/background/18.png)"></div>
                            <div class="pattern-layer-2" style="background-image:url({{asset('front')}}/images/background/19.png)"></div>
                            <a href="{{route('register')}}" class="facebook-login"> Register </a>
                            <div class="fill">or fill the form</div>

                            <!-- Register Form -->
                            <div class="register-form">

                                <!-- Register Form -->
                                <form method="post" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email Address" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" name="password" placeholder="Password" required>
                                    </div>

                                    <div class="form-group">
                                        <div class="check-box"><input type="checkbox" name="shipping-option" id="account-option"> &ensp; <label for="account-option">Remember me</label> <a href="#">Forgot password?</a></div>
                                    </div>

                                    <div class="form-group">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="txt">Login</span></button>

                                    </div>



                                </form>

                            </div>
                            <!-- End Register Form -->

                        </div>
                    </div>
                    <div class="col-lg-3"></div>

                    <!-- Form Column -->


                </div>
            </div>
        </div>
    </div>

    <!-- End Register Container -->

@endsection
