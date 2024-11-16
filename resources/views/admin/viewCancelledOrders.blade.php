@include('admin.header')
@include('admin.navbar')

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Cancelled Orders</h4>
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
                                                            <th>Full Name</th>
                                                            <th>Contact Number</th>
                                                            <th>Email Address</th>
                                                            <th>Address</th>
                                                            <th>Product Name</th>
                                                            <th>Color</th>
                                                            <th>Size</th>
                                                            <th>Quantity</th>
                                                            <th>Cancel Reason</th>
                                                            <th>Date Cancelled</th>
                                                        </tr>
                                                    </thead>
                                                
                                                
                                                    <tbody>
                                                        @foreach($data as $info)
                                                        <tr>
                                                            <td>{{$info->first_name}} {{$info->last_name}}</td>
                                                            <td>{{$info->contact_number}}</td>
                                                            <td>{{$info->email_address}}</td>
                                                            <td>{{$info->address_information}}</td>
                                                            <td>{{$info->product_name}}</td>
                                                            <td>{{$info->color}}</td>
                                                            <td>{{$info->size}}</td>
                                                            <td>{{$info->cancel_quantity}}</td>
                                                            <td>{{$info->cancel_reason}}</td>
                                                            <td>{{date("F j, Y",strtotime($info->date_cancelled))}}</td>
                                                            
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>                                          
                                            </div> <!-- end preview-->
                                        

                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div> <!-- end row-->

                    </div> <!-- container -->
                </div> <!-- content -->
@include('admin.footer')