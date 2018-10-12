<!DOCTYPE html>
<html lang="en">

   <head>
      <title>QC PESO System Development Change Log</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Phoenixcoded">
      <meta name="keywords" content=", Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
      <meta name="author" content="Phoenixcoded">
      <link rel="icon" href="<?php echo base_url(); ?>themes/ltr/vertical-static/assets/images/favicon.ico" type="image/x-icon">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>themes/bower_components/bootstrap/dist/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>themes/ltr/vertical-static/assets/icon/themify-icons/themify-icons.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>themes/ltr/vertical-static/assets/icon/simple-line-icons/css/simple-line-icons.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>themes/ltr/vertical-static/assets/icon/icofont/css/icofont.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>themes/ltr/vertical-static/assets/pages/flag-icon/flag-icon.min.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>themes/ltr/vertical-static/assets/pages/menu-search/css/component.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>themes/ltr/vertical-static/assets/pages/prism/prism.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>themes/ltr/vertical-static/assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>themes/ltr/vertical-static/assets/css/color/color-1.css" id="color" />
   </head>

   <body class="menu-static">
      <div class="theme-loader">
         <div class="ball-scale">
            <div></div>
         </div>
      </div>
      <nav class="navbar header-navbar" style="position: fixed; width: 100%; z-index: 99">
         <div class="navbar-wrapper">
            <div class="navbar-logo">
               <a class="mobile-menu" id="mobile-collapse" href="#!">
               <i class="ti-menu"></i>
               </a>
               <a class="mobile-search morphsearch-search" href="#">
               <i class="ti-search"></i>
               </a>
               <a href="index-2.html">
               <img class="img-fluid" src="<?php echo base_url(); ?>themes/ltr/vertical-static/assets/images/qcpesologo.png" alt="Theme-Logo" />
               </a>
               <a class="mobile-options">
               <i class="ti-more"></i>
               </a>
            </div>
            <div class="navbar-container container-fluid">
               <div>
                  <ul class="nav-left">
<!--                      <li>
                        <a id="collapse-menu" href="#">
                        <i class="ti-menu"></i>
                        </a>
                     </li> -->
                     <li>
                        <a href="#!" onclick="javascript:toggleFullScreen()">
                        <i class="ti-fullscreen"></i>
                        </a>
                     </li>
                  </ul>

               </div>
            </div>
         </div>
      </nav>
      <div class="main-menu" style="position: fixed;margin-top:56px;">
         <div class="main-menu-header">
            <img class="img-40" src="<?php echo base_url(); ?>themes/ltr/vertical-static/assets/images/user.png" alt="User-Profile-Image">
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

      <div class="main-body">
         <div class="page-wrapper">
            <div class="page-header" style="margin-top:56px;">
               <div class="page-header-title">
                  <h4>Changelog</h4>
                  <span>This page shows the records of all notable changes made to this Capstone project.</span>
               </div>
               <div class="page-header-breadcrumb">
                  <ul class="breadcrumb-title">
                     <li class="breadcrumb-item">
                        <a href="index-2.html">
                        <i class="icofont icofont-home"></i>
                        </a>
                     </li>
                     <li class="breadcrumb-item"><a href="#!">Development</a></li>
                     <li class="breadcrumb-item"><a href="#!">Change Log</a></li>
                  </ul>
               </div>
            </div>
            <div class="page-body">
               <div class="row">
                  <div class="col-sm-3">
                     <div id="navigation">
                        <div class="row">
                           <div class="col-lg-12">
                              <div class="card version">
                                 <div class="card-header">
                                    <h5>Change log</h5>
                                    <div class="card-header-right">
                                       <i class="icofont icofont-navigation-menu"></i>
                                    </div>
                                 </div>
                                 <div class="card-block">

                                    <ul class="nav navigation">
                                       <li class="navigation-header"><i class="icon-history pull-right"></i> <b>Version history</b></li>
                                       <li>
                                          <a href="#release">Initial release <span class="text-muted text-regular pull-right">09.10.2018</span></a>
                                       </li>
                                       <li class="navigation-divider"></li>
                                       <li class="navigation-header"><i class="icon-gear pull-right"></i> <b>Extras</b></li>
                                       <li>
                                          <a href="https://www.facebook.com/oblivionpen" target="_blank"><i class="icofont icofont-speech-comments m-r-5"></i> Contact me</a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-9">

                     <div class="row">
                        <div class="col-sm-12">
                           <div class="card" id="release">
                              <div class="card-header">
                                 <h5>Initial release</h5>
                                 <span>QCPESO is in active development.</span>
                                 <div class="card-header-right">
                                    <span class="text-muted heading-text m-r-5">October 9, 2018</span>
                                    <label class="label label-info">V.1.0</label>
                                 </div>
                              </div>
                              <div class="card-block">
                                 <p class="content-group">QCPESO is in active development. All updates will be properly documented and explained, to make your upgrade process as easy as possible. In all new updates will be included: bug fixing, new functionality, plugins version control and code improvement. Feel free to contact me if you have any suggestions or requests!</p>
                                 <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-xs">
                                       <thead>
                                          <tr>
                                             <th>Name</th>
                                             <th>Role</th>
                                             <th>Description</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <th colspan="3" class="active">System Development</th>
                                          </tr>
                                          <tr>
                                             <td>Karl Adriane Novella</td>
                                             <td>Vice Project Manager / Developer</td>
                                             <td>User Login Module</td>
                                          </tr>
                                          <tr>
                                             <td>Kent Pedrocha</td>
                                             <td>QA Manager / Developer</td>
                                             <td>Error Landing Module</td>
                                          </tr>
                                          <tr>
                                             <td>Rodney Salvador</td>
                                             <td>QA Specialist</td>
                                             <td>Applicant Masterlist Module</td>
                                          </tr>
                                          <tr>
                                             <td>Raymund Gavina</td>
                                             <td>Graphics Manager / Developer</td>
                                             <td>Employee Masterlist Module</td>
                                          </tr>
                                          <tr>
                                             <td>Marvin Simplicio</td>
                                             <td>Frontend Developer</td>
                                             <td>Employee Registry Module</td>
                                          </tr>
                                          <tr>
                                             <td>Mark Joseph Austero</td>
                                             <td>Business Analyst / Developer</td>
                                             <td>Employer Registry Module</td>
                                          </tr>
                                          <tr>
                                             <td>John Christian Fiedalan</td>
                                             <td>Backend Developer</td>
                                             <td>Dashboard Module</td>
                                          </tr>
                                          <tr>
                                             <td>Jemeron Dela Cruz</td>
                                             <td>Graphics / Frontend Developer</td>
                                             <td>Applicant Resume Module</td>
                                          </tr>
                                          <tr>
                                             <td>Joyce Lamena</td>
                                             <td>Backend Developer</td>
                                             <td>Applicant Registry Module</td>
                                          </tr>
                                          <tr>
                                             <td>Kurt Russel Siggaoat</td>
                                             <td>Backend Developer</td>
                                             <td>Applicant Registry Module</td>
                                          </tr>
                                          <tr>
                                             <td>Diego S. Dillague</td>
                                             <td>QA Specialist / Backend Developer</td>
                                             <td>Employer Masterlist Module</td>
                                          </tr>
                                          <tr>
                                             <td>Christian Asid</td>
                                             <td>Frontend Developer</td>
                                             <td>Job Application Module</td>
                                          </tr>
                                          <tr>
                                             <td>John Perry Carpio</td>
                                             <td>Technical Manager / System Architech</td>
                                             <td>Product and Database Design</td>
                                          </tr>                                          
                                          <tr>
                                             <th colspan="3" class="active">System Documentation</th>
                                          </tr>
                                          <tr>
                                             <td>Jonathan Ramos</td>
                                             <td>Project Manager / Backend Developer</td>
                                             <td rowspan="4" style="vertical-align: middle;">Project Background, <br>RRLS, <br>Technical Specifications</td>
                                          </tr>
                                          <tr>
                                             <td>Diana Joyce De Guzman</td>
                                             <td>Business Analyst</td>
                                             <!-- <td>Project Background, RRLS, Technical Specifications</td> -->
                                          </tr>
                                          <tr>
                                             <td>Camille Camota</td>
                                             <td>Front-end Developer</td>
                                             <!-- <td>Project Background, RRLS, Technical Specifications</td> -->
                                          </tr>
                                          <tr>
                                             <td>Mark Joseph Austero</td>
                                             <td>Business Analyst / Developer</td>
                                             <!-- <td>Project Background, RRLS, Technical Specifications</td> -->
                                          </tr>
                                       </tbody>
                                    </table>
                                    This initial release is not fully updated. Some links and images are broken. Main menu is not updated.
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <script type="text/javascript" src="<?php echo base_url(); ?>themes/bower_components/jquery/dist/jquery.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>themes/bower_components/jquery-ui/jquery-ui.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>themes/bower_components/tether/dist/js/tether.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>themes/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>themes/bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>themes/bower_components/modernizr/modernizr.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>themes/bower_components/modernizr/feature-detects/css-scrollbars.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>themes/bower_components/classie/classie.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>themes/ltr/vertical-static/assets/pages/prism/custom-prism.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>themes/bower_components/i18next/i18next.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>themes/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>themes/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>themes/bower_components/jquery-i18next/jquery-i18next.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>themes/ltr/vertical-static/assets/js/script.js"></script>
   </body>
 
 	<style type="text/css">
	.table.table-xs td, .table.table-xs th {
		padding: 1em;
	}
	td{
    word-wrap:break-word !important;
	}
 	</style>
   <script>
      $(document).ready(function() {
      	$('.main-menu-content').css({ 'width' : '240px'});
      	$('#navigation').css({ 'width' : '220px'});
          function fixDiv() {
      		$('.main-menu-content').css({ 'width' : '240px'});
              var $cache = $('#navigation');
              var $header = $('.main-menu-header');

              if ($(window).scrollTop() > 100) {
      				// $header
                  $cache.css({
                      'position': 'fixed',
                      'top': '80px',
                  });
              } else {
      
                  $cache.css({
                      'position': '',
                      'top': '',
                      'width':'220px'
                  });
              }
      
          };
          $(window).on('scroll', function() {
      		$('.main-menu-content').css({ 'width' : '240px'});
              fixDiv();
          });
          $(window).on('load', function() {
      		  $('.main-menu-content').css({ 'width' : '240px'})
              fixDiv();
          });
      });
   </script>
</html>          <!--   -->