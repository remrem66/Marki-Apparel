@include('admin.header')
@include('admin.navbar')

<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Edit Product</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Edit Product Details</h4>
                    <br>
                    <div class="tab-content">
                        <div class="tab-pane show active" id="form-row-preview">
                            <form method="POST" action="/productedit" enctype="multipart/form-data">
                                @CSRF
                                <div class="row g-2">
                                    <div class="mb-3 col-md-6">
                                        <label for="product_name" class="form-label">Product Name</label>
                                        <input type="text" class="form-control" name="product_name" id="product_name" value="{{$info->product_name}}">
										<input type="hidden" class="form-control" name="product_id"  value="{{$info->product_id}}">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="category" class="form-label">Category</label>
                                        <select class="form-select" name="category" id="category">
                                            <option @if($info->category == "T-Shirt")selected @endif>T-Shirt</option>
                                            <option @if($info->category == "Polo Shirt") selected @endif>Polo Shirt</option>
                                            <option @if($info->category == "Polo") selected @endif>Polo</option>
                                            <option @if($info->category == "Hoodie") selected @endif>Hoodie</option>
                                            <option @if($info->category == "Jacket") selected @endif>Jacket</option>
                                            <option @if($info->category == "Shorts") selected @endif>Shorts</option>
                                            <option @if($info->category == "Pants") selected @endif>>Pants</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="mb-3 col-md-6">
                                        <label for="color" class="form-label">Color</label>
                                        <input type="text" class="form-control" name="color" id="color" value="{{$info->color}}">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="size" class="form-label">Size</label>
                                        <select class="form-select" name="size" id="size">
                                            <option @if($info->category == "S") selected @endif>S</option>
                                            <option @if($info->category == "M") selected @endif>M</option>
                                            <option @if($info->category == "L") selected @endif>L</option>
                                            <option @if($info->category == "XL") selected @endif>XL</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="mb-3 col-md-6">
                                        <label for="price" class="form-label">Price</label>
                                        <input type="number" min="1" class="form-control" name="price" id="price" value="{{$info->price}}">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="quantity" class="form-label">Quantity</label>
                                        <input type="number" min="1" class="form-control" name="quantity" id="quantity" value="{{$info->quantity}}">
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="mb-3 col-md-6">
                                        <label for="formFileMultiple01" class="form-label">Pictures (Insert maximum of 3 pictures)</label>
                                        <input class="form-control" name="pictures[]" type="file" accept="image/*" id="formFileMultiple01" multiple>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" placeholder="Place product description here" id="description" name="description" style="height: 100px">{{$info->description}}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>                      
                        </div> 
                    </div> 
                </div>
            </div> 
        </div> 
    </div>
</div> 



@include('admin.footer')