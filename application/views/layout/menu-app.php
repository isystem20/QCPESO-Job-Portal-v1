
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
                    <a href="<?php echo base_url(); ?>ApplicantController/ApplicantResume">
                        <i class="ti-view-grid"></i>
                        <span data-i18n="nav.widget.main">Home</span>
                    </a>
                </li>    
              


                   
                 <li class="nav-item">
                    <a href="#!">
                        <i class="ti-layout-grid2-alt"></i>
                        <span data-i18n="nav.basic-components.main">Search</span>
                    </a>

                    <ul class="tree-1">
                        <li><a href="<?php echo base_url(); ?>PostController/JobPost"> Job Details </a></li> 
                    </ul>
                </li>
                <li class="nav-item single-item">
                    <a href="<?php echo base_url(); ?>saved-jobs">
                        <i class="ti-view-grid"></i>
                        <span data-i18n="nav.widget.main"> Saved Jobs</span>
                    </a>
                </li>
                <li class="nav-item single-item">
                     <a href="<?php echo base_url(); ?>applied-jobs">
                        <i class="ti-view-grid"></i>
                        <span data-i18n="nav.widget.main">My Applications</span>
                    </a>
                </li>

                <li class="nav-item single-item">
                   <a href="<?php echo base_url(); ?>job-alerts">
                        <i class="ti-view-grid"></i>
                        <span data-i18n="nav.widget.main">My Alerts</span>
                    </a>
                </li>
                <li class="nav-item single-item">
                    <a href="<?php echo base_url(); ?>askPESO">
                        <i class="ti-view-grid"></i>
                        <span data-i18n="nav.widget.main">Ask P.E.S.O.</span>
                    </a>
                </li>
                <li class="nav-item single-item">
                    <a href="<?php echo base_url(); ?>account-settings">
                        <i class="ti-view-grid"></i>
                        <span data-i18n="nav.widget.main">Settings</span>
                    </a>
                </li>

                
            </ul>
        </div>
    </div>