@extends('frontEnd.master')
@section('title','Blogs')
@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image:url({{asset('front')}}/images/background/14.jpg)">
        <div class="auto-container">
            <h1>Blog List</h1>
        </div>
    </section>
    <!--End Page Title-->

    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Content Side -->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-list">

                        <!-- News Block -->
                        @foreach($blogs as $row)
                            <div class="news-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="{{route('home.blogDetails',$row->slug)}}"><img src="{{asset($row->image)}}" alt="" /></a>
                                    </div>
                                    <div class="lower-content">
                                        <h3><a href="blog-single.html">{{$row->name}}</a></h3>
                                        <ul class="post-info">
                                            <li>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $row->created_at)->format('M d, Y h:i A')}}</li>
                                            <li>By: {{$row->user->name}}</li>
                                        </ul>
                                        <div class="text">{{$row->description}}</div>
                                    </div>
                                </div>
                            </div>
                    @endforeach



{{--                    <!-- Post Share Options -->--}}
{{--                        <div class="styled-pagination">--}}
{{--                            <ul class="clearfix">--}}
{{--                                <li class="active"><a href="#">01</a></li>--}}
{{--                                <li><a href="#">02</a></li>--}}
{{--                                <li><a href="#">03</a></li>--}}
{{--                                <li class="next"><a href="#"><span class="fa fa-angle-right"></span> </a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}

                    </div>
                </div>

                <!-- Sidebar Side -->
                @include('frontEnd.blog.sidebar')


            </div>
        </div>
    </div>


@endsection
