@extends('frontEnd.master')
@section('title','Books')
@section('content')
    <!-- Books Section-->
    <section class="categories-section">
        <div class="auto-container">

            <!-- Categories Tabs -->
            <div class="related-items">
                <div class="row clearfix">
                    <!-- Recipes Book -->
                    @php
                        $books = \App\Models\Book::latest()->where('status',1)->get();
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



@endsection
