@include('admin.header')
@include('admin.navbar')

<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Add New Admin User</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Enter Admin User Details</h4>
                    <br>
                    <div class="tab-content">
                        <div class="tab-pane show active" id="form-row-preview">
                            <form method="POST" action="/insertnewadminuser" enctype="multipart/form-data">
                                @CSRF
                                <div class="row g-2">
                                    <div class="mb-3 col-md-6">
                                        <label for="product_name" class="form-label">First Name</label>
                                        <input type="text" class="form-control" name="first_name" id="product_name">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="product_name" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" name="last_name" id="product_name">
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="mb-3 col-md-6">
                                        <label for="category" class="form-label">Admin Type</label>
                                        <select class="form-select" name="user_type" id="category">
                                            <option value="2">Inventory Admin</option>
                                            <option value="3">Sales Admin</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="product_name" class="form-label">Email Address</label>
                                        <input type="text" class="form-control" name="email_address" id="product_name">
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="mb-3 col-md-6">
                                        <label for="product_name" class="form-label">Contact Number</label>
                                        <input type="text" class="form-control" name="contact_number" id="product_name">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                            @if ($errors->has('message'))
                                <br>
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    <strong>{{ $errors->first('message') }}</strong>
                                </div>
                            @endif                      
                        </div> 
                    </div> 
                </div>
            </div> 
        </div> 
    </div>
</div> 



@include('admin.footer')