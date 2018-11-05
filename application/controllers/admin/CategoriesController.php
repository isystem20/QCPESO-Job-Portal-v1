<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoriesController extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('admin/CategoriesModel','categmod');
    }

	public function Categories()
	{
		$data['categories'] = $this->categmod->LoadCategoryMasterlist();
		$layout = array('tables'=>TRUE);
		$this->load->view('layout/admin/1_css');
		$this->load->view('layout/admin/2_preloader');
		$this->load->view('layout/admin/3_topbar');
		$this->load->view('layout/admin/4_leftsidebar');
		$this->load->view('pages/maintenance/Categories',$data);
		$this->load->view('layout/admin/6_js',$layout);		
	}

	public function Create() {

		$this->form_validation->set_rules('name','Name','required|is_unique[tbl_applicants_categories.name]');


  		if ($this->form_validation->run() == FALSE){
            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);
        }
        else {
        	$postdata = $this->input->post();



        	echo json_encode(['success'=>TRUE]);
        }

	}

	public function Update() {

	}

	public function Delete() {

	}

	public function Read() {

	}



}