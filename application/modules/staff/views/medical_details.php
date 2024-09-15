


<div class="content-wrapper">
            <!-- Content -->
          
            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Medical</span> Details</h4>

              <div class="row">
                <div class="col-md-12">
                  <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                      <p class="">Kindly fill your details</p>
                    </li>
                   
                    
                 
                    <hr class="my-0" />
                    <div class="card-body">
                    <?php echo form_open('staff/medical_details_insert_update')?>
                        <div class="row">
                          <div class="mb-3 col-md-4">
                            <label for="firstName" class="form-label">Weight</label>
                            <input
                              class="form-control"
                              type="text"
                              id="firstName"
                              name="weight"
                              value="<?php echo $more_details['weight']; ?>" 
                              autofocus
                            />
                          </div>
                          <input type="hidden" name="staff_id" value="<?php echo $medical_details[0]['staff_id'];?>" />
                          <div class="mb-3 col-md-4">
                            <label for="lastName" class="form-label">Height</label>
                            <input class="form-control" type="text" name="height" id="lastName"     value="<?php echo set_value('height', $more_details['height']); ?>" />
                          </div>
                          <div class="mb-3 col-md-4">
                            <label for="email" class="form-label">Genotype</label>
                            <input
                              class="form-control"
                              type="text"
                              id="email"
                              name="genotype"
                              value="<?php echo set_value('height', $more_details['genotype']); ?>" />
                            
                    
                          </div>
                          <div class="mb-3 col-md-4">
                            <label for="organization" class="form-label">Blood Group</label>
                            <select name="blood_group" id="select" class="form-control">
                                                <option value="0">Please select</option>
                                                <option value="AS"<?php if ($more_details['blood_group'] == 'AS') echo ' selected'; ?>>AS</option>
                                                <option value="SS"<?php if ($more_details['blood_group'] == 'SS') echo ' selected'; ?>>SS</option>
                                                <option value="AA"<?php if ($more_details['blood_group'] == 'AA') echo ' selected'; ?>>AA</option>

                                            </select>
</div>
                            <div class="mb-3 col-md-4">
                            <label for="organization" class="form-label">Having Medical issue</label>
                            <select name="having_medical_issue" id="select" class="form-control">
                                                <option value="0">Please select</option>
                                                <option value="Yes"<?php if ($more_details['having_medical_issue'] == 'Yes') echo ' selected'; ?>>Yes</option>
                                                <option value="No"<?php if ($more_details['having_medical_issue'] == 'No') echo ' selected'; ?>>No</option>
                                                
                                            </select>

                          </div>
                          
                          
                            <div class="mb-3 col-md-4">
                            <label for="organization" class="form-label">Medical History</label>
                             <textarea class="form-control" name="medical_history" id="exampleFormControlTextarea1" rows="3"><?php echo set_value('medical_history', $more_details['medical_history']); ?></textarea>
                          </div>
                          </div>
                          <div>
                          <div class="mt-2">
                         
  <button type="submit" class="btn btn-primary me-2">Save</button>


                         
                          
                        </div>
</form>
                                       