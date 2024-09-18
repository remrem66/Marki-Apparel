@include('mainpage.header')
@include('mainpage.navbar')
  <section id="banner" style="background-image:url({{asset('mainpage/images/banner-img2.jpg')}});">
    <div class="container padding-medium-2">
      <div class="hero-content ">
        <h2 class="display-1 fw-bold mt-5 mb-0">Shop</h2>
        <nav class="breadcrumb">
          <a class="breadcrumb-item nav-link" href="#">Home</a>
          <a class="breadcrumb-item nav-link" href="#">Pages</a>
          <span class="breadcrumb-item active" aria-current="page">Shop</span>
        </nav>
      </div>
    </div>
  </section>

  <section id="shop">
    <div class="container py-5 my-5">
      <div class="row flex-md-row-reverse g-md-5 mb-5">

        <main class="col-md-9">
          <div class="filter-shop d-md-flex justify-content-between align-items-center">
            <div class="showing-product">
              <p class="m-0">Showing 1–9 of 55 results</p>
            </div>
            <!-- <div class="sort-by">
              <select class="filter-categories border-0 m-0">
                <option value="">Default sorting</option>
                <option value="">Name (A - Z)</option>
                <option value="">Name (Z - A)</option>
                <option value="">Price (Low-High)</option>
                <option value="">Price (High-Low)</option>
                <option value="">Rating (Highest)</option>
                <option value="">Rating (Lowest)</option>
                <option value="">Model (A - Z)</option>
                <option value="">Model (Z - A)</option>
              </select>
            </div> -->
          </div>

          <div class="row product-store">
            @foreach($products as $product)
            <div class="col-md-6 col-lg-4 my-4">
              <div class="product-item">
                <div class="image-holder" style="width: 100%; height: 100%;">
                  <img src="{{asset('mainpage/images/'.$product->picture1)}}" alt="Books" class="product-image img-fluid">
                </div>
                {{-- <div class="cart-concern">
                  <div class="cart-button d-flex justify-content-between align-items-center">
                    <a href="#" class="btn-wrap cart-link d-flex align-items-center text-capitalize fs-6 ">add to cart
                      <i class="icon icon-arrow-io pe-1"></i>
                    </a>
                    <a href="/single-product" class="view-btn">
                      <i class="icon icon-screen-full"></i>
                    </a>
                    <a href="#" class="wishlist-btn">
                      <i class="icon icon-heart"></i>
                    </a>
                  </div>
                </div> --}}
                <div class="product-detail d-flex justify-content-between align-items-center mt-4">
                  <h4 class="product-title mb-0">
                    <a href="/single-product/{{$product->product_name}}:{{$product->category}}">{{$product->product_name}}</a>
                  </h4>
                  <p class="m-0 fs-5 fw-normal">₱{{$product->price}}</p>
                </div>
              </div>
            </div>
            @endforeach
            {{-- <div class="col-md-6 col-lg-4 my-4">
              <div class="z-1 position-absolute rounded-3 m-3 px-3 border border-dark-subtle">
                New
              </div>
              <div class="product-item">
                <div class="image-holder">
                  <img src="mainpage/images/item2.jpg" alt="Books" class="product-image img-fluid">
                </div>
                <div class="cart-concern">
                  <div class="cart-button d-flex justify-content-between align-items-center">
                    <a href="#" class="btn-wrap cart-link d-flex align-items-center text-capitalize fs-6 ">add to cart
                      <i class="icon icon-arrow-io pe-1"></i>
                    </a>
                    <a href="/single-product" class="view-btn">
                      <i class="icon icon-screen-full"></i>
                    </a>
                    <a href="#" class="wishlist-btn">
                      <i class="icon icon-heart"></i>
                    </a>
                  </div>
                </div>
                <div class="product-detail d-flex justify-content-between align-items-center mt-4">
                  <h4 class="product-title mb-0">
                    <a href="/single-product">Seven Zero Five</a>
                  </h4>
                  <p class="m-0 fs-5 fw-normal">40.00</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 my-4">
              <div class="product-item">
                <div class="image-holder">
                  <img src="mainpage/images/item3.jpg" alt="Books" class="product-image img-fluid">
                </div>
                <div class="cart-concern">
                  <div class="cart-button d-flex justify-content-between align-items-center">
                    <a href="#" class="btn-wrap cart-link d-flex align-items-center text-capitalize fs-6 ">add to cart
                      <i class="icon icon-arrow-io pe-1"></i>
                    </a>
                    <a href="/single-product" class="view-btn">
                      <i class="icon icon-screen-full"></i>
                    </a>
                    <a href="#" class="wishlist-btn">
                      <i class="icon icon-heart"></i>
                    </a>
                  </div>
                </div>
                <div class="product-detail d-flex justify-content-between align-items-center mt-4">
                  <h4 class="product-title mb-0">
                    <a href="/single-product">Seven Zero Five</a>
                  </h4>
                  <p class="m-0 fs-5 fw-normal">40.00</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 my-4">
              <div class="z-1 position-absolute rounded-3 m-3 px-3 border border-dark-subtle">
                Sale
              </div>
              <div class="product-item">
                <div class="image-holder">
                  <img src="mainpage/images/item4.jpg" alt="Books" class="product-image img-fluid">
                </div>
                <div class="cart-concern">
                  <div class="cart-button d-flex justify-content-between align-items-center">
                    <a href="#" class="btn-wrap cart-link d-flex align-items-center text-capitalize fs-6 ">add to cart
                      <i class="icon icon-arrow-io pe-1"></i>
                    </a>
                    <a href="/single-product" class="view-btn">
                      <i class="icon icon-screen-full"></i>
                    </a>
                    <a href="#" class="wishlist-btn">
                      <i class="icon icon-heart"></i>
                    </a>
                  </div>
                </div>
                <div class="product-detail d-flex justify-content-between align-items-center mt-4">
                  <h4 class="product-title mb-0">
                    <a href="/single-product">Seven Zero Five</a>
                  </h4>
                  <p class="m-0 fs-5 fw-normal">40.00</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 my-4">
              <div class="product-item">
                <div class="image-holder">
                  <img src="mainpage/images/item1.jpg" alt="Books" class="product-image img-fluid">
                </div>
                <div class="cart-concern">
                  <div class="cart-button d-flex justify-content-between align-items-center">
                    <a href="#" class="btn-wrap cart-link d-flex align-items-center text-capitalize fs-6 ">add to cart
                      <i class="icon icon-arrow-io pe-1"></i>
                    </a>
                    <a href="/single-product" class="view-btn">
                      <i class="icon icon-screen-full"></i>
                    </a>
                    <a href="#" class="wishlist-btn">
                      <i class="icon icon-heart"></i>
                    </a>
                  </div>
                </div>
                <div class="product-detail d-flex justify-content-between align-ite ms-center mt-4">
                  <h4 class="product-title mb-0">
                    <a href="/single-product">Seven Zero Five</a>
                  </h4>
                  <p class="m-0 fs-5 fw-normal">400.00</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 my-4">
              <div class="product-item">
                <div class="image-holder">
                  <img src="mainpage/images/item2.jpg" alt="Books" class="product-image img-fluid">
                </div>
                <div class="cart-concern">
                  <div class="cart-button d-flex justify-content-between align-items-center">
                    <a href="#" class="btn-wrap cart-link d-flex align-items-center text-capitalize fs-6 ">add to cart
                      <i class="icon icon-arrow-io pe-1"></i>
                    </a>
                    <a href="/single-product" class="view-btn">
                      <i class="icon icon-screen-full"></i>
                    </a>
                    <a href="#" class="wishlist-btn">
                      <i class="icon icon-heart"></i>
                    </a>
                  </div>
                </div>
                <div class="product-detail d-flex justify-content-between align-items-center mt-4">
                  <h4 class="product-title mb-0">
                    <a href="single-product.html">Seven Zero Five</a>
                  </h4>
                  <p class="/single-product">400.00</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 my-4">
              <div class="product-item">
                <div class="image-holder">
                  <img src="mainpage/images/item3.jpg" alt="Books" class="product-image img-fluid">
                </div>
                <div class="cart-concern">
                  <div class="cart-button d-flex justify-content-between align-items-center">
                    <a href="#" class="btn-wrap cart-link d-flex align-items-center text-capitalize fs-6 ">add to cart
                      <i class="icon icon-arrow-io pe-1"></i>
                    </a>
                    <a href="/single-product" class="view-btn">
                      <i class="icon icon-screen-full"></i>
                    </a>
                    <a href="#" class="wishlist-btn">
                      <i class="icon icon-heart"></i>
                    </a>
                  </div>
                </div>
                <div class="product-detail d-flex justify-content-between align-items-center mt-4">
                  <h4 class="product-title mb-0">
                    <a href="/single-product">Seven Zero Five</a>
                  </h4>
                  <p class="m-0 fs-5 fw-normal">400.00</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 my-4">
              <div class="z-1 position-absolute rounded-3 m-3 px-3 border border-dark-subtle">
                Sold
              </div>
              <div class="product-item">
                <div class="image-holder">
                  <img src="mainpage/images/item4.jpg" alt="Books" class="product-image img-fluid">
                </div>
                <div class="cart-concern">
                  <div class="cart-button d-flex justify-content-between align-items-center">
                    <a href="#" class="btn-wrap cart-link d-flex align-items-center text-capitalize fs-6 ">add to cart
                      <i class="icon icon-arrow-io pe-1"></i>
                    </a>
                    <a href="/single-productsingle-product.html" class="view-btn">
                      <i class="icon icon-screen-full"></i>
                    </a>
                    <a href="#" class="wishlist-btn">
                      <i class="icon icon-heart"></i>
                    </a>
                  </div>
                </div>
                <div class="product-detail d-flex justify-content-between align-items-center mt-4">
                  <h4 class="product-title mb-0">
                    <a href="/single-product">Seven Zero Five</a>
                  </h4>
                  <p class="m-0 fs-5 fw-normal">400.00</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 my-4">
              <div class="product-item">
                <div class="image-holder">
                  <img src="mainpage/images/item1.jpg" alt="Books" class="product-image img-fluid">
                </div>
                <div class="cart-concern">
                  <div class="cart-button d-flex justify-content-between align-items-center">
                    <a href="#" class="btn-wrap cart-link d-flex align-items-center text-capitalize fs-6 ">add to cart
                      <i class="icon icon-arrow-io pe-1"></i>
                    </a>
                    <a href="/single-product" class="view-btn">
                      <i class="icon icon-screen-full"></i>
                    </a>
                    <a href="#" class="wishlist-btn">
                      <i class="icon icon-heart"></i>
                    </a>
                  </div>
                </div>
                <div class="product-detail d-flex justify-content-between align-items-center mt-4">
                  <h4 class="product-title mb-0">
                    <a href="/single-product">Seven Zero Five</a>
                  </h4>
                  <p class="m-0 fs-5 fw-normal">400.00</p>
                </div>
              </div>
            </div> --}}
          </div>

          <nav class="navigation paging-navigation text-center mt-5" role="navigation">
            <div class="pagination loop-pagination d-flex justify-content-center align-items-center">
              <a href="#" class="pagination-arrow d-flex align-items-center mx-3">
                <iconify-icon icon="ic:baseline-keyboard-arrow-left" class="pagination-arrow fs-1"></iconify-icon>
              </a>
              <span aria-current="page" class="page-numbers mt-2 fs-3 mx-3 current">1</span>
              <a class="page-numbers mt-2 fs-3 mx-3" href="#">2</a>
              <a class="page-numbers mt-2 fs-3 mx-3" href="#">3</a>
              <a href="#" class="pagination-arrow d-flex align-items-center mx-3">
                <iconify-icon icon="ic:baseline-keyboard-arrow-right" class="pagination-arrow fs-1"></iconify-icon>
              </a>
            </div>
          </nav>

        </main>
        <aside class="col-md-3 mt-5">
          <div class="sidebar">
            <div class="widget-menu">
              <div class="widget-search-bar">
                <div class="search-bar border rounded-2 border-dark-subtle pe-3">
                  <form id="search-form" class="text-center d-flex align-items-center" action="" method="">
                    <input type="text" class="form-control border-0 bg-transparent" placeholder="Search for products" />
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                      <path fill="currentColor"
                        d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z" />
                    </svg>
                  </form>
                </div>
              </div>
            </div>
            <div class="widget-product-categories pt-5">
              <h4 class="widget-title">Categories</h4>
              <ul class="product-categories sidebar-list list-unstyled">
                <li class="cat-item">
                  <a href="#" class="nav-link fw-semibold">All</a>
                </li>
                <li class="cat-item">
                  <a href="#" class="nav-link fw-semibold">T-Shirt</a>
                </li>
                <li class="cat-item">
                  <a href="#" class="nav-link fw-semibold">Polo Shirt</a>
                </li>
                <li class="cat-item">
                  <a href="#" class="nav-link fw-semibold">Polo</a>
                </li>
                <li class="cat-item">
                  <a href="#" class="nav-link fw-semibold">Long Sleeve</a>
                </li>
                <li class="cat-item">
                  <a href="#" class="nav-link fw-semibold">Hoodies</a>
                </li>
                <li class="cat-item">
                  <a href="#" class="nav-link fw-semibold">Jacket</a>
                </li>
                <li class="cat-item">
                  <a href="#" class="nav-link fw-semibold">Short</a>
                </li>
                <li class="cat-item">
                  <a href="#" class="nav-link fw-semibold">Pants</a>
                </li>
              </ul>
            </div>
            <div class="widget-price-filter pt-3">
              <h4 class="widget-titlewidget-title">Filter By Price</h4>
              <ul class="product-tags sidebar-list list-unstyled">
                <li class="tags-item">
                  <a href="#" class="nav-link fw-semibold">Less than 100</a>
                </li>
                <li class="tags-item">
                  <a href="#" class="nav-link fw-semibold">100- 200</a>
                </li>
                <li class="tags-item">
                  <a href="#" class="nav-link fw-semibold">200- 300</a>
                </li>
                <li class="tags-item">
                  <a href="#" class="nav-link fw-semibold">300-400</a>
                </li>
                <li class="tags-item">
                  <a href="#" class="nav-link fw-semibold">400- 500</a>
                </li>
              </ul>
            </div>
          </div>
        </aside>
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