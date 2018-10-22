<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'HomeController';
$route['404_override'] = 'SiteErrorController/Error404';
$route['translate_uri_dashes'] = FALSE;


/* Applicant */


$route['login'] = 'HomeController/index';
$route['profile'] = 'ApplicantController/ApplicantResume';







/* Management View */

/* Log in */                            $route['manage/login'] = 'HomeController/AdminEmployeeLogin';



$route['manage/users-masterlist'] = 'UserController/UserMasterlist';


    /* Transactions */
    /* Applicants */ 
        /* Add walk-in */               $route['manage/do/applicants/add'] = 'ApplicantController/ApplicantRegistration';
        /* View List */                 $route['manage/do/applicants/view-list'] = 'ApplicantController/ApplicantMasterlist';
        /* Job Applications */          $route['manage/do/applicants/job-applications'] = 'ApplicationController/ApplicationMasterList';
    /* Establishment */ 
        /* Add new */                   $route['manage/do/establishments/add'] = 'EmployerController/EmployerRegistration';
        /* View List */                 $route['manage/do/establishments/view-list'] = 'EmployerController/EmployerMasterlist';
        /* Pending Accreditation */     





$route['manage/do/jobs/view-list'] = 'PostController/JobPost';





$route['changelog'] = 'HomeController/Changelog';

/* Developers */

$route['manage'] = 'HomeController/Dashboard';