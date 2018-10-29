<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ApplicantController extends CI_Controller {


	public function ApplicantMasterlist()
	{
		
		$data = array('tables' => TRUE);
<<<<<<< HEAD
		$this->load->model('ApplicantModel','appmodel');
		$data['applicants'] = $this->appmodel->LoadApplicantsList();
		// print_r($data);
		// die();
		$this->load->view('layout/css', $data);
=======
<<<<<<< HEAD
		$this->load->model('ApplicantModel','appmodel');
<<<<<<< HEAD
		$data['applicants'] = $this->appmodel->LoadApplicantList();
=======
		$data['applicants'] = $this->appmodel->LoadApplicantsList();
		// print_r($data);
		// die();
		$this->load->view('layout/css', $data);
>>>>>>> 282a1e2482634c04eeb0a9182f24e1ea1e5e54aa
=======

		$this->load->model('ApplicantModel','AppModel');
		$data['applicants'] = $this->AppModel->LoadApplicantList();

>>>>>>> 112abf1ea0581356f82a30184ddcfe54f79c03a7
		// print_r($data);
		// die();
        $this->load->view('layout/css', $data);
>>>>>>> 112abf1ea0581356f82a30184ddcfe54f79c03a7
>>>>>>> a5003e46274d4135476a4d180ec52b11f2afde83
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