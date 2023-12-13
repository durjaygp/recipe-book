@extends('frontEnd.master')
@section('title')
    {{ $recipe->name}}
@endsection
@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image:url({{asset('front')}}/images/background/12.png)">
        <div class="auto-container">
            <h1>Recipes Single</h1>
        </div>
    </section>
    <!--End Page Title-->

    <!--Sidebar Page Container-->
    <div class="sidebar-page-container recipes-details-area">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Content Side -->
                <div class="content-side col-lg-12 col-md-12 col-sm-12">
                    <div class="recipe-detail">
                        <div class="inner-box">
                            <div class="image">
                                <img src="images/resource/big.jpg" alt="" />
                            </div>
                            <div class="content" style="background-image:url(images/background/13.png)">
                                <div class="author-image">
                                    <img src="images/resource/author-9.jpg" alt="" />
                                </div>
                                <div class="category">recipes Pizza</div>
                                <h2>The Best Sausage Pizzas Spread pizza <br> sauce over crusts</h2>
                                <div class="post">November 24, 2018 <span>By : Mahfuz Riad</span></div>
                                <div class="rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    &nbsp; 12 Review
                                </div>
                                <div class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Title Image Lorem ipsum dolor sit amet</div>
                                <ul class="post-meta">
                                    <li><span class="icon flaticon-dish"></span>6 ingredients </li>
                                    <li><span class="icon flaticon-clock-3"></span>15 Min</li>
                                    <li><span class="icon flaticon-business-and-finance"></span>8 People</li>
                                    <li><span class="icon flaticon-eye"></span>3,450 View</li>
                                </ul>
                            </div>
                            <div class="text">Good Food sounds like the name of an amazingly delicious food delivery service, but don't be fooled. The blog is actually a compilation of recipes, cooking videos, and nutrition tips</div>

                            <div class="row clearfix">

                                <div class="column col-lg-12">

                                    <div class="my-tab">
                                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Description</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">See Video</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Reviews</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="discription-para">
                                                                    <img src="images/resource/discription.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="discription-para">
                                                                    <h4>The Best Sausage Pizzas Spread pizza sauce over crusts. At libero totam fugiat vero ab distinctio ducimus.</h4>
                                                                    <p>Lorem ipsum dolor sit, amet, consectetur adipisicing elit. At libero totam fugiat vero ab distinctio ducimus, dolores deserunt inventore repellendus tempora fugit ipsum in alias placeat asperiores esse quaerat quibusdam omnis facilis laudantium. Placeat voluptatem nemo ea magnam modi quos esse accusamus possimus reiciendis, corporis rem quo, voluptatibus vel perferendis voluptates dolore.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <!-- Ingredients Block -->
                                                        <div class="ingredients-block">
                                                            <div class="block-inner">
                                                                <h4>Ingredients</h4>
                                                                <ul class="ingredients-list">
                                                                    <li>1 pound bulk Italian sausage</li>
                                                                    <li>1 batch Best Pizza Dough (correct in RMS before running NAs)</li>
                                                                    <li>1 cup pizza sauce</li>
                                                                    <li>4 cups shredded part-skim mozzarella cheese</li>
                                                                    <li>1 medium red onion, sliced</li>
                                                                    <li>1 medium green pepper, chopped</li>
                                                                    <li>2 cups sliced fresh mushrooms</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Nutrition Block -->
                                                        <div class="ingredients-block">
                                                            <div class="block-inner">
                                                                <h4>Nutrition</h4>
                                                                <ul class="nutrition-list">
                                                                    <li>Calories <span>219</span></li>
                                                                    <li>Sugar <span>12.5g</span></li>
                                                                    <li>Protein <span>18.5g</span></li>
                                                                    <li>Fat <span>0.5g</span></li>
                                                                    <li>Fod Fat <span>0.3</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <!-- Ingredients Block -->
                                                        <div class="ingredients-block">
                                                            <div class="block-inner">
                                                                <h4>Directions</h4>
                                                                <ul class="direction-list">
                                                                    <li><span>01</span><br>Divide dough in half. With greased fingers, pat each half onto an ungreased 12-in. pizza pan. Prick dough thoroughly with a fork. Bake at 400° until lightly browned, 10-12 minutes. Meanwhile, in a large skillet, cook the sausage over medium heat until sausage is no longer pink; drain.</li>
                                                                    <li><span>02</span><br>Spread pizza sauce over crusts. Top with cheese, onion, green pepper, mushrooms and sausage. Bake at 400° until golden brown and cheese is bubbling, 12-15 minutes. If desired, top with grated Parmesan cheese, crushed red pepper flakes and fresh oregano leaves. Or wrap pizzas and freeze for up to 2 months.</li>
                                                                    <li><span>03</span><br>To use frozen pizzas: Unwrap and place on pizza pans; thaw in the refrigerator. Bake at 400° for 18-22 minutes or until golden brown.</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                                <!-- Video Boxed -->
                                                <div class="video-boxed">

                                                    <!-- Video Box Two -->
                                                    <div class="video-box-two">
                                                        <div class="image">
                                                            <img src="images/resource/video.jpg" alt="" />
                                                            <a href="https://www.youtube.com/embed/sv3TXMSv6Lw" class="lightbox-image overlay-box"><span class="flaticon-media-play-symbol"><i class="ripple"></i></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--post-share-options-->
                                                <div class="post-share-options">
                                                    <div class="post-share-inner clearfix">
                                                        <div class="pull-left tags"><span class="fa fa-share"></span><a href="#">Facebook .</a> <a href="#">Twitter .</a> <a href="#">Linkein .</a> <a href="#">Pinterest .</a> <a href="#">Instragram</a></div>
                                                        <div class="pull-right">
                                                            <div class="save"><span class="icon flaticon-bookmark"></span>Save Recipe</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                                <!-- Comment Form -->
                                                <div class="comment-form">
                                                    <div class="group-title"><h2>leave a Reply</h2></div>
                                                    <!--Comment Form-->
                                                    <form method="post" action="https://gico.io/spcica/blog.html">
                                                        <div class="row clearfix">

                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                                                <textarea name="message" placeholder="Massage"></textarea>
                                                            </div>

                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                                                <div class="clearfix">
                                                                    <div class="pull-left">
                                                                        <div class="rating">
                                                                            Your Rate :
                                                                            <span class="fa fa-star-o"></span>
                                                                            <span class="fa fa-star-o"></span>
                                                                            <span class="fa fa-star-o"></span>
                                                                            <span class="fa fa-star-o"></span>
                                                                            <span class="fa fa-star-o"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="pull-right">
                                                                        <button class="theme-btn comment-btn" type="submit" name="submit-form">Post Review</button>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </form>
                                                </div>
                                                <!-- End Comment Form -->

                                                <!-- Comments Area -->
                                                <div class="comments-area">

                                                    <div class="comment-box">
                                                        <div class="comment">
                                                            <div class="author-thumb"><img src="images/resource/author-15.jpg" alt=""></div>
                                                            <div class="comment-info clearfix"><div class="comment-time">1 months ago · 0 Likes</div></div>
                                                            <div class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in…Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam</div>
                                                            <a class="theme-btn reply-btn" href="#"><span class="icon fa fa-reply"></span> Reply</a>
                                                            <a class="theme-btn heart-btn" href="#"><span class="icon fa fa-heart"></span> Like</a>
                                                        </div>
                                                    </div>

                                                    <div class="comment-box">
                                                        <div class="comment">
                                                            <div class="author-thumb"><img src="images/resource/author-16.jpg" alt=""></div>
                                                            <div class="comment-info clearfix"><div class="comment-time">12 january 2020 · 2 Likes</div></div>
                                                            <div class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in…</div>
                                                        </div>
                                                    </div>

                                                    <div class="comment-box reply-comment">
                                                        <div class="comment">
                                                            <div class="author-thumb"><img src="images/resource/author-17.jpg" alt=""></div>
                                                            <div class="comment-info clearfix"><div class="comment-time">1 months ago · 1 Likes</div></div>
                                                            <div class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in…</div>
                                                        </div>
                                                    </div>

                                                    <div class="comment-box">
                                                        <div class="comment">
                                                            <div class="author-thumb"><img src="images/resource/author-18.jpg" alt=""></div>
                                                            <div class="comment-info clearfix"><div class="comment-time">12 january 2020 · 0 Likes</div></div>
                                                            <div class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in…</div>
                                                        </div>
                                                    </div>

                                                    <div class="comment-box reply-comment">
                                                        <div class="comment">
                                                            <div class="author-thumb"><img src="images/resource/author-19.jpg" alt=""></div>
                                                            <div class="comment-info clearfix"><div class="comment-time">1 months ago · 4 Likes</div></div>
                                                            <div class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in…</div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>




                            <!-- Related Items -->
                            <div class="related-items">
                                <h4>You may also like</h4>

                                <div class="row clearfix">

                                    <!-- Recipes Block -->
                                    <div class="recipes-block style-two col-lg-4 col-md-6 col-sm-12">
                                        <div class="inner-box">
                                            <div class="image">
                                                <a href="recipes-detail.html"><img src="images/resource/recipe-23.jpg" alt="" /></a>
                                            </div>
                                            <div class="lower-content">
                                                <div class="author-image"><a href="author-details.html"><img src="images/resource/author-3.jpg" alt="" /></a></div>
                                                <div class="category">CHICKEN</div>
                                                <h4><a href="recipes-detail.html">Pressure-Cooker Beef Short Ribs with Chutney</a></h4>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Recipes Block -->
                                    <div class="recipes-block style-two col-lg-4 col-md-6 col-sm-12">
                                        <div class="inner-box">
                                            <div class="image">
                                                <a href="recipes-detail.html"><img src="images/resource/recipe-24.jpg" alt="" /></a>
                                            </div>
                                            <div class="lower-content">
                                                <div class="author-image"><a href="author-details.html"><img src="images/resource/author-3.jpg" alt="" /></a></div>
                                                <div class="category">CHICKEN</div>
                                                <h4><a href="recipes-detail.html">Pressure-Cooker Beef Short <br> Ribs with Chutney</a></h4>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Recipes Block -->
                                    <div class="recipes-block style-two col-lg-4 col-md-6 col-sm-12">
                                        <div class="inner-box">
                                            <div class="image">
                                                <a href="recipes-detail.html"><img src="images/resource/recipe-25.jpg" alt="" /></a>
                                            </div>
                                            <div class="lower-content">
                                                <div class="author-image"><a href="author-details.html"><img src="images/resource/author-3.jpg" alt="" /></a></div>
                                                <div class="category">CHICKEN</div>
                                                <h4><a href="recipes-detail.html">Pressure-Cooker Beef Short <br> Ribs with Chutney</a></h4>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
