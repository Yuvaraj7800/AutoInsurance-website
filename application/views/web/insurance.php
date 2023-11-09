<?php $this->load->view('header'); ?>
  

    <section class="slider_section my-3 bg-light">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1 class="text-dark text-center">
                    Auto Insurance!
                    </h1>
                    <div class="card p-3 " style="background-color:#f5b642; >
                    <form action="POST">
                 <div class="row">
                <div class="col-6">
                <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder=" Name" style="height:45px;" required>
                </div>   
                </div>
                <div class="col-6">
                <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder=" Email" style="height:45px;" required>
                </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                <div class="form-group">
                <label for="phone">Phone No.</label>
                <input type="text" name="phone" id="phone" class="form-control"  placeholder=" Phone No." style="height:45px;"required>
                </div>
                </div>
                <div class="col-6">
                <div class="form-group">
                <label for="year">Year</label>
                <input type="text" name="year" id="year"  placeholder=" year" style="height:45px;"class="form-control" required>
                </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-6">
                <div class="form-group">
                <label for="make">Make</label>
                <input type="text" name="make" id="make" class="form-control" placeholder=" Make" style="height:45px;"required>
                </div>
                </div>
                <div class="col-6">  
                <div class="form-group">
                <label for="model">Model</label>
                <input type="text" name="model" id="model" class="form-control" placeholder=" Model" style="height:45px;" required>
                </div>
                </div>
            </div>
            
            
            

            <div class="row">
                <div class="col-6">
                <div class="form-group">
                <label for="primary_use">Primary Use</label>
                <input type="text" name="primary_use" id="primary_use" class="form-control" placeholder=" Primary User" style="height:45px;" required>
                </div>
                </div>
                <div class="col-6">
                <div class="form-group">
                <label for="annual_mileage">Annual Mileage</label>
                <input type="text" name="annual_mileage" id="annual_mileage"  placeholder=" Annual Mileage" style="height:45px;"class="form-control" required>
                </div>
                </div>
             </div>

            
            
                            <div class="col-12 my-3 text-center">
                                <button style="background-color:#ff4646;" class="btn btn-success py-3 px-5" type="submit">Submit</button>
                            </div> 
              </form>
                    <!-- <div class="btn-box text-center ml-5 mb-3">
                      
                      <a href="<?= base_url('Web/insurance'); ?>" class="btn-2">
                        Get Started 
                      </a>
                    </div> -->

                    </div>
                    
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    
                    <div class=" col-lg-10 mx-auto">
                        <p class="text-justify" style="font-family:roboto;">Auto Insurance involves paying insurance for vehicles. It is essential to sign up for auto insurance because it can help a person avoid the heavy costs associated with vehicle accidents and thefts. Moreover, the auto insurance policy can provide coverage for damages on the policyholder’s vehicle and medical expenses involved in accidents.</p>
                       
                      <div class="img-box">
                        <img src="<?= base_url(); ?>assets\images\newll-removebg-preview.png" style="maxt-height:500px;" alt="">
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
    

<?php $this->load->view('footer'); ?>