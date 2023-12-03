@extends('frontEnd.master')
@section('title','Books')
@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{asset('front')}}/images/background/10.jpg)">
        <div class="auto-container">
            <h1>Books</h1>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Product Form Section -->
    <section class="product-form-section style-two">
        <div class="auto-container">
            <div class="inner-container margin-top">

                <!-- Default Form -->
                <div class="default-form">
                    <form method="post" action="https://gico.io/spcica/contact.html">
                        <div class="clearfix">

                            <!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <select class="custom-select-box">
                                    <option>Books</option>
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                </select>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group col-lg-7 col-md-6 col-sm-12">
                                <input type="text" name="text" placeholder="Books Name" required>
                            </div>

                            <div class="form-group col-lg-2 col-md-12 col-sm-12">
                                <button type="submit" class="theme-btn search-btn"><span class="fa fa-search"> Search</span></button>
                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- End Keyword Section -->


    <!-- Books Section-->
    <section class="categories-section">
        <div class="auto-container">

            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2> Our Books </h2>
                <div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed tincidunt ut laoreet <br> dolore magna aliquam erat volutpat lorem</div>
            </div>

            <!-- Categories Tabs -->
            <div class="related-items">
                <div class="row clearfix">

                    <!-- Recipes Book -->
                    <div class="recipes-block style-two col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="recipes-detail.html"><img src="{{asset('front')}}/images/resource/recipe-23.jpg" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <div class="author-image"><a href="author-details.html"><img src="{{asset('front')}}/images/resource/author-3.jpg" alt="" /></a></div>
                                <div class="category">CHICKEN</div>
                                <h4><a href="recipes-detail.html">Pressure Cooker Beef Short Ribs with Chutney</a></h4>
                                <span class="text-success h4">$80</span>
                            </div>
                        </div>
                    </div>
                    <div class="recipes-block style-two col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="recipes-detail.html"><img src="{{asset('front')}}/images/resource/recipe-23.jpg" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <div class="author-image"><a href="author-details.html"><img src="{{asset('front')}}/images/resource/author-3.jpg" alt="" /></a></div>
                                <div class="category">CHICKEN</div>
                                <h4><a href="recipes-detail.html">Pressure Cooker Beef Short Ribs with Chutney</a></h4>
                                <span class="text-success h4">$80</span>
                            </div>
                        </div>
                    </div>
                    <div class="recipes-block style-two col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="recipes-detail.html"><img src="{{asset('front')}}/images/resource/recipe-23.jpg" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <div class="author-image"><a href="author-details.html"><img src="{{asset('front')}}/images/resource/author-3.jpg" alt="" /></a></div>
                                <div class="category">CHICKEN</div>
                                <h4><a href="recipes-detail.html">Pressure Cooker Beef Short Ribs with Chutney</a></h4>
                                <span class="text-success h4">$80</span>
                            </div>
                        </div>
                    </div>
                    <div class="recipes-block style-two col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="recipes-detail.html"><img src="{{asset('front')}}/images/resource/recipe-23.jpg" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <div class="author-image"><a href="author-details.html"><img src="{{asset('front')}}/images/resource/author-3.jpg" alt="" /></a></div>
                                <div class="category">CHICKEN</div>
                                <h4><a href="recipes-detail.html">Pressure Cooker Beef Short Ribs with Chutney</a></h4>
                                <span class="text-success h4">$80</span>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
            <div class="related-items">
                <div class="row clearfix">

                    <!-- Recipes Book -->
                    <div class="recipes-block style-two col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="recipes-detail.html"><img src="{{asset('front')}}/images/resource/recipe-23.jpg" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <div class="author-image"><a href="author-details.html"><img src="{{asset('front')}}/images/resource/author-3.jpg" alt="" /></a></div>
                                <div class="category">CHICKEN</div>
                                <h4><a href="recipes-detail.html">Pressure Cooker Beef Short Ribs with Chutney</a></h4>
                                <span class="text-success h4">$80</span>
                            </div>
                        </div>
                    </div>
                    <div class="recipes-block style-two col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="recipes-detail.html"><img src="{{asset('front')}}/images/resource/recipe-23.jpg" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <div class="author-image"><a href="author-details.html"><img src="{{asset('front')}}/images/resource/author-3.jpg" alt="" /></a></div>
                                <div class="category">CHICKEN</div>
                                <h4><a href="recipes-detail.html">Pressure Cooker Beef Short Ribs with Chutney</a></h4>
                                <span class="text-success h4">$80</span>
                            </div>
                        </div>
                    </div>
                    <div class="recipes-block style-two col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="recipes-detail.html"><img src="{{asset('front')}}/images/resource/recipe-23.jpg" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <div class="author-image"><a href="author-details.html"><img src="{{asset('front')}}/images/resource/author-3.jpg" alt="" /></a></div>
                                <div class="category">CHICKEN</div>
                                <h4><a href="recipes-detail.html">Pressure Cooker Beef Short Ribs with Chutney</a></h4>
                                <span class="text-success h4">$80</span>
                            </div>
                        </div>
                    </div>
                    <div class="recipes-block style-two col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="recipes-detail.html"><img src="{{asset('front')}}/images/resource/recipe-23.jpg" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <div class="author-image"><a href="author-details.html"><img src="{{asset('front')}}/images/resource/author-3.jpg" alt="" /></a></div>
                                <div class="category">CHICKEN</div>
                                <h4><a href="recipes-detail.html">Pressure Cooker Beef Short Ribs with Chutney</a></h4>
                                <span class="text-success h4">$80</span>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </section>
    <!-- End Categories Section-->



@endsection
