@extends('frontEnd.master')
@section('title','Home')
@section('content')
    <!-- Banner Section Two -->
    <section class="banner-section-two">
        <div class="banner-carousel owl-theme owl-carousel">

            <!-- Slide Item -->
            <div class="slide-item">
                <div class="image-layer" style="background-image:url({{asset('front')}}/images/background/6.jpg)"></div>

                <div class="auto-container">
                    <div class="content-box">
                        <div class="image">
                            <img src="{{asset('front')}}/images/resource/image-1.png" alt="" />
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
                        <h1>Roasted beet salad with arugula, <br> feta, and garlic vinaigrette</h1>
                        <div class="info-list clearfix">
                            <div class="rating">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star-half-o"></span>&ensp;
                                8 Review
                            </div>
                        </div>
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
                <div class="image-layer" style="background-image:url({{asset('front')}}/images/background/6.jpg)"></div>

                <div class="auto-container">
                    <div class="content-box">
                        <div class="image">
                            <img src="{{asset('front')}}/images/resource/image-1.png" alt="" />
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
                        <h1>Roasted beet salad with arugula, <br> feta, and garlic vinaigrette</h1>
                        <div class="info-list clearfix">
                            <div class="rating">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star-half-o"></span>&ensp;
                                8 Review
                            </div>
                        </div>
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
                <div class="image-layer" style="background-image:url({{asset('front')}}/images/background/6.jpg)"></div>

                <div class="auto-container">
                    <div class="content-box">
                        <div class="image">
                            <img src="{{asset('front')}}/images/resource/image-1.png" alt="" />
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
                        <h1>Roasted beet salad with arugula, <br> feta, and garlic vinaigrette</h1>
                        <div class="info-list clearfix">
                            <div class="rating">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star-half-o"></span>&ensp;
                                8 Review
                            </div>
                        </div>
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
    <!-- About Section -->
    <section class="about-section">
        <div class="layer-one" style="background-image: url({{asset('front')}}/images/resource/category-pattern-1.png)"></div>
        <div class="layer-two" style="background-image: url({{asset('front')}}/images/resource/category-pattern-1.png)"></div>
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image">
                            <img src="{{asset('front')}}/images/resource/about.png" alt="" />
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <div class="title">About us</div>
                            <h2>Our philosophy</h2>
                        </div>
                        <div class="bold-text">Welcome to the wonderful world of beets! I am delighted you are here.</div>
                        <div class="text">
                            <p>A lot of people ask me, "Why beets?" in which I respond with a cheeky grin, "'Beets' Me!" Actually, beets intrigue me as I think they are vibrantly diverse, spectacularly nutritious, and remarkably under-utilized. Perhaps you could say that I "root" for the underdog, er vegetable.</p>
                            <p>I was raised to appreciate fruits and vegetables. Thanks, mom and dad! Although I cannot recall the specific incidents, apparently when I was a toddler, I loved "helping" my parents in the garden by eating all the strawberries: dirt, insects, and all. Yes – to this day, I still love fruits and veggies; the beet happens to be one of the many extraordinary vegetables that I adore.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End About Section -->



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
                    @php
                    $books = \App\Models\Book::latest()->take(4)->get();
                    @endphp
                    @foreach($books as $row)
                    <div class="recipes-block style-two col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="{{route('book.details',$row->slug)}}"><img src="{{asset($row->image)}}" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <h4><a href="{{route('book.details',$row->slug)}}">{{$row->name}}</a></h4>
                                <span class="text-success h4">€ {{$row->price}}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach

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


    <!-- Subscribe Section -->
    <section class="subscribe-section">
        <div class="container">
            <div class="row">
                <!-- Column -->
                <div class="">
                    <h1>Subscribe to the best <br> recipes feed.</h1>
                    <!-- Subscribe Form -->
                    <div class="subscribe-form">
                        <form method="post" action="">
                            <div class="clearfix form-group">
                                <input type="email" name="email" value="" placeholder="Enter your email" required>
                                <button type="submit" class="theme-btn send-btn flaticon-paper-plane-2"></button>
                            </div>
                        </form>
                    </div>
                    <div class="inbox">Get recipes, tips, and news delivered to your inbox.</div>
                </div>


            </div>
        </div>
    </section>
    <!-- End Subscribe Section -->


@endsection
