<div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Next of kin</span> Details</h4>
              <p class="">Kindly fill your details</p>
              <div class="row">
                <div class="col-md-12">
                  <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                      <a class="nav-link " href="<?php echo site_url('staff/personal_details'); ?>"></i> Personal Details</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="<?php echo site_url('staff/nextofkin'); ?>"
                        ></i> Next of Kin</a
                      >
                    </li>
                  
                  </ul>
                 
                    <hr class="my-0" />
                    <div class="card-body">
                    <?php echo form_open('staff/next_of_kin_update')?>
                        <div class="row">
                          <div class="mb-3 col-md-4">
                            <label for="firstName" class="form-label"> Name</label>
                            <input
                              class="form-control"
                              type="text"
                              id="firstName"
                              value="<?php echo set_value('username', $more_details[0]['next_of_kin_name']); ?>"
                              name="nname"
                              
                            />
                          </div>
                          <div class="mb-3 col-md-4">
                            <label for="lastName" class="form-label">relationship</label>
                            <input class="form-control" type="text"  id="lastName" name="nrelationship"   value="<?php echo set_value('username', $more_details[0]['next_of_kin_relationship']); ?>"/>
                          </div>
                          <div class="mb-3 col-md-4">
                            <label for="email" class="form-label">Contact details</label>
                            <input
                              class="form-control"
                              type="text"
                              id="email"
                              name="ncontactdetails"
                              value="<?php echo set_value('username', $more_details[0]['next_of_kin_contact_details']); ?>"
                            
                            />
                          </div>
                          
                          <div class="mb-3 col-md-4">
                            <label for="organization" class="form-label">Phone number</label>
                            <input
                              type="text"
                              class="form-control"
                              id="organization"
                              value="<?php echo set_value('username', $more_details[0]['next_of_kin_phone_no']); ?>"
                              name="nphoneno"
                            />
                            <input type="hidden" name="staff_id" value="<?php echo $personal_details[0]['staff_id'];?>" />
                          </div>
                          <div class="mb-3 col-md-4">
                            <label for="organization" class="form-label">city</label>
                            <input
                              type="text"
                              class="form-control"
                              id="organization"
                            
                              name="ncity"
                              value="<?php echo set_value('username', $more_details[0]['next_of_kin_city']); ?>"
                            />
                          </div>
                          <div class="mb-3 col-md-4">
                            <label for="organization" class="form-label">Nationality</label>
                            <input
                              type="text"
                              class="form-control"
                              id="organization"
                              value="<?php echo set_value('username', $more_details[0]['next_of_kin_country']); ?>"
                              name="nnationality"
                            />
</div>
</div>
<div class="mt-2">
                         
                         <button type="submit" class="btn btn-primary me-2">Save</button>
                       
                       
                                               
                                               </div>
</form>