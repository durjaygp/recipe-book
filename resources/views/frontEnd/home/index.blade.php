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
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End About Section -->

{{--    <!-- Popular Recipes Section -->--}}
{{--    <section class="popular-recipes-section">--}}
{{--        <div class="auto-container">--}}
{{--            <!-- Sec Title -->--}}
{{--            <div class="sec-title">--}}
{{--                <div class="clearfix">--}}
{{--                    <div class="pull-left">--}}
{{--                        <h2>Popular Recipes Posts</h2>--}}

{{--                    </div>--}}
{{--                    <div class="pull-right">--}}
{{--                        <a href="{{route('home.recipes')}}" class="theme-btn btn-style-one"><span class="txt">See all Post</span></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="outer-container">--}}
{{--            <div class="clearfix row">--}}
{{--            @php--}}
{{--                $recipes = \App\Models\Recipe::latest()->take(4)->get();--}}
{{--            @endphp--}}
{{--            @foreach($recipes as $row)--}}
{{--                <!-- Recipes Block -->--}}
{{--                <div class="recipes-block col-lg-3 col-md-6 col-sm-12">--}}
{{--                    <div class="inner-box">--}}
{{--                        <div class="image">--}}
{{--                            <a href="{{route('recipe.details',['id'=>$row->id,'slug'=>$row->slug,])}}"><img src="{{asset($row->image)}}" alt="{{$row->name}}" /></a>--}}
{{--                        </div>--}}
{{--                        <div class="lower-content">--}}
{{--                            <div class="author-image"><a href="#"><img src="{{$row->user->image}}" alt="" /></a></div>--}}
{{--                            <div class="category">{{$row->category->name}}</div>--}}
{{--                            <h4><a href="{{route('recipe.details',['id'=>$row->id,'slug'=>$row->slug,])}}">{{$row->name}}</a></h4>--}}
{{--                            <div class="text">{{$row->description}}</div>--}}
{{--                            <ul class="post-meta">--}}
{{--                                <li><span class="icon flaticon-dish"></span>{{$row->ingredients}} ingredients</li>--}}
{{--                                <li><span class="icon flaticon-clock-3"></span>{{$row->duration}} Min</li>--}}
{{--                                <li><span class="icon flaticon-business-and-finance"></span>{{$row->peoples}} People</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endforeach--}}


{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- End Popular Recipes Section -->--}}

    @php
    $book = \App\Models\Book::find(10);
    @endphp
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
                    </div>
                </div>
            </div>
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
