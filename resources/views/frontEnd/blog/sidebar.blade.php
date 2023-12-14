<div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
    <aside class="sidebar sticky-top">
        <div class="sidebar-inner">

            <!-- Next Post Widget -->
            <div class="sidebar-widget next-post-widget">
                <div class="sidebar-title">
                    <h3>Read Next</h3>
                </div>
                <div class="widget-content">
                    @php
                        $blogside = \App\Models\Blog::orderBy('created_at', 'asc')->take(7)->get();
                    @endphp

                    @foreach($blogside as $row)
                        <div class="next-post">
                            <div class="post-inner" style="background-image:url({{ asset($row->image) }})">
                                <h4><a href="{{route('home.blogDetails',$row->slug)}}">{{ $row->name }}</a></h4>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
{{--            <div class="sidebar-widget categories-widget">--}}
{{--                <div class="sidebar-title">--}}
{{--                    <h3>Latest Recipes</h3>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- carousel Post Widget -->--}}
{{--            <div class="sidebar-widget carousel-post-widget">--}}
{{--                <div class="widget-content">--}}
{{--                    <div class="single-item-carousel owl-carousel owl-theme">--}}
{{--                        @php--}}
{{--                            $recipeside = \App\Models\Recipe::latest()->take(3)->get();--}}
{{--                        @endphp--}}
{{--                        @foreach($recipeside as $row)--}}
{{--                            <div class="post-block">--}}
{{--                                <div class="block-inner">--}}
{{--                                    <div class="image">--}}
{{--                                        <img src="{{asset($row->image)}}" alt="" />--}}
{{--                                    </div>--}}
{{--                                    <div class="lower-content">--}}
{{--                                        <div class="author-image">--}}
{{--                                            <img src="images/resource/author-9.jpg" alt="" />--}}
{{--                                        </div>--}}
{{--                                        <div class="category">{{$row->category->name}}</div>--}}
{{--                                        <h4><a href="#">{{$row->name}}</a></h4>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

        </div>
    </aside>
</div>
