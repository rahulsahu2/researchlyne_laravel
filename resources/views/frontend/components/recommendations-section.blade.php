<section class="service padding-top padding-bottom">
    <div class="section-header section-header--max50">
      <h2 class="mb-10 mt-minus-5"><span>RECOMMENDATIONS</span></h2>
      <p>DATED :12-06-2024</p>
      <h4>Markets are highly volatile, Please be patient with your holdings.</h4>
    </div>
    <div class="container">
      <div class="service__wrapper">
        <div class="row g-4 align-items-center">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="service__item service__item--style1 aos-init aos-animate" data-aos="fade-up" data-aos-duration="800">
              <div class="service__item-inner">
                <div class="row">
                <div class="col-sm-6 col-md-3 col-lg-3">
                  <div class="service__item-thumb mb-30">
                    <h1 class="dark">WH</h1>
                    {{-- <img class="dark" src="https://thetork.com/demos/html/bitrader/assets/images/service/1-dark.png" alt="service-icon"> --}}
                  </div>
                  <div class="service__item-content">
                    <h5> Recommendation <span class="stretched-link" href="service-details.html">BUY</span> </h5> 
                  </div>
                </div>
                <div class="col-sm-6 col-md-9 col-lg-9">
                  <div class="blog-details__content">
                    <h3>Wonderla Holidays Ltd</h3>
                    <div class="blog-details__meta">
                      <ul>
                        <li><img src="{{ asset('assets/images/blog/icon/1.png')}}" alt="user-icon">
                          WONDERLA</li>
                        <li><img src="{{ asset('assets/images/blog/icon/2.png')}}" alt="date-icon">
                          538268</li>
                        <li>
                          <a href="#"><img src="{{ asset('assets/images/blog/icon/3.png')}}" alt="comment-icon">
                            BUY</a>
                        </li>
                      </ul>
                    </div>
                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur. At sed amet viverra etiam elit vivamus ultrices pharetra. Diam augue in dictumst nisl varius libero morbi dolor.</p>
                  </div>
                  <div class="banner__btn-group btn-group">
                    <a href="javascript:void(0)" class="trk-btn trk-btn--outline22">
                      <span>Current</span><b>960 Rs</b>
                    </a>
                    <a href="javascript:void(0)" class="trk-btn trk-btn--outline22">
                      <span>Target</span> <b>1200 Rs</b>
                    </a>
                  </div>
                </div>
                </div>
              </div>
              <div class="text-center">
                <a href="javascript:void(0);" id="toggle-previous-recommendations" class="trk-btn trk-btn--border trk-btn--primary mt-25">View Previous Recommendations </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="service padding-top padding-bottom" id="old-recommendations-section">
    <div class="container">
      <div class="service__wrapper">
        <div class="row g-4 align-items-center">
          @for ($i = 0; $i < 8; $i++)
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="service__item service__item--style1 aos-init aos-animate" data-aos="fade-up" data-aos-duration="800">
              <div class="service__item-inner text-center">
                <div class="service__item-thumb mb-30">
                  <img class="dark" src="https://thetork.com/demos/html/bitrader/assets/images/service/1.png" alt="service-icon">
                </div>
                <div class="service__item-content">
                  <h5> <a class="stretched-link" href="service-details.html">L & T Fiancial Limited</a> </h5>
                  <p class="mb-0">Recommended on <span>12-06-2024</span></p>
                </div>
              </div>
            </div>
          </div>    
          @endfor
          
        </div>
      </div>
    </div>
  </section>