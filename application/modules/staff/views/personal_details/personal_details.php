<div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Personal</span> Details</h4>
             
                      <p class="">Kindly fill your details</p>
                  
              <div class="row">
                <div class="col-md-12">
                  <ul class="nav nav-pills flex-column flex-md-row mb-3">
                 
                    <li class="nav-item">
                      <a class="nav-link active" href="javascript:void(0);"></i> Personal Details</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('staff/nextofkin'); ?>"
                        ></i> Next of Kin</a
                      >
                 
                  </ul>
                 
                    <hr class="my-0" />
                    <div class="card-body">
                    <?php echo form_open('staff/personal_details_update')?>
                        <div class="row">
                          <div class="mb-3 col-md-4">
                            <label for="firstName" class="form-label">First Name</label>
                            <input
                              class="form-control"
                              readonly
                              type="text"
                              id="firstName"
                              name="first_name"
                              value="<?php echo $personal_details[0]['first_name'];?>"
                              autofocus
                            />
                          </div>
                          <input type="hidden" name="staff_id"  value="<?php echo $personal_details[0]['staff_id'];?>" />
                          <div class="mb-3 col-md-4">
                            <label for="last_name" class="form-label">Last Name</label>
                            <input class="form-control" type="text" readonly name="lastName" id="lastName" value="<?php echo $personal_details[0]['last_name'];?>" />
                          </div>
                          <div class="mb-3 col-md-4">
                            <label for="email" class="form-label">middle name</label>
                            <input
                              class="form-control"
                              type="text"
                              id="email"
                              name="middle_name"
                              value="<?php echo $more_details[0]['middle_name'];?>"
                            
                            />
                          </div>
                          <div class="mb-3 col-md-4">
                            <label for="organization" class="form-label">Marital Status</label>
                            <input
                              type="text"
                              class="form-control"
                              id="organization"
                              name="marital_status"
                              value="<?php echo set_value('marital_status', $more_details[0]['marital_status']); ?>"
                            />
                          </div>
                         
                          <div class="mb-3 col-md-4">
                            <label for="organization" class="form-label">Sex</label>
                            <select name="sex" id="select" class="form-control">
                  
                                                <option value="0">Please select</option>
                                                <option value="Male"<?php if ($more_details[0]['sex'] == 'Male') echo ' selected'; ?>>Male</option>
                                                <option value="Female"<?php if ($more_details[0]['sex'] == 'Female') echo ' selected'; ?>>Female</option>
                                                

                                            </select>
                          
</div>
                            <div class="mb-3 col-md-4">
                            <label for="organization" class="form-label">Address</label>
                            <input
                              type="text"
                              class="form-control"
                              id="organization"
                              name="address"
                              value="<?php echo set_value('username', $more_details[0]['address']); ?>"
                            />
</div>
                            <div class="mb-3 col-md-4">
                            <label for="organization" class="form-label">Country</label>
                            <input
                              type="text"
                              class="form-control"
                              id="organization"
                              name="country"
                              value="<?php echo set_value('username', $more_details[0]['country']); ?>"
                            />
                          </div>
                          <div class="mb-3 col-md-4">
                            <label for="organization" class="form-label">Nationality</label>
                            <input
                              type="text"
                              class="form-control"
                              id="organization"
                              name="nationality"
                              value="<?php echo set_value('username', $more_details[0]['nationality']); ?>"
                            />
                          </div>
                          <div class="mb-3 col-md-4">
                            <label for="organization" class="form-label">City of Birth</label>
                            <input
                              type="text"
                              class="form-control"
                              id="organization"
                              name="cityofbirth"
                              value="<?php echo set_value('username', $more_details[0]['city_of_birth']); ?>"
                            />
                          </div>
                          <div class="mb-3 col-md-4">
                            <label for="organization" class="form-label">Date of Birth</label>
                            <input
                              type="date"
                              class="form-control"
                              id="organization"
                              name="dob"
                              value="<?php echo set_value('username', $more_details[0]['date_of_birth']); ?>"
                            />
                          </div>
                          <div class="mb-3 col-md-4">
                            <label for="organization" class="form-label">Phone no</label>
                            <input
                              type="text"
                              class="form-control"
                              id="organization"
                              name="phone_no"
                              value="<?php echo set_value('username', $more_details[0]['phone_no']); ?>"
                            />
                          </div>
                          <div class="mb-3 col-md-4">
                            <label for="organization" class="form-label">other email</label>
                            <input
                              type="text"
                              class="form-control"
                              id="organization"
                              name="other_email"
                              value="<?php echo set_value('username', $more_details[0]['other_email']); ?>"
                            />
                          </div>
                          <div>
                          <div class="mt-2">
                         
  <button type="submit" class="btn btn-primary me-2">Save</button>


                         
                          
                        </div>
</form>
                          
    <!-- / Layout wrapper -->