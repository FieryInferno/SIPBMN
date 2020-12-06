<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class BmnModel extends CI_Model {
	
    public function getPemusnahan()
    {
        return $this->db->get('pemusnahan')->result_array();
    }
}
