@extends('frontEnd.master')
@section('title','Recipes')
@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{asset('front')}}/images/background/10.jpg)">
        <div class="auto-container">
            <h1>Recipes</h1>
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
                                    <option>Categories</option>
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                </select>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group col-lg-7 col-md-6 col-sm-12">
                                <input type="text" name="text" placeholder="Recipe Kayword" required>
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

    <!-- Popular Recipes Section -->
    <section class="popular-recipes-section style-three">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <div class="clearfix">
                    <div class="pull-left">
                        <h2>Populer Recipes Posts</h2>
                        <div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed tincidunt ut</div>
                    </div>
                    <div class="pull-right">
                        <a href="recipes.html" class="theme-btn btn-style-one"><span class="txt">See all Post</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="outer-container">
            <div class="row clearfix">

                <!-- Recipes Block -->
                <div class="recipes-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="recipes-detail.html"><img src="{{asset('front')}}/images/resource/recipe-1.jpg" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <div class="author-image"><a href="author-details.html"><img src="{{asset('front')}}/images/resource/author-3.jpg" alt="" /></a></div>
                            <div class="category">CHICKEN</div>
                            <h4><a href="recipes-detail.html">Pressure-Cooker Beef Short Ribs with Chutney</a></h4>
                            <div class="text">Discover a sleighload of tasty snacks that are just right for holiday feasting.</div>
                            <ul class="post-meta">
                                <li><span class="icon flaticon-dish"></span>4 ingredients</li>
                                <li><span class="icon flaticon-clock-3"></span>6 Min</li>
                                <li><span class="icon flaticon-business-and-finance"></span>4 People</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Recipes Block -->
                <div class="recipes-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="recipes-detail.html"><img src="{{asset('front')}}/images/resource/recipe-2.jpg" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <div class="author-image"><a href="author-details.html"><img src="{{asset('front')}}/images/resource/author-3.jpg" alt="" /></a></div>
                            <div class="category">FEATURED COLLECTION</div>
                            <h4><a href="recipes-detail.html">Cold-Weather Weeknight <br> Dinners</a></h4>
                            <div class="text">Discover a sleighload of tasty snacks that are just right for holiday feasting.</div>
                            <ul class="post-meta">
                                <li><span class="icon flaticon-dish"></span>4 ingredients</li>
                                <li><span class="icon flaticon-clock-3"></span>6 Min</li>
                                <li><span class="icon flaticon-business-and-finance"></span>4 People</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Recipes Block -->
                <div class="recipes-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="recipes-detail.html"><img src="{{asset('front')}}/images/resource/recipe-3.jpg" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <div class="author-image"><a href="author-details.html"><img src="{{asset('front')}}/images/resource/author-3.jpg" alt="" /></a></div>
                            <div class="category">Dinner</div>
                            <h4><a href="recipes-detail.html">Hamburger Steak with Onions and Gravy</a></h4>
                            <div class="text">Discover a sleighload of tasty snacks that are just right for holiday feasting.</div>
                            <ul class="post-meta">
                                <li><span class="icon flaticon-dish"></span>4 ingredients</li>
                                <li><span class="icon flaticon-clock-3"></span>6 Min</li>
                                <li><span class="icon flaticon-business-and-finance"></span>4 People</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Recipes Block -->
                <div class="recipes-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="recipes-detail.html"><img src="{{asset('front')}}/images/resource/recipe-4.jpg" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <div class="author-image"><a href="author-details.html"><img src="{{asset('front')}}/images/resource/author-3.jpg" alt="" /></a></div>
                            <div class="category">Recipe</div>
                            <h4><a href="recipes-detail.html">Pressure-Cooker Beef Short <br> Ribs with Chutney</a></h4>
                            <div class="text">Discover a sleighload of tasty snacks that are just right for holiday feasting.</div>
                            <ul class="post-meta">
                                <li><span class="icon flaticon-dish"></span>4 ingredients</li>
                                <li><span class="icon flaticon-clock-3"></span>6 Min</li>
                                <li><span class="icon flaticon-business-and-finance"></span>4 People</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Recipes Block -->
                <div class="recipes-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="recipes-detail.html"><img src="{{asset('front')}}/images/resource/recipe-18.jpg" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <div class="author-image"><a href="author-details.html"><img src="{{asset('front')}}/images/resource/author-3.jpg" alt="" /></a></div>
                            <div class="category">CHICKEN</div>
                            <h4><a href="recipes-detail.html">Pressure-Cooker Beef Short Ribs with Chutney</a></h4>
                            <div class="text">Discover a sleighload of tasty snacks that are just right for holiday feasting.</div>
                            <ul class="post-meta">
                                <li><span class="icon flaticon-dish"></span>4 ingredients</li>
                                <li><span class="icon flaticon-clock-3"></span>6 Min</li>
                                <li><span class="icon flaticon-business-and-finance"></span>4 People</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Recipes Block -->
                <div class="recipes-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="recipes-detail.html"><img src="{{asset('front')}}/images/resource/recipe-19.jpg" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <div class="author-image"><a href="author-details.html"><img src="{{asset('front')}}/images/resource/author-3.jpg" alt="" /></a></div>
                            <div class="category">FEATURED COLLECTION</div>
                            <h4><a href="recipes-detail.html">Cold-Weather Weeknight <br> Dinners</a></h4>
                            <div class="text">Discover a sleighload of tasty snacks that are just right for holiday feasting.</div>
                            <ul class="post-meta">
                                <li><span class="icon flaticon-dish"></span>4 ingredients</li>
                                <li><span class="icon flaticon-clock-3"></span>6 Min</li>
                                <li><span class="icon flaticon-business-and-finance"></span>4 People</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Recipes Block -->
                <div class="recipes-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="recipes-detail.html"><img src="{{asset('front')}}/images/resource/recipe-20.jpg" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <div class="author-image"><a href="author-details.html"><img src="{{asset('front')}}/images/resource/author-3.jpg" alt="" /></a></div>
                            <div class="category">Dinner</div>
                            <h4><a href="recipes-detail.html">Hamburger Steak with Onions and Gravy</a></h4>
                            <div class="text">Discover a sleighload of tasty snacks that are just right for holiday feasting.</div>
                            <ul class="post-meta">
                                <li><span class="icon flaticon-dish"></span>4 ingredients</li>
                                <li><span class="icon flaticon-clock-3"></span>6 Min</li>
                                <li><span class="icon flaticon-business-and-finance"></span>4 People</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Recipes Block -->
                <div class="recipes-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="recipes-detail.html"><img src="{{asset('front')}}/images/resource/recipe-21.jpg" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <div class="author-image"><a href="author-details.html"><img src="{{asset('front')}}/images/resource/author-3.jpg" alt="" /></a></div>
                            <div class="category">Recipe</div>
                            <h4><a href="recipes-detail.html">Pressure-Cooker Beef Short <br> Ribs with Chutney</a></h4>
                            <div class="text">Discover a sleighload of tasty snacks that are just right for holiday feasting.</div>
                            <ul class="post-meta">
                                <li><span class="icon flaticon-dish"></span>4 ingredients</li>
                                <li><span class="icon flaticon-clock-3"></span>6 Min</li>
                                <li><span class="icon flaticon-business-and-finance"></span>4 People</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Popular Recipes Section -->

@endsection
