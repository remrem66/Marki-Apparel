
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
                        <a data-bs-toggle="collapse" href="#productManagement" aria-expanded="false" aria-controls="productManagement" class="side-nav-link">
                            <i class="uil-shopping-basket"></i>
                            <span> Product Management </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="productManagement">
                            <ul class="side-nav-second-level">
                                <li>
                    
                                    <a href="/addnewproduct">Add New Product</a>
                                    <a href="/viewproducts">View Products</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                 
                    <li class="side-nav-item">
                        <a href="/showusers" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                            <i class="dripicons-user-group"></i>
                            <span>Users</span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a href="/audittrail" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                            <i class="dripicons-user-group"></i>
                            <span>Audit Trail</span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="/orders" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                            <i class="uil-receipt"></i>
                            <span> Orders </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="/cancelledorders" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                            <i class="dripicons-archive"></i>
                            <span>Cancelled Orders</span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#salesanalytics" aria-expanded="false" aria-controls="sidebarForms" class="side-nav-link">
                            <i class="uil-graph-bar"></i>
                            <span> Sales Analytics </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="salesanalytics">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="/generatemonthlysalesreport">Generate Monthly Sales Report</a>
                                </li>
                                <li>
                                    <a href="/generatesalesforecasting">Generate Sales Forecasting</a>
                                </li>
                            </ul>
                        </div>
                    </li>

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

        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                aria-expanded="false">
                <span class="account-user-avatar"> 
                    <img src="{{asset('admin/assets/images/users/avatar-1.jpg')}}" alt="user-image" class="rounded-circle">
                </span>
                <span>
                    <span class="account-user-name">{{session('user_name')}}</span>
                    <span class="account-position">Admin</span>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                <!-- item-->
                <div class=" dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Welcome !</h6>
                </div>

                <!-- item-->
                <a href="/editadminuser/{{session('user_id')}}" class="dropdown-item notify-item">
                    <i class="mdi mdi-account-circle me-1"></i>
                    <span>Edit Account</span>
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
</div>
<!-- end Topbar -->

                    