<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class LanguageModel extends CI_Model {

		public function Load_LanguageModel() {
			$this->db->select('*');
			$this->db->from('tbl_applicants_lang_read');
			return $this->db->get();
		}

	}
