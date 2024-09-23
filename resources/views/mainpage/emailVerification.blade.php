@include('mainpage.header')
@include('mainpage.navbar')
  <section id="banner" style="background-image:url(mainpage/images/banner-img2.jpg);">
    <div class="container padding-medium-2">
      <div class="hero-content ">
        <h2 class="display-1 fw-bold mt-5 mb-0">Email Verification</h2>
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
                aria-controls="nav-sign-in" aria-selected="true">Email Verification
              </button>
            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade active show" id="nav-sign-in" role="tabpanel" aria-labelledby="nav-sign-in-tab">
              <div class="col-lg-8 offset-lg-2 mt-5">


                {{-- Login --}}
                {{-- <p class="mb-0">Email Verification</p>
                <hr class="my-1"> --}}

                <form id="form1" class="form-group flex-wrap" method="POST" action="/verifyemail">
                    @CSRF
                  <div class="form-input col-lg-12 my-4">
                    <input type="text" id="exampleInputEmail1" name="code" placeholder="Enter the code sent in your email address" class="form-control mb-3 p-4">
                    <input type="hidden" id="user_id" name="user_id" value="{{$userID}}">
                    <div class="d-grid my-3">
                      <button type="submit" class="btn btn-dark btn-lg rounded-1">Verify</a>
                    </div>

                  </div>
                </form>
                @if ($errors->has('notif'))
                  <div class="alert alert-danger alert-dismissible" role="alert">
                      <strong>{{ $errors->first('notif') }}</strong>
                  </div>
                @endif
                <div class="alert alert-dismissible" role="alert">
                    <div id="codenotreceived"><strong>Didn't received code? Click <a href="#" onclick="return false;" id="resend">here</a> to resend.</strong></div>
                    <div id="codecountdown"></div>
                </div>
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