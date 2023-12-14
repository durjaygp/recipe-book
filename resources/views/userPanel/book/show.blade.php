@extends('userPanel.master')
@section('title','My Books')
@section('content')
    <div class="container-fluid">
        <div class="card bg-light-info shadow-none position-relative overflow-hidden">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="fw-semibold mb-8">@yield('title')</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a class="text-muted " href="{{route('dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item" aria-current="page">Books</li>
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

            </div>
            <div class="card">
                <div class="row">
                    <div class="col-md-4 ">
                        <h2>Books List</h2>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="text-center">
{{--                                <iframe src ="{{ asset('uploads') }}/1163199197.pdf" width="1000px" height="600px"></iframe>--}}
{{--                                <iframe src ="{{ asset($mybook->books->file) }}" width="1000px" height="600px"></iframe>--}}
                                <iframe src="https://docs.google.com/gview?url={{ asset($mybook->books->file) }}&embedded=true" style="width:100%; height:600px;" frameborder="0"></iframe>



                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
