    <div class="leftpane">
    <div class="main-menu">
        <div class="main-menu-header">
            <img class="img-40" src="<?php echo base_url();?>themes/ltr/vertical-static/assets/images/user.png" alt="User-Profile-Image">
            <div class="user-details">
               <span>SIGMA++</span>
               <span id="more-details">Capstone Team<i class="ti-angle-down"></i></span>
            </div>
        </div>

        <div class="main-menu-content">
            <ul class="main-navigation">
                <li class="more-details">
                    <a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
                    <a href="#!"><i class="ti-settings"></i>Settings</a>
                    <a href="#!"><i class="ti-layout-sidebar-left"></i>Logout</a>
                </li>
                <li class="nav-item single-item">
                    <a href="<?php echo base_url(); ?>dashboard">
                    <i class="ti-home"></i>
                    <span data-i18n="nav.dash.main"> Dashboard</span>
                    </a>
                </li>                
                <li class="nav-title" data-i18n="nav.category.navigation">
                    <i class="ti-line-dashed"></i>
                    <span>Manage</span>
                </li>

    

                <li class="nav-item single-item">
                    <a href="<?php echo base_url(); ?>UserController/UserMasterlist">
                        <i class="ti-view-grid"></i>
                        <span data-i18n="nav.widget.main"> Manage Groups</span>
                    
                    </a>
                </li>    
              


                   
                 <li class="nav-item">
                    <a href="#!">
                        <i class="ti-layout-grid2-alt"></i>
                        <span data-i18n="nav.basic-components.main">Maintenance</span>
                    </a>

                    <ul class="tree-1">
                        <li><a href="<?php echo base_url(); ?>EmployeeController/OverseasCondition"> Language </a></li> 
                        <li><a href="<?php echo base_url(); ?>EmployeeController/OverseasLocations"> Licenses </a> </li>
                        <li><a href="<?php echo base_url(); ?>ApplicantController/KasambahayJoblist"> Certificates </a></li>
                        <li><a href="<?php echo base_url(); ?>ApplicantController/KasambahayJoblist"> Disabilities </a></li>
                        <li><a href="<?php echo base_url(); ?>ApplicantController/KasambahayJoblist"> Preferred Locations </a></li>
                        <li><a href="<?php echo base_url(); ?>ApplicantController/KasambahayJoblist"> Job Titles </a></li>
                        <li><a href="<?php echo base_url(); ?>ApplicantController/KasambahayJoblist"> Categories </a></li>

                    </ul>


                </li>
                <li class="nav-item single-item">
                    <a href="widget.html">
                        <i class="ti-view-grid"></i>
                        <span data-i18n="nav.widget.main"> Review and Ratings</span>
                    </a>
                </li>
                <li class="nav-item single-item">
                    <a href="widget.html">
                        <i class="ti-view-grid"></i>
                        <span data-i18n="nav.widget.main"> Survey</span>
                    </a>
                </li>
    
                <li class="nav-title" data-i18n="nav.category.forms">
                    <i class="ti-line-dashed"></i>
                    <span>Transactions</span>
                </li>
                <li class="nav-item">
                    <a href="#!">
                        <i class="ti-layout-grid2-alt"></i>
                        <span data-i18n="nav.basic-components.main">Applicants</span>
                    </a>

                    <ul class="tree-1">
                        <li><a href="<?php echo base_url(); ?>applicants/add" data-i18n="nav.json-form.simple-form">Add Walk-in</a></li>
                        <li><a href="<?php echo base_url(); ?>applicants" data-i18n="nav.json-form.clubs-view">View List</a></li>
                        <li><a href="<?php echo base_url(); ?>job-applications" data-i18n="nav.json-form.customer-form">Job Applications</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#!">
                        <i class="ti-layout-grid2-alt"></i>
                        <span data-i18n="nav.basic-components.main">Establishment</span>
                    </a>
                <ul class="tree-1">
                        <li><a href="<?php echo base_url(); ?>employers/add" data-i18n="nav.json-form.simple-form">Register New</a></li>
                        <li><a href="<?php echo base_url(); ?>employers" data-i18n="nav.json-form.clubs-view">View List</a></li>
                        <li><a href="<?php echo base_url(); ?>AccreditationController/AccreditationRequest">Pending Accreditation</a></li>
                    </ul>
                </li>


                <li class="nav-title" data-i18n="nav.category.tables">
                    <i class="ti-line-dashed"></i>
                    <span>Reports</span>
                </li>
                <li class="nav-item single-item">
                    <a href="<?php echo base_url(); ?>ApplicantController/ApplicantMasterlist">
                        <i class="ti-view-grid"></i>
                        <span data-i18n="nav.widget.main">Applicants Masterlist</span>
                    </a>
                </li>  
                <li class="nav-item single-item">
                    <a href="<?php echo base_url(); ?>EmployerController/EmployerMasterlist">
                        <i class="ti-view-grid"></i>
                        <span data-i18n="nav.widget.main">Establishment Masterlist</span>
                    </a>
                </li>
                <li class="nav-item single-item">
                    <a href="<?php echo base_url(); ?>UserController/UserMasterlist">
                        <i class="ti-view-grid"></i>
                        <span data-i18n="nav.widget.main">Referral Reports</span>
                    </a>
                </li>
                <li class="nav-item single-item">
                    <a href="<?php echo base_url(); ?>UserController/UserMasterlist">
                        <i class="ti-view-grid"></i>
                        <span data-i18n="nav.widget.main">Succesful Hires</span>
                    </a>
                </li> 
                <li class="nav-item single-item">
                    <a href="<?php echo base_url(); ?>UserController/UserMasterlist">
                        <i class="ti-view-grid"></i>
                        <span data-i18n="nav.widget.main">Feedbacks</span>
                    </a>
                </li> 
                <li class="nav-item single-item">
                    <a href="<?php echo base_url(); ?>UserController/UserMasterlist">
                        <i class="ti-view-grid"></i>
                        <span data-i18n="nav.widget.main">Establishment Ratings</span>
                    </a>
                </li> 
                <li class="nav-item single-item">
                    <a href="<?php echo base_url(); ?>UserController/UserMasterlist">
                        <i class="ti-view-grid"></i>
                        <span data-i18n="nav.widget.main">Survey Summary</span>
                    </a>
                </li> 
                <li class="nav-title" data-i18n="nav.category.chart-and-maps">
                    <i class="ti-line-dashed"></i>
                    <span>Settings</span>
                </li>
                <li class="nav-item">
                    <a href="#!">
                        <i class="ti-layout-grid2-alt"></i>
                        <span data-i18n="nav.basic-components.main">Back Office</span>
                    </a>

                    <ul class="tree-1">
                        <li><a href="<?php echo base_url(); ?>applicants/add" data-i18n="nav.json-form.simple-form">General Settings</a></li>
                    </ul>
                </li>
               <li class="nav-item">
                    <a href="#!">
                        <i class="ti-layout-grid2-alt"></i>
                        <span data-i18n="nav.basic-components.main">Online Portal</span>
                    </a>

                    <ul class="tree-1">
                        <li><a href="<?php echo base_url(); ?>applicants/add" data-i18n="nav.json-form.simple-form">Basic Settings</a></li>
                        <li><a href="<?php echo base_url(); ?>applicants" data-i18n="nav.json-form.clubs-view">Services</a></li>
                        <li><a href="<?php echo base_url(); ?>job-applications" data-i18n="nav.json-form.customer-form">Contents</a></li>
                        <li><a href="<?php echo base_url(); ?>job-applications" data-i18n="nav.json-form.customer-form">Maintenance</a></li>
                        <li><a href="<?php echo base_url(); ?>job-applications" data-i18n="nav.json-form.customer-form">Designs</a></li>
                    </ul>
                </li>
              <li class="nav-item">
                    <a href="#!">
                        <i class="ti-layout-grid2-alt"></i>
                        <span data-i18n="nav.basic-components.main">System</span>
                    </a>

                    <ul class="tree-1">
                        <li><a href="<?php echo base_url(); ?>applicants/add" data-i18n="nav.json-form.simple-form">Server and Database</a></li>
                        <li><a href="<?php echo base_url(); ?>applicants" data-i18n="nav.json-form.clubs-view">Notifications</a></li>
                       
                        <li class="nav-item">
                    <a href="#!">
                        <i class="ti-layout-grid2-alt"></i>
                        <span data-i18n="nav.basic-components.main">Overseas</span>
                    </a>
                    <ul class="tree-1">
                        <li><a href="<?php echo base_url(); ?>EmployeeController/OverseasCondition"> Conditions </a></li>
                        <li><a href="<?php echo base_url(); ?>EmployeeController/OverseasDependents">
                                Dependents </a></li>
                        <li><a href="<?php echo base_url(); ?>EmployeeController/OverseasLocations"> Locations </a>
                        </li>
               

                    </ul>
                </li>
            </ul>
        </div>
    </div>        
    </div>



<style type="text/css">
    .leftpane {
        width: 240px;
        float:left;
        left: 0px;
        z-index: 1;
        /*overflow: auto;*/
        background: #2c3e50; 
        height: 100%;
    }
</style>