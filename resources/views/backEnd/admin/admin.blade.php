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
                    <div class="card border-0 zoom-in bg-light-warning shadow-none">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="assets/images/svgs/icon-briefcase.svg" width="50" height="50" class="mb-3" alt="" />
                                <p class="fw-semibold fs-3 text-warning mb-1">Total Pending Order</p>
                                <h5 class="fw-semibold text-warning mb-0">3,650</h5>
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
                                <img src="assets/images/svgs/icon-briefcase.svg" width="50" height="50" class="mb-3" alt="" />
                                <p class="fw-semibold fs-3 text-warning mb-1">Total Order</p>
                                <h5 class="fw-semibold text-warning mb-0">3,650</h5>
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
                                <p class="fw-semibold fs-3 text-warning mb-1">Clients</p>
                                <h5 class="fw-semibold text-warning mb-0">3,650</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
