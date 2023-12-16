@extends('frontEnd.master')
@section('title')
{{$search}}
@endsection
@section('content')

    <!-- Books Section-->
    <section class="categories-section">
        <div class="auto-container">

            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2 style="margin-top:40px"> Your Search Results </h2>
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
