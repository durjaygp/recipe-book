@extends('backEnd.master')
@section('title','Admin Dashboard')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9 d-flex align-items-stretch">
                <div class="card w-100 bg-light-info overflow-hidden shadow-none">
                    <div class="card-body position-relative">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="d-flex align-items-center mb-7">
                                    <div class="rounded-circle overflow-hidden me-6">
                                        <img src="{{asset('back')}}/assets/images/profile/user-1.jpg" alt="" width="40" height="40">
                                    </div>
                                    <h5 class="fw-semibold mb-0 fs-5">Welcome back {{auth()->user()->name}}!</h5>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="pe-4 border-muted">
                                        <h3 class="mb-1 fw-semibold fs-8 d-flex align-content-center">R {{$todaySale}}<i class="ti ti-arrow-up-right fs-5 lh-base text-success"></i></h3>
                                        <p class="mb-0 text-dark">Today’s Sales</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="welcome-bg-img mb-n7 text-end">
                                    <img src="{{asset('back')}}/assets/images/backgrounds/welcome-bg.svg" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="item">
                    <div class="card border-0 zoom-in bg-light-success shadow-none">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{asset('back')}}/assets/images/svgs/icon-dd-invoice.svg" width="50" height="50" class="mb-3" alt="" />
                                <p class="fw-semibold fs-3 text-warning mb-1">Total Online Order</p>
                                <h5 class="fw-semibold text-warning mb-0">{{$totalSale}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="item">
                    <div class="card border-0 zoom-in bg-light-success shadow-none">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{asset('back')}}/assets/images/svgs/icon-cart.svg" width="50" height="50" class="mb-3" alt="" />
                                <p class="fw-semibold fs-3 text-warning mb-1">Total Order</p>
                                <h5 class="fw-semibold text-warning mb-0">{{$totalOrder}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="item">
                    <div class="card border-0 zoom-in bg-light-primary shadow-none">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{asset('back')}}/assets/images/svgs/books.png" width="50" height="50" class="mb-3" alt="" />
                                <p class="fw-semibold fs-3 text-warning mb-1">Total Books</p>
                                <h5 class="fw-semibold text-warning mb-0">{{$totalBooks}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="item">
                    <div class="card border-0 zoom-in bg-light-primary shadow-none">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{asset('back')}}/assets/images/svgs/blogs.png" width="50" height="50" class="mb-3" alt="" />
                                <p class="fw-semibold fs-3 text-warning mb-1">Total Blogs</p>
                                <h5 class="fw-semibold text-warning mb-0">{{$totalBlogs}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="item">
                    <div class="card border-0 zoom-in bg-light-warning shadow-none">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{asset('back')}}/assets/images/svgs/icon-user-male.svg" width="50" height="50" class="mb-3" alt="" />
                                <p class="fw-semibold fs-3 text-warning mb-1">Users</p>
                                <h5 class="fw-semibold text-warning mb-0">{{$totalUser}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <div class="col-md-4 ">
                        <h2>Recent Order
                        </h2>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="zero_config"
                                       class="table border table-striped table-bordered text-nowrap">
                                    <thead>
                                    <!-- start row -->
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                    <!-- end row -->
                                    </thead>
                                    <tbody>
                                    @foreach($orders as $row)
                                        <!-- start row -->
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td><img src="{{asset($row->books->image)}}" alt="" class="img-fluid w-50"></td>
                                            <td>{{$row->books->name}}</td>
                                            <td>{{$row->books->price}}</td>
                                            <td> @if($row->status == 0)
                                                    <span class="text-success">Approved</span>
                                                @elseif($row->status == 1)
                                                    <span class="text-warning">Pending</span>
                                            @endif
                                            <td>
                                                <div class="action-btn">    <a href="javascript:void(0)" id="btn-add-contact" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#addContactModal{{$row->id}}">
                                                        <i class="ti ti-eye text-white me-1 fs-5"></i>
                                                    </a>

                                                    <div class="modal fade" id="addContactModal{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="addContactModalTitle" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header d-flex align-items-center">
                                                                    <h5 class="modal-title">Payment Details</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="add-contact-box">
                                                                        <div class="add-contact-content">
                                                                            <form>
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <div class="mb-3 contact-name">
                                                                                            <label for="c-name">Name</label>
                                                                                            <input type="text" id="c-name" class="form-control" value="{{ $row->name }}" disabled />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="mb-3 contact-name">
                                                                                            <label for="c-account">Account Number</label>
                                                                                            <input type="text" id="c-account" class="form-control" value="{{ $row->account }}" disabled />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="mb-3 contact-name">
                                                                                            <label for="c-reference">Reference</label>
                                                                                            <input type="text" id="c-reference" class="form-control" value="{{ $row->reference }}" disabled />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="mb-3 contact-name">
                                                                                            <label for="c-reference">Price</label>
                                                                                            <input type="text" id="c-reference" class="form-control" value="{{ $row->price }}" disabled />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="mb-3 contact-name">
                                                                                            <label for="c-reference">Reference</label>
                                                                                            <input type="text" id="c-reference" class="form-control" value="{{ $row->reference }}" disabled />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="mb-3 contact-name">
                                                                                            <label for="c-reference">Country</label>
                                                                                            <input type="text" id="c-reference" class="form-control" value="{{ $row->country }}" disabled />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="mb-3 contact-name">
                                                                                            <label for="c-reference">Address</label>
                                                                                            <input type="text" id="c-reference" class="form-control" value="{{ $row->address }}" disabled />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="mb-3 contact-name">
                                                                                            <label for="c-reference">Description</label>
                                                                                            <input type="text" id="c-reference" class="form-control" value="{{ $row->description }}" disabled />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button class="btn btn-danger rounded-pill px-4" data-bs-dismiss="modal"> Close </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="{{ route('book.delete', $row->id) }}"
                                                       onclick="event.preventDefault();
                                                           if (confirm('Are you sure you want to delete?'))
                                                           document.getElementById('delete-form-{{ $row->id }}').submit();"
                                                       class="btn btn-sm btn-danger text-white delete ms-2">
                                                        <i class="ti ti-trash fs-5"></i>
                                                    </a>

                                                    <form id="delete-form-{{ $row->id }}" action="{{ route('order.delete', $row->id) }}" method="get" style="display: none;">
                                                        @csrf
                                                    </form>

                                                </div>
                                            </td>
                                        </tr>
                                        <!-- end row -->
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
