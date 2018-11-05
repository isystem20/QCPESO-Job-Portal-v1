<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class JobTitleModel extends CI_Model {

		public function Load_JobTitles_Masterlist() {
			$this->db->select('*');
			$this->db->from('tbl_jobs_list');
			return $this->db->get();

		}

	}