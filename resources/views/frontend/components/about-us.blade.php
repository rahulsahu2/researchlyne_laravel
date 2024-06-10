 <!-- ===============>> About section start here <<================= -->
 <section class="about about--style1 ">
    <div class="container">
      <div class="about__wrapper">
        <div class="row gx-5  gy-4 gy-sm-0  align-items-center">
          <div class="col-lg-6">
            <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
              <div class="about__thumb-inner">
                <div class="about__thumb-image floating-content">
                  <img class="dark" src="assets/images/about/1.png" alt="about-image">
                  <div class="floating-content__top-left" data-aos="fade-right" data-aos-duration="1000">
                    <div class="floating-content__item">
                      <h3> <span class="purecounter" data-purecounter-start="0" data-purecounter-end="10">{{$data->content1->title}}</span>
                      </h3>
                      <p>{{$data->content1->content}}</p>
                    </div>
                  </div>
                  <div class="floating-content__bottom-right" data-aos="fade-right" data-aos-duration="1000">
                    <div class="floating-content__item">
                      <h3> <span class="purecounter" data-purecounter-start="0" data-purecounter-end="25">{{$data->content2->title}}</span>
                      </h3>
                      <p>{{$data->content2->content}}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="about__content" data-aos="fade-left" data-aos-duration="800">
              <div class="about__content-inner">
                <h2>{{$data->about->title}}</h2>
                <p class="mb-0">
                    {{$data->about->content}}
                    </p>
                <a href="{{$data->action->link}}}" class="trk-btn trk-btn--border trk-btn--primary">{{$data->action->title}}</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ===============>> About section start here <<================= -->