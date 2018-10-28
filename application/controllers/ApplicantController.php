<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ApplicantController extends CI_Controller {


	public function ApplicantMasterlist()
	{
		$data = array('tables' => TRUE);
		$this->load->model('ApplicantModel','appmodel');
		$data['applicants'] = $this->appmodel->LoadApplicantsList();
		// print_r($data);
		// die();
		$this->load->view('layout/css', $data);
		$this->load->view('layout/top');
		$this->load->view('layout/menu-manage');
		$this->load->view('layout/right');
		$this->load->view('ApplicantMasterlist',$data);
		$this->load->view('layout/js', $data);	
			
	}

	public function ApplicantRegistration()
{
	
$this->load->view('layout/css');
$this->load->view('layout/top');
$this->load->view('layout/menu-manage');
$this->load->view('layout/right');
$this->load->view('ApplicantRegistration');
$this->load->view('layout/js');
}

	public function DisabilitiesMasterlist()
		{

		$this->load->model('ApplicantDisablitiesModel','applicantdisabilities');
		$data['applicantdisablities'] = $this->applicantdisabilities->Load_ApplicantDisablitiesModel_Masterlist();
		$layout = array('tables' => TRUE, );
        $this->load->view('layout/css',$layout);
		$this->load->view('layout/top');
		$this->load->view('layout/menu-manage');
		$this->load->view('layout/right');
		$this->load->view('DisabilitiesMasterlist',$data);
		$this->load->view('layout/js',$layout);	 
			

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

		public function EditApplicantProfile()
	{
		$this->load->view('layout/css');
		$this->load->view('layout/top');
		$this->load->view('layout/menu-app');
		$this->load->view('layout/right');
		$this->load->view('EditApplicantProfile');
		$this->load->view('layout/js');		
		
	}



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */