<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LicenseController extends CI_Controller {

/**
* Index Page for this controller.
*
* Maps to the following URL
* http://example.com/­index.php/welcome
*	- or -
* http://example.com/­index.php/welcome/­index
*	- or -
* Since this controller is set as the default controller in
* config/routes.php, it's displayed at http://example.com/
*
* So any other public methods not prefixed with an underscore will
* map to /index.php/welcome/­<method_name>
* @see https://­codeigniter.com/­user_guide/general/­urls.html
*/


public function LicenseList()
{


$this->load->model('LicenseModel','licensemodel');
$data['license'] = $this->licensemodel->Load_LicenseModel_Masterlist();
$this->load->view('layout/css');
$this->load->view('layout/top');
$this->load->view('layout/menu-manage');
$this->load->view('layout/right');
$this->load->view('LicenseList',$data);
$this->load->view('layout/js');	
}


}