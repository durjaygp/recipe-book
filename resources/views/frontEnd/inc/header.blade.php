<header class="main-header header-style-one bg-light">

    <!--Header-Upper-->
    <div class="header-upper">
        <div class="auto-container ">
            <div class="clearfix">

                <div class="pull-left logo-box">
                    <div class="logo">

                        <a href="{{route('home')}}" class="d-flex">
                            <img src="{{asset($website->website_logo)}}" class="img-fluid" style="width:100px;" alt="{{asset($website->name)}}" title="{{asset($website->name)}}">
                            <h3 class="css-font-durjay">Cindy's Simple Plates</h3>
                        </a>

                    </div>
                </div>

                <div class="clearfix nav-outer">
                    <!-- Mobile Navigation Toggler -->
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md m-2">
                        <div class="navbar-header">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <style>
                            .d-select {
                                appearance: none;
                                -webkit-appearance: none;
                                padding: 10px;
                                font-size: 16px;
                                border: 1px solid #ccc;
                                border-radius: 5px;
                                background-color: #fff;
                                cursor: pointer;
                                padding-left: 40px; /* Space for the image */
                                background-repeat: no-repeat;
                                background-position: 10px center;
                            }

                            .d-select:focus {
                                border-color: #4CAF50;
                                box-shadow: 0 0 5px rgba(0, 128, 0, 0.5);
                            }

                            #currency option[value="zar"] {
                                background-image: url('{{ asset('zar.svg') }}');
                                background-size: 20px; /* Adjust the size of the image */
                                padding-left: 30px; /* Adjust space for the smaller image */
                            }
                        </style>

                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                var currencySelect = document.getElementById("currency");

                                currencySelect.addEventListener("change", function() {
                                    var selectedOption = currencySelect.options[currencySelect.selectedIndex];
                                    var selectedValue = selectedOption.value;
                                    var selectedText = selectedOption.text;

                                    // Update background image based on the selected currency
                                    currencySelect.style.backgroundImage = "url('" + getCurrencyFlag(selectedValue) + "')";
                                    currencySelect.title = selectedText;
                                });

                                // Function to get the path to the currency flag image
                                function getCurrencyFlag(currency) {
                                    switch (currency) {
                                        case "zar":
                                            return "{{ asset('zar.svg') }}";
                                        case "usd":
                                            return "{{ asset('usa.svg') }}";
                                        case "gbp":
                                            return "{{ asset('uk.svg') }}";
                                        case "euro":
                                            return "{{ asset('europe.svg') }}";
                                        default:
                                            return "";
                                    }
                                }
                            });
                        </script>

                        <div class="clearfix navbar-collapse show collapse" id="navbarSupportedContent">

                            <ul class="clearfix navigation">
                                <li class="{{ (\Illuminate\Support\Facades\Request::route() && \Illuminate\Support\Facades\Request::route()->getName() == 'home') ? 'current' : '' }}"><a href="{{route('home')}}">Home</a></li>
                                <li class="{{ (\Illuminate\Support\Facades\Request::route() && \Illuminate\Support\Facades\Request::route()->getName() == 'home.books') ? 'current' : '' }}"><a href="{{route('home.books')}}">Books</a></li>
                                <li class="{{ (\Illuminate\Support\Facades\Request::route() && \Illuminate\Support\Facades\Request::route()->getName() == 'home.blogs') ? 'current' : '' }}"><a href="{{route('home.blogs')}}">Blogs</a></li>
                                <li class="{{ (\Illuminate\Support\Facades\Request::route() && \Illuminate\Support\Facades\Request::route()->getName() == 'home.contact') ? 'current' : '' }}"><a href="{{route('home.contact')}}">Contact us</a></li>
                                <li class="">
                                    <select class="d-select" id="currency">
                                        <option value="zar">ZAR</option>
                                        <option value="usd">USD</option>
                                        <option value="gbp">GBP</option>
                                        <option value="euro">EURO</option>
                                    </select>
                                </li>

                            </ul>

                        </div>
                    </nav>

                    <!-- Outer Box -->
                    <div class="outer-box">
                        <!-- Search Box -->
                        <div class="search-box-outer">
                            <div class="dropdown">
                                <button class="search-box-btn dropdown-toggle text-black btn-primary" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search text-black"></span></button>
                                <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                    <li class="panel-outer">
                                        <div class="form-container">
                                            <form method="get" action="{{route('search.book')}}">
                                                <div class="form-group">
                                                    <input type="search" name="search" value="" placeholder="Search Here" required>
                                                    <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <ul class="login-info">
                            @if(auth()->check())
                                @if(auth()->user()->role->name === 'admin')
                                    <li><a href="{{ route('admin.index') }}"><span class="icon fa fa-user"></span>Admin Panel</a></li>
                                    <li class="recipe"><a href="{{ route('home.cart') }}"><span class="icon fa fa-shopping-cart"></span>Cart</a></li>
                                @else
                                    <li><a href="{{ route('dashboard') }}"><span class="icon fa fa-user"></span>Dashboard</a></li>
                                    <li class="recipe"><a href="{{ route('home.cart') }}"><span class="icon fa fa-shopping-cart"></span>Cart</a></li>
                                @endif
                            @else
                                <li><a href="{{ route('login') }}"><span class="icon fa fa-user"></span>Login</a></li>
                                <li class="recipe"><a href="{{ route('register') }}"><span class="icon fa fa-user"></span>Register</a></li>
                            @endif

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
            <div class="nav-logo"><a href="{{route('home')}}"><img src="{{asset($website->website_logo)}}" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        </nav>
    </div><!-- End Mobile Menu -->

</header>
