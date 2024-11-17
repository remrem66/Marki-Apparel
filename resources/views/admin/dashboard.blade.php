@include('admin.header')
@include('admin.navbar')

                    
                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                    </div>
                                    <h4 class="page-title">Dashboard</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-12 col-lg-12">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="card widget-flat">
                                            <div class="card-body">
                                                <div class="float-end">
                                                    <i class="mdi mdi-account-multiple widget-icon"></i>
                                                </div>
                                                <h5 class="text-muted fw-normal mt-0" title="Number of Customers">Users</h5>
                                                <h3 class="mt-3 mb-3">{{$customers}}</h3>
                                            </div> <!-- end card-body-->
                                        </div> <!-- end card-->
                                    </div> <!-- end col-->

                                    <div class="col-sm-6">
                                        <div class="card widget-flat">
                                            <div class="card-body">
                                                <div class="float-end">
                                                    <i class="mdi mdi-cart-plus widget-icon"></i>
                                                </div>
                                                <h5 class="text-muted fw-normal mt-0" title="Number of Orders">Orders</h5>
                                                <h3 class="mt-3 mb-3">{{$orders}}</h3>
                                            </div> <!-- end card-body-->
                                        </div> <!-- end card-->
                                    </div> <!-- end col-->
                                </div> <!-- end row -->

                                <div class="row">
                                    <div class="col-sm-6">
                                        <a href="/viewlowstock">
                                            <div class="card widget-flat">
                                                <div class="card-body">
                                                    <div class="float-end">
                                                        <i class="mdi mdi-currency-usd widget-icon"></i>
                                                    </div>
                                                    <h5 class="text-muted fw-normal mt-0" title="Average Revenue">Products that are low in stock</h5>
                                                    <h3 class="mt-3 mb-3">{{$productsOnLowStock}}</h3>
                                                    
                                                </div> <!-- end card-body-->
                                            </div> <!-- end card-->
                                        </a>
                                        
                                    </div> <!-- end col-->
                                    <div class="col-sm-6">
                                        <div class="card widget-flat">
                                            <a href="/cancelledorders">
                                            <div class="card-body">
                                                <div class="float-end">
                                                    <i class="mdi dripicons-archive widget-icon"></i>
                                                </div>
                                                <h5 class="text-muted fw-normal mt-0" title="Number of Orders">Cancel Orders</h5>
                                                <h3 class="mt-3 mb-3">{{$cancelOrders}}</h3>
                                            </div> <!-- end card-body-->
                                            </a>
                                        </div> <!-- end card-->
                                    </div> <!-- end col-->
                                </div> <!-- end row -->

                                

                            </div> <!-- end col -->

                        </div>
                        <!-- end row -->

                        <!-- end row -->
                    </div>
                    <!-- container -->

                </div>
                <!-- content -->
@include('admin.footer')