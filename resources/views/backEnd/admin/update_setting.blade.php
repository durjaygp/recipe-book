@extends('backEnd.master')
@section('title','Update Website Setting')
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
                                <li class="breadcrumb-item" aria-current="page">Website</li>
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
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-4 ">
                            <h2>@yield('title')</h2>
                        </div>
                        <div class="col-md-8 text-end d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                            <a href="{{route('book.list')}}" class="btn btn-info d-flex align-items-center">
                                <i class="ti ti-list-details text-white me-1 fs-5"></i> Book List
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('update.setting')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group">
                                <div class="mb-4">
                                    <label for="exampleInputEmail1">Website Name/Title</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Website Name" value="{{$row->name}}">
                                </div>

                            </div>
                            <div class="form-group">
                                <div class="mb-4">
                                    <label for="exampleInputEmail1">Website Footer Text</label>
                                    <input type="text" name="footer" class="form-control" placeholder="All Rights Reserved Powered by websiteowner" value="{{$row->footer}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="mb-4">
                                    <label for="exampleInputEmail1">Website Author Name<small class="text-sm text-gray-400">(Optional)</small></label>
                                    <input type="text" name="author" class="form-control" placeholder="Website Author Name" value="{{$row->author}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="mb-4">
                                    <label for="exampleInputEmail1">Website URL</label>
                                    <input type="text" name="url" class="form-control" placeholder="Website URL" value="{{$row->url}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="mb-4">
                                    <label for="exampleInputEmail1">Website Keywords</label>
                                    <input type="text" name="keywords" class="form-control" placeholder="Website Keywords" value="{{$row->keywords}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="mb-4">
                                    <label for="exampleInputEmail1">Website Tags</label>
                                    <input type="text" name="tags" class="form-control" placeholder="Website Tags" value="{{$row->tags}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Website Description <small>(It also appear in Footer About Us)</small></label>
                                <textarea name="description" id="" cols="10" rows="5" class="form-control" placeholder="Write a short Description">{{$row->description}}</textarea>
                            </div>
                            <div class="form-group">
                                <div class="mb-4">
                                    <label for="exampleInputEmail1">Google Verification Code <small class="text-sm text-gray-400">(Optional)</small></label>
                                    <input type="text" name="google" class="form-control" placeholder="Enter Category Title" value="{{$row->google}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Website Image, LOGO <small>(Width 150px X Height 50px)</small></label>
                                            <input class="dropify" type="file" name="website_logo" accept="image/*">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Existing Image</label> <br>
                                            <img src="{{asset($row->website_logo)}}" class="img-fluid"  width="80px" height="80px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Website FavIcon <small> (Width 80px X Height 80px)</small></label>
                                            <input class="dropify" type="file" name="fav_icon" accept="image/*">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Existing Image</label> <br>
                                            <img src="{{asset($row->fav_icon)}}" alt="" width="80px" height="80px">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <button class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection