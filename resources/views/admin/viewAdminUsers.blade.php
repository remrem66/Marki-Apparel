@include('admin.header')
@include('admin.navbar')
                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">

                                    <h4 class="page-title">Admin Users</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col-sm-5">
                                                <a href="/addnewadminuser" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle me-2"></i> Add New Admin User</a>
                                            </div>
          
                                        </div>
                
                                        <div class="table-responsive">
                                            <table class="table table-centered w-100 dt-responsive nowrap" id="products-datatable">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Full Name</th>
                                                        <th>User Type</th>
                                                        <th>Email Address</th>
                                                        <th>Contact Number</th>
                                                        <th>Account Status</th>
                                                        <th>Date Added</th>
                                                        <th style="width: 85px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($data as $item)
                                                    <tr>
                                                        <td>
                                                        {{$item->first_name}} {{$item->last_name}}
                                                        </td>
                                                        <td>
                                                            @if($item->user_type == 2)
                                                                Inventory Admin
                                                            @else
                                                                Sales Admin
                                                            @endif
                                                        </td>
                                                        <td>
                                                            {{$item->email_address}}
                                                        </td>
                                                        <td>
                                                            {{$item->contact_number}}
                                                        </td>
                                                        <td>
                                                            @if($item->user_status == 1)
                                                                Active
                                                            @else
                                                                Inactive
                                                            @endif
                                                        </td>
                                                        <td>
                                                            {{date("F j, Y",strtotime($item->date_created))}}
                                                        </td>
                                                        <td class="table-action">
                                                            <a href="/editadminuser/{{$item->user_id}}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                            @if($item->user_status == 1)
                                                                <a href="#" onclick="return false;" class="action-icon"> <i class="mdi mdi-close-circle deactivateuser" id="{{$item->user_id}}"></i></a>
                                                            @else
                                                                <a href="#" onclick="return false;" class="action-icon"> <i class="mdi mdi-check-circle activateuser" id="{{$item->user_id}}"></i></a>
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
