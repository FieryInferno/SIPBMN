<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sementarabmn extends CI_Controller {

	public function index()
	{
		$data['spbmn']	= $this->PhbmnModel->getSementara();
		$this->load->view('user/satuankerja/sementara_bmn', $data);
	}

	public function index2()
	{
		$data['phbmn']	= $this->PhbmnModel->getSementara();
		$this->load->view('user/satuankerja/verifikasi_sementara_bmn', $data);
	}

}

?>