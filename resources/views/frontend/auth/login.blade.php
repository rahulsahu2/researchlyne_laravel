<div class="account__content account__content--style1">

    <!-- account tittle -->
    <div class="account__header">
      <h2>Welcome back!</h2>
    </div>

    <!-- account form -->
    <form action="#" class="account__form needs-validation" novalidate="">
      <div class="row g-4">
        <div class="col-12">
          <div>
            <label for="account-email" class="form-label">Email</label>
            <input type="email" class="form-control" id="account-email" placeholder="Enter your email" required="">
          </div>
        </div>
        <div class="col-12">
          <div class="form-pass">
            <label for="account-pass" class="form-label">Password</label>
            <input type="password" class="form-control showhide-pass" id="account-pass" placeholder="Password" required="">

            <button type="button" id="btnToggle" class="form-pass__toggle"><svg id="eyeIcon" class="svg-inline--fa fa-eye" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="eye" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"></path></svg><!-- <i id="eyeIcon" class="fa fa-eye"></i> Font Awesome fontawesome.com --></button>
          </div>
        </div>
      </div>

      <div class="account__check">

        <div class="account__check-remember">
          <input type="checkbox" class="form-check-input" value="" id="terms-check">
          <label for="terms-check" class="form-check-label">
            Remember me
          </label>
        </div>
        <div class="account__check-forgot">
          <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#forgot">Forgot Password?</a>
        </div>
      </div>

      <button type="submit" class="trk-btn trk-btn--border trk-btn--primary d-block mt-4">Sign in</button>
    </form>
  </div>