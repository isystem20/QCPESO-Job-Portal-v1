<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthenticationController extends CI_Controller {


	public function LoginPage()
	{
		$layout = array('login' => TRUE, );
		$this->load->view('layout/admin/1_css',$layout);
		$this->load->view('layout/admin/2_preloader',$layout);
		$this->load->view('auth/LoginPage');
		$this->load->view('layout/admin/6_js');	
	}


}