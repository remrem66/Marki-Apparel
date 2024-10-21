@include('mainpage.header')
@include('mainpage.navbar')

  <section id="banner" style="background-image:url(mainpage/images/banner-img2.jpg);">
    <div class="container padding-medium-2">
      <div class="hero-content ">
        <h2 class="display-1 fw-bold mt-5 mb-0">Payment Success</h2>
      </div>
    </div>
  </section>

  <section id="checkout">
    <div class="container py-5 my-5">
        <center><h1>Thank you for your purchase!</h1></center>
        <br>
        <center><a href="/" class="btn btn-dark btn-md rounded-3">Click here to continue shopping.</a></center>

    </div>
  </section>

  @include('mainpage.footer')