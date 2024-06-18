<section class="service padding-top padding-bottom">
    <div class="section-header section-header--max50">
      <h2 class="mb-10 mt-minus-5"><span>RECOMMENDATIONS</span></h2>
      <p>DATED :12-06-2024</p>
      <h4>Markets are highly volatile, Please be patient with your holdings.</h4>
    </div>
    <div class="container">
        <div class="service__wrapper">
            <div class="row g-4 investor-table align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="service__item service__item--style1 aos-init aos-animate" data-aos="fade-up"
                        data-aos-duration="800">
                        <div class="text-center table-responsive recommand-table">
                            <table class="table table-striped">
                                <thead class="table-danger">
                                    <tr class="danger">		
                                        <th>ANALYSIS REPORT</th>
                                        <th>COMPANY</th>
                                        <th>BSE CODE</th>
                                        <th>NSE CODE</th>
                                        <th>RECOMMENDATION</th>
                                        <th>RECOMMENDED PRICE</th>
                                        <th>TARGET PRICE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @for ($i = 0; $i < 4; $i++)
                                    <tr>
                                        <td class="light-bg">
                                          <a href="#" class="trk-btn trk-btn--outline22" data-fslightbox="">
                                            <span class="fa fa-download"></span>WHL
                                          </a>
                                        </td>
                                        <td>Wonderla Holidays Ltd.</td>
                                        <td class="light-bg">538268</td>
                                        <td >WONDERLA</td>
                                        <td class="light-bg">BUY</td>
                                        <td>894.20</td>
                                        <td class="light-bg">1118.00</td>
                                    </tr>
                                  @endfor
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
              <a href="javascript:void(0);" id="toggle-previous-recommendations"
                  class="trk-btn trk-btn--border trk-btn--primary mt-25">View Previous Recommendations
              </a>
          </div>
        </div>
    </div>
</section>

