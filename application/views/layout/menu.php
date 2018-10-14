
    <div class="main-menu">
        <div class="main-menu-header">
            <img class="img-40" src="<?php echo base_url();?>themes/ltr/vertical-static/assets/images/user.png" alt="User-Profile-Image">
            <div class="user-details">
               <span>SIGMA++</span>
               <span id="more-details">Capstone Team<i class="ti-angle-down"></i></span>
            </div>
        </div>
         <div class="main-menu-content" style="position: fixed;background-color: #2c3e50;width:240px!important;">
            <ul class="main-navigation">
               <li class="nav-title" data-i18n="nav.category.navigation">
                  <i class="ti-line-dashed"></i>
                  <span>Management</span>
               </li>
               <li class="nav-item single-item">
                  <a href="<?php echo base_url(); ?>index.php/HomeController/Dashboard">
                  <i class="ti-home"></i>
                  <span data-i18n="nav.dash.main"> Dashboard</span>
                  </a>
               </li>
               <li class="nav-item">
                  <a href="#!">
                  <i class="ti-home"></i>
                  <span data-i18n="nav.dash.main">Maintenance</span>
                  </a>
                  <ul class="tree-1">
                     <li><a href="<?php echo base_url(); ?>index.php/EmployeeController/EmployeeRegistration" data-i18n="nav.dash.default"> User Registry </a></li>     
                     <li><a href="<?php echo base_url(); ?>index.php/EmployeeController/EmployeeMasterlist" data-i18n="nav.dash.default"> User Masterlist </a>
                     </li>
                     <li><a href="<?php echo base_url(); ?>" data-i18n="nav.dash.ecommerce"> Access Templates</a></li>
                     <li><a href="<?php echo base_url(); ?>" data-i18n="nav.dash.crm">Departments</a></li>
                     <li><a href="<?php echo base_url(); ?>" data-i18n="nav.dash.crm">Examinations</a></li>                     
                  </ul>
               </li>

               <li class="nav-item">
                  <a href="#!">
                  <i class="ti-home"></i>
                  <span data-i18n="nav.dash.main">Employers</span>
                  </a>
                  <ul class="tree-1">
                    <li><a href="<?php echo base_url(); ?>index.php/EmployerController/EmployerRegistration" data-i18n="nav.dash.default"> Employer Registry </a></li> 
                     <li><a href="<?php echo base_url(); ?>index.php/EmployerController/EmployerMasterlist" data-i18n="nav.dash.default"> Employer Masterlist</a>
                     </li>
                     <li><a href="<?php echo base_url(); ?>" data-i18n="nav.dash.ecommerce"> Accreditation Requests</a></li>
                     <li><a href="<?php echo base_url(); ?>" data-i18n="nav.dash.crm">Job Posts</a></li>
                  </ul>
               </li>

               <li class="nav-item">
                  <a href="#!">
                  <i class="ti-home"></i>
                  <span data-i18n="nav.dash.main">Applicants</span>
                  </a>
                  <ul class="tree-1">
                    <li><a href="<?php echo base_url(); ?>index.php/ApplicantController/ApplicantRegistration" data-i18n="nav.dash.default"> Applicant Registry </a></li> 
                     <li><a href="<?php echo base_url(); ?>index.php/ApplicantController/ApplicantMasterlist" data-i18n="nav.dash.default"> Applicant Masterlist</a>
                     </li>
                     <li><a href="<?php echo base_url(); ?>index.php/ApplicationController/ApplicationMasterlist" data-i18n="nav.dash.ecommerce"> Job Applications</a></li>
                     <li><a href="<?php echo base_url(); ?>" data-i18n="nav.dash.crm">Active Referrals</a></li>
                     <li><a href="<?php echo base_url(); ?>" data-i18n="nav.dash.crm">Student Jobs</a></li>
                     <li><a href="<?php echo base_url(); ?>" data-i18n="nav.dash.crm">Inquiries and Feedbacks</a></li>                     
                  </ul>
               </li>
               <li class="nav-title" data-i18n="nav.category.ui-element">
                  <i class="ti-line-dashed"></i>
                  <span>Web Portal</span>
               </li>
               <li class="nav-item single-item">
                  <a href="<?php echo base_url(); ?>">
                  <i class="ti-home"></i>
                  <span data-i18n="nav.dash.main"> General Settings</span>
                  </a>
               </li>
               <li class="nav-item single-item">
                  <a href="<?php echo base_url(); ?>">
                  <i class="ti-home"></i>
                  <span data-i18n="nav.dash.main"> Services</span>
                  </a>
               </li>
               <li class="nav-title" data-i18n="nav.category.pages">
                  <i class="ti-line-dashed"></i>
                  <span>Reports</span>
               </li>
               <li class="nav-title" data-i18n="nav.category.other">
                  <i class="ti-line-dashed"></i>
                  <span> Other</span>
               </li>   
               <li class="nav-item single-item">
                  <a href="<?php echo base_url(); ?>">
                  <i class="ti-home"></i>
                  <span data-i18n="nav.dash.main"> Change Logs</span>
                  </a>
               </li>         
            </ul>
         </div>
    </div>