<?php

class Unggahfilemodel extends CI_Model{

	private $table	= 'spbmn';

	public function tampildata()
	{
		return $this->db->get('spbmn');
	}

	public function unggahfile($data){
		$this->db->insert($this->table, $data);
	}

	public function find($id)
	{
		$result = $this->db->where('idfile',$id)
						->limit(1)
						->get('spbmn');
		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return array();
		}
	}
}