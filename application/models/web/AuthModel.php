<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AuthModel extends CI_Model {


    function __construct() {
        parent::__construct();
        $this->load->library('Uuid');
    }


	public function RegisterApplicant($data) {
		$this->db->trans_begin();
		$id = $this->uuid->v4();
		$this->db->set('id',"'".$id."'",FALSE);

		if ($this->db->trans_status() === FALSE)
		{
		        $this->db->trans_rollback();
		}
		else
		{
		        $this->db->trans_commit();
		}
	}


}