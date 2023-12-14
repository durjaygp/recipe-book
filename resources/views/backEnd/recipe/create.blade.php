@extends('backEnd.master')
@section('title','Create New Recipe')
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
                                <li class="breadcrumb-item" aria-current="page">Recipe</li>
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
                           <a href="{{route('recipe.list')}}" class="btn btn-info d-flex align-items-center">
                               <i class="ti ti-list-details text-white me-1 fs-5"></i> Recipe List
                           </a>
                       </div>
                   </div>
               </div>
                <div class="card-body">
                    <form method="post" action="{{route('recipe.save')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Recipe Name</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputtext" placeholder="Recipe Name">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Category</label>
                                    <select name="category_id" id="" class="form-select">
                                        <option value="">Select</option>
                                        @foreach($categories as $row)
                                        <option value="{{$row->id}}">{{$row->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Ingredients</label>
                                    <input type="number" name="ingredients" class="form-control" id="exampleInputtext" placeholder="10 Ingredients">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Peoples</label>
                                    <input type="number" name="peoples" class="form-control" id="exampleInputtext" placeholder="10 Peoples">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Duration</label>
                                    <input type="number" name="duration" class="form-control" id="exampleInputtext" placeholder="10 Minutes">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Short description</label>
                                    <textarea name="description" id="" class="form-control"  cols="2" rows="3" placeholder="short description"></textarea>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Image</label>
                                    <input type="file" name="image" class="form-control dropify" >
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Ingredients description</label>
{{--                                    <div id="editor" name="ingredients_content"></div>--}}
                                    <textarea name="ingredients_content" id="summernote1" cols="10" rows="5" class="form-control" placeholder="test"></textarea>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Main Recipe Content</label>
                                    <textarea name="recipe" id="summernote" cols="30" rows="10" placeholder="test"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Video Link</label>
                                    <input type="text" name="video"  class="form-control"  placeholder="https://youtu.be/oz38UcNI-sI">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Status</label>
                                    <select name="status" id="" class="form-select">
                                        <option value="1">Publish</option>
                                        <option value="2">Draft/Unpublished</option>
                                    </select>
                                </div>
                            </div>
{{--                            <div class="col-lg-6">--}}
{{--                                <div class="mb-4">--}}
{{--                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Featured Section</label>--}}
{{--                                    <select name="position" id="" class="form-select">--}}
{{--                                        <option value="1">Slider / Featured</option>--}}
{{--                                        <option value="2">Basic Normal Post</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}

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

    <link rel="stylesheet" href="{{asset('back')}}/assets/libs/quill/dist/quill.snow.css">
@endsection
@section('script')

    <script src="{{asset('/')}}dropify/dist/js/dropify.min.js"></script>
    <script src="{{asset('back')}}/assets/libs/summernote/dist/summernote-lite.min.js"></script>
    <script src="{{asset('back')}}/assets/libs/quill/dist/quill.min.js"></script>
    <script>
        $("#summernote").summernote({
            height: 350, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: false,
           // placeholder: Test,// set focus to editable area after initializing summernote
        });
        $("#summernote1").summernote({
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
    <script>
        var quill = new Quill("#editor", {
            theme: "snow",
        });
    </script>
@endsection
