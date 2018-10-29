<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ApplicantModel extends CI_Model {

<<<<<<< HEAD
<<<<<<< HEAD
=======
	//select * from tbl_applicants where isActive = 1
	public function LoadApplicantList() {
=======
<<<<<<< HEAD
>>>>>>> a5003e46274d4135476a4d180ec52b11f2afde83


	//select * from tbl_applicants where isActive = 1
	public function LoadApplicantsList() {
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

	//select*from tbl_applicants where isActive = 1
	public function LoadApplicantsList(){
	
=======
>>>>>>> a5003e46274d4135476a4d180ec52b11f2afde83
	//select * from tbl_applicants where isActive = 1

	public function LoadApplicantList() {

>>>>>>> 1631021f8115fefd885e7eb0db8def04a5fb6921
<<<<<<< HEAD
=======
>>>>>>> 112abf1ea0581356f82a30184ddcfe54f79c03a7
>>>>>>> a5003e46274d4135476a4d180ec52b11f2afde83
		$this->db->select('*');
		$this->db->from('tbl_applicants');
		// $this->db->where('isActive','1');
		return $this->db->get();
<<<<<<< HEAD
	}

<<<<<<< HEAD
=======
<<<<<<< HEAD
 }
=======
}
>>>>>>> 282a1e2482634c04eeb0a9182f24e1ea1e5e54aa
=======
<<<<<<< HEAD
	}
}
>>>>>>> a5003e46274d4135476a4d180ec52b11f2afde83
=======


	}


<<<<<<< HEAD
>>>>>>> 1631021f8115fefd885e7eb0db8def04a5fb6921
}
=======
}
>>>>>>> 1631021f8115fefd885e7eb0db8def04a5fb6921
>>>>>>> 112abf1ea0581356f82a30184ddcfe54f79c03a7
>>>>>>> a5003e46274d4135476a4d180ec52b11f2afde83
