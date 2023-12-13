@extends('frontEnd.master')
@section('title','Home')
@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{asset('front')}}/images/background/10.jpg)">
        <div class="auto-container">
            <h1>Cindy's Simple Plates</h1>
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

    <!-- End Keyword Section -->
    <!-- About Section -->
    <section class="about-section">
        <div class="layer-one" style="background-image: url({{asset('front')}}/images/resource/category-pattern-1.png)"></div>
        <div class="layer-two" style="background-image: url({{asset('front')}}/images/resource/category-pattern-1.png)"></div>
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image">
                            <img src="{{asset('front')}}/images/resource/about.png" alt="" />
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <div class="title">About us</div>
                            <h2>Our philosophy</h2>
                        </div>
                        <div class="bold-text">Welcome to the wonderful world of beets! I am delighted you are here.</div>
                        <div class="text">
                            <p>A lot of people ask me, "Why beets?" in which I respond with a cheeky grin, "'Beets' Me!" Actually, beets intrigue me as I think they are vibrantly diverse, spectacularly nutritious, and remarkably under-utilized. Perhaps you could say that I "root" for the underdog, er vegetable.</p>
                            <p>I was raised to appreciate fruits and vegetables. Thanks, mom and dad! Although I cannot recall the specific incidents, apparently when I was a toddler, I loved "helping" my parents in the garden by eating all the strawberries: dirt, insects, and all. Yes – to this day, I still love fruits and veggies; the beet happens to be one of the many extraordinary vegetables that I adore.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End About Section -->


    <!-- Books Section-->
    <section class="categories-section">
        <div class="auto-container">

            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2> Our Books </h2>
            </div>

            <!-- Categories Tabs -->
            <div class="related-items">
                <div class="row clearfix">
                    <!-- Recipes Book -->
                    @php
                    $books = \App\Models\Book::latest()->take(4)->get();
                    @endphp
                    @foreach($books as $row)
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
                    @endforeach

                </div>

            </div>
        </div>
    </section>
    <!-- End Categories Section-->

    <!-- Popular Recipes Section -->
    <section class="popular-recipes-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <div class="clearfix">
                    <div class="pull-left">
                        <h2>Popular Recipes Posts</h2>

                    </div>
                    <div class="pull-right">
                        <a href="{{route('home.recipes')}}" class="theme-btn btn-style-one"><span class="txt">See all Post</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="outer-container">
            <div class="clearfix row">
            @php
                $recipes = \App\Models\Recipe::latest()->get();
            @endphp
            @foreach($recipes as $row)
                <!-- Recipes Block -->
                <div class="recipes-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="{{route('recipe.details',['id'=>$row->id,'slug'=>$row->slug,])}}"><img src="{{asset($row->image)}}" alt="{{$row->name}}" /></a>
                        </div>
                        <div class="lower-content">
                            <div class="author-image"><a href="#"><img src="{{$row->user->image}}" alt="" /></a></div>
                            <div class="category">{{$row->category->name}}</div>
                            <h4><a href="{{route('recipe.details',['id'=>$row->id,'slug'=>$row->slug,])}}">{{$row->name}}</a></h4>
                            <div class="text">{{$row->description}}</div>
                            <ul class="post-meta">
                                <li><span class="icon flaticon-dish"></span>{{$row->ingredients}} ingredients</li>
                                <li><span class="icon flaticon-clock-3"></span>{{$row->duration}} Min</li>
                                <li><span class="icon flaticon-business-and-finance"></span>{{$row->peoples}} People</li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach


            </div>
        </div>
    </section>
    <!-- End Popular Recipes Section -->

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
                <div class="entertaining-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="{{route('home.blogDetails',$row->slug)}}"><img src="{{asset($row->image)}}" alt=""></a>
                        </div>
                        <div class="lower-content">
                            <ul class="post-meta">
                                <li><span class="icon "></span>21 Jan ,2020</li>
                                <li><span class="icon flaticon-comment"></span>4</li>
                                <li><span class="icon flaticon-heart"></span>5</li>
                            </ul>
                            <h4><a href="{{route('home.blogDetails',$row->slug)}}">{{$row->name}}</a></h4>
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
