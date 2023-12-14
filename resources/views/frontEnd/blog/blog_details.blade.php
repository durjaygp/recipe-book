@extends('frontEnd.master')
@section('title')
    {{$blog->name}}
@endsection
@section('content')
    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Content Side -->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-list">

                        <!-- News Block -->
                            <div class="news-block">
                                <div class="inner-box">
                                    <div class="image">
                                    <img src="{{asset($blog->image)}}" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <h2 alt="{{$blog->name}}">{{$blog->name}}</h2>
                                        <ul class="post-info">
                                            <li>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $blog->created_at)->format('M d, Y h:i A')}}</li>
                                            <li>By: {{$blog->user->name}}</li>
                                        </ul>
                                        <div class="text">{{$blog->description}}</div>
                                        <p class="text">{!!$blog->main_content!!}</p>
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>

                <!-- Sidebar Side -->
                @include('frontEnd.blog.sidebar')


            </div>
        </div>
    </div>
@endsection
