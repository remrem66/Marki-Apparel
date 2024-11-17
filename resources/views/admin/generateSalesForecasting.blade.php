@include('admin.header')
@include('admin.navbar')
                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Generate Sales Forecasting</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title --> 
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="/salesforecasting" method="post">
                                            @csrf
                                            <div class="row">
                                                <label for="year" class="col-sm-1 col-form-label col-form-label-sm">Year</label>
                                                <div class="col-sm-3">
                                                    <select class="form-control" name="year" id="year">
                                                        @for($i = 0; $i < count($years); $i++)
                                                            <option value="{{$years[$i]}}">{{$years[$i]}}</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                                <div class="col-sm-3">
                                                    <button type="submit" class="btn btn-success">Submit</button>
                                                </div>
                                            </div>
                                        </form>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <!-- end row -->        
                        
                    </div> <!-- container -->

                </div> <!-- content -->
                <!-- Standard modal content -->
                @include('admin.footer')
