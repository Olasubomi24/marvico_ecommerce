<div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Employment</span> Details</h4>

              <div class="row">
                <div class="col-md-12">
                  <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                      <p class="">Kindly fill your details</p>
                    </li>
                    <br>
                    <li class="nav-item">
                 
</li>
                    <hr class="my-0" />
                    <div class="card-body">
                    <p class="">Previous Job</p>
                    <?php echo form_open('staff/employment_details_insert_update')?>
                        <div class="row">
                          <div class="mb-3 col-md-4">
                            <label for="firstName" class="form-label">Employed FROM</label>
                            <input
                              class="form-control"
                              type="date"
                              id="firstName"
                              name="fmy"
                              value="<?php echo set_value('fmy', $more_details['employed_from']); ?>"
                            
                            />
                            <input type="hidden" name="staff_id" value="<?php echo $personal_details[0]['staff_id'];?>" />
                          </div>
                          <div class="mb-3 col-md-4">
                            <label for="lastName" class="form-label">EMPLOYED TO</label>
                            <input class="form-control" type="date" name="tmy" id="lastName" value="<?php echo set_value('tmy', $more_details['employed_to']); ?>" />
                          </div>
                          <div class="mb-3 col-md-4">
                            <label for="email" class="form-label">SALARY PER ANNUM START</label>
                            <input
                              class="form-control"
                              type="text"
                              id="email"
                              name="start"
                              value="<?php echo set_value('start', $more_details['salary_per_annum_start']); ?>"
                            
                            />
                          </div>
                          <div class="mb-3 col-md-4">
                            <label for="organization" class="form-label">SALARY PER ANNUM END</label>
                            <input
                              type="text"
                              class="form-control"
                              id="organization"
                              name="final"
                              value="<?php echo set_value('final', $more_details['salary_per_annum_final']); ?>"
                            />
                          </div>
                          <div class="mb-3 col-md-4">
                            <label for="organization" class="form-label">Name of employer</label>
                            <input
                              type="text"
                              class="form-control"
                              id="organization"
                              name="nameofemployer"
                              value="<?php echo set_value('nameofemployer', $more_details['name_of_employer']); ?>"
                            />
                          </div>
                          <div class="mb-3 col-md-4">
                            <label for="organization" class="form-label">Address of employer</label>
                            <input
                              type="text"
                              class="form-control"
                              id="organization"
                              name="addressofemployer"
                              value="<?php echo set_value('addressofemployer', $more_details['address_of_employer']); ?>"
                            />
                          </div>
                          <div class="mb-3 col-md-4">
                            <label for="organization" class="form-label">Type of business</label>
                            <input
                              type="text"
                              class="form-control"
                              id="organization"
                              name="typeofbs"
                              value="<?php echo set_value('typeofbs', $more_details['type_of_business']); ?>"
                            />
                          </div>
                          <div class="mb-3 col-md-4">
                            <label for="organization" class="form-label">Name of sUPERVISOR</label>
                            <input
                              type="text"
                              class="form-control"
                              id="organization"
                              name="nameofsupervisor"
                              value="<?php echo set_value('nameofsupervisor', $more_details['name_of_supervisor']); ?>"
                            />
                          </div>
                          <div class="mb-3 col-md-4">
                            <label for="organization" class="form-label">No and Kind of employees</label>
                            <input
                              type="text"
                              class="form-control"
                              id="organization"
                              name="noofemployee"
                              value="<?php echo set_value('noofemployee', $more_details['no_of_employee']); ?>"
                            />
                          </div>
                          <div class="mb-3 col-md-4">
                            <label for="organization" class="form-label">Exact title of your post</label>
                            <input
                              type="text"
                              class="form-control"
                              id="organization"
                              name="titlepost"
                              value="<?php echo set_value('titlepost', $more_details['title_of_post']); ?>"
                            />
                          </div>
                          <div class="mb-3 col-md-4">
                            <label for="organization" class="form-label">Reason for living</label>
                            <input
                              type="text"
                              class="form-control"
                              id="organization"
                              name="reasonforliving"
                              value="<?php echo set_value('reasonforliving', $more_details['reason_of_living']); ?>"
                            />
                          </div>

                          <div class="mb-3 col-md-4">
                            <label for="organization" class="form-label">Description of duties</label>
                            <textarea class="form-control" name="duties" id="exampleFormControlTextarea1" rows="3"><?php echo set_value('duties', $more_details['duties']); ?></textarea>
                           
                          </div>
                          <div>
                          <div class="mt-2">
                         
  <button type="submit" class="btn btn-primary me-2">Save</button>


                         
                          
                        </div>
</form>
                                       