<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class GetLaporanmodel extends CI_Model {
	
    public function get()
    {
        return $this->db->get('laporan')->result();
    }
}