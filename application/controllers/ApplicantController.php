<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ApplicantController extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function ApplicantMasterlist()
	{
		$data = array('tables' => TRUE);
        $this->load->view('layout/css', $data);
		$this->load->view('layout/top');
		$this->load->view('layout/menu-app');
		$this->load->view('layout/right');
		$this->load->view('ApplicantMasterlist');
		$this->load->view('layout/js', $data);	
			
	}

	public function ApplicantRegistration()
{
$this->load->view('layout/css');
$this->load->view('layout/top');
$this->load->view('layout/menu-app');
$this->load->view('layout/right');
$this->load->view('ApplicantRegistration');
$this->load->view('layout/js');
}

	public function ApplicantDisabilities()
		{
	        $this->load->view('layout/css');
			$this->load->view('layout/top');
			$this->load->view('layout/menu-app');
			$this->load->view('layout/right');
			$this->load->view('ApplicantDisabilities');
			$this->load->view('layout/js');	 
				
		}
	public function Certificate()
		{
	        $this->load->view('layout/css');
			$this->load->view('layout/top');
			$this->load->view('layout/menu-app');
			$this->load->view('layout/right');
			$this->load->view('Certificate');
			$this->load->view('layout/js');	 
				
		}
public function KasambahayJoblist()
	{
		$this->load->view('layout/css');
		$this->load->view('layout/top');
		$this->load->view('layout/menu-app');
		$this->load->view('layout/right');
		$this->load->view('KasambahayJoblist');
		$this->load->view('layout/js');		
		
	}
		
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */