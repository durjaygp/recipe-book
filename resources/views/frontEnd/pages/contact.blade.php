@extends('frontEnd.master')
@section('title','Contact Us')
@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image:url({{asset('front')}}/images/background/14.jpg)">
        <div class="auto-container">
            <h1>Contact us</h1>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Page Container -->
    <div class="contact-page-container">
        <div class="pattern-layer" style="background-image:url({{asset('front')}}/images/background/16.png)"></div>
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Info Column -->
                <div class="info-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <h2>Get in touch <br> and let us know how <br> we can help.</h2>
                            <div class="text">{{$website->description}}</div>
                        </div>
                        <ul class="contact-info-list">
                            <li>Address : {{$website->address}}</li>
                            <li>Email : {{$website->email}}</li>
                            <li>Phone : {{$website->phone}}</li>
                        </ul>
                        <div class="map">
                            <img src="{{asset('front')}}/images/icons/map.png" alt="" />
                        </div>
                    </div>
                </div>

                <!-- Form Column -->
                <div class="form-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">

                        <!-- Contact Form -->
                        <div class="contact-form">

                            <!-- Contact Form -->
                            <form method="post" action="{{route('contact.save')}}">
                                @csrf

                                <div class="form-group">
                                    <input type="text" name="subject" placeholder="Subject" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Name" required>
                                </div>

                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email" required>
                                </div>

                                <div class="form-group">
                                    <textarea class="darma" name="message" placeholder="Type Your Message"></textarea>
                                </div>

                                <div class="form-group text-center">
                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="txt">Submit</span></button>
                                </div>

                            </form>

                        </div>
                        <!-- End Contact Form -->

                    </div>
                </div>

            </div>
        </div>
    </div>



@endsection
