<?php

class Laporanmodel extends CI_Model{

	private $table	= 'laporan';

	public function tampildata()
	{
		return $this->db->get('laporan');
	}

	public function unggahlaporan($data){
		$this->db->insert($this->table, $data);
	}

	public function find($id)
	{
		$result = $this->db->where('idfile',$id)
						->limit(1)
						->get('laporan');
		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return array();
		}
	}
}