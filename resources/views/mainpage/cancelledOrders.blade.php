@include('mainpage.header')
@include('mainpage.navbar')
  <section id="banner" style="background-image:url({{asset('mainpage/images/banner-img2.jpg')}});">
    <div class="container padding-medium-2">
      <div class="hero-content ">
        <h2 class="display-1 fw-bold mt-5 mb-0">Order Details</h2>
        <nav class="breadcrumb">
          <a class="breadcrumb-item nav-link" href="/">Home</a>
          <span class="breadcrumb-item active" aria-current="page">Order Details</span>
        </nav>
      </div>
    </div>
  </section>

  <section id="cart" class="my-5 py-5">
    <div class="container">
    @if(count($productDetails) > 0)
      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th width="50%" class="text-uppercase">Product Name</th>
                <th class="text-uppercase" style="margin-right: 1000px;">Quantity</th>
                <th scope="col" class="text-uppercase" style="margin-right: 2000px;">Order Status</th>
              </tr>
            </thead>
            <tbody>
              @foreach($productDetails as $product)
              <tr>
                <td scope="row" class="py-4">
                  <div class="cart-info d-flex flex-wrap align-items-center ">
                    <div class="col-lg-3">
                      <div class="card-image">
                        <img src="{{asset('mainpage/images/'.$product->picture1)}}" width="420" height="300" alt="cloth" class="img-fluid">
                      </div>
                    </div>
                    <div class="col-lg-9">
                      <div class="card-detail ps-3">
                        <h5 class="card-title">
                          <a href="/single-product/{{$product->product_name}}:{{$product->category}}:{{$product->color}}:{{$product->size}}" class="text-decoration-none">{{$product->product_name}}</a>
                        </h5>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="py-4 align-middle">
                  <div class="input-group product-qty align-items-center w-50">
                    <h6>{{$product->cancel_quantity}}</h6>
                  </div>
                </td>
                <td class="py-4 align-middle">
                  <div class="total-price">
                    <h5>Cancelled</h5>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    @else
    <center><h1>No such orders yet</h1></center>
    @endif
    </div>

    <div class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Modal Title</h5>
            <button class="closemodal">&times;</button>
          </div>
          <div class="modal-body">
            <label for="cancelreason">Reason for cancellation</label>
            <input type="hidden" name="product-order" id="product-order">
            <textarea name="cancelreason" id="cancelreason" cols="60" ></textarea>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary close-btn">Close</button>
            <button class="btn btn-primary ordercancel">Cancel my order</button>
          </div>
        </div>
      </div>
    </div>
    
  </section>
  @include('mainpage.footer')