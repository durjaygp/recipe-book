@extends('frontEnd.master')
@section('title')
    {{$category->name}}
@endsection
@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{asset('front')}}/images/background/10.jpg)">
        <div class="auto-container">
            <h1>Category: {{$category->name}}</h1>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Product Form Section -->
    <section class="product-form-section style-two">
        <div class="auto-container">
            <div class="inner-container margin-top">

                <!-- Default Form -->
                <div class="default-form">
                    <form method="get" action="{{route('search.recipe')}}">
                        <div class="clearfix">
                            <!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <select class="custom-select-box">
                                    <option>Categories</option>
                                    @php
                                        $cates = \App\Models\Category::latest()->get();
                                    @endphp
                                    @foreach($cates as $row)
                                        <option>{{$row->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group col-lg-7 col-md-6 col-sm-12">
                                <input type="text" name="search" placeholder="Recipe Keyword" required>
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

    <!-- Popular Recipes Section -->
    <section class="popular-recipes-section style-three">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <div class="clearfix">
                    <div class="text-center">
                        <h2>Popular Recipes Posts</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="outer-container">
            <div class="row clearfix">
                @foreach($recipes as $row)
                    <div class="recipes-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="{{route('recipe.details',['id'=>$row->id,'slug'=>$row->slug,])}}"><img src="{{asset($row->image)}}" alt="{{$row->name}}" /></a>
                            </div>
                            <div class="lower-content">
                                <div class="author-image"><a href="#"><img src="{{asset($row->user->image)}}" alt="" /></a></div>
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

@endsection
