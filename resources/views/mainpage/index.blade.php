@include('mainpage.header')
@include('mainpage.navbar')
  <section id="hero" style="background-image:url(mainpage/images/lastnato.jpg);">
    <div class="container padding-large">
      <div class="row">
        <div class="col-md-10 col-lg-5 offset-md-0 text-center bg-black p-5">
          <h2 class="display-1 banner-text text-uppercase text-white mt-3">Street Wears</h2>
          <p class="text-uppercase text-white mb-4">High quality cool tshirts for street fashion</p>
          <a href="/shop/T-shirt" class="btn btn-outline-light btn-wrap">
            Start Shopping
          </a>
        </div>
      </div>
    </div>
  </section>

  <section id="service" class="padding-medium">
    <div class="container">
      <div class="row g-md-5 pt-4">
        <div class="col-md-3 my-3">
          <div class="card">
            <div>
              <iconify-icon class="service-icon text-primary fs-2" icon="ci:shopping-cart-02"></iconify-icon>
            </div>
            <h4 class="py-2 m-0">Free Delivery</h3>
              <div class="card-text">
                
              </div>
          </div>
        </div>
        <div class="col-md-3 my-3">
          <div class="card">
            <div>
              <iconify-icon class="service-icon text-primary fs-2" icon="tdesign:secured"></iconify-icon>
            </div>
            <h4 class="py-2 m-0">100% secure payment Powered by PayMongo</h3>
              <div class="card-text">
                
              </div>
          </div>
        </div>
        <div class="col-md-3 my-3">
          <div class="card">
            <div>
              <iconify-icon class="service-icon text-primary fs-2" icon="la:award"></iconify-icon>
            </div>
            <h4 class="py-2 m-0">Quality guarantee</h3>
              <div class="card-text">
                
              </div>
          </div>
        </div>
        <div class="col-md-3 my-3">
          <div class="card">
            <div>
              <iconify-icon class="service-icon text-primary fs-2" icon="solar:dollar-outline"></iconify-icon>
            </div>
            <h4 class="py-2 m-0">Daily Offer</h3>
              <div class="card-text">
                
              </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section id="category" class="padding-medium">
    <div class="container-fluid">
      <div class="row px-md-5">

        <div class="col-md-4 position-relative">
          <div class="z-1 position-absolute bottom-0 start-0 m-3 mg-lg-5 ps-4 text-white">
            <h5 class="text-light text-uppercase">Printed T-Shirts</h5>
          </div>
          <div class="image-holder zoom-effect">
            <a href="single-post.html">
              <img src="mainpage/images/category1.jpg" alt="img" class="post-image img-fluid">
            </a>
          </div>
        </div>
        <div class="col-md-4 position-relative ">
          <div class="z-1 position-absolute bottom-0 start-0 m-3 mg-lg-5 ps-4 text-white">
            <h5 class="text-light text-uppercase">Mono T-Shirts</h5>
          </div>
          <div class="image-holder zoom-effect">
            <a href="single-post.html">
              <img src="mainpage/images/category3.jpg" alt="img" class="post-image img-fluid">
            </a>
          </div>
        </div>
        <div class="col-md-4 position-relative">
          <div class="z-1 position-absolute bottom-0 start-0 m-3 mg-lg-5 ps-4 text-white">
            <h5 class="text-light text-uppercase">Graphic Hoodies</h5>
          </div>
          <div class="image-holder zoom-effect">
            <a href="single-post.html">
              <img src="mainpage/images/category2.jpg" alt="img" class="post-image img-fluid">
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>
@include('mainpage.footer')