{{--<x-guest-layout>--}}
{{--    <form method="POST" action="{{ route('register') }}">--}}
{{--        @csrf--}}

{{--        <!-- Name -->--}}
{{--        <div>--}}
{{--            <x-input-label for="name" :value="__('Name')" />--}}
{{--            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />--}}
{{--            <x-input-error :messages="$errors->get('name')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Email Address -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="email" :value="__('Email')" />--}}
{{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password" :value="__('Password')" />--}}

{{--            <x-text-input id="password" class="block mt-1 w-full"--}}
{{--                            type="password"--}}
{{--                            name="password"--}}
{{--                            required autocomplete="new-password" />--}}

{{--            <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Confirm Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />--}}

{{--            <x-text-input id="password_confirmation" class="block mt-1 w-full"--}}
{{--                            type="password"--}}
{{--                            name="password_confirmation" required autocomplete="new-password" />--}}

{{--            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">--}}
{{--                {{ __('Already registered?') }}--}}
{{--            </a>--}}

{{--            <x-primary-button class="ms-4">--}}
{{--                {{ __('Register') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</x-guest-layout>--}}

@extends('frontEnd.master')
@section('title','Register')
@section('content')

    <!-- Page Title -->
    <section class="page-title">
        <div class="auto-container">
            <h1 style="color: #D6BC94;">Register</h1>
            <h1 class="text-black"><a href="{{route('login')}}">Or Login</a></h1>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Register Container -->
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
                            <a href="{{route('login')}}" class="facebook-login"> Login </a>
                            <div class="fill">or fill the form</div>

                            <!-- Register Form -->
                            <div class="register-form">

                                <!-- Register Form -->
                                <form method="post" action="{{ route('register') }}">
                                    @csrf

                                    <div class="form-group">
                                        <input type="text" name="name" placeholder=" Name" required>
                                    </div>


                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" name="password" placeholder="Password" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" name="password_confirmation" placeholder="Password" required>
                                    </div>

                                    <div class="form-group">
                                        <div class="check-box"><input type="checkbox" name="shipping-option" id="account-option"> &ensp; <label for="account-option">I have read and accept the Terms and Privacy Policy</label></div>
                                    </div>

                                    <div class="form-group">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="txt">Register</span></button>
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
