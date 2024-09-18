@include('mainpage.header')
@include('mainpage.navbar')

  <section id="banner" style="background-image:url({{asset('mainpage/images/banner-img2.jpg')}});">
    <div class="container padding-medium-2">
      <div class="hero-content ">
        <h2 class="display-1 fw-bold mt-5 mb-0">Shop Product</h2>
        <nav class="breadcrumb">
          <a class="breadcrumb-item nav-link" href="#">Home</a>
          <a class="breadcrumb-item nav-link" href="#">Pages</a>
          <span class="breadcrumb-item active" aria-current="page">Shop Product</span>
        </nav>
      </div>
    </div>
  </section>

  <section id="selling-product">
    <div class="container my-md-5 py-5">
      <div class="row g-md-5">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-md-3 d-none d-md-flex">
              <!-- product-thumbnail-slider -->
              <div class="swiper product-thumbnail-slider">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="{{asset('mainpage/images/'.$productsFirst->picture1)}}" alt="" class="thumb-image img-fluid">
                  </div>
                  <div class="swiper-slide">
                    <img src="{{asset('mainpage/images/'.$productsFirst->picture2)}}" alt="" class="thumb-image img-fluid">
                  </div>
                  <div class="swiper-slide">
                    <img src="{{asset('mainpage/images/'.$productsFirst->picture3)}}" alt="" class="thumb-image img-fluid">
                  </div>
                </div>
              </div>
              <!-- / product-thumbnail-slider -->
            </div>
            <div class="col-md-9">
              <!-- product-large-slider -->
              <div class="swiper product-large-slider">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="{{asset('mainpage/images/'.$productsFirst->picture1)}}" alt="product-large" class="img-fluid">
                  </div>
                  <div class="swiper-slide">
                    <img src="{{asset('mainpage/images/'.$productsFirst->picture2)}}" alt="product-large" class="img-fluid">
                  </div>
                  <div class="swiper-slide">
                    <img src="{{asset('mainpage/images/'.$productsFirst->picture3)}}" alt="product-large" class="img-fluid">
                  </div>
                </div>
              </div>
              <!-- / product-large-slider -->
            </div>
          </div>

        </div>
        <div class="col-lg-6 mt-5 ">
          <div class="product-info">
            <div class="element-header">
              <h2 itemprop="name" class="display-6 fw-bold">{{$productsFirst->product_name}}</h2>
              <div class="rating-container d-flex gap-0 align-items-center">
                <span class="rating secondary-font">
                  <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                  <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                  <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                  <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                  <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                  5.0</span>
              </div>
            </div>
            <div class="product-price pt-3 pb-3">
              <strong class="text-primary display-6 ">₱{{$productsFirst->price}}</strong>
            </div>
            <p>{{$productsFirst->description}}</p>
            <div class="cart-wrap">
              <div class="color-options product-select">
                <div class="color-toggle pt-2" data-option-index="0">
                  <h6 class="item-title fw-bold">Colors:</h6>
                  <ul class="select-list list-unstyled d-flex">
                    @for($x = 0; $x < count($colors); $x++)
                    <li class="select-item pe-3" data-val="{{$colors[$x]}}" title="Black">
                      <button class="btn btn-light fs-6 @if($colors[$x] == $productsFirst->color) active @endif">{{$colors[$x]}}</button>
                    </li>
                    {{-- <li class="select-item pe-3" data-val="Gray" title="Gray">
                      <a href="#" class="btn btn-light fs-6 active">Gray</a>
                    </li> --}}
                    @endfor
                  </ul>
                </div>
              </div>
              <div class="swatch product-select pt-3" data-option-index="1">
                <h6 class="item-title fw-bold">Sizes:</h6>
                <ul class="select-list list-unstyled d-flex">
                  @for($x = 0; $x < count($sizes); $x++)
                  <li data-value="{{$sizes[$x]}}" class="select-item pe-3">
                    <button class="btn btn-light fs-6 @if($sizes[$x] == $productsFirst->size) active @endif">{{$sizes[$x]}}</button>
                  </li>
                  @endfor
                </ul>
              </div>
              <div class="product-quantity pt-2">
                <div class="stock-number text-dark"><em>2 in stock</em></div>
                <div class="stock-button-wrap">
                  <div class="d-flex flex-wrap">
                    <div class="input-group product-qty align-items-center w-25 me-3">
                      <span class="input-group-btn">
                        <button type="button" class="quantity-left-minus btn btn-light btn-number" data-type="minus">
                          <svg width="16" height="16">
                            <use xlink:href="#minus"></use>
                          </svg>
                        </button>
                      </span>
                      <input type="text" id="quantity" name="quantity"
                        class="form-control input-number text-center p-2 mx-1" value="1">
                      <span class="input-group-btn">
                        <button type="button" class="quantity-right-plus btn btn-light btn-number" data-type="plus"
                          data-field="">
                          <svg width="16" height="16">
                            <use xlink:href="#plus"></use>
                          </svg>
                        </button>
                      </span>
                    </div>
                    <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                      <h5 class="text-capitalize m-0">Add to Cart</h5>
                    </a>
                  </div>

                </div>
              </div>
            </div>
            <div class="meta-product pt-4">
              <div class="meta-item d-flex align-items-baseline">
                <h6 class="item-title fw-bold no-margin pe-2">Category:</h6>
                <ul class="select-list list-unstyled d-flex">
                  <li data-value="{{$productsFirst->category}}" class="select-item">
                    <a href="#">{{$productsFirst->category}}</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="product-info-tabs mb-5">
    <div class="container">
      <div class="row">
        <div class="d-flex flex-column flex-md-row align-items-start gap-5">
          <div class="nav flex-row flex-wrap flex-md-column nav-pills me-3 col-lg-3" id="v-pills-tab" role="tablist"
            aria-orientation="vertical">
            <button class="nav-link fs-5 text-capitalize mb-2 text-start" id="v-pills-reviews-tab" data-bs-toggle="pill"
              data-bs-target="#v-pills-reviews" type="button" role="tab" aria-controls="v-pills-reviews"
              aria-selected="true">Customer Reviews</button>
          </div>
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade active show" id="v-pills-reviews" role="tabpanel" aria-labelledby="v-pills-reviews-tab"
              tabindex="0">
              <div class="review-box d-flex flex-wrap">
                <div class="col-lg-6 d-flex flex-wrap gap-3">
                  <div class="col-md-2">
                    <div class="image-holder">
                      <img src="{{asset('mainpage/images/reviewer-1.jpg')}}" alt="review" class="img-fluid rounded-circle">
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="review-content">
                      <div class="rating-container d-flex align-items-center">
                        <div class="rating" data-rating="1">
                          <svg width="24" height="24" class="text-primary">
                            <use xlink:href="#star-solid"></use>
                          </svg>
                        </div>
                        <div class="rating" data-rating="2">
                          <svg width="24" height="24" class="text-primary">
                            <use xlink:href="#star-solid"></use>
                          </svg>
                        </div>
                        <div class="rating" data-rating="3">
                          <svg width="24" height="24" class="text-primary">
                            <use xlink:href="#star-solid"></use>
                          </svg>
                        </div>
                        <div class="rating" data-rating="4">
                          <svg width="24" height="24" class="text-secondary">
                            <use xlink:href="#star-solid"></use>
                          </svg>
                        </div>
                        <div class="rating" data-rating="5">
                          <svg width="24" height="24" class="text-secondary">
                            <use xlink:href="#star-solid"></use>
                          </svg>
                        </div>
                        <span class="rating-count">(3.5)</span>
                      </div>
                      <div class="review-header">
                        <span class="author-name text-black fw-bold">Mark Johnson</span>
                        <span class="review-date">– 03/07/2023</span>
                      </div>
                      <p>Vitae tortor condimentum lacinia quis vel eros donec ac. Nam at lectus urna duis convallis
                        convallis</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 d-flex flex-wrap gap-3">
                  <div class="col-md-2">
                    <div class="image-holder">
                      <img src="{{asset('mainpage/images/reviewer-2.jpg')}}" alt="review" class="img-fluid rounded-circle">
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="review-content">
                      <div class="rating-container d-flex align-items-center">
                        <div class="rating" data-rating="1">
                          <svg width="24" height="24" class="text-primary">
                            <use xlink:href="#star-solid"></use>
                          </svg>
                        </div>
                        <div class="rating" data-rating="2">
                          <svg width="24" height="24" class="text-primary">
                            <use xlink:href="#star-solid"></use>
                          </svg>
                        </div>
                        <div class="rating" data-rating="3">
                          <svg width="24" height="24" class="text-primary">
                            <use xlink:href="#star-solid"></use>
                          </svg>
                        </div>
                        <div class="rating" data-rating="4">
                          <svg width="24" height="24" class="text-secondary">
                            <use xlink:href="#star-solid"></use>
                          </svg>
                        </div>
                        <div class="rating" data-rating="5">
                          <svg width="24" height="24" class="text-secondary">
                            <use xlink:href="#star-solid"></use>
                          </svg>
                        </div>
                        <span class="rating-count">(3.5)</span>
                      </div>
                      <div class="review-header">
                        <span class="author-name text-black fw-bold">Jenny Willis</span>
                        <span class="review-date">– 03/06/2022</span>
                      </div>
                      <p>Vitae tortor condimentum lacinia quis vel eros donec ac. Nam at lectus urna duis convallis
                        convallis</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="add-review mt-5">
                <h3>Add a review</h3>
                <p>Your email address will not be published. Required fields are marked *</p>
                <form id="form" class="form-group">

                  <div class="pb-3">
                    <div class="review-rating">
                      <span>Your rating *</span>
                      <div class="rating-container d-flex align-items-center">
                        <span class="rating secondary-font">
                          <iconify-icon icon="clarity:star-solid" class="text-primary me-2"></iconify-icon>
                          <iconify-icon icon="clarity:star-solid" class="text-primary me-2"></iconify-icon>
                          <iconify-icon icon="clarity:star-solid" class="text-primary me-2"></iconify-icon>
                          <iconify-icon icon="clarity:star-solid" class="text-primary me-2"></iconify-icon>
                          <iconify-icon icon="clarity:star-solid" class="text-primary me-2"></iconify-icon>
                          (5.0)</span>
                      </div>
                    </div>
                  </div>
                  <div class="pb-3">
                    <input type="file" class="form-control" data-text="Choose your file">
                  </div>
                  <div class="pb-3">
                    <label>Your Name</label>
                    <input type="text" name="name" placeholder="Write your name here*" class="form-control">
                  </div>
                  <div class="pb-3">
                    <label>Your Email</label>
                    <input type="text" name="email" placeholder="Write your email here*" class="form-control">
                  </div>
                  <div class="pb-3">
                    <label>Your Review</label>
                    <textarea class="form-control" placeholder="Write your review here*"></textarea>
                  </div>
                  <div class="pb-3">
                    <label>
                      <input type="checkbox" required="">
                      <span class="label-body">Save my name, email, and website in this browser for the next
                        time.</span>
                    </label>
                  </div>
                  <button type="submit" name="submit"
                    class="btn btn-dark btn-large text-uppercase w-100">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
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