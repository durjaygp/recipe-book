@extends('backEnd.master')
@section('title','Update Book')
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
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-4 ">
                            <h2>Update Book</h2>
                        </div>
                        <div class="col-md-8 text-end d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                            <a href="{{route('book.list')}}" class="btn btn-info d-flex align-items-center">
                                <i class="ti ti-list-details text-white me-1 fs-5"></i> Book List
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('book.update')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Book Name</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputtext" placeholder="Book Name" value="{{$book->name}}">
                                    <input type="hidden" name="id" class="form-control"  value="{{$book->id}}">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Price</label>
                                    <input type="text" name="price" class="form-control" id="exampleInputtext" placeholder="20.10" value="{{$book->price}}">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Printable Total Price <small class="text-primary">(Hard Copy Price)</small></label>
                                    <input type="text" name="print_price" class="form-control" id="exampleInputtext" placeholder="480" value="{{$book->print_price}}">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Shipping Price</label>
                                    <input type="text" name="shipping_price" class="form-control" id="exampleInputtext" placeholder="80" value="{{$book->shipping_price}}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Publish Date</label>
                                    <input type="date" name="publish_date" class="form-control" id="exampleInputtext" placeholder="Book Name" value="{{$book->publish_date}}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Pages</label>
                                    <input type="number" name="pages" class="form-control" id="exampleInputtext" placeholder="105" value="{{$book->pages}}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Total Recipe</label>
                                    <input type="number" name="total_recipe" class="form-control" id="exampleInputtext" placeholder="10" value="{{$book->total_recipe}}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label fw-semibold">PDF File <small class="text-primary">(If you choose new pdf file previous file will be deleted)</small></label>
                                    <input type="file" name="file" class="form-control" >
                                    <a href="{{asset($book->file)}}" download="{{asset($book->file)}}" >Download PDF</a>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-4">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Image</label>
                                            <input type="file" name="image" class="form-control dropify" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-4">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Existing Image</label>
                                            <br>
                                            <img src="{{asset($book->image)}}" alt="" class="img-fluid">

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-12">
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Short Description</label>
                                    <textarea name="description" id="" cols="10" rows="5" class="form-control">{{$book->description}}</textarea>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Main Content</label>
                                    <textarea name="body" id="summernote" cols="30" rows="10">{{$book->body}}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Status</label>
                                    <select name="status" id="" class="form-select">
                                        <option>Select</option>
                                        <option value="1" @if($book->status == 1) selected @endif>Publish</option>
                                        <option value="2" @if($book->status == 2) selected @endif>Draft/Unpublished</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Home Page Featured</label>
                                    <select name="is_featured" id="" class="form-select">
                                        <option>Select</option>
                                        <option value="1" @if($book->is_featured == 1) selected @endif >Yes</option>
                                        <option value="2" @if($book->is_featured == 2) selected @endif >No</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="d-flex align-items-center gap-3">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
@section('style')
    <link rel="stylesheet" href="{{asset('/')}}dropify/dist/css/dropify.min.css">
    <link rel="stylesheet" href="{{asset('back')}}/assets/libs/summernote/dist/summernote-lite.min.css">
@endsection
@section('script')

    <script src="{{asset('/')}}dropify/dist/js/dropify.min.js"></script>
    <script src="{{asset('back')}}/assets/libs/summernote/dist/summernote-lite.min.js"></script>
    <script>
        $("#summernote").summernote({
            height: 350, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: false, // set focus to editable area after initializing summernote
        });
        $('.dropify').dropify({
            messages: {
                'default': 'Drag and drop a file here or click',
                'replace': 'Drag and drop or click to replace',
                'remove':  'Remove',
                'error':   'Ooops, something wrong happended.'
            }
        });
    </script>
@endsection
