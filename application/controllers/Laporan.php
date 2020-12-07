<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
	
	public function index()
	{
        $data['laporan']    = $this->GetLaporanmodel->get();
        $this->load->view('user/satuankerja/laporanUser', $data);
	}
}
