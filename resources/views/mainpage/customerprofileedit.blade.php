@include('mainpage.header')
@include('mainpage.navbar')
  <section id="banner" style="background-image:url({{asset('mainpage/images/banner-img2.jpg')}});">
    <div class="container padding-medium-2">
      <div class="hero-content ">
        <h2 class="display-1 fw-bold mt-5 mb-0">Edit Profile</h2>
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
              <button
                class="nav-link account-tab mx-3 fs-4 border-bottom border-dark-subtle border-0 text-capitalize fw-semibold"
                id="nav-register-tab" data-bs-toggle="tab" data-bs-target="#nav-register" type="button" role="tab"
                aria-controls="nav-register" aria-selected="true">Edit User Profile</button>
            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade active show" id="nav-register" role="tabpanel" aria-labelledby="nav-register-tab">
              <div class="col-lg-8 offset-lg-2 mt-5">

                <form id="form1" class="form-group flex-wrap " method="POST" action="/editcustomerprofile" enctype="multipart/form-data">
                    @CSRF
                  <div class="form-input col-lg-12 my-4">
                    <label for="first_name">First Name</label>
                    <input type="text" id="first_name" name="first_name" placeholder="First Name" class="form-control mb-3 p-4" value="{{$info->first_name}}">
                    <label for="last_name">Last Name</label>
                    <input type="hidden" name="user_id" value="{{$info->user_id}}">
                    <input type="text" id="last_name" name="last_name" placeholder="Last Name" class="form-control mb-3 p-4" value="{{$info->last_name}}">
                    <label for="gender">Gender</label>
                      <select type="text" id="gender" name="gender" class="form-control mb-3 p-4">
                        <option @if($info->gender == "Male") selected @endif>Male</option>
                        <option @if($info->gender == "Female") selected @endif>Female</option>
                        <option @if($info->gender == "Other") selected @endif>Other</option>
                      </select>
                    <label for="province">Province</label>
                    <select class="form-control mb-3 p-4" name="province" id="province">
                        @foreach($provinces as $province)
                            <option value="{{$province->province_code}}" @if($province->province_code == $info->province) selected @endif>{{$province->province_name}}</option>
                        @endforeach
                    </select>
                    <label for="municipality">Municipality</label>
                    <select class="form-control mb-3 p-4" name="municipality" id="municipality">
                        @foreach($municipalities as $municipality)
                            <option value="{{$municipality->municipality_code}}" @if($municipality->municipality_code == $info->municipality) selected @endif>{{$municipality->municipality_name}}</option>
                        @endforeach
                    </select>
                    <label for="barangay">Barangay</label>
                    <select class="form-control mb-3 p-4" name="barangay" id="barangay">
                        @foreach($barangays as $barangay)
                            <option value="{{$barangay->barangay_id}}" @if($barangay->barangay_id == $info->barangay) selected @endif>{{$barangay->barangay_name}}</option>
                        @endforeach
                    </select>
                    <label for="address_information">Address Information</label>
                    <input type="text" id="address_information" name="address_information" placeholder="Other Address Information" class="form-control mb-3 p-4" value="{{$info->address_information}}">
                    <label for="contact_number">Contact Number</label>
                    <input type="text" id="contact_number" name="contact_number" placeholder="Contact Number" class="form-control mb-3 p-4" value="{{$info->contact_number}}">
                    <label for="birthday">Birthday</label>
                    <input placeholder="Birthday" id="birthday" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="form-control mb-3 p-4" name="birthday" value="{{$info->birthday}}">
                    <div class="d-grid my-3">
                      <button type="submit" class="btn btn-dark btn-lg rounded-1">Submit Changes</button>
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
@include('mainpage.footer')