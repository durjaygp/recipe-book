@extends('frontEnd.master')
@section('title')
    {{$book->name}}
@endsection
@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{asset('front')}}/images/background/10.jpg)">
        <div class="auto-container">
            <h1>Book details</h1>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Author Details Start -->
    <section class="author-details-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="author-details-col p-0">
                        <div class="author-details-img">
                            <img src="{{asset($book->image)}}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="author-details-col author-details-content">
                        <h2>{{$book->name}}</h2>
                        <p>{{$book->description}}</p>
                        <ul class="author-info">
                            <li><i class="fa fa-coffee" aria-hidden="true"></i> {{$book->total_recipe}} Recipes</li>
                            <li><i class="fa fa-pagelines" aria-hidden="true"></i> {{$book->pages}} Pages</li>
                            <li><i class="fa fa-calendar" aria-hidden="true"></i> Published Date: {{$book->publish_date}}</li>
                        </ul>
                        <span class="text-success h4">R {{$book->price}}</span>
                        <p></p>

                        <a href="#" onclick="event.preventDefault(); document.getElementById('addToCart{{$book->id}}').submit();" class="btn btn-success">Buy</a>
                        <form method="post" action="{{route('cart.save')}}" id="addToCart{{$book->id}}" class="d-none">
                            @csrf
                            <input type="hidden" name="book_id" id="" value="{{$book->id}}">
                            <input type="hidden" name="total_price" id="" value="{{$book->price}}">
                            <input type="hidden" name="book_name" id="" value="{{$book->name}}">
                        </form>



{{--                        <ul class="social-links">--}}
{{--                            <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>--}}
{{--                            <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>--}}
{{--                            <li><a href="#"><span class="fa fa-instagram"></span></a></li>--}}
{{--                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>--}}
{{--                            <li><a href="#"><span class="fa fa-youtube-play"></span></a></li>--}}
{{--                        </ul>--}}
                    </div>
                </div>
            </div>
            <div style="margin-top:100px;"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="">Book Details</h2>
                        </div>
                        <div class="card-body">
                            <p>{!!$book->body!!}</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>


@endsection
