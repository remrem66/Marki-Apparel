@include('mainpage.header')
@include('mainpage.navbar')
  <section id="banner" style="background-image:url(mainpage/images/banner-img2.jpg);">
    <div class="container padding-medium-2">
      <div class="hero-content ">
        <h2 class="display-1 fw-bold mt-5 mb-0">Log in/Sign Up</h2>
        <nav class="breadcrumb">
          <a class="breadcrumb-item nav-link" href="/">Home</a>
          <span class="breadcrumb-item active" aria-current="page">Account</span>
        </nav>
      </div>
    </div>
  </section>

  <section class="login-tabs">
    <div class="container my-5 py-5">
      <div class="row">
        <div class="tabs-listing">
          <nav>
            <div class="nav nav-tabs d-flex justify-content-center border-dark-subtle mb-3" id="nav-tab" role="tablist">
              <button class="nav-link account-tab mx-3 fs-4 border-bottom border-dark-subtle border-0 text-capitalize fw-semibold active" id="nav-sign-in-tab" data-bs-toggle="tab" data-bs-target="#nav-sign-in" type="button" role="tab"
                aria-controls="nav-sign-in" aria-selected="true">Log In
              </button>
              <button
                class="nav-link account-tab mx-3 fs-4 border-bottom border-dark-subtle border-0 text-capitalize fw-semibold"
                id="nav-register-tab" data-bs-toggle="tab" data-bs-target="#nav-register" type="button" role="tab"
                aria-controls="nav-register" aria-selected="false">Sign Up</button>
            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade active show" id="nav-sign-in" role="tabpanel" aria-labelledby="nav-sign-in-tab">
              <div class="col-lg-8 offset-lg-2 mt-5">


                {{-- Login --}}
                <p class="mb-0">Log-In</p>
                <hr class="my-1">

                <form id="form1" class="form-group flex-wrap" method="POST" action="/login">
                    @CSRF
                  <div class="form-input col-lg-12 my-4">

                    <input type="text" id="exampleInputEmail1" name="email" placeholder="Enter email address" class="form-control mb-3 p-4">
                    <input type="password" id="inputPassword1" placeholder="Enter password" class="form-control mb-3 p-4" aria-describedby="passwordHelpBlock">

                    {{-- <label class="py-3 d-flex flex-wrap justify-content-between">
                      <div>
                        <input type="checkbox" required="" class="d-inline">
                        <span class="label-body ">Remember Me</span>
                      </div>

                      <div id="passwordHelpBlock" class="form-text ">
                        <a href="#" class="text-primary  fw-bold"> Forgot Password?</a>
                      </div>
                    </label> --}}
                    <div class="d-grid my-3">
                      <button type="submit" class="btn btn-dark btn-lg rounded-1">Log In</a>
                    </div>

                  </div>
                </form>

              </div>

            </div>
            <div class="tab-pane fade" id="nav-register" role="tabpanel" aria-labelledby="nav-register-tab">
              <div class="col-lg-8 offset-lg-2 mt-5">

                {{-- Sign-Up --}}
                <p class="mb-0">Sign-Up</p>
                <hr class="my-1">

                <form id="form1" class="form-group flex-wrap " method="POST" action="/registeruser" enctype="multipart/form-data">
                    @CSRF
                  <div class="form-input col-lg-12 my-4">
                    <input type="text" id="exampleInputName" name="first_name" placeholder="First Name" class="form-control mb-3 p-4">
                    <input type="text" id="exampleInputName" name="last_name" placeholder="Last Name" class="form-control mb-3 p-4">
                      <select type="text" id="exampleInputName" name="gender" class="form-control mb-3 p-4">
                        <option selected disabled>Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                      </select>
                    <input type="text" id="exampleInputEmail1" name="email_address" placeholder="Email address" class="form-control mb-3 p-4">
                    <input type="text" id="exampleInputEmail1" name="address" placeholder="Address" class="form-control mb-3 p-4">

                    <input type="text" id="exampleInputName" name="contact_number" placeholder="Contact Number" class="form-control mb-3 p-4">
                    <input placeholder="Birthday" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="form-control mb-3 p-4" name="birthday">
                    <input type="password" id="inputPassword1" placeholder="Set your password" class="form-control mb-3 p-4" aria-describedby="passwordHelpBlock" name="password">
                    <input type="password" id="inputPassword2" placeholder="Retype your password" class="form-control mb-3 p-4" aria-describedby="passwordHelpBlock" name="password_confirmation">
                    <input type="file" id="exampleInputEmail1" name="profile_picture" placeholder="Profile Picture" class="form-control mb-3 p-4" accept="image/png, image/jpeg">

                    {{-- <label class="py-3 d-flex flex-wrap justify-content-between">
                      <div>
                        <input type="checkbox" required="" class="d-inline">
                        <span class="label-body ">Remember Me</span>
                      </div>

                      <div id="passwordHelpBlock" class="form-text ">
                        <a href="#" class="text-primary  fw-bold"> Forgot Password?</a>
                      </div>
                    </label> --}}
                    <div class="d-grid my-3">
                      <button type="submit" class="btn btn-dark btn-lg rounded-1">Sign Up</button>
                    </div>

                  </div>
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