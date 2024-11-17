@include('mainpage.header')
@include('mainpage.navbar')
  <section id="banner" style="background-image:url({{asset('mainpage/images/banner-img2.jpg')}});">
    <div class="container padding-medium-2">
      <div class="hero-content ">
        <h2 class="display-1 fw-bold mt-5 mb-0">User Profile</h2>
        <nav class="breadcrumb">
          <a class="breadcrumb-item nav-link" href="/">Home</a>
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
                  <p>{{$info->first_name}} {{$info->last_name}}</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="content-box text-dark pe-4 mb-5">
                  <h4 class="card-title">Primary Address</h4>
                  <div class="contact-address pt-3">
                    <p>{{$fullAddress}}</p>
                  </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="content-box text-dark pe-4 mb-5">
                  <h4 class="card-title">Email Address</h4>
                  <div class="contact-address pt-3">
                    <p>{{$info->email_address}}</p>
                  </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="content-box text-dark pe-4 mb-5">
                  <h4 class="card-title">Contact Number</h4>
                  <div class="contact-address pt-3">
                    <p>{{$info->contact_number}}</p>
                  </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="content-box text-dark pe-4 mb-5">
                  <h4 class="card-title">Birthday</h4>
                  <div class="contact-address pt-3">
                    <p>{{date("F j, Y",strtotime($info->birthday))}}</p>
                  </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="content-box text-dark pe-4 mb-5">
                  <h4 class="card-title">Gender</h4>
                  <div class="contact-address pt-3">
                    <p>{{$info->gender}}</p>
                  </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="content-box text-dark pe-4 mb-5">
                  <h4 class="card-title">Date Joined</h4>
                  <div class="contact-address pt-3">
                    <p>{{date("F j, Y",strtotime($info->date_created))}}</p>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-sm-12">
            <a href="customerprofileedit/{{$info->user_id}}" class="btn btn-dark btn-lg rounded-1">Edit Profile</a>
        </div>
      </div>
    </div>
  </section>

  @include('mainpage.footer')