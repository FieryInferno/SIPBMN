<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hibahbmn extends CI_Controller {

	public function index()
	{
		$data['spbmn']	= $this->PhbmnModel->get();
		$this->load->view('user/satuankerja/hibah_bmn', $data);
	}

	public function index2()
	{
		$data['phbmn']	= $this->PhbmnModel->get();
		$this->load->view('user/satuankerja/verifikasi_hibah_bmn', $data);
	}

}

?>