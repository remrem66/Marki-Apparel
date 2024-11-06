@include('mainpage.header')
@include('mainpage.navbar')
  <section id="banner" style="background-image:url({{asset('mainpage/images/banner-img2.jpg')}});">
    <div class="container padding-medium-2">
      <div class="hero-content ">
        <h2 class="display-1 fw-bold mt-5 mb-0">About Us</h2>
        <nav class="breadcrumb">
          <a class="breadcrumb-item nav-link" href="/">Home</a>
          
          <span class="breadcrumb-item active" aria-current="page">About Us</span>
        </nav>
      </div>
    </div>
  </section>

  
  <div class="my-5 py-5">
    <div class="container">
      <div class="row ">
        <div class="col-md-6 my-4 pe-5">
          <center><h2 class="">Mission</h2></center>
          <p>Marki Apparel  is committed to empowering individuals to express their unique style 
            through high-quality, trendsetting apparel. We strive to curate a diverse collection of clothing 
            that caters to various tastes and occasions, ensuring that every customer finds their perfect fit. 
            By fostering a community of fashion-forward individuals, we aim to inspire confidence and self-expression. 
            We are dedicated to providing exceptional customer service,
            ensuring a seamless shopping experience that exceeds expectations.</p>
            
        </div>
        <div class="col-md-6 my-4 ">
         <center><h2 class="">Vision</h2></center> 
          <p>Marki Apparel envisions a future where we are recognized as
             the premier destination for stylish and affordable fashion. We aspire to be a 
             global brand that celebrates individuality and diversity, offering innovative designs 
             that resonate with people of all ages and backgrounds. By staying ahead of the latest 
             trends and continuously evolving our offerings, we aim to redefine the fashion landscape. 
             We strive to create a sustainable and ethical business model, prioritizing eco-friendly 
             practices and fair labor standards. Ultimately, we aspire to be more than just a clothing store; 
             we want to be a catalyst for positive change, 
            empowering people to embrace their authentic selves through fashion..</p>

        </div>
      </div>
    </div>
  </div>

  <div class="my-5 pb-5">
    <div class="container">
      <div class="row ">
        <div class="col-md-6">
          <h2 class="display-3 fw-bold">You can buy best products from Marki Apparel. </h2>
        </div>
      </div>
    </div>
  </div>
  @include('mainpage.footer')