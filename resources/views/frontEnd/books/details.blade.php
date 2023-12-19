@extends('frontEnd.master')
@section('title')
    {{$book->name}}
@endsection
@section('content')
    <!-- Author Details Start -->
    <section class="author-details-area">
        <div class="container">
            <div class="row" style="margin-top:50px;">
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
                        <form method="post" action="{{ route('cart.save') }}" id="addToCart{{ $book->id }}">

                            <span class="text-success h4">Online: R {{ $book->price }}</span>
                            <br>
                            <span class="text-success h4">Hard Copy Price: R {{ $book->print_price }}</span>
                            <p></p>

                            <div class="form-check">
                                <input type="checkbox" name="select_print_price" id="selectPrintPrice" class="form-check-input">
                                <label class="form-check-label" for="selectPrintPrice">Select Hard Copy Price</label>
                            </div>

                            <div id="shipPriceDiv" style="display: none;">
                                <label for="shipPrice">Shipping Price:</label>
                                <input type="text" name="shipping_price" id="shipPrice" value=" {{ $book->shipping_price }}">
                            </div>

                            <a href="#" onclick="event.preventDefault(); updateTotalPrice();" class="btn btn-success">Buy</a>

                            @csrf
                            <input type="hidden" name="book_id" value="{{ $book->id }}">
                            <input type="hidden" name="book_name" value="{{ $book->name }}">
                            <input type="hidden" name="total_price" id="totalPrice" value="{{ $book->price }}">

                            <!-- Hidden input fields for price and print_price -->
                            <input type="hidden" name="price" id="onlinePrice" value="{{ $book->price }}">
                            <input type="hidden" name="print_price" id="printPrice" value="{{ $book->print_price }}">

                        </form>

                        <script>
                            function updateTotalPrice() {
                                var selectPrintPrice = document.getElementById('selectPrintPrice').checked;
                                var totalPriceInput = document.getElementById('totalPrice');
                                var onlinePriceInput = document.getElementById('onlinePrice');
                                var printPriceInput = document.getElementById('printPrice');
                                var shipPriceDiv = document.getElementById('shipPriceDiv');

                                if (selectPrintPrice) {
                                    totalPriceInput.value = printPriceInput.value;
                                    // Show the ship_price input field when selectPrintPrice is checked
                                    shipPriceDiv.style.display = 'block';
                                } else {
                                    totalPriceInput.value = onlinePriceInput.value;
                                    // Hide the ship_price input field when selectPrintPrice is unchecked
                                    shipPriceDiv.style.display = 'none';
                                }

                                document.getElementById('addToCart{{ $book->id }}').submit();
                            }
                        </script>



                    </div>
                </div>
            </div>
            <div style="margin-top:100px;"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="">Book Details</h2>
                        </div>
                        <div class="card-body">
                            <p>{!!$book->body!!}</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>


@endsection
