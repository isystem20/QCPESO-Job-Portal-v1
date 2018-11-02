<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoggedUserController extends CI_Controller {

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


	public function UserHome()
		{
	        $this->load->view('layout/css');
			$this->load->view('layout/top');
			$this->load->view('layout/menu-app');
			$this->load->view('layout/right');
			$this->load->view('ApplicantResume');
			$this->load->view('layout/js');	 
				
		}

	public function SearchJobs()
		{
	        $this->load->view('layout/css');
			$this->load->view('layout/top');
			$this->load->view('layout/menu-app');
			$this->load->view('layout/right');
			$this->load->view('BrowseJobs');
			$this->load->view('layout/js');	 
				
		}
	public function SavedJobs()
		{
	        $this->load->view('layout/css');
			$this->load->view('layout/top');
			$this->load->view('layout/menu-app');
			$this->load->view('layout/right');
			$this->load->view('SavedJobs');
			$this->load->view('layout/js');	 
				
		}
	public function UserApplications()
		{
	        $this->load->view('layout/css');
			$this->load->view('layout/top');
			$this->load->view('layout/menu-app');
			$this->load->view('layout/right');
			$this->load->view('UserApplications');
			$this->load->view('layout/js');	 
				
		}
	public function UserAlerts()
		{
	        $this->load->view('layout/css');
			$this->load->view('layout/top');
			$this->load->view('layout/menu-app');
			$this->load->view('layout/right');
			$this->load->view('UserAlerts');
			$this->load->view('layout/js');	 
				
		}
	public function AskPeso()
		{
	        $this->load->view('layout/css');
			$this->load->view('layout/top');
			$this->load->view('layout/menu-app');
			$this->load->view('layout/right');
			$this->load->view('AskPeso');
			$this->load->view('layout/js');	 
				
		}
	public function Settings()
		{
	        $this->load->view('layout/css');
			$this->load->view('layout/top');
			$this->load->view('layout/menu-app');
			$this->load->view('layout/right');
			$this->load->view('Settings');
			$this->load->view('layout/js');	 
				
		}

}
