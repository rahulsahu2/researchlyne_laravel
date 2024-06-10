  <!-- ================> Page header start here <================== -->
  <section class="page-header bg--cover" style="background-image:url(assets/images/header/1.png)">
    <div class="container">
      <div class="page-header__content aos-init aos-animate" data-aos="fade-right" data-aos-duration="1000">
        <h2>{{ $title }}</h2>
        <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item "><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
          </ol>
        </nav>
      </div>
      <div class="page-header__shape">
        <span class="page-header__shape-item page-header__shape-item--1"><img src="assets/images/header/2.png" alt="shape-icon"></span>
      </div>
    </div>
  </section>
  <!-- ================> Page header end here <================== -->
