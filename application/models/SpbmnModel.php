<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SpbmnModel extends CI_Model {
	
    public function get()
    {
        return $this->db->get('spbmn')->result();
    }
}