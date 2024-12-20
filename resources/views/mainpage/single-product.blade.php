@include('mainpage.header')
@include('mainpage.navbar')

  <section id="banner" style="background-image:url({{asset('mainpage/images/banner-img2.jpg')}});">
    <div class="container padding-medium-2">
      <div class="hero-content ">
        <h2 class="display-1 fw-bold mt-5 mb-0">Shop Product</h2>
        <nav class="breadcrumb">
          <a class="breadcrumb-item nav-link" href="/">Home</a>
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
                      <a href="/single-product/{{$productsFirst->product_name}}:{{$productsFirst->category}}:{{$colors[$x]}}:{{$productsFirst->size}}" class=" productcolor btn btn-light fs-6 @if($colors[$x] == $productsFirst->color) active @endif @if($colorsStock[$colors[$x]] <= 0) disabled @endif">{{$colors[$x]}}</a>
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
                    <a href="/single-product/{{$productsFirst->product_name}}:{{$productsFirst->category}}:{{$productsFirst->color}}:{{$sizes[$x]}}" class=" productsize btn btn-light fs-6 @if($sizes[$x] == $productsFirst->size) active @endif @if($sizesStock[$sizes[$x]] <= 0) disabled @endif">{{$sizes[$x]}}</a>
                  </li>
                  @endfor
                </ul>
              </div>
              <div class="product-quantity pt-2">
                @if($productsFirst->quantity <= 5)
                  <div class="stock-number text-dark"><em>@if($productsFirst->quantity == 1)only {{$productsFirst->quantity}} item remains @else only {{$productsFirst->quantity}} items remain @endif</em></div>
                @else
                  <br>
                @endif
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
                        <input type="number" id="quantity" name="quantity"
                          class="form-control input-number text-center p-2 mx-1" value="1" min="1">
                        <input type="hidden" id="productname" value="{{$productsFirst->product_name}}">
                        <input type="hidden" id="productID" value="{{$productsFirst->product_id}}">
                        <input type="hidden" id="productcategory" value="{{$productsFirst->category}}">
                        <input type="hidden" id="currentproductcolor" value="{{$productsFirst->color}}">
                        <input type="hidden" id="currentproductsize" value="{{$productsFirst->size}}">
                        <input type="hidden" id="currentproductstock" value="{{$productsFirst->quantity}}">
                        <span class="input-group-btn">
                          <button type="button" class="quantity-right-plus btn btn-light btn-number" data-type="plus"
                            data-field="">
                            <svg width="16" height="16">
                              <use xlink:href="#plus"></use>
                            </svg>
                          </button>
                        </span>
                    </div>
                    @if(session('logged') == true)
                    <a href="#" onclick="return false;" class="btn-cart me-3 px-4 pt-3 pb-3" id="addtocart">
                      <h5 class="text-capitalize m-0">Add to Cart</h5>
                    </a>
                    @else
                    <a href="/loginregister" class="btn-cart me-3 px-4 pt-3 pb-3">
                      <h5 class="text-capitalize m-0">Login to shop!</h5>
                    </a>
                    @endif
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
                @if(count($reviews) > 0)
                @foreach($reviews as $comment)
                <div class="col-lg-6 d-flex flex-wrap gap-3">
                  <div class="col-md-8">
                    <div class="review-content">
                      <div class="review-header">
                        <span class="author-name text-black fw-bold">{{$comment->first_name}} {{$comment->last_name}}</span>
                        <span class="review-date">– {{date("M/j/Y",strtotime($comment->date_added))}}</span>
                      </div>
                      <p>{{$comment->comment}}</p>
                    </div>
                  </div>
                </div>
                @endforeach
                @else
                <div class="col-lg-12 d-flex flex-wrap gap-3">
                  <div class="col-md-12">
                    <div class="review-content">
                      <h4 style="margin-top: 20px;">No reviews yet for this product</h4>
                    </div>
                  </div>
                </div>
                {{-- <h4>No reviews yet for this product</h4> --}}
                @endif
              </div>
              @if(session('logged') == true)
              <div class="add-review mt-5">
                <h3>Add a review</h3>
                
                <form id="form" class="form-group" method="POST" action="/postareview">
                  @CSRF
                  <div class="pb-3">
                    <label>Your Review</label>
                    <input type="hidden" name="product_id" value="{{$productsFirst->product_id}}">
                    <textarea class="form-control" name="review" placeholder="Write your review here*" cols="100"></textarea>
                  </div>
                  <button type="submit"
                    class="btn btn-dark btn-large text-uppercase w-100">Submit</button>
                </form>
              </div>
              @else
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@include('mainpage.footer')