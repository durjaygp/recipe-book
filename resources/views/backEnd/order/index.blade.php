@extends('backEnd.master')
@section('title','Order List')
@section('content')
    <div class="container-fluid">
        <div class="card bg-light-info shadow-none position-relative overflow-hidden">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="fw-semibold mb-8">@yield('title')</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a class="text-muted " href="{{route('admin.index')}}">Dashboard</a></li>
                                <li class="breadcrumb-item" aria-current="page">Category</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-3">
                        <div class="text-center mb-n5">
                            <img src="{{asset('back')}}/assets/images/breadcrumb/ChatBc.png" alt="" class="img-fluid mb-n4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget-content searchable-container list">
            <!-- --------------------- start Contact ---------------- -->
            <div class="card">
                <div class="row">
                    <div class="col-md-4 ">
                        <h2>Order List
                        </h2>
                    </div>
                    <div class="col-md-8 text-end d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                        <a href="{{route('pendingOrder.list')}}" class="btn btn-info d-flex align-items-center">
                            <i class="ti ti-menu-order text-white me-1 fs-5"></i> Pending Order
                        </a>
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


                                                    <a href="javascript:void(0)" class="btn btn-sm btn-primary">
                                                        <i class="ti ti-pencil fs-5"></i>
                                                    </a>
                                                    <a href="{{ route('book.delete', $row->id) }}"
                                                       onclick="event.preventDefault();
                                                           if (confirm('Are you sure you want to delete?'))
                                                           document.getElementById('delete-form-{{ $row->id }}').submit();"
                                                       class="btn btn-sm btn-danger text-white delete ms-2">
                                                        <i class="ti ti-trash fs-5"></i>
                                                    </a>

                                                    <form id="delete-form-{{ $row->id }}" action="{{ route('book.delete', $row->id) }}" method="get" style="display: none;">
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
