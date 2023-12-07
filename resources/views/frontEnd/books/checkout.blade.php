@extends('frontEnd.master')
@section('title','Manually Payment Request')
@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{asset('front')}}/images/background/10.jpg)">
        <div class="auto-container">
            <h1>Add recipe</h1>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Add recipe Start -->
    <section class="add-recipe-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="add-recipe-col">
                        <h4>Please fill up all fields for submit a Manually Payment Request</h4>
                        <form action="{{route('checkout.save')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-4">
                                <label>Your Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                            </div>
                            <div class="form-group mb-4">
                                <label>Your Account Number</label>
                                <input type="text" name="account" class="form-control" placeholder="Your Account Number" required>
                            </div>
                            <div class="form-group mb-4">
                                <label>Reference</label>
                                <input type="text" name="reference" class="form-control" placeholder="Reference" required>
                            </div>
                            <div class="form-group mb-4">
                                <label>Amount</label>
                                <input type="number" name="image" class="form-control" placeholder="Amount" value="{{$totalPrice}}" required>
                            </div>
                            <div class="form-group mb-4">
                                <label>Payment or Screenshot (Optional)</label>
                                <input type="file" name="total_price" class="form-control-file" required>
                            </div>
                            <div class="form-group mb-4">
                                <label>Payment Description</label>
                                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="4" placeholder="Write Here..." required></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-primary theme-btn btn-style-one" type="submit"><span>Submit</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

