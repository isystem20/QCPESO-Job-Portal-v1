<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ApplicantModel extends CI_Model {

<<<<<<< HEAD

	//select*from tbl_applicants where isActive = 1
	public function LoadApplicantsList(){
=======
	//select * from tbl_applicants where isActive = 1

	public function LoadApplicantList() {

>>>>>>> 1631021f8115fefd885e7eb0db8def04a5fb6921
		$this->db->select('*');
		$this->db->from('tbl_applicants');
		// $this->db->where('isActive','1');
		return $this->db->get();
<<<<<<< HEAD
	}
=======


	}


>>>>>>> 1631021f8115fefd885e7eb0db8def04a5fb6921
}