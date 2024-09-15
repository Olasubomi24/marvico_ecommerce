<div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
          
                <div class="app-brand justify-content-center bg-primary pt-2">
                <a href="index.html" class="app-brand-link gap-2">
                  
                  <span class="app-brand-text demo text-body fw-bolder bg-primary"> <img class="img-fluid" src="<?php echo base_url('assets/images/logo-white.png'); ?>"  alt="Theme-Logo" width="70%" height="70%"></span>
                </a>
              </div>
                  
              <!-- /Logo -->
              <h4 class="mb-2">Sign Up</h4>

        
                <?php echo form_open('auth/user_sign_up', ['class'=>'mb-3', 'id'=>'formAuthentication'])?>
                <div class="mb-3">
                  <label for="email" class="form-label">Email or Username</label>
                  <?php echo form_input(['type'=>'text', 'class'=>'form-control', 'id'=>'email', 'name'=>'email', 'placeholder'=>'Enter Your email', 'value'=>set_value('email')])?>
                  <?php echo form_error('email', ' <code>','</code>')?>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">First Name</label>
                  <?php echo form_input(['type'=>'text', 'class'=>'form-control', 'name'=>'first_name', 'placeholder'=>'Enter Your FirstName', 'value'=>set_value('first_name')])?>
                  <?php echo form_error('first_name', '<code>','</code>')?>
                </div>
                
                <div class="mb-3">
                  <label for="email" class="form-label">Last Name</label>
                  <?php echo form_input(['type'=>'text', 'class'=>'form-control', 'id'=>'email', 'name'=>'last_name', 'placeholder'=>'Enter Your Last Name', 'value'=>set_value('last_name')])?>
                  <?php echo form_error('last_name', '<code>','</code>')?>
                </div>

                <div class="mb-3">
                <label for="staff" class="form-label">Staff Type</label>
                <br>
                <input type="radio" id="admin" name="user_type" value="2">
                <label for="admin">Admin</label><br>
                <input type="radio" id="staff" name="user_type" value="1">
                <label for="staff">Staff</label><br>  
              


                          </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
                 
                  </div>
                  <div class="input-group input-group-merge">
          
                    <?php echo form_input(['type'=>'password', 'class'=>'form-control', 'id'=>'email', 'name'=>'password', 'placeholder'=>'*********************', 'value'=>set_value('password')])?>
                  <?php echo form_error('password', '<code>','</code>')?>
                  </div>
                </div>
          
                <div class="mb-3">
                  <?php echo form_submit(['value'=>'Sign Up', 'class'=>'btn btn-primary d-grid w-100'])?>
                </div>
              </form>

              <p class="text-center">
                <span>Already Have an Account?</span>
                <a href="<?php echo site_url('auth')?>">
                  <span>Sign In</span>
                </a>
              </p>
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>
