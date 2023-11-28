<header class="main-header header-style-one">

    <!--Header-Upper-->
    <div class="header-upper">
        <div class="auto-container">
            <div class="clearfix">

                <div class="pull-left logo-box">
                    <div class="logo"><a href="{{route('home')}}"><img src="{{asset('front')}}/images/logo.png" alt="" title=""></a></div>
                </div>

                <div class="clearfix nav-outer">
                    <!-- Mobile Navigation Toggler -->
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <div class="navbar-header">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="clearfix navbar-collapse show collapse" id="navbarSupportedContent">
                            <ul class="clearfix navigation">
                                <li class="current dropdown"><a href="#">Home</a>
                                    <ul>
                                        <li><a href="index.html">Home Page 01</a></li>
                                        <li><a href="index-2.html">Home Page 02</a></li>
                                    </ul>
                                </li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li class="dropdown"><a href="#">Recipes</a>
                                    <ul>
                                        <li><a href="recipes.html">Recipes 01</a></li>
                                        <li><a href="recipes-2.html">Recipes 02</a></li>
                                        <li><a href="recipes-3.html">Recipes 03</a></li>
                                        <li><a href="recipes-video.html">Recipes Video</a></li>
                                        <li><a href="recipes-detail.html">Recipes Detail 01</a></li>
                                        <li><a href="recipes-detail-2.html">Recipes Detail 02</a></li>
                                    </ul>
                                </li>
                                <li><a href="category.html">Category</a></li>
                                <li class="dropdown"><a href="#">Blog</a>
                                    <ul>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-single.html">Blog Single</a></li>
                                        <li><a href="not-found.html">Not Found / 404</a></li>
                                        <li><a href="{{route('login')}}">Login</a></li>
                                        <li><a href="signup.html">Sign Up</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact us</a></li>
                            </ul>
                        </div>

                    </nav>

                    <!-- Outer Box -->
                    <div class="outer-box">
                        <!-- Search Box -->
                        <div class="search-box-outer">
                            <div class="dropdown">
                                <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                    <li class="panel-outer">
                                        <div class="form-container">
                                            <form method="post" action="https://gico.io/spcica/blog.html">
                                                <div class="form-group">
                                                    <input type="search" name="field-name" value="" placeholder="Search Here" required>
                                                    <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <ul class="login-info">
                            <li><a href="{{route('login')}}"><span class="icon fa fa-user"></span>Login</a></li>
                            <li class="recipe"><a href="add-recipe.html"><span class="fa fa-plus-circle"></span>&nbsp; Add Recipe</a></li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon fa fa-remove"></span></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html"><img src="{{asset('front')}}/images/logo-2.png" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        </nav>
    </div><!-- End Mobile Menu -->

</header>
