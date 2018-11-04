<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ApplicantModel extends CI_Model {


	//select * from tbl_applicants where isActive = 1
	public function LoadApplicantsList() {

		$this->db->select('*');
		$this->db->from('tbl_applicants_lang_read');
		// $this->db->where('isActive','1');
		return $this->db->get();

	}

}