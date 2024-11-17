@include('mainpage.header')
@include('mainpage.navbar')
  <section id="banner" style="background-image:url({{asset('mainpage/images/banner-img2.jpg')}});">
    <div class="container padding-medium-2">
      <div class="hero-content ">
        <h2 class="display-1 fw-bold mt-5 mb-0">Shop</h2>
        <nav class="breadcrumb">
          <a class="breadcrumb-item nav-link" href="/">Home</a>
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
              <!-- <p class="m-0">Showing 1–9 of 55 results</p> -->
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
            @foreach($paginator as $product)
            <div class="col-md-6 col-lg-4 my-4">
              <div class="product-item">
                <div class="image-holder" style="width: 100%; height: 100%;">
                  <a href="/single-product/{{$product->product_name}}:{{$product->category}}:{{$product->color}}:{{$product->size}}">
                    <img src="{{asset('mainpage/images/'.$product->picture1)}}" alt="Books" class="product-image img-fluid">
                  </a>
                </div>
                <div class="product-detail d-flex justify-content-between align-items-center mt-4">
                  <h4 class="product-title mb-0">
                    <a href="/single-product/{{$product->product_name}}:{{$product->category}}:{{$product->color}}:{{$product->size}}">{{$product->product_name}}</a>
                  </h4>
                  <p class="m-0 fs-5 fw-normal">₱{{$product->price}}</p>
                </div>
              </div>
            </div>
            @endforeach
          </div>

          {{ $paginator->links('pagination::custom-pagination') }}
          
          {{-- <nav class="navigation paging-navigation text-center mt-5" role="navigation">
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
          </nav> --}}

        </main>
        <aside class="col-md-3 mt-5">
          <div class="sidebar">
            <div class="widget-product-categories pt-5">
              <h4 class="widget-title">Categories</h4>
              <ul class="product-categories sidebar-list list-unstyled">
                <li class="cat-item">
                  <a href="/shop/T-shirt" class="nav-link fw-semibold">T-Shirt</a>
                </li>
                <li class="cat-item">
                  <a href="/shop/Polo Shirt" class="nav-link fw-semibold">Polo Shirt</a>
                </li>
                <li class="cat-item">
                  <a href="/shop/Polo" class="nav-link fw-semibold">Polo</a>
                </li>
                <li class="cat-item">
                  <a href="/shop/Long Sleeve" class="nav-link fw-semibold">Long Sleeve</a>
                </li>
                <li class="cat-item">
                  <a href="/shop/Hoodie" class="nav-link fw-semibold">Hoodie</a>
                </li>
                <li class="cat-item">
                  <a href="/shop/Jacket" class="nav-link fw-semibold">Jacket</a>
                </li>
                <li class="cat-item">
                  <a href="/shop/Shorts" class="nav-link fw-semibold">Shorts</a>
                </li>
                <li class="cat-item">
                  <a href="/shop/Pants" class="nav-link fw-semibold">Pants</a>
                </li>
              </ul>
            </div>
            
          </div>
        </aside>
      </div>
    </div>
  </section>
@include('mainpage.footer')