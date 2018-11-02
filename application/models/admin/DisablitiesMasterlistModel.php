<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class ApplicantDisablitiesModel extends CI_Model {

		public function Load_ApplicantDisablitiesModel_Masterlist() {
			$this->db->select('*');
			$this->db->from('tbl_applicants_disabilities');
			return $this->db->get();

		}

	}