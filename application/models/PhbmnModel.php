<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PhbmnModel extends CI_Model {
	
    public function get()
    {
        return $this->db->get('2phbmn')->result();
    }

    public function getPenjualan()
    {
        return $this->db->get('3pbmn')->result();
    }

    public function getPenghapusan()
    {
        return $this->db->get('3pbmnksl')->result();
    }

    public function getSementara()
    {
        return $this->db->get('3psbmn')->result();
    }
}