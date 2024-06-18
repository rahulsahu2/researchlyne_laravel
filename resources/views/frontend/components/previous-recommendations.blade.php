<section class="service padding-top padding-bottom" id="old-recommendations-section">
    <div class="container">
        <div class="service__wrapper">
            <div class="row g-4 align-items-center">
                @for ($i = 0; $i < 8; $i++)
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="service__item service__item--style1 aos-init aos-animate" data-aos="fade-up"
                            data-aos-duration="800">
                            <div class="service__item-inner text-center">
                                <div class="service__item-thumb mb-30">
                                    <img class="dark"
                                        src="https://thetork.com/demos/html/bitrader/assets/images/service/1.png"
                                        alt="service-icon">
                                </div>
                                <div class="service__item-content">
                                    <h5> <a class="stretched-link" href="service-details.html">L & T Fiancial
                                            Limited</a> </h5>
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