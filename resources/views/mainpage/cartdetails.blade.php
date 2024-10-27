@include('mainpage.header')
@include('mainpage.navbar')
  <section id="banner" style="background-image:url({{asset('mainpage/images/banner-img2.jpg')}});">
    <div class="container padding-medium-2">
      <div class="hero-content ">
        <h2 class="display-1 fw-bold mt-5 mb-0">Cart</h2>
        <nav class="breadcrumb">
          <a class="breadcrumb-item nav-link" href="#">Home</a>
          <a class="breadcrumb-item nav-link" href="#">Pages</a>
          <span class="breadcrumb-item active" aria-current="page">Cart</span>
        </nav>
      </div>
    </div>
  </section>

  <section id="cart" class="my-5 py-5">
    <div class="container">
      <div class="row g-md-5">
        <div class="col-md-8 pe-md-5">
          <table class="table">
            <thead>
              <tr>
                <th scope="col" class="card-title text-uppercase">Product</th>
                <th scope="col" class="card-title text-uppercase">Quantity</th>
                <th scope="col" class="card-title text-uppercase">Subtotal</th>
                <th scope="col" class="card-title text-uppercase"></th>
              </tr>
            </thead>
            <tbody>
              @foreach($cartProducts as $product)
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
                          <a href="#" class="text-decoration-none">{{$product->product_name}}</a>
                        </h5>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="py-4 align-middle">
                  <div class="input-group product-qty align-items-center w-50">
                    <span class="input-group-btn">
                      <button type="button" class="quantity-left-minus p-1 btn btn-light btn-number" data-type="minus">
                        <svg width="16" height="16">
                          <use xlink:href="#minus"></use>
                        </svg>
                      </button>
                    </span>
                    <input type="number" id="quantity" name="quantity" class="form-control input-number text-center p-2 mx-1 {{$product->cart_id}}-quantity" value="{{$product->cart_quantity}}">
                    <input type="hidden" id="{{$product->cart_id}}-stock" value="{{$product->quantity}}">
                    <input type="hidden" id="{{$product->cart_id}}-actualquantity" value="{{$product->cart_quantity}}">
                    <span class="input-group-btn">
                      <button type="button" class="quantity-right-plus p-1 btn btn-light btn-number" data-type="plus"
                        data-field="">
                        <svg width="16" height="16">
                          <use xlink:href="#plus"></use>
                        </svg>
                      </button>
                    </span>
                  </div>
                </td>
                <td class="py-4 align-middle">
                  <div class="total-price">
                    <span class="secondary-font fw-medium">₱{{$product->price * $product->cart_quantity}}</span>
                  </div>
                </td>
                <td class="py-4 align-middle">
                  <div class="cart-remove">
                    <a href="#" onclick="return false;" class="deleteproductcart" id="{{$product->cart_id}}">
                      <svg width="24" height="24">
                        <use xlink:href="#trash"></use>
                      </svg>
                    </a>
                    <a href="#" onclick="return false;" class="editproductcart" id="{{$product->cart_id}}">
                      <svg width="24" height="24">
                        <use xlink:href="#check"></use>
                      </svg>
                    </a>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="col-md-4">
          <div class="cart-totals">
            <h2 class="pb-4">Cart Total</h2>
            <div class="total-price pb-4">
              <table cellspacing="0" class="table text-uppercase">
                <tbody>
                  <tr class="subtotal pt-2 pb-2 border-top border-bottom">
                    <th>Subtotal</th>
                    <td data-title="Subtotal">
                      <span class="price-amount amount text-dark ps-5">
                        <bdi>
                          <span class="price-currency-symbol">₱</span>{{$grandTotal}}
                        </bdi>
                      </span>
                    </td>
                  </tr>
                  <tr class="subtotal pt-2 pb-2 border-top border-bottom">
                    <th>Shipping Fee</th>
                    <td data-title="Subtotal">
                      <span class="price-amount amount text-dark ps-5">
                        <bdi>
                          <span class="price-currency-symbol">FREE</span>
                        </bdi>
                      </span>
                    </td>
                  </tr>
                  <tr class="order-total pt-2 pb-2 border-bottom">
                    <th>Total</th>
                    <td data-title="Total">
                      <span class="price-amount amount text-dark ps-5">
                        <bdi>
                          <span class="price-currency-symbol">₱</span>{{$grandTotal}}</bdi>
                      </span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="button-wrap row g-2">
              <div class="col-md-12 mt-3"><a href="/checkoutdetails" class="btn btn-dark p-3 w-100">Proceed to checkout</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @include('mainpage.footer')