<div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y ">
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Welcome <?php echo $personal_details[0]['first_name']?>!🎉</h5>
                          <p class="mb-4">
                          We're glad you're here. Thank you for taking the time to fill out our form. Your information is important to us and we appreciate your input
                          </p>
                          
                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img
                            src="<?php echo base_url('/assets/images/man-with-laptop-light.png')?>"
                            height="140"
                            alt="View Badge User"
                            data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
               
</div>
              <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
                <div class="col">
                  <div class="card h-100">
                 <h5 class="card-title m-4">Personal Details</h5>
                 <a href="<?php echo site_url('staff/personal_details')?>">
                      <img class="card-img-top" src="<?php echo base_url('/assets/images/user.png')?>" alt="Card image cap" />
</a>
                      <div class="card-body">
               
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                  <h5 class="card-title m-4">Medical Details</h5>
                  <a href="<?php echo site_url('staff/medical_details')?>"><img class="card-img-top" src="<?php echo base_url('/assets/images/medical.png')?>" alt="Card image cap" />
</a>
                  <div class="card-body">
                      
                      <p class="card-text">
                        
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                  <h5 class="card-title m-4">Educational Details</h5>
                  <a href="<?php echo site_url('staff/educational_details')?>">
                    <img class="card-img-top" src="<?php echo base_url('/assets/images/education.png')?>" alt="Card image cap" />
</a>
                    <div class="card-body">
                     
                      
                    </div>
                  </div>
                </div>
