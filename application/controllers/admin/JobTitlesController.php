<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JobTitlesController extends CI_Controller {


	public function JobTitles()
	{
    	
	
    	$this->load->model('admin/JobTitleModel','jobtitlemodel');
        $data['joblist'] = $this->jobtitlemodel->Load_JobTitle_Masterlist();
		$layout = array('tables' => TRUE, );


		$this->load->view('layout/admin/1_css');
		$this->load->view('layout/admin/2_preloader');
		$this->load->view('layout/admin/3_topbar');
		$this->load->view('layout/admin/4_leftsidebar');
		$this->load->view('pages/maintenance/JobTitles',$data);
		$this->load->view('layout/admin/6_js',$layout);
		

	}

}


