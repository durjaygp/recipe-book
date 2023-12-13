@extends('frontEnd.master')
@section('title','Cart')
@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{asset('front')}}/images/background/10.jpg)">
        <div class="auto-container">
            <h1>My Cart</h1>
        </div>
    </section>
    <!--End Page Title-->

    <!-- cart Section-->
    <section class="categories-section">
        <div class="auto-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                          <span class="h1"> All Books</span>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Book Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                @foreach($carts as $row)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$row->book_name}}</td>
                                    <td>{{$row->total_price}}</td>
                                    <td><a href="#" onclick="event.preventDefault();
                                            if (confirm('Are you sure you want to Remove?'))
                                            document.getElementById('delete-form-{{ $row->id }}').submit();" class="btn btn-danger"><i class="fa fa-trash"></i> Remove</a>

                                        <form id="delete-form-{{ $row->id }}" action="{{ route('cart.remove', $row->id) }}" method="get" style="display: none;">
                                            @csrf
                                        </form>

                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            <div class="text-center">
                                <div class="text-primary">
                                    <h3>Total Price: R {{$totalPrice}}</h3>
                                </div>
                                <a href="{{route('home.checkout')}}" class="btn btn-success">Checkout</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            </div>
        </div>
    </section>
    <!-- End Categories Section-->



@endsection
