  
  <!-- ===============>> Header section start here <<================= -->
  <div class="container" id="topbar">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 p-3 header-left">
        <a class="me-3" href="tel:7973835409"><i class="fa fa-phone-alt me-2"></i>7973835409</a>
        <a class="me-3" href="mailto:info@researchlyne.com"><i class="fa fa-envelope me-2"></i>info@researchlyne.com</a>
        <a href="javascript:void(0)" ><i class="fa fa-clock me-2"></i>Mon-Sat:10:00 AM-06:00 PM</a>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 p-3 header-right">
        <a href="#" class="me-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fas fa-user-lock pe-2"></i>Log&nbsp;in</a>
        <a href="#"><i class="fas fa-user-shield pe-2"></i>Subscription</a>
      </div>
    </div>
  </div>
  <header id="main-header" class="header-section bg-color-3 header-section--style2">
    <div class="header-bottom">
      <div class="container">
        <div class="header-wrapper">
          <div class="logo">
            <a href="{{ url('/') }}">
              <img class="dark" src="{{ asset('assets/images/logo/logo.png')}}" alt="logo">
            </a>
          </div>
          <div class="menu-area">
            <ul class="menu menu--style1">
              <li class="megamenu">
                <a href="{{ url('/') }}">Home </a>
              </li>
              <li>
                <a href="{{ route('about')}}">About Us</a>
              </li>
              <li>
                <a href="{{ route('subscriptions')}}">Subscriptions</a>
              </li>
              <li>
                <a href="{{ route('why-researchlyne')}}">Why Researchlyne.com</a>
              </li>
              <li>
                <a href="{{ route('faq')}}">Faq's</a>
              </li>
              <li>
                <a href="{{ route('contact')}}">Contact Us</a>
              </li>
            </ul>

          </div>
          <div class="header-action">
            <div class="menu-area">
              {{-- <div class="header-btn">
                <a href="signup.html" class="trk-btn trk-btn--border trk-btn--primary">
                  <span>Join Now</span>
                </a>
              </div> --}}

              <!-- toggle icons -->
              <div class="header-bar d-lg-none header-bar--style1">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- ===============>> Header section end here <<================= -->