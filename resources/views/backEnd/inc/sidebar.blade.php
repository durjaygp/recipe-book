<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="{{route('admin.index')}}" class="text-nowrap logo-img">
                <img src="{{asset('back')}}/assets/images/logos/dark-logo.svg" class="dark-logo" width="180" alt="" />
                <img src="{{asset('back')}}/assets/images/logos/light-logo.svg" class="light-logo"  width="180" alt="" />
            </a>
            <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8 text-muted"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar>
            <ul id="sidebarnav">
                <!-- ============================= -->
                <!-- Intro -->
                <!-- ============================= -->
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Dashboard</span>
                </li>
                <!-- =================== -->
                <!-- Dashboard -->
                <!-- =================== -->
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('admin.index')}}" aria-expanded="false">
                  <span>
                    <i class="ti ti-aperture"></i>
                  </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>

                <!-- =================== -->
                <!-- Books Intro -->
                <!-- =================== -->
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Books</span>
                </li>
                <!-- =================== -->
                <!-- Books -->
                <!-- =================== -->
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('book.list')}}" aria-expanded="false">
                  <span>
                    <i class="ti ti-book-upload"></i>
                  </span>
                        <span class="hide-menu">Book</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('order.list')}}" aria-expanded="false">
                  <span>
                    <i class="ti ti-shopping-cart"></i>
                  </span>
                        <span class="hide-menu">Order</span>
                    </a>
                </li>
                <!-- =================== -->

                <!-- =================== -->
                <!-- Recipe Intro -->
                <!-- =================== -->
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Recipes</span>
                </li>
                <!-- =================== -->
                <!-- Books -->
                <!-- =================== -->
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('category.index')}}" aria-expanded="false">
                  <span>
                    <i class="ti ti-category-2"></i>
                  </span>
                        <span class="hide-menu">Category</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('recipe.list')}}" aria-expanded="false">
                  <span>
                    <i class="ti ti-cookie"></i>
                  </span>
                        <span class="hide-menu">Recipe</span>
                    </a>
                </li>
                <!-- =================== -->
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Blog</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('blog.list')}}">
                  <span>
                    <i class="ti ti-brand-blogger"></i>
                  </span>
                        <span class="hide-menu">Blog</span>
                    </a>
                </li>
                <!-- =================== -->
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Website</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('admin.setting')}}">
                  <span>
                    <i class="ti ti-settings"></i>
                  </span>
                        <span class="hide-menu">Website Setting</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('home')}}" target="_blank">
                  <span>
                    <i class="ti ti-world"></i>
                  </span>
                        <span class="hide-menu">Visit Website</span>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
