@include('admin.header')
@include('admin.navbar')
<div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Audit Trail</h4>

                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="basic-datatable-preview">
                                                <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                                                    <thead>
                                                        <tr>
                                                            <th>Admin Name</th>
                                                            <th>Action</th>
                                                            <th>Date Added</th>
                                                
                                                        </tr>
                                                    </thead>
                                                
                                                
                                                    <tbody>
                                                    @foreach($info as $info)
                                                        <tr>
                                                            <td>{{$info->first_name}} {{$info->last_name}}</td>
                                                            <td>{{$info->action}}</td>
                                                            <td>{{$info->date_added}}</td>
                                                
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
@include('admin.footer')