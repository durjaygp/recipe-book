@extends('frontEnd.master')
@section('title','404')
@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image:url({{asset('front')}}/images/background/17.png)">
        <div class="auto-container">
            <h1>403</h1>
        </div>
    </section>
    <!--End Page Title-->

    <!--Error Section-->
    <section class="error-section">
        <div class="auto-container">
            <div class="content">
                <h1>403</h1>
                <h2>Oops! That page can’t be found</h2>
                <div class="text">Sorry, but the page you are looking for does not existing</div>
                <a href="{{route('home')}}" class="theme-btn btn-style-one"><span class="txt">Go to home page</span></a>
            </div>
        </div>
    </section>
    <!--End Error Section-->

@endsection
