@extends('frontEnd.master')
@section('title','Home')
@section('content')
    <!-- Books Section-->
    <section class="categories-section">
        <div class="auto-container">

            <!-- Categories Tabs -->
            <div class="related-items">
                <div class="row clearfix">
                    <!-- Recipes Book -->
                    @php
                        $books = \App\Models\Book::latest()->where('status',1)->take(8)->get();
                    @endphp
                    @foreach($books as $row)
                        <div class="recipes-block style-two col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <a href="{{route('book.details',$row->slug)}}"><img src="{{asset($row->image)}}" alt="" style="height: 400px!important;"/></a>
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

    <!-- End Keyword Section -->
    <!-- About Section -->
    <section class="about-section">
        <div class="layer-one" style="background-image: url({{asset('front')}}/images/resource/category-pattern-1.png)"></div>
        <div class="layer-two" style="background-image: url({{asset('front')}}/images/resource/category-pattern-1.png)"></div>
        <div class="auto-container">
            <div class="row clearfix">
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
                        <div class="sec-title">
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
