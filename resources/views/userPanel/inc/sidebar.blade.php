<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="{{route('dashboard')}}" class="text-nowrap logo-img">
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
                    <a class="sidebar-link" href="{{route('dashboard')}}" aria-expanded="false">
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
                    <a class="sidebar-link" href="{{route('user.myBooks')}}" aria-expanded="false">
                  <span>
                    <i class="ti ti-book-upload"></i>
                  </span>
                        <span class="hide-menu">My Books</span>
                    </a>
                </li>
                <!-- =================== -->
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Website</span>
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
        <div class="fixed-profile p-3 bg-light-secondary rounded sidebar-ad mt-3">
            <div class="hstack gap-3">
                <div class="john-img">
                    <img src="{{asset('back')}}/assets/images/profile/user-1.jpg" class="rounded-circle" width="40" height="40" alt="">
                </div>
                <div class="john-title">
                    <h6 class="mb-0 fs-4 fw-semibold">Mathew</h6>
                    <span class="fs-2 text-dark">Designer</span>
                </div>
                <button class="border-0 bg-transparent text-primary ms-auto" tabindex="0" type="button" aria-label="logout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="logout">
                    <i class="ti ti-power fs-6"></i>
                </button>
            </div>
        </div>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
