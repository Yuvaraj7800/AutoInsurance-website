<?php $this->load->view('header'); ?>




        <!-- slider section -->
    <section class="slider_section my-0">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                    Free Auto Insurance quotes!
                    </h1>
                    <div class="card " style="backgrourd-color:white;">
                    <h5 class="text-dark text-center my-3 ">By interacting with this website, you agree to all tracking, recording, and monitoring of all events.</h5>
                    <form action="post">
                        
                    <div class="form-group text-dark  ml-3 text-justify">
                 <label for="inputZip">Zip Code</label>
                   <input type="text" name="zip" class="form-control" id="inputZip4" min="5" style="height:45px; width:200px;" maxlength="5" placeholder="Zip Code"
                                       oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required>
               </div>
               
               
                    </form>
                    <div class="btn-box text-center ml-5 mb-3">
                      
                      <a href="<?= base_url('Web/insurance'); ?>" class="btn-2">
                        Get Started 
                      </a>
                    </div>

                    </div>
                    
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class=" col-lg-10 mx-auto">
                      <div class="img-box">
                        <img src="<?= base_url(); ?>assets\images\main.png" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Services
        </h2>
      </div>
    </div>
    <div class="container ">
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="box ">
            <div class="img-box">
              <img src="<?= base_url(); ?>assets\images\quote.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
              Free Quotes
              </h4>
              <p>
              Find and compare the best rates from top national and local auto insurance carriers near you, for free.
              </p>
              
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box ">
            <div class="img-box">
              <img src="<?= base_url(); ?>assets\images\process.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
              Easy Process​
              </h4>
              <p>
              Just enter your Zip Code and contact information to receive quotes from top brands in no time.</p>
              
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 ">
          <div class="box ">
            <div class="img-box">
              <img src="<?= base_url(); ?>assets\images\finance-report.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
              Fast Result
              </h4>
              <p>
              Compare all the top carriers and find the cheapest rates, without the spam. Our process is fast, secure and instant.</p>
              
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box ">
            <div class="img-box">
              <img src="<?= base_url(); ?>assets\images\mind-map.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
              Peace of Mind on the Road
              </h4>
              <p>
              Our auto insurance provides peace of mind on the road with reliable coverage, fast claims processing, and exceptional customer support.
              </p>
              <!-- <a href="">
                Read More
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

              </a> -->
            </div>
          </div>
        </div> 
        <div class="col-md-6 col-lg-4">
          <div class="box ">
            <div class="img-box">
              <img src="<?= base_url(); ?>assets\images\wifi-signal.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
              Comprehensive Coverage
              </h4>
              <p>
              Comprehensive coverage safeguards your vehicle from non-collision risks like theft, vandalism, natural disasters, and more, offering financial protection and peace of mind.
              </p>
              <!-- <a href="">
                Read More
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

              </a> -->
            </div>
          </div>
        </div> 
        <div class="col-md-6 col-lg-4">
          <div class="box ">
            <div class="img-box">
              <img src="<?= base_url(); ?>assets\images\online-support.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
              Expert Customer Support
              </h4>
              <p>
              Our expert customer support team is available to assist you with personalized guidance, quick solutions, and exceptional service, ensuring your satisfaction.
              </p>
              <!-- <a href="">
                Read More
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

              </a> -->
            </div>
          </div>
        </div> 
      </div>
    </div>
  </section>

  <!-- end service section -->

  <!-- about section -->

  <section class="about_section layout_padding-bottom">
    <div class="container  ">
      <div class="row">
        <div class="col-md-8">
          <div class="detail-box">
            <div class="heading_container">
              <h3>
              Find the Best Auto Insurance
              </h3>
            </div>
            <p class="text-dark text-justify">
            Looking to compare auto insurance rates from all top carriers in one place? Simply start by entering your Zip Code and get the cheapest auto insurance rates in the business – without the spam.</p>

            <p class="text-dark text-justify">
            We work with top insurance providers to help you find the best match for your needs. Simply fill in a short form and we will match your information with the most appropriate insurance providers in your area.
            </p>
            
          </div>
        </div>
        <div class="col-md-4 ">
          <div class="img-box">
            <img src="<?= base_url(); ?>assets\images\undraw_automobile_repair_ywci-removebg-preview.png" alt="">
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- end about section -->


  <!-- server section -->

  <section class="server_section">
    <div class="container ">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="<?= base_url(); ?>assets\images\auto-insurance-5597107-4660018-removebg-preview.png" alt="">
            <!-- <div class="play_btn">
              <button>
                <i class="fa fa-play" aria-hidden="true"></i>
              </button>
            </div> -->
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
              Secure rates
              </h2>
              <p class="text-justify">
              Secure rates for automobile insurance depend on various factors, including the driver's age, driving history, vehicle make and model, and geographic location. Safer drivers with a clean record typically receive lower premiums, while those with accidents or violations may face higher rates. The type of coverage, deductible, and optional add-ons also impact costs. Additionally, factors such as credit score, gender, and age may affect rates in some regions. Comparison shopping and maintaining a good driving record can help secure more affordable rates. 
              </p>
              <p class="text-justify">
              It's essential to regularly review your policy to ensure it meets your needs and budget.
              Safer drivers often pay less, while poor records or high-risk locations result in higher rates.
              </p>  

            </div>
              <div class="text-center">
                <a class="btn-2 "href="<?= base_url('Web/contact'); ?>">
                  Contact-Us
                </a>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end server section -->

  <!-- price section -->

  <!-- <section class="price_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Pricing
        </h2>
      </div>
      <div class="price_container ">
        <div class="box">
          <div class="detail-box">
            <h2>$ <span>49</span></h2>
            <h6>
              Startup
            </h6>
            <ul class="price_features">
              <li>
                2GB RAM
              </li>
              <li>
                20GB SSD Cloud Storage
              </li>
              <li>
                Weekly Backups
              </li>
              <li>
                DDoS Protection
              </li>
              <li>
                Full Root Access
              </li>
              <li>
                24/7/365 Tech Support
              </li>
            </ul>
          </div>
          <div class="btn-box">
            <a href="">
              See Detail
            </a>
          </div>
        </div>
        <div class="box">
          <div class="detail-box">
            <h2>$ <span>99</span></h2>
            <h6>
              Standard
            </h6>
            <ul class="price_features">
              <li>
                4GB RAM
              </li>
              <li>
                50GB SSD Cloud Storage
              </li>
              <li>
                Weekly Backups
              </li>
              <li>
                DDoS Protection
              </li>
              <li>
                Full Root Access
              </li>
              <li>
                24/7/365 Tech Support
              </li>
            </ul>
          </div>
          <div class="btn-box">
            <a href="">
              See Detail
            </a>
          </div>
        </div>
        <div class="box">
          <div class="detail-box">
            <h2>$ <span>149</span></h2>
            <h6>
              Business
            </h6>
            <ul class="price_features">
              <li>
                8GB RAM
              </li>
              <li>
                100GB SSD Cloud Storage
              </li>
              <li>
                Weekly Backups
              </li>
              <li>
                DDoS Protection
              </li>
              <li>
                Full Root Access
              </li>
              <li>
                24/7/365 Tech Support
              </li>
            </ul>
          </div>
          <div class="btn-box">
            <a href="">
              See Detail
            </a>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <!-- price section -->

  <!-- client section -->
  <section class="client_section  my-5">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Testimonial
        </h2>
        <p>
        "Saved me money and hassle, great service, highly recommend this!"
        </p>
      </div>
    </div>
    <div class="container px-0">
      <div id="customCarousel2" class="carousel  slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-md-10 mx-auto">
                  <div class="box">
                    <div class="img-box">
                      <img src="<?= base_url(); ?>assets\images\client.jpg" alt="">
                    </div>
                    <div class="detail-box">
                      <div class="client_info">
                        <div class="client_name">
                          <h5>
                            Moreko
                          </h5>
                          <h6>
                            Customer
                          </h6>
                        </div>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                      </div>
                      <p>
                      I've had auto insurance with this company for years. Their exceptional customer service and quick claims processing make them stand out. When I had an accident, they took care of everything, and the repairs were done promptly. I highly recommend them for their reliability and peace of mind.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-md-10 mx-auto">
                  <div class="box">
                    <div class="img-box">
                      <img src="<?= base_url(); ?>assets\images\testimonial-1.jpg" alt="">
                    </div>
                    <div class="detail-box">
                      <div class="client_info">
                        <div class="client_name">
                          <h5>
                            Sofiya
                          </h5>
                          <h6>
                            Customer
                          </h6>
                        </div>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                      </div>
                      <p>
                      Switching to this auto insurance provider was a game-changer. The affordable rates and flexibility in coverage allowed me to tailor my policy to my needs. Their knowledgeable agents guided me through the process, making it effortless. I'm a satisfied customer and will continue to recommend them.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-md-10 mx-auto">
                  <div class="box">
                    <div class="img-box">
                      <img src="<?= base_url(); ?>assets\images\testimonial-3.jpg" alt="">
                    </div>
                    <div class="detail-box">
                      <div class="client_info">
                        <div class="client_name">
                          <h5>
                            Juno
                          </h5>
                          <h6>
                            Customer
                          </h6>
                        </div>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                      </div>
                      <p>
                      This auto insurance company has been a lifesaver for me. When my car was stolen, their swift response and support during the claims process were exceptional. They covered the loss, and I received a replacement vehicle without hassle. I can't thank them enough for their prompt assistance and reliability.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- end client section -->

  <!-- contact section -->
  <!-- <section class="contact_section layout_padding-bottom">
    <div class="container"> -->
      <!-- <div class="heading_container heading_center">
        <h2>
          Get In Touch
        </h2>
      </div> -->
      <!-- <div class="row"> -->
        <!-- <div class="col-md-8 col-lg-6 mx-auto">
          <div class="form_container">
            <form action="">
              <div>
                <input type="text" placeholder="Your Name" />
              </div>
              <div>
                <input type="email" placeholder="Your Email" />
              </div>
              <div>
                <input type="text" placeholder="Your Phone" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" />
              </div>
              <div class="btn_box ">
                <button>
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
      </div> -->
    <!-- </div> -->
  <!-- </section> -->
  <!-- end contact section -->
    <?php $this->load->view('footer'); ?>