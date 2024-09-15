<div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Educational Details</span> Details</h4>
             
                      <p class="">Kindly fill your details</p>
                  
              <div class="row">
                <div class="col-md-12">
                  <ul class="nav nav-pills flex-column flex-md-row mb-3">
                 
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo site_url('staff/educational_details/language'); ?>">Language</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" href="<?php echo site_url('staff/educational_details_school'); ?>"
                        >School</a
                      >
                  
                  </ul>
                 
                    <hr class="my-0" />
                    <div class="card-body">
                    <?php echo form_open('staff/educational_details_school_insert_update')?>
                      <div class="mb-3">
                            University
                          
                          </div>
                        <div class="row">
                            
                          <div class="mb-3 col-md-4">
                            <label for="firstName" class="form-label">Name</label>
                            <input
                              class="form-control"
                              type="text"
                              id="firstName"
                              name="uniname"
                              value="<?php echo set_value('uniname', $more_details['university_name']); ?>"
                              autofocus
                            />
                          </div>
                          <div class="mb-3 col-md-4">
                            <label for="lastName" class="form-label">Place</label>
                            <input class="form-control" type="text" name="uniplace" id="lastName"   value="<?php echo set_value('uniplace', $more_details['university_place']); ?>" />
                          </div>
                          <div class="mb-3 col-md-4">
                            <label for="email" class="form-label">Country</label>
                            <input
                              class="form-control"
                              type="text"
                              id="email"
                              name="unicountry"
                              value="<?php echo set_value('unicountry', $more_details['university_country']); ?>"
                            
                            />
                          </div>
                          <div class="mb-3 col-md-4">
                            <label for="organization" class="form-label">Started When</label>
                            <input
                              type="date"
                              class="form-control"
                              id="organization"
                              name="stwhen"
                              value="<?php echo set_value('uniname', $more_details['university_started_when']); ?>"
                            />
                          </div>
                          <div class="mb-3 col-md-4">
                            <label for="organization" class="form-label">Ended When</label>
                            <input
                              type="date"
                              class="form-control"
                              id="organization"
                              name="stend"
                              value="<?php echo set_value('uniname', $more_details['university_ended_when']); ?>"
                            />
                          </div>
                          <div class="mb-3 col-md-4">
                            <label for="organization" class="form-label">Course of Study</label>
                            <input
                              type="text"
                              class="form-control"
                              id="organization"
                              name="course"
                              value="<?php echo set_value('uniname', $more_details['course_of_study']); ?>"
                            />
</div>
                            <div class="mb-3 col-md-4">
                            <label for="organization" class="form-label">Degree Obtained</label>
                            <input
                              type="text"
                              class="form-control"
                              id="organization"
                              name="degree"
                              value="<?php echo set_value('degree', $more_details['degree']); ?>"
                            />
</div>
<div class="mb-3 col-md-8"></div>
<div class="mb-3 col-md-4 mt-2 text-black-800">Other School</div>
<div class="mb-3 col-md-8"></div>
<div class="mb-3 col-md-4">
                            <label for="firstName" class="form-label">Name</label>
                            <input
                              class="form-control"
                              type="text"
                              id="firstName"
                              name="schoolname"
                              value="<?php echo set_value('schoolname', $more_details['school_name']); ?>"
                              autofocus
                            />
                          </div>
                          <div class="mb-3 col-md-4">
                            <label for="lastName" class="form-label">Place</label>
                            <input class="form-control" type="text" name="schoolplace" id="lastName"  value="<?php echo set_value('degree', $more_details['school_place']); ?>" />
                          </div>
                          <div class="mb-3 col-md-4">
                            <label for="email" class="form-label">Country</label>
                            <input
                              class="form-control"
                              type="text"
                              id="email"
                              name="schoolcountry"
                              value="<?php echo set_value('schoolcountry', $more_details['school_country']); ?>"
                            
                            />
                          </div>
                          <div class="mb-3 col-md-4">
                            <label for="organization" class="form-label">Started When</label>
                            <input
                              type="date"
                              class="form-control"
                              id="organization"
                              name="schoolstwhen"
                              value="<?php echo set_value('schoolstwhen', $more_details['school_started_when']); ?>"
                            />
                          </div>
                          <div class="mb-3 col-md-4">
                            <label for="organization" class="form-label">Ended When</label>
                            <input
                              type="date"
                              class="form-control"
                              id="organization"
                              name="schoolend"
                              value="<?php echo set_value('schoolend', $more_details['school_ended_when']); ?>"
                            />
                          </div>
                          <div class="mb-3 col-md-4">
                            <label for="organization" class="form-label">Type</label>
                            <input
                              type="text"
                              class="form-control"
                              id="organization"
                              name="type"
                              value="<?php echo set_value('type', $more_details['school_type']); ?>"
                            />
</div>
                            <div class="mb-3 col-md-4">
                            <label for="organization" class="form-label">Certificate</label>
                            <input
                              type="text"
                              class="form-control"
                              id="organization"
                              name="schooldiploma"
                              value="<?php echo set_value('schooldiploma', $more_details['school_diploma']); ?>"
                            />
</div>
                           <div class="mb-3 col-md-8"></div>
<div class="mb-3 col-md-4 mt-2 text-black-800">Training Courses</div>
<div class="mb-3 col-md-8"></div>
<div class="mb-3 col-md-4">
                            <label for="firstName" class="form-label">Name</label>
                            <input
                              class="form-control"
                              type="text"
                            
                              name="otcname"
                              value="<?php echo set_value('other_courses_name', $more_details['other_courses_name']); ?>"
                             
                            />
                          </div>
                          <div class="mb-3 col-md-4">
                            <label for="lastName" class="form-label">Place</label>
                            <input class="form-control" type="text" name="otcplace" id="lastName"  value="<?php echo set_value('otcplace', $more_details['other_courses_place']); ?>" />
                          </div>
                          <div class="mb-3 col-md-4">
                            <label for="email" class="form-label">Country</label>
                            <input
                              class="form-control"
                              type="text"
                              id="email"
                              name="otcountry"
                              value="<?php echo set_value('otcountry', $more_details['other_courses_country']); ?>"
                            
                            />
                          </div>
                          <div class="mb-3 col-md-4">
                            <label for="organization" class="form-label">Started When</label>
                            <input
                              type="date"
                              class="form-control"
                              id="organization"
                              name="otcstwhen"
                              value="<?php echo set_value('otcstwhen', $more_details['other_courses_started_when']); ?>"
                            />
                          </div>
                          <div class="mb-3 col-md-4">
                            <label for="organization" class="form-label">Ended When</label>
                            <input
                              type="date"
                              class="form-control"
                              id="organization"
                              name="otcend"
                              value="<?php echo set_value('otcend', $more_details['other_courses_ended_when']); ?>"
                            />
                          </div>
                          <div class="mb-3 col-md-4">
                            <label for="organization" class="form-label">Type</label>
                            <input
                              type="text"
                              class="form-control"
                              id="organization"
                              name="otctype"
                              value="<?php echo set_value('otctype', $more_details['other_courses_type']); ?>"
                            />
</div> <input type="hidden" name="staff_id" value="<?php echo $personal_details[0]['staff_id'];?>" />
                            <div class="mb-3 col-md-4">
                            <label for="organization" class="form-label">Certificate</label>
                            <input
                              type="text"
                              class="form-control"
                              id="organization"
                              name="otcdiploma"
                              value="<?php echo set_value('otcdiploma', $more_details['other_courses_diploma']); ?>"
                            />
                            <div>
                          <div class="mt-2">
                         
  <button type="submit" class="btn btn-primary me-2">Save</button>


                         
                          
                        </div>
</form>

                            