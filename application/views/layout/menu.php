
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

<!--                 <li class="nav-item">
                    <a href="#!">
                        <i class="ti-layout"></i>
                        <span data-i18n="nav.page_layout.main">Maintenance</span>
                        <label class="label label-warning menu-caption">NEW</label>
                    </a>
                    <ul class="tree-1">
                        <li><a href="#" data-i18n="nav.page_layout.bottom-menu"> Masterlist</a></li>

                        <li class="nav-sub-item"><a href="#" data-i18n="nav.page_layout.vertical.main"><i class="icon-arrow-right"></i>Overseas</a>
                            <ul class="tree-2">
                                <li><a href="menu-static.html" data-i18n="nav.page_layout.vertical.static-layout"> Conditions </a></li>
                                <li><a href="http://flatable.phoenixcoded.net/ltr/vertical-overlay/menu-header-fixed.html" data-i18n="nav.page_layout.vertical.header-fixed">
                                        Dependents </a></li>
                                <li><a href="http://flatable.phoenixcoded.net/ltr/vertical-compact/menu-compact.html" data-i18n="nav.page_layout.vertical.compact"> Locations </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-sub-item"><a href="#" data-i18n="nav.page_layout.horizontal.main"> Kasambahay</a>
                            <ul class="tree-2">
                                <li><a href="http://flatable.phoenixcoded.net/ltr/horizontal-static-icon/menu-horizontal-static.html" target="_blank" data-i18n="nav.page_layout.horizontal.static-layout"> Joblist </a></li>
                            </ul>
                        </li>
                        <li><a href="" data-i18n="nav.page_layout.bottom-menu"> Languages</a></li>
                        <li><a href="box-layout.html" data-i18n="nav.page_layout.box-layout"> Licenses</a></li>
                        <li><a href="menu-rtl.html" data-i18n="nav.page_layout.rtl">Certificates</a>
                        </li>
                        <li><a href="box-layout.html" data-i18n="nav.page_layout.box-layout"> Disabilities</a></li>
                        <li><a href="menu-rtl.html" data-i18n="nav.page_layout.rtl">Preferred Locations</a>
                        </li>
                        <li><a href="box-layout.html" data-i18n="nav.page_layout.box-layout"> Job Titles</a></li>
                        <li><a href="menu-rtl.html" data-i18n="nav.page_layout.rtl">Education Courses</a>
                        </li>
                    </ul>
                </li> -->

                <li class="nav-item single-item">
                    <a href="<?php echo base_url(); ?>UserController/UserMasterlist">
                        <i class="ti-view-grid"></i>
                        <span data-i18n="nav.widget.main"> User Masterlist</span>
                        <label class="label label-danger menu-caption">10+</label>
                    </a>
                </li>     
                <li class="nav-item">
                    <a href="#!">
                        <i class="ti-layout-grid2-alt"></i>
                        <span data-i18n="nav.basic-components.main">Overseas</span>
                    </a>
                    <ul class="tree-1">
                        <li><a href="menu-static.html" data-i18n="nav.page_layout.vertical.static-layout"> Conditions </a></li>
                        <li><a href="http://flatable.phoenixcoded.net/ltr/vertical-overlay/menu-header-fixed.html" data-i18n="nav.page_layout.vertical.header-fixed">
                                Dependents </a></li>
                        <li><a href="http://flatable.phoenixcoded.net/ltr/vertical-compact/menu-compact.html" data-i18n="nav.page_layout.vertical.compact"> Locations </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#!">
                        <i class="ti-layout-grid2-alt"></i>
                        <span data-i18n="nav.basic-components.main">Kasambahay</span>
                    </a>
                    <ul class="tree-1">
                        <li><a href="menu-static.html" data-i18n="nav.page_layout.vertical.static-layout"> Joblist </a></li>
                    </ul>
                </li>
                <li class="nav-item single-item">
                    <a href="widget.html">
                        <i class="ti-view-grid"></i>
                        <span data-i18n="nav.widget.main"> Languages</span>
                    </a>
                </li>
                <li class="nav-item single-item">
                    <a href="widget.html">
                        <i class="ti-view-grid"></i>
                        <span data-i18n="nav.widget.main"> Licenses</span>
                    </a>
                </li>
                <li class="nav-item single-item">
                    <a href="widget.html">
                        <i class="ti-view-grid"></i>
                        <span data-i18n="nav.widget.main"> Certificates</span>
                    </a>
                </li>
                <li class="nav-item single-item">
                    <a href="<?php echo base_url(); ?>ApplicantController/ApplicantDisabilities">
                        <i class="ti-view-grid"></i>
                        <span data-i18n="nav.widget.main"> Disabilities</span>
                    </a>
                </li>
                <li class="nav-item single-item">
                    <a href="widget.html">
                        <i class="ti-view-grid"></i>
                        <span data-i18n="nav.widget.main"> Preferred Locations</span>
                    </a>
                </li>
                <li class="nav-item single-item">
                    <a href="widget.html">
                        <i class="ti-view-grid"></i>
                        <span data-i18n="nav.widget.main"> Job Titles</span>
                    </a>
                </li>
                <li class="nav-item single-item">
                    <a href="widget.html">
                        <i class="ti-view-grid"></i>
                        <span data-i18n="nav.widget.main"> Education Courses</span>
                    </a>
                </li>               
                <li class="nav-title" data-i18n="nav.category.forms">
                    <i class="ti-line-dashed"></i>
                    <span>Transactions</span>
                </li>

                <li class="nav-item">
                    <a href="#!">
                        <i class="ti-layout-cta-btn-right"></i>
                        <span data-i18n="nav.json-form.main">Applicants</span>
                        <label class="label label-danger menu-caption">New</label>
                    </a>
                    <ul class="tree-1">
                        <li><a href="<?php echo base_url(); ?>applicants/add" data-i18n="nav.json-form.simple-form">Add Walk-in</a></li>
                        <li><a href="<?php echo base_url(); ?>applicants" data-i18n="nav.json-form.clubs-view">View List</a></li>
                        <li><a href="<?php echo base_url(); ?>job-applications" data-i18n="nav.json-form.customer-form">Job Applications</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#!">
                        <i class="ti-layout-cta-btn-right"></i>
                        <span data-i18n="nav.json-form.main">Establishment</span>
                        <label class="label label-danger menu-caption">New</label>
                    </a>
                    <ul class="tree-1">
                        <li><a href="<?php echo base_url(); ?>employers/add" data-i18n="nav.json-form.simple-form">Register New</a></li>
                        <li><a href="<?php echo base_url(); ?>employers" data-i18n="nav.json-form.clubs-view">View List</a></li>
                        <li><a href="json-forms/customer-form.html" data-i18n="nav.json-form.customer-form">Pending Accreditation</a></li>
                    </ul>
                </li> 
                <li class="nav-title" data-i18n="nav.category.tables">
                    <i class="ti-line-dashed"></i>
                    <span>Reports</span>
                </li>
                <li class="nav-title" data-i18n="nav.category.chart-and-maps">
                    <i class="ti-line-dashed"></i>
                    <span>Settings</span>
                    <label class="label label-info menu-caption">15P+ </label>
                </li>
                <li class="nav-title" data-i18n="nav.category.extension">
                    <i class="ti-line-dashed"></i>
                    <span>Extension</span>
                </li>
                <li class="nav-item single-item">
                    <a href="<?php echo base_url(); ?>changelogs">
                        <i class="ti-list"></i>
                        <span data-i18n="nav.change-loges.main">Change Logs</span>
                        <label class="label label-warning menu-caption">1.0</label>
                    </a>
                </li>   
            </ul>
        </div>
    </div>