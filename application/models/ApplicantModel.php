<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ApplicantModel extends CI_Model {

<<<<<<< HEAD
	//select * from tbl_applicants where isActive = 1
	public function LoadApplicantList() {
=======
<<<<<<< HEAD

	//select*from tbl_applicants where isActive = 1
	public function LoadApplicantsList(){
	
=======
	//select * from tbl_applicants where isActive = 1

	public function LoadApplicantList() {

>>>>>>> 1631021f8115fefd885e7eb0db8def04a5fb6921
>>>>>>> 112abf1ea0581356f82a30184ddcfe54f79c03a7
		$this->db->select('*');
		$this->db->from('tbl_applicants');
		// $this->db->where('isActive','1');
		return $this->db->get();
<<<<<<< HEAD
	}

 }
=======
<<<<<<< HEAD
	}
}
=======


	}


}
>>>>>>> 1631021f8115fefd885e7eb0db8def04a5fb6921
>>>>>>> 112abf1ea0581356f82a30184ddcfe54f79c03a7
