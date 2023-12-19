@extends('frontEnd.master')
@section('title')
    {{$website->name}}
@endsection
@section('content')


    <!-- End Keyword Section -->
    <!-- About Section -->
    <section class="about-section">
        <div class="layer-one" style="background-image: url({{asset('front')}}/images/resource/category-pattern-1.png)"></div>
        <div class="layer-two" style="background-image: url({{asset('front')}}/images/resource/category-pattern-1.png)"></div>
        <div class="auto-container">
            <div class="row clearfix" style="margin-top:50px;">
            @php
                $about = \App\Models\About::find(1);
            @endphp
                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image">
                            <img src="{{asset($about->image)}}" alt="" />
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title mt-3">
                            <div class="title">{{$about->title}}</div>
                            <h2>{{$about->header}}</h2>
                        </div>
                        <div class="text">
                            <p>{{$about->description}}</p>
                        </div>
                        <div class="main-footer">
                            <ul class="social-box">
                                <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fa fa-youtube-play"></span></a></li>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End About Section -->
    <section class="author-details-area">
        <div class="container">
            <div class="sec-title">
                <div class="clearfix">
                    <div class="pull-left">
                        <h2>Featured Book</h2>
                    </div>
                    <div class="pull-right">
                        <a href="{{route('home.books')}}" class="theme-btn btn-style-one"><span class="txt">See all Books</span></a>
                    </div>
                </div>
            </div>
            @foreach($books as $book)
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
                        <form method="post" action="{{ route('cart.save') }}" id="addToCart{{ $book->id }}">

                            <span class="text-success h4">Online: R {{ $book->price }}</span>
                            <br>
                            <span class="text-success h4">Hard Copy Price: R {{ $book->print_price }}</span>
                            <p></p>

                            <div class="form-check">
                                <input type="checkbox" name="select_print_price" id="selectPrintPrice" class="form-check-input">
                                <label class="form-check-label" for="selectPrintPrice">Select Hard Copy Price</label>
                            </div>

                            <div id="shipPriceDiv" style="display: none;">
                                <label for="shipPrice">Shipping Price:</label>
                                <input type="text" name="shipping_price" id="shipPrice" value=" {{ $book->shipping_price }}">
                            </div>

                            <a href="#" onclick="event.preventDefault(); updateTotalPrice();" class="btn btn-success">Buy</a>

                            @csrf
                            <input type="hidden" name="book_id" value="{{ $book->id }}">
                            <input type="hidden" name="book_name" value="{{ $book->name }}">
                            <input type="hidden" name="total_price" id="totalPrice" value="{{ $book->price }}">

                            <!-- Hidden input fields for price and print_price -->
                            <input type="hidden" name="price" id="onlinePrice" value="{{ $book->price }}">
                            <input type="hidden" name="print_price" id="printPrice" value="{{ $book->print_price }}">

                        </form>

                        <script>
                            function updateTotalPrice() {
                                var selectPrintPrice = document.getElementById('selectPrintPrice').checked;
                                var totalPriceInput = document.getElementById('totalPrice');
                                var onlinePriceInput = document.getElementById('onlinePrice');
                                var printPriceInput = document.getElementById('printPrice');
                                var shipPriceDiv = document.getElementById('shipPriceDiv');

                                if (selectPrintPrice) {
                                    totalPriceInput.value = printPriceInput.value;
                                    // Show the ship_price input field when selectPrintPrice is checked
                                    shipPriceDiv.style.display = 'block';
                                } else {
                                    totalPriceInput.value = onlinePriceInput.value;
                                    // Hide the ship_price input field when selectPrintPrice is unchecked
                                    shipPriceDiv.style.display = 'none';
                                }

                                document.getElementById('addToCart{{ $book->id }}').submit();
                            }
                        </script>





                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Trending Recipes Section -->
    <section class="trending-recipes-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <div class="clearfix">
                    <div class="pull-left">
                        <h2>Blogs</h2>
                    </div>
                    <div class="pull-right">
                        <a href="{{route('home.blogs')}}" class="theme-btn btn-style-one"><span class="txt">See all Blog</span></a>
                    </div>
                </div>
            </div>

            <div class="clearfix row">

                <!-- Blog Block -->
                @php
                $blogs = \App\Models\Blog::latest()->where('status',1)->take(4)->get();
                @endphp
                @foreach($blogs as $row)
                <div  class="entertaining-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="{{route('home.blogDetails',$row->slug)}}"><img src="{{asset($row->image)}}" alt=""></a>
                        </div>
                        <div class="lower-content">
                            <ul class="post-meta">
                                <li>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $row->created_at)->format('M d, Y h:i A')}}</li>

                                <li>By: {{$row->user->name}}</li>
                            </ul>
                            <h4><a href="{{route('home.blogDetails',$row->slug)}}">{{$row->name}}</a></h4>
                            <p>{{\Illuminate\Support\Str::limit($row->description,35)}}</p>
                            <a href="{{route('home.blogDetails',$row->slug)}}" class="theme-btn read-more">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>

        </div>
    </section>
    <!-- End Trending Recipes Section -->
@endsection
{{--@section('script')--}}
{{--    <script>--}}
{{--        function updateTotalPrice() {--}}
{{--            var selectPrintPrice = document.getElementById('selectPrintPrice').checked;--}}
{{--            var totalPriceInput = document.getElementById('totalPrice');--}}
{{--            var onlinePriceInput = document.getElementById('onlinePrice');--}}
{{--            var printPriceInput = document.getElementById('printPrice');--}}

{{--            if (selectPrintPrice) {--}}
{{--                totalPriceInput.value = printPriceInput.value;--}}
{{--            } else {--}}
{{--                totalPriceInput.value = onlinePriceInput.value;--}}
{{--            }--}}

{{--            document.getElementById('addToCart{{ $book->id }}').submit();--}}
{{--        }--}}
{{--    </script>--}}
{{--@endsection--}}
