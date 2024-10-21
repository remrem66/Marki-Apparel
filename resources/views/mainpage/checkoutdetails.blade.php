@include('mainpage.header')
@include('mainpage.navbar')

  <section id="banner" style="background-image:url(mainpage/images/banner-img2.jpg);">
    <div class="container padding-medium-2">
      <div class="hero-content ">
        <h2 class="display-1 fw-bold mt-5 mb-0">Checkout</h2>
        <nav class="breadcrumb">
          <a class="breadcrumb-item nav-link" href="/">Home</a>
          <a class="breadcrumb-item nav-link" href="#">Pages</a>
          <span class="breadcrumb-item active" aria-current="page">Checkout</span>
        </nav>
      </div>
    </div>
  </section>

  <section id="checkout">
    <div class="container py-5 my-5">
      <form class="form-group" action="/placeorder" method="POST">
        @CSRF
        <div class="row d-flex flex-wrap">
          <div class="col-lg-6">
            <h2 class="text-dark pb-3">Billing Details</h2>
            <div class="billing-details">
              <label for="fname">First Name</label>
              <input type="text" id="fname" name="first_name" class="form-control mt-2 mb-4 ps-3" value="{{$userinfo->first_name}}">
              <label for="lname">Last Name</label>
              <input type="text" id="lname" name="last_name" class="form-control mt-2 mb-4 ps-3" value="{{$userinfo->last_name}}">
              <input type="hidden" name="total" value="{{$grandTotal}}">
              <label for="province">Province </label>
              <select class="form-select form-control mt-2 mb-4" name="province" aria-label="Default select example" id="province">
                @foreach($provinces as $province)
                  <option value="{{$province->province_code}}" @if($province->province_code == $userinfo->province) selected @endif>{{$province->province_name}}</option>
                @endforeach
              </select>
              <label for="state">Municipality</label>
              <select class="form-select form-control mt-2 mb-4" name="municipality" aria-label="Default select example" id="municipality">
                @foreach($municipalities as $municipality)
                  <option value="{{$municipality->municipality_code}}" @if($municipality->municipality_code == $userinfo->municipality) selected @endif>{{$municipality->municipality_name}}</option>
                @endforeach
              </select>
              <label for="state">Barangay</label>
              <select class="form-select form-control mt-2 mb-4" name="barangay" aria-label="Default select example" id="barangay">
                @foreach($barangays as $barangay)
                  <option value="{{$barangay->barangay_id}}" @if($barangay->barangay_id == $userinfo->barangay) selected @endif>{{$barangay->barangay_name}}</option>
                @endforeach
              </select>
              <label for="address_information">Address additional information (Street / Blk / Unit # ) </label>
              <input type="text" id="address_information" name="address_information" class="form-control mt-2 mb-4 ps-3" value="{{$userinfo->address_information}}">
              <label for="phone">Phone number </label>
              <input type="text" id="phone" name="contact_number" class="form-control mt-2 mb-4 ps-3" value="{{$userinfo->contact_number}}">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="your-order mt-5">
              <h2 class="display-7 text-dark pb-3">Cart Totals</h2>
              <div class="total-price">
                <table cellspacing="0" class="table">
                  <tbody>
                    <tr class="subtotal border-top border-bottom pt-2 pb-2 text-uppercase">
                      <th>Subtotal</th>
                      <td data-title="Subtotal">
                        <span class="price-amount amount ps-5">
                          <bdi>
                            <span class="price-currency-symbol">₱</span>{{$grandTotal}} </bdi>
                        </span>
                      </td>
                    </tr>
                    <tr class="subtotal border-top border-bottom pt-2 pb-2 text-uppercase">
                      <th>Shipping Fee</th>
                      <td data-title="Subtotal">
                        <span class="price-amount amount ps-5">
                          <bdi>
                            <span class="price-currency-symbol"></span>FREE </bdi>
                        </span>
                      </td>
                    </tr>
                    <tr class="order-total border-bottom pt-2 pb-2 text-uppercase">
                      <th>Total</th>
                      <td data-title="Total">
                        <span class="price-amount amount ps-5">
                          <bdi>
                            <span class="price-currency-symbol">₱</span>{{$grandTotal}} </bdi>
                        </span>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="list-group mt-5 mb-3">
                  <label class="list-group-item d-flex gap-2 border-0">
                    <input class="form-check-input flex-shrink-0" type="radio" name="payment_type"
                      id="listGroupRadios1" value="Online Payment" checked="">
                    <span>
                      <strong class="text-uppercase">Online Payment</strong>
                      <small class="d-block text-body-secondary">Make your payment directly into our bank account.</small>
                    </span>
                  </label>
                  <label class="list-group-item d-flex gap-2 border-0">
                    <input class="form-check-input flex-shrink-0" type="radio" name="payment_type"
                      id="listGroupRadios3" value="COD">
                    <span>
                      <strong class="text-uppercase">Cash on delivery</strong>
                      <small class="d-block text-body-secondary">Pay with cash upon delivery.</small>
                    </span>
                  </label>
                </div>
                <button type="submit" class="btn btn-dark btn-lg rounded-1 w-100">Place order</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>

  <section id="register" style="background-image:url(mainpage/images/background-img.jpg);">
    <div class="container padding-medium">
      <div class="row banner-content align-items-center">
        <div class="col-md-4 offset-md-1">
          <h2 class="register-text text-white mt-3">Get <span> <em>20% OFF</em> </span> on your first purchase</h2>
          <p class="mb-4">Sign Up for our newsletter and never miss any offers</p>
        </div>
        <div class="col-md-4 offset-md-1">
          <form>
            <div class="mb-3">
              <input type="email" class="form-control form-control-lg rounded-3" name="email" id="email"
                placeholder="Enter Your Email Address">
            </div>
            <div class="d-grid gap-2">
              <button type="submit" class="btn btn-dark btn-lg rounded-3">Register it now</button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </section>
  @include('mainpage.footer')