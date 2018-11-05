<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthenticationController extends CI_Controller {


	public function LoginPage()
	{
		
		$this->load->view('layout/admin/1_css',$data);
		$this->load->view('layout/admin/2_preloader');
		$this->load->view('auth/LoginPage');
		$this->load->view('layout/admin/6_js',$layout);	
	}


}