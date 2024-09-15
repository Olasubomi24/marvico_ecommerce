
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo bg-primary rounded-2">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
          
             
              <img class="img-fluid" src="<?php echo base_url('assets/images/logo-white.png'); ?>"  alt="Theme-Logo" width="70%" height="70%">

            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1 ">
            <!-- Dashboard -->
            <li class="menu-item">
              <a href="<?php echo site_url('staff')?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>


            <!-- Layouts -->
          
            <!-- Tables -->
            <li class="menu-item">
              <a href="<?php echo site_url('staff/personal_details')?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user me-1"></i>
                <div data-i18n="Tables">Personal Details</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="<?php echo site_url('staff/medical_details')?>" class="menu-link">
              <i class="menu-icon tf-icons bx bx-plus-medical"></i> 
                <div data-i18n="Tables">Medical Details</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="<?php echo site_url('staff/Educational_details')?>" class="menu-link">
              <i class="menu-icon tf-icons bx bxs-graduation"></i>
                <div data-i18n="Tables">Educational Details</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="<?php echo site_url('staff/employment_details')?>" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-briefcase"></i>
                <div data-i18n="Tables">Employment Details</div>
              </a>
            </li>

            <li class="menu-item  $active">
              <a href="<?php echo site_url('auth/log_out')?>" class="menu-link">
                <i class="menu-icon bx bx-power-off me-2"></i>
                <div data-i18n="Tables">Log Out</div>
              </a>
            </li>


          </ul>
        </aside>