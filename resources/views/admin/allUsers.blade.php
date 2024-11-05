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
                                                            <th>Full Name</th>
                                                            <th>Email Address</th>
                                                            <th>Contact Number</th>
                                                            <th>Address</th>
                                                            <th>Birthday</th>
                                                            <th>Gender</th>
                                                        </tr>
                                                    </thead>
                                                
                                                
                                                    <tbody>
                                                        @foreach($users as $info)
                                                        <tr>
                                                            <td>{{$info->first_name}} {{$info->last_name}}</td>
                                                            <td>{{$info->email_address}}</td>
                                                            <td>{{$info->contact_number}}</td>
                                                            <td>{{$info->address_information}}</td>
                                                            <td>{{date("F j, Y",strtotime($info->birthday))}}</td>
                                                            <td>{{$info->gender}}</td>
                                                            
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