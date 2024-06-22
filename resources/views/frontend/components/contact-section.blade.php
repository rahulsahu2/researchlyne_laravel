   
   @inject('obj', 'App\Services\CommonService')
   @php
        $countrydata = $obj::getCountrycode();
   @endphp
   <!-- ===============>> Contact section start here <<================= -->
    <section class="contact padding-top padding-bottom">
        <div class="container">
          <div class="section-header section-header--max50">
            <h2 class="mb-10 mt-minus-5">Contact <span>Us</span></h2>
          </div>
          <div class="contact__wrapper">
            <div class="row g-5">
              <div class="col-md-5">
                <div class="contact__info" data-aos="fade-right" data-aos-duration="1000">
                  <div class="contact__social">
                    <h3><span>SEBI</span> Registered Research Analyst (INH100010013).</h3>
                    @if(isset($data['content']))
                        <p>Mr. Amiteshwar Singh is Proprietor of M/s Amiteshwar.in and Researchlyne.com is a unit of Amiteshwar.in.
                            Researchlyne.com is exclusively focused on research of Mutli-Cap Stocks and is backed by skilled research analyst 
                            who has more than half a decade of experience in stock market. Through this website the Research Analyst is trying 
                            to offer good researched stocks to its subscribers.
                        </p>
                    @endif
                  </div>
                  @if(isset($data['contact']))
                    <div class="contact__details">
                        <div class="contact__item" data-aos="fade-right" data-aos-duration="1200">
                            <div class="contact__item-inner">
                                <div class="contact__item-thumb">
                                <span><img src="assets/images/contact/3.png" alt="contact-icon" class="dark"></span>
                                </div>
                                <div class="contact__item-content">
                                <p>
                                    Ground Floor, 236 E Block, 
                                </p>
                                <p>
                                    Bhai Randhir Singh Nagar, 
                                </p>
                                <p>
                                    Ludhiana-141012, (PB).
                                </p>
                                </div>
                            </div>
                        </div>
                        <div class="contact__item" data-aos="fade-right" data-aos-duration="1000">
                            <div class="contact__item-inner">
                                <div class="contact__item-thumb">
                                <span><img src="assets/images/contact/1.png" alt="contact-icon" class="dark"></span>
                                </div>
                                <div class="contact__item-content">
                                <p>
                                    7973835409
                                </p>
                                </div>
                            </div>
                        </div>
                        <div class="contact__item" data-aos="fade-right" data-aos-duration="1100">
                            <div class="contact__item-inner">
                                <div class="contact__item-thumb">
                                <span><img src="assets/images/contact/2.png" alt="contact-icon" class="dark"></span>
                                </div>
                                <div class="contact__item-content">
                                <p>
                                    researchlyne@gmail.com
                                </p>
                                <p>
                                    info@researchlyne.com
                                </p>
                                </div>
                            </div>
                        </div>
                    </div>
                  @endif
                </div>
              </div>
              <div class="col-md-7">
                <div class="contact__form">
                  <form action="#" data-aos="fade-left" data-aos-duration="1000">
                    <div class="row g-4">
                      <div class="col-6">
                        <div>
                          <input class="form-control" type="text" id="name" placeholder="Full Name" required>
                        </div>
                      </div>
                      <div class="col-6">
                        <div>
                          <input class="form-control" type="email" id="email" placeholder="Email here" required>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <select class="form-control" name="country_code">                              
                               @foreach ($countrydata->data as $key)
                                 <option value="{{$key->code}}" {{$countrydata->default == $key->iso ? 'selected' : ''}}>{{$key->code}}</option>
                               @endforeach   
                            </select>
                          </div>
                          <input class="form-control" type="text" id="mobile" maxlength="10" onkeypress="return isNumber(event)" placeholder="Mobile here" required>
                        </div>
                      </div>
                      <div class="col-6">
                        <div>
                          <input class="form-control" type="text" id="subject" placeholder="Subject here" required>
                        </div>
                      </div>
                      <div class="col-12">
                        <div>
                          <textarea cols="30" rows="3" class="form-control" id="textarea"
                            placeholder="Enter Your Message" required></textarea>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="trk-btn trk-btn--border trk-btn--primary mt-4 d-block">Send Message</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="contact__shape">
          <span class="contact__shape-item contact__shape-item--1"><img src="assets/images/contact/4.png"
              alt="shape-icon"></span>
          <span class="contact__shape-item contact__shape-item--2"> <span></span> </span>
        </div>
    </section>
    <script>
      function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
          alert("Please enter only Numbers.");
          return false;
        }

        return true;
      }
    </script>
    <!-- ===============>> Contact section start here <<================= -->