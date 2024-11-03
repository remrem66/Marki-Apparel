@include('mainpage.header')
@include('mainpage.navbar')
  <section id="banner" style="background-image:url({{asset('mainpage/images/banner-img2.jpg')}});">
    <div class="container padding-medium-2">
      <div class="hero-content ">
        <h2 class="display-1 fw-bold mt-5 mb-0">Cart</h2>
        <nav class="breadcrumb">
          <a class="breadcrumb-item nav-link" href="#">Home</a>
          <a class="breadcrumb-item nav-link" href="#">Pages</a>
          <span class="breadcrumb-item active" aria-current="page">User Profile</span>
        </nav>
      </div>
    </div>
  </section>

  <section class="contact-us">
    <div class="container py-5 my-5">
      <div class="row">
        <div class="contact-info col-lg-12 pb-3">
          <h2 class="text-dark">Profile Information</h2>
          <div class="page-content d-flex flex-wrap mt-5">
            <div class="col-lg-6 col-sm-12">
              <div class="content-box text-dark pe-4 mb-5">
                <h4 class="card-title">Full Name</h4>
                <div class="contact-address pt-3">
                  <p>730 Glenstone Ave 65802, Springfield, US</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="content-box text-dark pe-4 mb-5">
                  <h4 class="card-title">Primary Address</h4>
                  <div class="contact-address pt-3">
                    <p>730 Glenstone Ave 65802, Springfield, US</p>
                  </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="content-box text-dark pe-4 mb-5">
                  <h4 class="card-title">Email Address</h4>
                  <div class="contact-address pt-3">
                    <p>730 Glenstone Ave 65802, Springfield, US</p>
                  </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="content-box text-dark pe-4 mb-5">
                  <h4 class="card-title">Contact Number</h4>
                  <div class="contact-address pt-3">
                    <p>730 Glenstone Ave 65802, Springfield, US</p>
                  </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="content-box text-dark pe-4 mb-5">
                  <h4 class="card-title">Birthday</h4>
                  <div class="contact-address pt-3">
                    <p>730 Glenstone Ave 65802, Springfield, US</p>
                  </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="content-box text-dark pe-4 mb-5">
                  <h4 class="card-title">Gender</h4>
                  <div class="contact-address pt-3">
                    <p>730 Glenstone Ave 65802, Springfield, US</p>
                  </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="content-box text-dark pe-4 mb-5">
                  <h4 class="card-title">Date Joined</h4>
                  <div class="contact-address pt-3">
                    <p>730 Glenstone Ave 65802, Springfield, US</p>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @include('mainpage.footer')