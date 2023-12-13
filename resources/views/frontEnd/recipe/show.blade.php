@extends('frontEnd.master')
@section('title')
    {{ $recipe->name}}
@endsection
@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image:url({{asset('front')}}/images/background/12.png)">
        <div class="auto-container">
            <h1>{{ $recipe->name}}</h1>
        </div>
    </section>
    <!--End Page Title-->

    <!--Sidebar Page Container-->
    <div class="sidebar-page-container recipes-details-area">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Content Side -->
                <div class="content-side col-lg-12 col-md-12 col-sm-12">
                    <div class="recipe-detail">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{asset('front')}}/images/resource/big.jpg" alt="" />
                            </div>
                            <div class="content" style="background-image:url({{asset('front')}}/images/background/13.png)">
                                <div class="category">{{$recipe->category->name}}</div>
                                <h2>{{$recipe->name}}</h2>
                                <div class="post">{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $recipe->created_at)->format('M d, Y h:i A')}} <span>By : {{$recipe->user->name}}</span></div>
                                <ul class="post-meta">
                                    <li><span class="icon flaticon-dish"></span>{{$recipe->ingredients}} ingredients</li>
                                    <li><span class="icon flaticon-clock-3"></span>{{$recipe->duration}} Min</li>
                                    <li><span class="icon flaticon-business-and-finance"></span>{{$recipe->peoples}} People</li>
                                </ul>
                                <div class="text">{{$recipe->description}}</div>

                            </div>

                            <div class="row clearfix">

                                <div class="column col-lg-12">

                                    <div class="my-tab">
                                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Description</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">See Video</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <!-- Ingredients Block -->
                                                                <div class="ingredients-block">
                                                                    <div class="block-inner">
                                                                        <h4>Ingredients</h4>
                                                                        <p>{!!$recipe->ingredients_content!!}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="ingredients-block">
                                                                    <div class="block-inner">
                                                                        <h4>Main Recipe</h4>
                                                                        <p>{!!$recipe->recipe!!}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                                <!-- Video Boxed -->
                                                <div class="video-boxed">

                                                    <!-- Video Box Two -->
                                                    <div class="video-box-two">
                                                        <div class="image">
                                                            <img src="{{asset('front')}}/images/resource/video.jpg" alt="" />
                                                            <a href="{{$recipe->video}}" class="lightbox-image overlay-box"><span class="flaticon-media-play-symbol"><i class="ripple"></i></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>




                            <!-- Related Items -->
                            <div class="related-items">
                                <h4>You may also like</h4>

                                <div class="row clearfix">
                                    @php
                                    $rows = \App\Models\Recipe::latest()->take(3)->get();
                                    @endphp

                                    <!-- Recipes Block -->
                                        @foreach($rows as $row)
                                    <div class="recipes-block style-two col-lg-4 col-md-6 col-sm-12">
                                        <div class="inner-box">
                                            <div class="image">
                                                <a href="{{route('recipe.details',['id'=>$row->id,'slug'=>$row->slug,])}}"><img src="{{asset($row->image)}}" alt="" /></a>
                                            </div>
                                            <div class="lower-content">
                                                <div class="author-image"><a href="#"><img src="{{asset($row->user->image)}}" alt="" /></a></div>
                                                <div class="category">{{$row->category->name}}</div>
                                                <h4><a href="{{route('recipe.details',['id'=>$row->id,'slug'=>$row->slug,])}}">{{$row->name}}</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                        @endforeach

                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
