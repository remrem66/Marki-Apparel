@include('admin.header')
@include('admin.navbar')
                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Product Details</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <!-- Product image -->
                                                <a href="javascript: void(0);" class="text-center d-block mb-4">
                                                    <img src="{{asset('mainpage/images/'.$data->picture1)}}" class="img-fluid" style="max-width: 280px;" alt="Product-img" />
                                                </a>

                                                <div class="d-lg-flex d-none justify-content-center">
                                                    <a href="javascript: void(0);">
                                                        <img src="{{asset('mainpage/images/'.$data->picture1)}}" class="img-fluid img-thumbnail p-2" style="max-width: 75px;" alt="Product-img" />
                                                    </a>
                                                    @if(!is_null($data->picture2))
                                                    <a href="javascript: void(0);" class="ms-2">
                                                        <img src="{{asset('mainpage/images/'.$data->picture2)}}" class="img-fluid img-thumbnail p-2" style="max-width: 75px;" alt="Product-img" />
                                                    </a>
                                                    @endif
                                                    @if(!is_null($data->picture3))
                                                    <a href="javascript: void(0);" class="ms-2">
                                                        <img src="{{asset('mainpage/images/'.$data->picture3)}}" class="img-fluid img-thumbnail p-2" style="max-width: 75px;" alt="Product-img" />
                                                    </a>
                                                    @endif
                                                </div>
                                            </div> <!-- end col -->
                                            <div class="col-lg-7">
                                                <form class="ps-lg-4">
                                                    <!-- Product title -->
                                                    <h3 class="mt-0">{{$data->product_name}}<a href="javascript: void(0);" class="text-muted"></a> </h3>
                                                    <p class="mb-1">Added Date: {{date("F j, Y",strtotime($data->date_created))}}</p>


                                                    <!-- Product stock -->
                                                    <div class="mt-3">
                                                        <h4><span class="badge badge-success-lighten">Instock</span></h4>
                                                    </div>

                                                    <!-- Product description -->
                                                    <div class="mt-4">
                                                        <h6 class="font-14">Retail Price:</h6>
                                                        <h3>{{$data->price}}</h3>
                                                    </div>

                                        
                                                    <!-- Product description -->
                                                    <div class="mt-4">
                                                        <h6 class="font-14">Description:</h6>
                                                        <p>{{$data->description}}</p>
                                                    </div>

                                                    <!-- Product information -->
                                                    <div class="mt-4">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <h6 class="font-14">Available Stock:</h6>
                                                                <p class="text-sm lh-150">{{$data->quantity}}</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </form>
                                            </div> <!-- end col -->
                                        </div> <!-- end row-->
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->
                        
                    </div> <!-- container -->

                </div> <!-- content -->
@include('admin.footer')
