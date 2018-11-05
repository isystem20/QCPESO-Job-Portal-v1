<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function EmployeeMasterlist()
	{
        $this->load->view('layout/css');
		$this->load->view('layout/top');
		$this->load->view('layout/menu-manage');
		$this->load->view('layout/right');
		$this->load->view('EmployeeMasterlist');
		$this->load->view('layout/js');	
		
	}
	
	public function EmployeeRegistration()
	{

		$this->load->view('EmployeeRegistration');
	}

	public function OverseasCondition()
	{
		$this->load->view('layout/css');
		$this->load->view('layout/top');
		$this->load->view('layout/menu-manage');
		$this->load->view('layout/right');
		$this->load->view('OverseasCondition');
		$this->load->view('layout/js');		
}

public function OverseasDependents()
	{
		$this->load->view('layout/css');
		$this->load->view('layout/top');
		$this->load->view('layout/menu-manage');
		$this->load->view('layout/right');
		$this->load->view('OverseasDependents');
		$this->load->view('layout/js');		
}

public function OverseasLocations()
	{
		$this->load->view('layout/css'); 	
		$this->load->view('layout/top');
		$this->load->view('layout/menu-manage');
		$this->load->view('layout/right');
		$this->load->view('OverseasLocations');
		$this->load->view('layout/js');		
}

public function PreferredLocation()
	{
		$layout = array('tables' => TRUE, );
		$this->load->model('admin/PreferredLocationModel','preferredlocationmodel');
		$data['preferredlocation'] = $this->preferredlocationmodel->Load_PreferredLocationModel_Masterlist();
		$this->load->view('layout/admin/1_css');
		$this->load->view('layout/admin/2_preloader');
		$this->load->view('layout/admin/3_topbar');
		$this->load->view('layout/admin/4_leftsidebar');
		$this->load->view('pages/maintenance/PreferredLocations',$data);
		$this->load->view('layout/admin/6_js',$layout);
		

	
				
}

public function JobTitles()
	{
    
    	$this->load->model('admin/JobTitleModel','jobtitlemodel');
        $layout = array('tables' => TRUE, );
        $data['joblist'] = $this->jobtitlemodel->Load_JobTitle_Masterlist();

		$this->load->view('layout/admin/1_css',$layout);
		$this->load->view('layout/admin/2_preloader');
		$this->load->view('layout/admin/3_topbar');
		$this->load->view('layout/admin/4_leftsidebar');
		$this->load->view('pages/maintenance/JobTitles', $data);
		$this->load->view('layout/admin/6_js',$layout);
	
}
public function EducationalCourses()
	{
		$this->load->view('layout/css');
		$this->load->view('layout/top');
		$this->load->view('layout/menu-manage');
		$this->load->view('layout/right');
		$this->load->view('EducationalCourses');
		$this->load->view('layout/js');		
}

}