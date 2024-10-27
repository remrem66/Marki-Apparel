@include('admin.header')
@include('admin.navbar')

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Orders Table</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title --> 


                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="scroll-horizontal-preview">
                                             
                                                <table id="scroll-horizontal-datatable" class="table table-striped w-100 nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>Item Receiver</th>
                                                            <th>Shipping Address</th>
                                                            <th>Contact Number</th>
                                                            <th>Item Ordered - Quantity</th>
                                                            <th>Total</th>
                                                            <th>Payment Type</th>
                                                            <th>Payment Status</th>
                                                            <th>Courier</th>
                                                            <th>Order Status</th>
                                                            <th>Order Date</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                
                                                
                                                    <tbody>
                                                        @if(count($info) > 0)
                                                        @for($x = 0; $x < count($info); $x++)
                                                        <tr>
                                                            <td>{{$info[$x]['Item Receiver']}}</td>
                                                            <td>{{$info[$x]['Shipping Address']}}</td>
                                                            <td>{{$info[$x]['Contact Number']}}</td>
                                                            <td>{!! $info[$x]['Item Orders'] !!}</td>
                                                            <td>{{$info[$x]['Total']}}</td>
                                                            <td>{{$info[$x]['Payment Type']}}</td>
                                                            <td>{{$info[$x]['Payment Status']}}</td>
                                                            <td>{{$info[$x]['Courier']}}</td>
                                                            <td>{{$info[$x]['Order Status']}}</td>
                                                            <td>{{$info[$x]['Order Date']}}</td>
                                                            <td>
                                                                @if($info[$x]['Order Status'] == "Order Placed")
                                                                    <button class="btn btn-success dispatch" id="{{$info[$x]['Order ID']}}" data-bs-toggle="modal" data-bs-target="#standard-modal">Dispatch</button>
                                                                @endif
                                                                @if($info[$x]['Order Status'] == "Dispatched")
                                                                    <button class="btn btn-success changeorderstatus" id="{{$info[$x]['Order ID']}}-Collected">Change to Collected</button>
                                                                @endif
                                                                @if($info[$x]['Order Status'] == "Collected")
                                                                    <button class="btn btn-success changeorderstatus" id="{{$info[$x]['Order ID']}}-In Transit">Change to In Transit</button>
                                                                @endif
                                                                @if($info[$x]['Order Status'] == "In Transit")
                                                                    <button class="btn btn-success changeorderstatus" id="{{$info[$x]['Order ID']}}-Out For Delivery">Change to Out For Delivery</button>
                                                                @endif
                                                                @if($info[$x]['Order Status'] == "Out For Delivery")
                                                                    <button class="btn btn-success changeorderstatus" id="{{$info[$x]['Order ID']}}-Delivered">Change to Delivered</button>
                                                                @endif
                                                                @if($info[$x]['Order Status'] == "Delivered")
                                                                    Completed
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @endfor
                                                    @endif
                                                    </tbody>
                                                </table>                                          
                                            </div> <!-- end preview-->
                                        

                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div> <!-- end row-->

                    </div> <!-- container -->
                    <div id="standard-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="standard-modalLabel">Choose Courier</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                    <div class="modal-body">
                                        <div class="row g-2">
                                            <div class="mb-6 col-md-12">
                                                <input type="hidden" id="order_id">
                                                <label for="courier" class="form-label">Courier</label>
                                                <select class="form-select" name="courier" id="courier">
                                                    <option value="J&T">J&T</option>
                                                    <option value="LBC">LBC</option>
                                                    <option value="Lala Move">Lala Move</option>
                                                    <option value="TokTok">TokTok</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary savecourier">Save</button>
                                    </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                </div> <!-- content -->
@include('admin.footer')