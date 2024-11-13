@include('admin.header')
@include('admin.navbar')
                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">

                                    <h4 class="page-title">Low Stock Product</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                    
                                        <div class="row mb-2">
                                    @if(session('user_type') == 2)
                                            <div class="col-sm-5">
                                                <a href="/addnewproduct" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle me-2"></i> Add Products</a>
                                            </div>
                                    @else
                                    @endif
                                        </div>
                
                                        <div class="table-responsive">
                                            <table class="table table-centered w-100 dt-responsive nowrap" id="products-datatable">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Product</th>
                                                        <th>Category</th>
                                                        <th>Color</th>
                                                        <th>Size</th>
                                                        <th>Price</th>
                                                        <th>Quantity</th>
                                                        <th>Status</th>
                                                        <th style="width: 85px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($data as $item)
                                                    <tr>
                                                        <td>
                                                            <img src="mainpage/images/{{$item->picture1}}" alt="contact-img" title="contact-img" class="rounded me-3" height="48" />
                                                            <p class="m-0 d-inline-block align-middle font-16">
                                                                <a href="apps-ecommerce-products-details.html" class="text-body">{{$item->product_name}}</a>
                                                            </p>
                                                        </td>
                                                        <td>
                                                        {{$item->category}}
                                                        </td>
                                                        <td>
                                                            {{$item->color}}
                                                        </td>
                                                        <td>
                                                            {{$item->size}}
                                                        </td>
                    
                                                        <td>
                                                            ₱{{$item->price}}
                                                        </td>
                                                        <td>
                                                            {{$item->quantity}}
                                                        </td>
                                                        <td>
                                                            @if($item->status == 1)
                                                            <span class="badge bg-success">Active</span>
                                                            @else
                                                            <span class="badge bg-danger">Inactive</span>
                                                            @endif
                                                        </td>
                    
                                                        <td class="table-action">
                                                        
                                                            <a href="/productdetails/{{$item->product_id}}" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                            <a href="/editproduct/{{$item->product_id}}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                
                                                            <a href="#" onclick="return false;" class="action-icon"> <i class="mdi mdi-archive-plus-outline addproductvariation" data-bs-toggle="modal" data-bs-target="#standard-modal" id="{{$item->product_id}}"></i></a>
                                                            
                                                            @if($item->status == 1)
                                                                <a href="#" onclick="return false;" class="action-icon disableproduct" id="{{$item->product_id}}"> <i class="mdi mdi-close"></i></a>
                                                            @else
                                                                <a href="#" onclick="return false;" class="action-icon enableproduct" id="{{$item->product_id}}"> <i class="mdi mdi-check"></i></a>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                            </table>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->        
                        
                    </div> <!-- container -->

                </div> <!-- content -->
                <!-- Standard modal content -->
                <div id="standard-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="standard-modalLabel">Add Variation</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="/addproductvariation" method="post" enctype="multipart/form-data">
                                @CSRF
                                <div class="modal-body">
                                    <div class="row g-2">
                                        <div class="mb-6 col-md-12">
                                            <label for="color" class="form-label">Color</label>
                                            <input type="text" class="form-control" name="color" id="color">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row g-2">
                                        <div class="mb-6 col-md-12">
                                            <label for="size" class="form-label">Size</label>
                                            <select class="form-select" name="size" id="size">
                                                <option>S</option>
                                                <option>M</option>
                                                <option>L</option>
                                                <option>XL</option>
                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row g-2">
                                        <div class="mb-6 col-md-12">
                                            <label for="price" class="form-label">Price</label>
                                            <input type="number" min="1" class="form-control" name="price" id="price">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row g-2">
                                        <div class="mb-6 col-md-12">
                                            <label for="quantity" class="form-label">Quantity</label>
                                            <input type="number" min="1" class="form-control" name="quantity" id="quantity">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row g-2">
                                        <div class="mb-6 col-md-12">
                                            <label for="formFileMultiple01" class="form-label">Pictures (Insert maximum of 3 pictures)</label>
                                            <input class="form-control" name="pictures[]" type="file" accept="image/*" id="formFileMultiple01" multiple>
                                            <input class="form-control" name="product_id" id="product_id" type="hidden">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
                @include('admin.footer')
