@extends('backEnd.master')
@section('title','Category')
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
            <div class="card card-body">
                <div class="row">
                    <div class="col-md-4 col-xl-3">
                        <form class="position-relative">
                            <input type="text" class="form-control product-search ps-5" id="input-search" placeholder="Search..." />
                            <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                        </form>
                    </div>
                    <div class="col-md-8 col-xl-9 text-end d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                        <div class="action-btn show-btn" style="display: none">
                            <a href="javascript:void(0)" class="delete-multiple btn-light-danger btn me-2 text-danger d-flex align-items-center font-medium">
                                <i class="ti ti-trash text-danger me-1 fs-5"></i> Delete All Row
                            </a>
                        </div>
                        <a href="javascript:void(0)" id="btn-add-contact" class="btn btn-info d-flex align-items-center">
                            <i class="ti ti-users text-white me-1 fs-5"></i> Add Contact
                        </a>
                    </div>
                </div>
            </div>
            <!-- ---------------------
                            end Contact
                        ---------------- -->
            <!-- Modal -->
            <div class="modal fade" id="addContactModal" tabindex="-1" role="dialog" aria-labelledby="addContactModalTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">

                        <div class="modal-content">
                            <div class="modal-header d-flex align-items-center">
                                <h5 class="modal-title">Create New Category</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{route('category.save')}}" method="post">
                                @csrf
                            <div class="modal-body">
                                <div class="add-contact-box">
                                    <div class="add-contact-content">
                                        <form id="addContactModalTitle">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3 contact-name">
                                                        <input type="text" name="name" id="c-name" class="form-control" placeholder="Category Name" />
                                                        <span class="validation-text text-danger"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3 contact-location">
                                                        <textarea name="description" id="" cols="30" class="form-control" rows="10"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success rounded-pill px-4">Save</button>
                                <button class="btn btn-danger rounded-pill px-4" data-bs-dismiss="modal"> Discard </button>
                            </div>
                            </form>
                        </div>

                </div>
            </div>
            <div class="card card-body">
                <div class="table-responsive">
                    <table class="table search-table align-middle text-nowrap">
                        <thead class="header-item">
                        <th>
                            <div class="n-chk align-self-center text-center">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input primary" id="contact-check-all" />
                                    <label class="form-check-label" for="contact-check-all"></label>
                                    <span class="new-control-indicator"></span>
                                </div>
                            </div>
                        </th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Action</th>
                        </thead>
                        <tbody>
                        @foreach($categories as $row)
                        <!-- start row -->
                        <tr class="search-items">
                            <td>
                                <div class="n-chk align-self-center text-center">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input contact-chkbox primary" id="checkbox1" />
                                        <label class="form-check-label" for="checkbox1"></label>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <span class="usr-email-addr" data-email="adams@mail.com">{{$row->name}}</span>
                            </td>
                            <td>
                                <span class="usr-location" data-location="Boston, USA">{{$row->description}}</span>
                            </td>
                            <td>
                                <div class="action-btn">
                                    <a href="javascript:void(0)" class="text-info edit">
                                        <i class="ti ti-eye fs-5"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="text-dark delete ms-2">
                                        <i class="ti ti-trash fs-5"></i>
                                    </a>
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
@endsection
