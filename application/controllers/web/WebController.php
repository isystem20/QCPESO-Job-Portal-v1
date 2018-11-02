<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WebController extends CI_Controller {

public function JobShow()
	{
		$this->load->view('layout/css');
		$this->load->view('layout/top');
		$this->load->view('layout/menu-manage');
		$this->load->view('layout/right');
		$this->load->view('JobShow');
		$this->load->view('layout/js');		
		
	}
	
	
	
}
