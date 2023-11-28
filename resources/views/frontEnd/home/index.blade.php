@extends('frontEnd.master')
@section('title','Home')
@section('content')
    <!-- Banner Section -->
    <section class="banner-section">
        <div class="banner-carousel owl-theme owl-carousel">

            <!-- Slide Item -->
            <div class="slide-item">
                <div class="image-layer" style="background-image:url({{asset('front')}}/images/main-slider/1.jpg)"></div>

                <div class="auto-container">
                    <div class="content-box">
                        <div class="author-image">
                            <img src="{{asset('front')}}/images/resource/author-2.jpg" alt="" />
                        </div>
                        <div class="clearfix info-list">
                            <div class="sales">Salad</div>
                            <div class="rating">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star-half-o"></span>&ensp;
                                8 Review
                            </div>
                            <!-- Author Name -->
                            <div class="author-name">
                                <div class="author-inner">
                                    <div class="author-icon">
                                        <img src="{{asset('front')}}/images/resource/author-1.jpg" alt="" />
                                    </div>
                                    by Mahfuz Riad
                                </div>
                            </div>
                        </div>
                        <h1>Roasted Pumpkin and <br> Beet Salad</h1>
                        <div class="text">Lorem ipsum dolor sit amet, consectetuer <br> adipiscing elit, sed tinciduntut laore dolore </div>
                        <ul class="post-meta">
                            <li><span class="icon flaticon-dish"></span>4 ingredients</li>
                            <li><span class="icon flaticon-clock-3"></span>6 Min</li>
                            <li><span class="icon flaticon-business-and-finance"></span>4 People</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Slide Item -->
            <div class="slide-item">
                <div class="image-layer" style="background-image:url({{asset('front')}}/images/main-slider/1.jpg)"></div>

                <div class="auto-container">
                    <div class="content-box">
                        <div class="author-image">
                            <img src="{{asset('front')}}/images/resource/author-2.jpg" alt="" />
                        </div>
                        <div class="clearfix info-list">
                            <div class="sales">Salad</div>
                            <div class="rating">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star-half-o"></span>&ensp;
                                8 Review
                            </div>
                            <!-- Author Name -->
                            <div class="author-name">
                                <div class="author-inner">
                                    <div class="author-icon">
                                        <img src="{{asset('front')}}/images/resource/author-1.jpg" alt="" />
                                    </div>
                                    by Mahfuz Riad
                                </div>
                            </div>
                        </div>
                        <h1>Roasted Pumpkin and <br> Beet Salad</h1>
                        <div class="text">Lorem ipsum dolor sit amet, consectetuer <br> adipiscing elit, sed tinciduntut laore dolore </div>
                        <ul class="post-meta">
                            <li><span class="icon flaticon-dish"></span>4 ingredients</li>
                            <li><span class="icon flaticon-clock-3"></span>6 Min</li>
                            <li><span class="icon flaticon-business-and-finance"></span>4 People</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Slide Item -->
            <div class="slide-item">
                <div class="image-layer" style="background-image:url({{asset('front')}}/images/main-slider/1.jpg)"></div>

                <div class="auto-container">
                    <div class="content-box">
                        <div class="author-image">
                            <img src="{{asset('front')}}/images/resource/author-2.jpg" alt="" />
                        </div>
                        <div class="clearfix info-list">
                            <div class="sales">Salad</div>
                            <div class="rating">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star-half-o"></span>&ensp;
                                8 Review
                            </div>
                            <!-- Author Name -->
                            <div class="author-name">
                                <div class="author-inner">
                                    <div class="author-icon">
                                        <img src="{{asset('front')}}/images/resource/author-1.jpg" alt="" />
                                    </div>
                                    by Mahfuz Riad
                                </div>
                            </div>
                        </div>
                        <h1>Roasted Pumpkin and <br> Beet Salad</h1>
                        <div class="text">Lorem ipsum dolor sit amet, consectetuer <br> adipiscing elit, sed tinciduntut laore dolore </div>
                        <ul class="post-meta">
                            <li><span class="icon flaticon-dish"></span>4 ingredients</li>
                            <li><span class="icon flaticon-clock-3"></span>6 Min</li>
                            <li><span class="icon flaticon-business-and-finance"></span>4 People</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--End Banner Section -->

    <!-- Product Form Section -->
    <section class="product-form-section">
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

    <!-- Categories Section-->
    <section class="categories-section">
        <div class="auto-container">

            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2> Recipe Categories</h2>
                <div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed tincidunt ut laoreet <br> dolore magna aliquam erat volutpat lorem</div>
            </div>

            <!-- Categories Tabs -->
            <div class="categories-tab">

                <div class="tab-btns-box">
                    <!--Tabs Header-->
                    <div class="tabs-header">
                        <ul class="clearfix product-tab-btns">
                            <li class="p-tab-btn active-btn" data-tab="#p-tab-1">Meal Type <span class="number">14</span></li>
                            <li class="p-tab-btn" data-tab="#p-tab-2">Diet and Health <span class="number">12</span></li>
                            <li class="p-tab-btn" data-tab="#p-tab-3">Dish Type <span class="number">03</span></li>
                            <li class="p-tab-btn" data-tab="#p-tab-4">Ingredient <span class="number">08</span></li>
                            <li class="p-tab-btn" data-tab="#p-tab-5">World Cuisine <span class="number">04</span></li>
                        </ul>
                    </div>
                </div>

                <!-- Tabs Content -->
                <div class="p-tabs-content">

                    <!-- Portfolio Tab / Active Tab -->
                    <div class="p-tab active-tab" id="p-tab-1">
                        <div class="project-carousel owl-theme owl-carousel">

                            <!-- Category Block -->
                            <div class="category-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="{{asset('front')}}/images/resource/cat-1.png" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <h4><a href="recipes-detail.html">Cake recipe</a></h4>
                                        <div class="text">Lorem ipsum dolor amet, consetec <br> adipiscing elit. magna</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Category Block -->
                            <div class="category-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="{{asset('front')}}/images/resource/cat-2.png" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <h4><a href="recipes-detail.html">Christmas Recipes</a></h4>
                                        <div class="text">Lorem ipsum dolor amet, consetec adipiscing <br> elit. magna lentesque.</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Category Block -->
                            <div class="category-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="{{asset('front')}}/images/resource/cat-3.png" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <h4><a href="recipes-detail.html">Ground Chicken Recipes</a></h4>
                                        <div class="text">Lorem ipsum dolor amet, consetec <br> adipiscing elit. magna lentesque.</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Category Block -->
                            <div class="category-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="{{asset('front')}}/images/resource/cat-1.png" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <h4><a href="recipes-detail.html">Cake recipe</a></h4>
                                        <div class="text">Lorem ipsum dolor amet, consetec <br> adipiscing elit. magna</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Category Block -->
                            <div class="category-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="{{asset('front')}}/images/resource/cat-2.png" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <h4><a href="recipes-detail.html">Christmas Recipes</a></h4>
                                        <div class="text">Lorem ipsum dolor amet, consetec adipiscing <br> elit. magna lentesque.</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Category Block -->
                            <div class="category-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="{{asset('front')}}/images/resource/cat-3.png" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <h4><a href="recipes-detail.html">Ground Chicken Recipes</a></h4>
                                        <div class="text">Lorem ipsum dolor amet, consetec <br> adipiscing elit. magna lentesque.</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Portfolio Tab -->
                    <div class="p-tab" id="p-tab-2">
                        <div class="project-carousel owl-theme owl-carousel">

                            <!-- Category Block -->
                            <div class="category-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="{{asset('front')}}/images/resource/cat-1.png" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <h4><a href="recipes-detail.html">Cake recipe</a></h4>
                                        <div class="text">Lorem ipsum dolor amet, consetec <br> adipiscing elit. magna</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Category Block -->
                            <div class="category-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="{{asset('front')}}/images/resource/cat-2.png" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <h4><a href="recipes-detail.html">Christmas Recipes</a></h4>
                                        <div class="text">Lorem ipsum dolor amet, consetec adipiscing <br> elit. magna lentesque.</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Category Block -->
                            <div class="category-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="{{asset('front')}}/images/resource/cat-3.png" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <h4><a href="recipes-detail.html">Ground Chicken Recipes</a></h4>
                                        <div class="text">Lorem ipsum dolor amet, consetec <br> adipiscing elit. magna lentesque.</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Category Block -->
                            <div class="category-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="{{asset('front')}}/images/resource/cat-1.png" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <h4><a href="recipes-detail.html">Cake recipe</a></h4>
                                        <div class="text">Lorem ipsum dolor amet, consetec <br> adipiscing elit. magna</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Category Block -->
                            <div class="category-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="{{asset('front')}}/images/resource/cat-2.png" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <h4><a href="recipes-detail.html">Christmas Recipes</a></h4>
                                        <div class="text">Lorem ipsum dolor amet, consetec adipiscing <br> elit. magna lentesque.</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Category Block -->
                            <div class="category-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="{{asset('front')}}/images/resource/cat-3.png" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <h4><a href="recipes-detail.html">Ground Chicken Recipes</a></h4>
                                        <div class="text">Lorem ipsum dolor amet, consetec <br> adipiscing elit. magna lentesque.</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Portfolio Tab -->
                    <div class="p-tab" id="p-tab-3">
                        <div class="project-carousel owl-theme owl-carousel">

                            <!-- Category Block -->
                            <div class="category-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="{{asset('front')}}/images/resource/cat-1.png" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <h4><a href="recipes-detail.html">Cake recipe</a></h4>
                                        <div class="text">Lorem ipsum dolor amet, consetec <br> adipiscing elit. magna</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Category Block -->
                            <div class="category-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="{{asset('front')}}/images/resource/cat-2.png" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <h4><a href="recipes-detail.html">Christmas Recipes</a></h4>
                                        <div class="text">Lorem ipsum dolor amet, consetec adipiscing <br> elit. magna lentesque.</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Category Block -->
                            <div class="category-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="{{asset('front')}}/images/resource/cat-3.png" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <h4><a href="recipes-detail.html">Ground Chicken Recipes</a></h4>
                                        <div class="text">Lorem ipsum dolor amet, consetec <br> adipiscing elit. magna lentesque.</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Category Block -->
                            <div class="category-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="{{asset('front')}}/images/resource/cat-1.png" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <h4><a href="recipes-detail.html">Cake recipe</a></h4>
                                        <div class="text">Lorem ipsum dolor amet, consetec <br> adipiscing elit. magna</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Category Block -->
                            <div class="category-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="{{asset('front')}}/images/resource/cat-2.png" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <h4><a href="recipes-detail.html">Christmas Recipes</a></h4>
                                        <div class="text">Lorem ipsum dolor amet, consetec adipiscing <br> elit. magna lentesque.</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Category Block -->
                            <div class="category-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="{{asset('front')}}/images/resource/cat-3.png" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <h4><a href="recipes-detail.html">Ground Chicken Recipes</a></h4>
                                        <div class="text">Lorem ipsum dolor amet, consetec <br> adipiscing elit. magna lentesque.</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Portfolio Tab -->
                    <div class="p-tab" id="p-tab-4">
                        <div class="project-carousel owl-theme owl-carousel">

                            <!-- Category Block -->
                            <div class="category-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="{{asset('front')}}/images/resource/cat-1.png" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <h4><a href="recipes-detail.html">Cake recipe</a></h4>
                                        <div class="text">Lorem ipsum dolor amet, consetec <br> adipiscing elit. magna</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Category Block -->
                            <div class="category-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="{{asset('front')}}/images/resource/cat-2.png" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <h4><a href="recipes-detail.html">Christmas Recipes</a></h4>
                                        <div class="text">Lorem ipsum dolor amet, consetec adipiscing <br> elit. magna lentesque.</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Category Block -->
                            <div class="category-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="{{asset('front')}}/images/resource/cat-3.png" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <h4><a href="recipes-detail.html">Ground Chicken Recipes</a></h4>
                                        <div class="text">Lorem ipsum dolor amet, consetec <br> adipiscing elit. magna lentesque.</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Category Block -->
                            <div class="category-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="{{asset('front')}}/images/resource/cat-1.png" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <h4><a href="recipes-detail.html">Cake recipe</a></h4>
                                        <div class="text">Lorem ipsum dolor amet, consetec <br> adipiscing elit. magna</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Category Block -->
                            <div class="category-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="{{asset('front')}}/images/resource/cat-2.png" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <h4><a href="recipes-detail.html">Christmas Recipes</a></h4>
                                        <div class="text">Lorem ipsum dolor amet, consetec adipiscing <br> elit. magna lentesque.</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Category Block -->
                            <div class="category-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="{{asset('front')}}/images/resource/cat-3.png" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <h4><a href="recipes-detail.html">Ground Chicken Recipes</a></h4>
                                        <div class="text">Lorem ipsum dolor amet, consetec <br> adipiscing elit. magna lentesque.</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Portfolio Tab -->
                    <div class="p-tab" id="p-tab-5">
                        <div class="project-carousel owl-theme owl-carousel">

                            <!-- Category Block -->
                            <div class="category-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="{{asset('front')}}/images/resource/cat-1.png" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <h4><a href="recipes-detail.html">Cake recipe</a></h4>
                                        <div class="text">Lorem ipsum dolor amet, consetec <br> adipiscing elit. magna</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Category Block -->
                            <div class="category-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="{{asset('front')}}/images/resource/cat-2.png" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <h4><a href="recipes-detail.html">Christmas Recipes</a></h4>
                                        <div class="text">Lorem ipsum dolor amet, consetec adipiscing <br> elit. magna lentesque.</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Category Block -->
                            <div class="category-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="{{asset('front')}}/images/resource/cat-3.png" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <h4><a href="recipes-detail.html">Ground Chicken Recipes</a></h4>
                                        <div class="text">Lorem ipsum dolor amet, consetec <br> adipiscing elit. magna lentesque.</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Category Block -->
                            <div class="category-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="{{asset('front')}}/images/resource/cat-1.png" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <h4><a href="recipes-detail.html">Cake recipe</a></h4>
                                        <div class="text">Lorem ipsum dolor amet, consetec <br> adipiscing elit. magna</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Category Block -->
                            <div class="category-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="{{asset('front')}}/images/resource/cat-2.png" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <h4><a href="recipes-detail.html">Christmas Recipes</a></h4>
                                        <div class="text">Lorem ipsum dolor amet, consetec adipiscing <br> elit. magna lentesque.</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Category Block -->
                            <div class="category-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="{{asset('front')}}/images/resource/cat-3.png" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <h4><a href="recipes-detail.html">Ground Chicken Recipes</a></h4>
                                        <div class="text">Lorem ipsum dolor amet, consetec <br> adipiscing elit. magna lentesque.</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- End Categories Section-->

    <!-- Trending Section -->
    <section class="trending-section">
        <div class="auto-container">
            <div class="layer-one" style="background-image: url({{asset('front')}}/images/resource/category-pattern-1.png)"></div>
            <div class="layer-two" style="background-image: url({{asset('front')}}/images/resource/category-pattern-1.png)"></div>
            <div class="clearfix row">

                <!-- Content Column -->
                <div class="content-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <div class="title">TRENDING</div>
                            <h2>Standing Rib Roast</h2>
                            <div class="text">Preheat oven to 325°. In a small bowl, mix the first 5 ingredients. Place roast in a roasting pan, fat side up; rub with seasoning mixture.Roast 2-1/4 to 2-3/4 hours or until meat reaches desired doneness (for medium-rare, a thermometer should read 135°; medium, 140°; medium-well, 145°). Remove roast from oven; tent with foil. Let stand 15 minutes before carving.</div>
                        </div>
                        <div class="bold-text">To separate the fat from the drippings with ease, try this tool from OXO ($14).</div>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image">
                            <img src="{{asset('front')}}/images/resource/category.png" alt="" />
                            <div class="mints">15 Min</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Trending Section -->

    <!-- Popular Recipes Section -->
    <section class="popular-recipes-section">
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
            <div class="clearfix row">

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

            </div>
        </div>
    </section>
    <!-- End Popular Recipes Section -->

    <!-- Trending Recipes Section -->
    <section class="trending-recipes-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <div class="clearfix">
                    <div class="pull-left">
                        <h2>Trending Recipes</h2>
                        <div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed tincidunt ut</div>
                    </div>
                    <div class="pull-right">
                        <a href="recipes.html" class="theme-btn btn-style-one"><span class="txt">See all Post</span></a>
                    </div>
                </div>
            </div>

            <div class="clearfix row">

                <!-- Recipes Block -->
                <div class="recipes-block style-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="recipes-detail.html"><img src="{{asset('front')}}/images/resource/recipe-5.jpg" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <div class="author-image"><a href="author-details.html"><img src="{{asset('front')}}/images/resource/author-3.jpg" alt="" /></a></div>
                            <div class="category">CHICKEN</div>
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
                <div class="recipes-block style-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="recipes-detail.html"><img src="{{asset('front')}}/images/resource/recipe-6.jpg" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <div class="author-image"><a href="author-details.html"><img src="{{asset('front')}}/images/resource/author-3.jpg" alt="" /></a></div>
                            <div class="category">CHICKEN</div>
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
                <div class="recipes-block style-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="recipes-detail.html"><img src="{{asset('front')}}/images/resource/recipe-7.jpg" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <div class="author-image"><a href="author-details.html"><img src="{{asset('front')}}/images/resource/author-3.jpg" alt="" /></a></div>
                            <div class="category">CHICKEN</div>
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
    <!-- End Trending Recipes Section -->

    <!-- Call To Action Section -->
    <section class="call-to-action-section" style="background-image:url({{asset('front')}}/images/background/2.jpg)">
        <div class="auto-container">
            <div class="clearfix row">

                <!-- Column -->
                <div class="column col-lg-6 col-md-12 col-sm-12">
                    <!-- Sec Title -->
                    <div class="sec-title light">
                        <div class="title">Pizza</div>
                        <h2>Your Complete Christmas <br> Dinner Planning Guide</h2>
                        <div class="text">Special occasions call for extraordinary food. Whether your gathering is big or small, casual or formal, here's everything you need to create a crowd-pleasing holiday feast</div>
                    </div>
                    <a href="recipes-2.html" class="theme-btn btn-style-two"><span class="txt">Check Recipe</span></a>
                </div>

                <!-- Column -->
                <div class="column col-lg-6 col-md-12 col-sm-12">
                    <!-- Sec Title -->
                    <div class="sec-title light">
                        <div class="title">Breakfast</div>
                        <h2>How to Meal Prep Breakfast Sandwiches for the <br> Week Ahead</h2>
                        <div class="text">Special occasions call for extraordinary food. Whether your gathering is big or small, casual or formal, here's everything you need to create a crowd-pleasing holiday feast</div>
                    </div>
                    <a href="recipes-2.html" class="theme-btn btn-style-two"><span class="txt">Check Recipe</span></a>
                </div>

            </div>
        </div>
    </section>
    <!-- End Call To Action Section -->

    <!-- Video Section -->
    <section class="video-section">
        <div class="auto-container">
            <div class="clearfix row">

                <!-- Column -->
                <div class="column col-lg-6 col-md-6 col-sm-12">
                    <!--Video Box-->
                    <div class="video-box">
                        <div class="image">
                            <h4>Pressure-Cooker Chicken <br> Enchilada Soup</h4>
                            <img src="{{asset('front')}}/images/resource/video-1.jpg" alt="" />
                            <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image overlay-box"><span class="flaticon-media-play-symbol"><i class="ripple"></i></span></a>
                        </div>
                    </div>
                </div>

                <!-- Column -->
                <div class="column col-lg-6 col-md-6 col-sm-12">
                    <!--Video Box-->
                    <div class="video-box">
                        <div class="image">
                            <h4>Garlic Tomato Bruschetta</h4>
                            <img src="{{asset('front')}}/images/resource/video-2.jpg" alt="" />
                            <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image overlay-box"><span class="flaticon-media-play-symbol"><i class="ripple"></i></span></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Video Section -->

    <!-- Entertaining Section -->
    <section class="entertaining-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2>Entertaining</h2>
            </div>

            <div class="clearfix row">

                <!-- Entertaining Block -->
                <div class="entertaining-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="recipes-detail.html"><img src="{{asset('front')}}/images/resource/entertaining-1.jpg" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <ul class="post-meta">
                                <li><span class="icon "></span>21 Jan ,2020</li>
                                <li><span class="icon flaticon-comment"></span>4</li>
                                <li><span class="icon flaticon-heart"></span>5</li>
                            </ul>
                            <h4><a href="recipes-detail.html">Pop-Tarts Dropping New Pretzel Flavors Nationwide</a></h4>
                            <a href="recipes-detail.html" class="theme-btn read-more">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Entertaining Block -->
                <div class="entertaining-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="recipes-detail.html"><img src="{{asset('front')}}/images/resource/entertaining-2.jpg" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <ul class="post-meta">
                                <li><span class="icon "></span>21 Jan ,2020</li>
                                <li><span class="icon flaticon-comment"></span>4</li>
                                <li><span class="icon flaticon-heart"></span>5</li>
                            </ul>
                            <h4><a href="recipes-detail.html">The Cosmic Crisp Apple Is Here and We’re Already Obsessed</a></h4>
                            <a href="recipes-detail.html" class="theme-btn read-more">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Entertaining Block -->
                <div class="entertaining-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="recipes-detail.html"><img src="{{asset('front')}}/images/resource/entertaining-3.jpg" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <ul class="post-meta">
                                <li><span class="icon "></span>21 Jan ,2020</li>
                                <li><span class="icon flaticon-comment"></span>4</li>
                                <li><span class="icon flaticon-heart"></span>5</li>
                            </ul>
                            <h4><a href="recipes-detail.html">Good Grief! 9 Ideas for a Charlie Brown Christmas Party</a></h4>
                            <a href="recipes-detail.html" class="theme-btn read-more">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Entertaining Block -->
                <div class="entertaining-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="recipes-detail.html"><img src="{{asset('front')}}/images/resource/entertaining-4.jpg" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <ul class="post-meta">
                                <li><span class="icon "></span>21 Jan ,2020</li>
                                <li><span class="icon flaticon-comment"></span>4</li>
                                <li><span class="icon flaticon-heart"></span>5</li>
                            </ul>
                            <h4><a href="recipes-detail.html">How to Remove Sulfites from Wine the Easy Way</a></h4>
                            <a href="recipes-detail.html" class="theme-btn read-more">Read More</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Entertaining Section -->

    <!-- Treats Section -->
    <section class="treats-section">
        <div class="layer-one" style="background-image: url({{asset('front')}}/images/background/3.png)"></div>
        <div class="layer-two" style="background-image: url({{asset('front')}}/images/background/4.png)"></div>
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <div class="clearfix">
                    <div class="pull-left">
                        <h2>Winter Wonderland Treats</h2>
                        <div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed tincidunt ut</div>
                    </div>
                    <div class="pull-right">
                        <a href="recipes.html" class="theme-btn btn-style-one"><span class="txt">See all Treats</span></a>
                    </div>
                </div>
            </div>

            <div class="clearfix row">

                <!-- Treat Block -->
                <div class="treat-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="recipes-detail.html"><img src="{{asset('front')}}/images/resource/treat-1.jpg" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <h4><a href="recipes-detail.html">Brownie Butte scotch Trifles</a></h4>
                        </div>
                    </div>
                </div>

                <!-- Treat Block -->
                <div class="treat-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="recipes-detail.html"><img src="{{asset('front')}}/images/resource/treat-2.jpg" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <h4><a href="recipes-detail.html">Brownie Butte scotch Trifles</a></h4>
                        </div>
                    </div>
                </div>

                <!-- Treat Block -->
                <div class="treat-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="recipes-detail.html"><img src="{{asset('front')}}/images/resource/treat-3.jpg" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <h4><a href="recipes-detail.html">Brownie Butte scotch Trifles</a></h4>
                        </div>
                    </div>
                </div>

                <!-- Treat Block -->
                <div class="treat-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="recipes-detail.html"><img src="{{asset('front')}}/images/resource/treat-4.jpg" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <h4><a href="recipes-detail.html">Brownie Butte scotch Trifles</a></h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Treats Section -->

    <!-- Clients Section -->
    <section class="clients-section">
        <div class="auto-container">
            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset('front')}}/images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset('front')}}/images/clients/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset('front')}}/images/clients/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset('front')}}/images/clients/4.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset('front')}}/images/clients/5.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset('front')}}/images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset('front')}}/images/clients/2.png" alt=""></a></figure></li>
                </ul>
            </div>

        </div>
    </section>
    <!-- End Clients Section -->

    <!-- Subscribe Section -->
    <section class="subscribe-section">
        <div class="auto-container">
            <div class="clearfix row">

                <!-- Column -->
                <div class="column col-lg-6 col-md-12 col-sm-12">
                    <h1>Subscribe to the best <br> recipes feed.</h1>
                    <!-- Subscribe Form -->
                    <div class="subscribe-form">
                        <form method="post" action="https://gico.io/spcica/contact.html">
                            <div class="clearfix form-group">
                                <input type="email" name="email" value="" placeholder="Enter your email" required>
                                <button type="submit" class="theme-btn send-btn flaticon-paper-plane-2"></button>
                            </div>
                        </form>
                    </div>
                    <div class="inbox">Get recipes, tips, and news delivered to your inbox.</div>
                </div>

                <!-- Column -->
                <div class="column col-lg-6 col-md-12 col-sm-12">
                    <h1>Visit our store</h1>
                    <div class="bold-text">Here you’ll find a carefully chosen kitchen inventory.</div>
                    <ul class="subscribe-list">
                        <li>Taste of Home is America's #1 <br> cooking magazine</li>
                        <li>Midnight Chocolate <br> Midnight Chocolate 2% <br> Very Berry Strawberry</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>
    <!-- End Subscribe Section -->

    <!-- Instagram Section -->
    <section class="instagram-section">
        <div class="auto-container">
            <!-- Title Box -->
            <div class="title-box">
                <div class="profile"><span class="fa fa-pinterest"></span> Follow On Pinterest </div>
            </div>

        </div>

        <div class="instagram-carousel owl-carousel owl-theme">

            <!-- Instagram Block -->
            <div class="instagram-block">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{asset('front')}}/images/resource/instagram-1.jpg" alt=""></figure>
                    <!--Overlay Box-->
                    <div class="overlay-box">
                        <div class="overlay-inner">
                            <div class="content">
                                <a href="{{asset('front')}}/images/resource/instagram-1.jpg" data-fancybox="instagram" data-caption="" class="lightbox-image option-btn" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Instagram Block -->
            <div class="instagram-block">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{asset('front')}}/images/resource/instagram-2.jpg" alt=""></figure>
                    <!--Overlay Box-->
                    <div class="overlay-box">
                        <div class="overlay-inner">
                            <div class="content">
                                <a href="{{asset('front')}}/images/resource/instagram-2.jpg" data-fancybox="instagram" data-caption="" class="lightbox-image option-btn" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Instagram Block -->
            <div class="instagram-block">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{asset('front')}}/images/resource/instagram-3.jpg" alt=""></figure>
                    <!--Overlay Box-->
                    <div class="overlay-box">
                        <div class="overlay-inner">
                            <div class="content">
                                <a href="{{asset('front')}}/images/resource/instagram-3.jpg" data-fancybox="instagram" data-caption="" class="lightbox-image option-btn" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Instagram Block -->
            <div class="instagram-block">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{asset('front')}}/images/resource/instagram-4.jpg" alt=""></figure>
                    <!--Overlay Box-->
                    <div class="overlay-box">
                        <div class="overlay-inner">
                            <div class="content">
                                <a href="{{asset('front')}}/images/resource/instagram-4.jpg" data-fancybox="instagram" data-caption="" class="lightbox-image option-btn" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Instagram Block -->
            <div class="instagram-block">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{asset('front')}}/images/resource/instagram-5.jpg" alt=""></figure>
                    <!--Overlay Box-->
                    <div class="overlay-box">
                        <div class="overlay-inner">
                            <div class="content">
                                <a href="{{asset('front')}}/images/resource/instagram-5.jpg" data-fancybox="instagram" data-caption="" class="lightbox-image option-btn" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Instagram Block -->
            <div class="instagram-block">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{asset('front')}}/images/resource/instagram-6.jpg" alt=""></figure>
                    <!--Overlay Box-->
                    <div class="overlay-box">
                        <div class="overlay-inner">
                            <div class="content">
                                <a href="{{asset('front')}}/images/resource/instagram-6.jpg" data-fancybox="instagram" data-caption="" class="lightbox-image option-btn" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Instagram Block -->
            <div class="instagram-block">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{asset('front')}}/images/resource/instagram-1.jpg" alt=""></figure>
                    <!--Overlay Box-->
                    <div class="overlay-box">
                        <div class="overlay-inner">
                            <div class="content">
                                <a href="{{asset('front')}}/images/resource/instagram-1.jpg" data-fancybox="instagram" data-caption="" class="lightbox-image option-btn" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Instagram Block -->
            <div class="instagram-block">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{asset('front')}}/images/resource/instagram-2.jpg" alt=""></figure>
                    <!--Overlay Box-->
                    <div class="overlay-box">
                        <div class="overlay-inner">
                            <div class="content">
                                <a href="{{asset('front')}}/images/resource/instagram-2.jpg" data-fancybox="instagram" data-caption="" class="lightbox-image option-btn" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Instagram Block -->
            <div class="instagram-block">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{asset('front')}}/images/resource/instagram-3.jpg" alt=""></figure>
                    <!--Overlay Box-->
                    <div class="overlay-box">
                        <div class="overlay-inner">
                            <div class="content">
                                <a href="{{asset('front')}}/images/resource/instagram-3.jpg" data-fancybox="instagram" data-caption="" class="lightbox-image option-btn" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Instagram Block -->
            <div class="instagram-block">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{asset('front')}}/images/resource/instagram-4.jpg" alt=""></figure>
                    <!--Overlay Box-->
                    <div class="overlay-box">
                        <div class="overlay-inner">
                            <div class="content">
                                <a href="{{asset('front')}}/images/resource/instagram-4.jpg" data-fancybox="instagram" data-caption="" class="lightbox-image option-btn" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Instagram Block -->
            <div class="instagram-block">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{asset('front')}}/images/resource/instagram-5.jpg" alt=""></figure>
                    <!--Overlay Box-->
                    <div class="overlay-box">
                        <div class="overlay-inner">
                            <div class="content">
                                <a href="{{asset('front')}}/images/resource/instagram-5.jpg" data-fancybox="instagram" data-caption="" class="lightbox-image option-btn" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Instagram Block -->
            <div class="instagram-block">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{asset('front')}}/images/resource/instagram-6.jpg" alt=""></figure>
                    <!--Overlay Box-->
                    <div class="overlay-box">
                        <div class="overlay-inner">
                            <div class="content">
                                <a href="{{asset('front')}}/images/resource/instagram-6.jpg" data-fancybox="instagram" data-caption="" class="lightbox-image option-btn" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- End Instagram Section -->

@endsection
