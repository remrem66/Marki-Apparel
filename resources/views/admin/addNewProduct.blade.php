@include('admin.header')
@include('admin.navbar')

<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Add New Product</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Enter Product Details</h4>
                    <br>
                    <div class="tab-content">
                        <div class="tab-pane show active" id="form-row-preview">
                            <form method="POST" action="/insertnewproduct" enctype="multipart/form-data">
                                @CSRF
                                <div class="row g-2">
                                    <div class="mb-3 col-md-6">
                                        <label for="product_name" class="form-label">Product Name</label>
                                        <input type="text" class="form-control" name="product_name" id="product_name" required>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="category" class="form-label">Category</label>
                                        <select class="form-select" name="category" id="category" required>
                                            <option>T-Shirt</option>
                                            <option>Polo Shirt</option>
                                            <option>Polo</option>
                                            <option>Long Sleeve</option>
                                            <option>Hoodie</option>
                                            <option>Jacket</option>
                                            <option>Shorts</option>
                                            <option>Pants</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="mb-3 col-md-6">
                                        <label for="color" class="form-label">Color</label>
                                        <input type="text" class="form-control" name="color" id="color" required>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="size" class="form-label">Size</label>
                                        <select class="form-select" name="size" id="size" required>
                                            <option>S</option>
                                            <option>M</option>
                                            <option>L</option>
                                            <option>XL</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="mb-3 col-md-6">
                                        <label for="price" class="form-label">Price</label>
                                        <input type="number" min="1" class="form-control" name="price" id="price" required>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="quantity" class="form-label">Quantity</label>
                                        <input type="number" min="1" class="form-control" name="quantity" id="quantity" required>
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="mb-3 col-md-6">
                                        <label for="formFileMultiple01" class="form-label">Pictures (Insert maximum of 3 pictures)</label>
                                        <input class="form-control" name="pictures[]" type="file" accept="image/*" id="formFileMultiple01" multiple required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" placeholder="Place product description here" id="description" name="description" style="height: 100px" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                            @if ($errors->has('message'))
                                <br>
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    <strong>{{ $errors->first('message') }}</strong>
                                </div>
                            @endif      
                            
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
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