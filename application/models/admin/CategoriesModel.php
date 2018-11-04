<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class CategoriesModel extends CI_Model {

		public function LoadCategoryMasterlist() {
			$this->db->select('*');
			$this->db->from('tbl_applicants_categories');
			return $this->db->get();
		}


		public function Add($data) {
			if (empty($this->session->userdata('userid'))) {
				$user = 'DEV STAGE';
			}
			else {
				$user = $this->session->userdata('userid');
			}
			$this->db->set('name',"'".$data['name']."'",FALSE);
			$this->db->set('description',"'".$data['description']."'",FALSE);
			$this->db->set('createdById',"'".$data['description']."'",FALSE);
		}


	}