
<body class="loading" data-layout-color="light" data-leftbar-theme="dark" data-layout-mode="fluid" data-rightbar-onstart="true">
    <!-- Begin page -->
    <div class="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        <div class="leftside-menu">

            <!-- LOGO -->
            <a href="/dashboard" class="logo text-center logo-light">
                <span class="logo-lg">
                    <img src="mainpage/images/marki-dark.png" alt="" height="80">
                </span>
                <span class="logo-sm">
                    <img src="mainpage/images/marki-dark.png" alt="" height="80">
                </span>
            </a>

            <!-- LOGO -->
            <a href="/dashboard" class="logo text-center logo-dark">
                <span class="logo-lg">
                    <img src="admin/assets/images/logo-dark.png" alt="" height="16">
                </span>
                <span class="logo-sm">
                    <img src="admin/assets/images/logo_sm_dark.png" alt="" height="16">
                </span>
            </a>

            <div class="h-100" id="leftside-menu-container" data-simplebar>

                <!--- Sidemenu -->
                <ul class="side-nav">

                    <li class="side-nav-title side-nav-item">Navigation</li>

                    <li class="side-nav-item">
                        <a href="/dashboard" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                            <i class="uil-home-alt"></i>
                            <span> Dashboards </span>
                        </a>
                    </li>

        
                    <li class="side-nav-title side-nav-item mt-1">Components</li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarForms" aria-expanded="false" aria-controls="sidebarForms" class="side-nav-link">
                            <i class="uil-users-alt"></i>
                            <span> Users Management </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarForms">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="/addnewadminuser">Add New Admin User</a>
                                    <a href="/viewadminusers">View Admin Users</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarForms" aria-expanded="false" aria-controls="sidebarForms" class="side-nav-link">
                            <i class="uil-shopping-basket"></i>
                            <span> Product Management </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarForms">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="/addnewproduct">Add New Product</a>
                                    <a href="/viewproducts">View Products</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="side-nav-item">
                        <a href="/orders" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                            <i class="uil-receipt"></i>
                            <span> Orders </span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarForms" aria-expanded="false" aria-controls="sidebarForms" class="side-nav-link">
                            <i class="uil-document-layout-center"></i>
                            <span> Forms </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarForms">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="/formelements">Basic Elements</a>
                                </li>
                                <li>
                                    <a href="/formadvance">Form Advanced</a>
                                </li>
                                <li>
                                    <a href="/formvalidation">Validation</a>
                                </li>
                                <li>
                                    <a href="/formwizard">Wizard</a>
                                </li>
                                <li>
                                    <a href="/formfileupload">File Uploads</a>
                                </li>
                                <li>
                                    <a href="/editors">Editors</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarCharts" aria-expanded="false" aria-controls="sidebarCharts" class="side-nav-link">
                            <i class="uil-chart"></i>
                            <span> Charts </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarCharts">
                            <ul class="side-nav-second-level">
                                
                                <li>
                                    <a href="/chartbrite">Britecharts</a>
                                </li>
                                <li>
                                    <a href="/chartjs">Chartjs</a>
                                </li>
                                <li>
                                    <a href="/chartsparkline">Sparklines</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarTables" aria-expanded="false" aria-controls="sidebarTables" class="side-nav-link">
                            <i class="uil-table"></i>
                            <span> Tables </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarTables">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="/basictable">Basic Tables</a>
                                </li>
                                <li>
                                    <a href="/datatable">Data Tables</a>
                                </li>
                            </ul>
                        </div>
                    </li>
{{-- 
                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarMaps" aria-expanded="false" aria-controls="sidebarMaps" class="side-nav-link">
                            <i class="uil-location-point"></i>
                            <span> Maps </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarMaps">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="maps-google.html">Google Maps</a>
                                </li>
                                <li>
                                    <a href="maps-vector.html">Vector Maps</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarMultiLevel" aria-expanded="false" aria-controls="sidebarMultiLevel" class="side-nav-link">
                            <i class="uil-folder-plus"></i>
                            <span> Multi Level </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarMultiLevel">
                            <ul class="side-nav-second-level">
                                <li class="side-nav-item">
                                    <a data-bs-toggle="collapse" href="#sidebarSecondLevel" aria-expanded="false" aria-controls="sidebarSecondLevel">
                                        <span> Second Level </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="sidebarSecondLevel">
                                        <ul class="side-nav-third-level">
                                            <li>
                                                <a href="javascript: void(0);">Item 1</a>
                                            </li>
                                            <li>
                                                <a href="javascript: void(0);">Item 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="side-nav-item">
                                    <a data-bs-toggle="collapse" href="#sidebarThirdLevel" aria-expanded="false" aria-controls="sidebarThirdLevel">
                                        <span> Third Level </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="sidebarThirdLevel">
                                        <ul class="side-nav-third-level">
                                            <li>
                                                <a href="javascript: void(0);">Item 1</a>
                                            </li>
                                            <li class="side-nav-item">
                                                <a data-bs-toggle="collapse" href="#sidebarFourthLevel" aria-expanded="false" aria-controls="sidebarFourthLevel">
                                                    <span> Item 2 </span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <div class="collapse" id="sidebarFourthLevel">
                                                    <ul class="side-nav-forth-level">
                                                        <li>
                                                            <a href="javascript: void(0);">Item 2.1</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript: void(0);">Item 2.2</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul> --}}

                <!-- Help Box -->
                <!-- end Help Box -->
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
<!-- Topbar Start -->
<div class="navbar-custom">
    <ul class="list-unstyled topbar-menu float-end mb-0">
        <li class="dropdown notification-list d-lg-none">
            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <i class="dripicons-search noti-icon"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                <form class="p-3">
                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                </form>
            </div>
        </li>





        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                aria-expanded="false">
                <span class="account-user-avatar"> 
                    <img src="{{asset('admin/assets/images/users/avatar-1.jpg')}}" alt="user-image" class="rounded-circle">
                </span>
                <span>
                    <span class="account-user-name">Dominic Keller</span>
                    <span class="account-position">Founder</span>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                <!-- item-->
                <div class=" dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Welcome !</h6>
                </div>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="mdi mdi-account-circle me-1"></i>
                    <span>My Account</span>
                </a>
{{-- 
                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="mdi mdi-account-edit me-1"></i>
                    <span>Settings</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="mdi mdi-lifebuoy me-1"></i>
                    <span>Support</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="mdi mdi-lock-outline me-1"></i>
                    <span>Lock Screen</span>
                </a> --}}

                <!-- item-->
                <a href="/logout" class="dropdown-item notify-item">
                    <i class="mdi mdi-logout me-1"></i>
                    <span>Logout</span>
                </a>
            </div>
        </li>

    </ul>
    <button class="button-menu-mobile open-left">
        <i class="mdi mdi-menu"></i>
    </button>
    <div class="app-search dropdown d-none d-lg-block">
        <form>
            <div class="input-group">
                <input type="text" class="form-control dropdown-toggle"  placeholder="Search..." id="top-search">
                <span class="mdi mdi-magnify search-icon"></span>
                <button class="input-group-text btn-primary" type="submit">Search</button>
            </div>
        </form>

        <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">
            <!-- item-->
            <div class="dropdown-header noti-title">
                <h5 class="text-overflow mb-2">Found <span class="text-danger">17</span> results</h5>
            </div>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
                <i class="uil-notes font-16 me-1"></i>
                <span>Analytics Report</span>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
                <i class="uil-life-ring font-16 me-1"></i>
                <span>How can I help you?</span>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
                <i class="uil-cog font-16 me-1"></i>
                <span>User profile settings</span>
            </a>

            <!-- item-->
            <div class="dropdown-header noti-title">
                <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
            </div>

            <div class="notification-list">
                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <div class="d-flex">
                        <img class="d-flex me-2 rounded-circle" src="admin/assets/images/users/avatar-2.jpg" alt="Generic placeholder image" height="32">
                        <div class="w-100">
                            <h5 class="m-0 font-14">Erwin Brown</h5>
                            <span class="font-12 mb-0">UI Designer</span>
                        </div>
                    </div>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <div class="d-flex">
                        <img class="d-flex me-2 rounded-circle" src="admin/assets/images/users/avatar-5.jpg" alt="Generic placeholder image" height="32">
                        <div class="w-100">
                            <h5 class="m-0 font-14">Jacob Deo</h5>
                            <span class="font-12 mb-0">Developer</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- end Topbar -->

                    