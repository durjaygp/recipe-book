@extends('frontEnd.master')
@section('title')
{{$search}}
@endsection
@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{asset('front')}}/images/background/10.jpg)">
        <div class="auto-container">
            <h1>Books</h1>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Product Form Section -->
    <section class="product-form-section style-two">
        <div class="auto-container">
            <div class="inner-container margin-top">

                <!-- Default Form -->
                <div class="default-form">
                    <form method="get" action="{{route('search.book')}}">
                        <div class="clearfix">
                            <!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <select class="custom-select-box">
                                    <option>Books</option>
                                </select>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group col-lg-7 col-md-6 col-sm-12">
                                <input type="text" name="search" placeholder="Books Name" required>
                            </div>

                            <div class="form-group col-lg-2 col-md-12 col-sm-12">
                                <button type="submit" class="theme-btn search-btn"><span class="fa fa-search"> Search</span></button>
                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- End Keyword Section -->


    <!-- Books Section-->
    <section class="categories-section">
        <div class="auto-container">

            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2> Your Search Results </h2>
            </div>

            <!-- Categories Tabs -->
            <div class="related-items">
                <div class="row clearfix">
                    @forelse($books as $row)
                        <div class="recipes-block style-two col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <a href="{{route('book.details',$row->slug)}}"><img src="{{asset($row->image)}}" alt="" /></a>
                                </div>
                                <div class="lower-content">
                                    <h4><a href="{{route('book.details',$row->slug)}}">{{$row->name}}</a></h4>
                                    <span class="text-success h4">R {{$row->price}}</span>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="text-center">
                            <h2 class="text-danger">Not Found!</h2>
                        </div>
                    @endforelse
                </div>

            </div>
        </div>
    </section>
    <!-- End Categories Section-->



@endsection
