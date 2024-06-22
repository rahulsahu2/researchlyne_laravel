@extends('layouts.app')
@section('content')
<!-- ===============>> Banner section start here <<================= -->
<section class="banner banner--style1">
    <div class="banner__bg">
        <div class="banner__bg-element">
        <img src="assets/images/banner/home1/bg.png" alt="section-bg-element" class="dark d-none d-lg-block">
        <span class="bg-color d-lg-none"></span>
        </div>
    </div>
    <div class="container">
        <div class="banner__wrapper">
        <div class="row gy-5 gx-4">
            <div class="col-lg-6 col-md-7">
            <div class="banner__content" data-aos="fade-right" data-aos-duration="1000">
                <div class="banner__content-coin">
                <img src="assets/images/banner/home1/3.png" alt="coin icon">
                </div>
                <h1 class="banner__content-heading">WELCOME TO <span>RESEARCHLYNE.COM</span></h1> 
                <p class="banner__content-moto">Recommendation of 2 Quality Stocks Weekly with Analysis Reports.
                </p>
                <div class="banner__btn-group btn-group">
                <a href="#" class="trk-btn trk-btn--primary trk-btn--arrow">
                    About Us<span><i class="fa-solid fa-arrow-right"></i></span> 
                </a>
                <a href="#" class="trk-btn trk-btn--primary trk-btn--arrow">
                    Subscribe <span><i class="fa-solid fa-arrow-right"></i></span>
                </a>
                </div>
                {{-- <div class="banner__content-social">
                <p>Follow Us</p>
                <ul class="social">
                    <li class="social__item">
                    <a href="#" class="social__link social__link--style1 active"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="social__item">
                    <a href="#" class="social__link social__link--style1"><i class="fab fa-linkedin-in"></i></a>
                    </li>
                    <li class="social__item">
                    <a href="#" class="social__link social__link--style1"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li class="social__item">
                    <a href="#" class="social__link social__link--style1"><i class="fab fa-youtube"></i></a>
                    </li>
                    <li class="social__item">
                    <a href="signin.html" class="social__link social__link--style1"><i class="fab fa-twitter"></i></a>
                    </li>
                </ul>
                </div> --}}
            </div>
            </div>
            <div class="col-lg-6 col-md-5">
            <div class="banner__thumb" data-aos="fade-left" data-aos-duration="1000">
              <div class="about__thumb-image floating-content ">
                <img src="assets/images/banner/home1/1.png" alt="banner-thumb" class="dark">
                <div class="floating-content__top-left pricecontainer" data-aos="fade-right" data-aos-duration="1000">
                  @for ($i = 0; $i < 1; $i++)
                  <div class="floating-content__item">
                    <h3> <span class="purecounter" data-purecounter-start="0" data-purecounter-end="45">45</span>% Rise
                    </h3>
                    <p>HCL Tech NIFTY {{$i}}</p>
                    <span>Within {{$i}} weeks</span>
                  </div>
                  @endfor
                </div>
                <div class="floating-content__top-right pricecontainer" data-aos="fade-left" data-aos-duration="1000">
                  @for ($i = 0; $i < 1; $i++)
                  <div class="floating-content__item">
                    <h3> <span class="purecounter" data-purecounter-start="0" data-purecounter-end="45">45</span>% Rise
                    </h3>
                    <p>TCS NIFTY {{$i}}</p>
                    <span>Within {{$i}} weeks</span>
                  </div>
                  @endfor
                </div>                
              </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="banner__shape">
        <span class="banner__shape-item banner__shape-item--1"><img src="assets/images/banner/home1/4.png"
            alt="shape icon"></span>
    </div>

</section>
<!-- ===============>> Banner section end here <<================= -->

  <!-- ===============>> partner section start here <<================= -->
  <div class="partner partner--gradient">
    <div class="container">
      <div class="partner__wrapper">
        <div class="partner__slider swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="partner__item">
                <div class="partner__item-inner">
                    <h4 class="dark">
                        <span>Get Jaw Dropping Discounts Upto 55% Off on Subscriptions. Offers Ending Soon, Hurry Up!</span>
                    </h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ===============>> partner section end here <<================= -->

 @include('frontend.components.about-us', ['data' => $data])

<!-- ===============>> Recent Performer section start here <<================= -->
  <section class="blog padding-top padding-bottom">
    <div class="container">
      <div class="section-header d-md-flex align-items-center justify-content-between">
        <div class="section-header__content">
          <h2 class="mb-10"><span>Recent</span> Performers</h2>
          <p class="mb-0"></p>
        </div>
        <div class="section-header__action">
          <div class="swiper-nav swiper-nav--style1">
            <button class="swiper-nav__btn blog__slider-prev"><i class="fa-solid fa-angle-left"></i></button>
            <button class="swiper-nav__btn blog__slider-next active"><i class="fa-solid fa-angle-right"></i></button>
          </div>
        </div>
      </div>
      <div class="blog__wrapper" data-aos="fade-up" data-aos-duration="1000">
        <div class="blog__slider swiper">
          <div class="swiper-wrapper">
            @for ($i = 0; $i < 3; $i++)
            <div class="swiper-slide">
                <div class="blog__item blog__item--style2">
                  <div class="blog__item-inner">
                    <div class="blog__content">
                      <div class="blog__meta">
                        <span class="blog__meta-tag blog__meta-tag--style1"><h4><i class="fa fa-arrow-up"></i> +42.58%</h4></span>
                      </div>
                      <h5 class="10"> <a href="#">Steel Authority of India Ltd.</a> </h5>
                      <table class="table table-bordered">
                          <thead>
                              <tr>
                                  <th scope="col">Description</th>
                                  <th scope="col">Date</th>
                                  <th scope="col">Price</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td class="custom-border">Rec. Price</td>
                                  <td class="custom-border no-border-right">14-Feb-2024</td>
                                  <td class="custom-border">122.95</td>
                              </tr>
                              <tr>
                                  <td class="custom-border">High Price</td>
                                  <td class="custom-border no-border-right">22-May-2024</td>
                                  <td class="custom-border">175.35</td>
                              </tr>
                          </tbody>
                      </table>
                    </div>
                    <div>
                        <h5 class="10 text-center mb-0">WITHIN 13 WEEKS</h5>
                      </div>
                  </div>
                </div>
              </div>
            @endfor
          </div>
        </div>
      </div>
    </div>

    <div class="blog__shape">
      <span class="blog__shape-item blog__shape-item--1"> <span></span> </span>
    </div>
  </section>
<!-- ===============>> Recent Performer section start here <<================= -->

   <!-- ===============>> beyond the targets section start here <<================= -->
   <section class="testimonial padding-top padding-bottom-style2 bg-color">
    <div class="container">
      <div class="section-header d-md-flex align-items-center justify-content-between">
        <div class="section-header__content">
          <h2 class="mb-10">Beyond The <span> Targets</span></h2>
          <p class="mb-0"></p>
        </div>
        <div class="section-header__action">
          <div class="swiper-nav">
            <button class="swiper-nav__btn testimonial__slider-prev"><i class="fa-solid fa-angle-left"></i></button>
            <button class="swiper-nav__btn testimonial__slider-next active"><i
                class="fa-solid fa-angle-right"></i></button>
          </div>
        </div>
      </div>
      <div class="testimonial__wrapper" data-aos="fade-up" data-aos-duration="1000">
        <div class="testimonial__slider swiper">
          <div class="swiper-wrapper">
            @for ($i = 0; $i < 3; $i++)
            <div class="swiper-slide">
              <div class="testimonial__item testimonial__item--style1">
                <div class="testimonial__item-inner">
                  <div class="testimonial__item-content">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Description</th>
                                <th scope="col">Date</th>
                                <th scope="col">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="custom-border">Rec. Price</td>
                                <td class="custom-border no-border-right">14-Feb-2024</td>
                                <td class="custom-border">122.95</td>
                            </tr>
                            <tr>
                                <td class="custom-border">High Price</td>
                                <td class="custom-border no-border-right">22-May-2024</td>
                                <td class="custom-border">175.35</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="testimonial__footer">
                      <div class="testimonial__author">
                        <div class="testimonial__author-designation">
                          <h6>+112.52% WITHIN 13 WEEKS</h6>
                          <h5>Railtel Corporation of India Ltd.</h5>
                        </div>
                      </div>
                      <div class="testimonial__quote">
                        <span><i class="fa-solid fa-quote-right"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>    
            @endfor
            
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ===============>> beyond the targets section start here <<================= -->

@include('frontend.components.benefits-section', ['data' => $data])
    
@include('frontend.components.best-choice', ['data' => $data])

@include('frontend.components.subscriptions-section', ['data' => $data])

@include('frontend.components.faqs-section', ['data' => null])

@include('frontend.components.contact-section', ['data' => [
    'title' => 'Contact Us',
    'contact'=> null,
    'content' => "yes"]])
@endsection