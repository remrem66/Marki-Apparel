@include('mainpage.header')
@include('mainpage.navbar')
  <section id="banner" style="background-image:url(mainpage/images/banner-img2.jpg);">
    <div class="container padding-medium-2">
      <div class="hero-content ">
        <h2 class="display-1 fw-bold mt-5 mb-0">FAQs</h2>
        <nav class="breadcrumb">
          <a class="breadcrumb-item nav-link" href="/">Home</a>
          <span class="breadcrumb-item active" aria-current="page">FAQs</span>
        </nav>
      </div>
    </div>
  </section>

  <section class="faqs-wrap">
    <div class="container py-5 my-5">
      <div class="row my-4">
        <main class="col-md-8 pe-md-5">
          <h2 class="mb-3">Welcome to Marki Apprel!</h2>
          <p>Marki Apparel prides itself on producing high-quality garments that are meticulously 
            crafted to ensure customer satisfaction. To minimize unnecessary waste and environmental impact,
             we've opted for a no-return policy. We believe in the longevity and durability of our products. However, 
            should you encounter any issues with your order, please reach out to our customer support in facebook page of <a href="https://www.facebook.com/profile.php?id=100088056825172" target="_blank">Marki Apparel</a> for assistance.</p>
          <div class="page-content my-5">

            <div class="accordion mb-5" id="accordionExample">

              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <h5> Do i need to open an account </h5>
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">
                  <div class="accordion-body secondary-font">
                  Creating an account is the first step to starting your shopping cart.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <h5> Can i get discounts ? </h5>
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree">
                  <div class="accordion-body secondary-font">
                  Be on the lookout for special event discounts and promotions.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <h5> Do i have to pay extra for delivery? </h5>
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour">
                  <div class="accordion-body secondary-font">
                      No. Because our shop offers free delivery.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingSeven">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    <h5> I haven’t received my delivery details </h5>
                  </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven">
                  <div class="accordion-body secondary-font">
                    You can view your order details in <a href="/orderstatus/Order Placed">Order Status</a>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingEight">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                    <h5> How is delivery charge determined? </h5>
                  </button>
                </h2>
                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight">
                  <div class="accordion-body secondary-font">
                  Our shop offers free delivery.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingNine">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                    <h5> Where is your shop located? </h5>
                  </button>
                </h2>
                <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine">
                  <div class="accordion-body secondary-font">
                  Zone 5 Maliwalo Tarlac City in front of Phoenix Gasoline Station.
                  </div>
                </div>
              </div>
            </div>

          </div>
        </main>
      </div>
    </div>
  </section>
  @include('mainpage.footer')