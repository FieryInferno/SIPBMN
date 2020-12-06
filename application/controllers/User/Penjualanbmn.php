<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualanbmn extends CI_Controller {

	public function index()
	{
		$data['spbmn']	= $this->PhbmnModel->getPenjualan();
		$this->load->view('user/satuankerja/penjualan_bmn', $data);
	}

	public function index2()
	{
		$data['phbmn']	= $this->PhbmnModel->getPenjualan();
		$this->load->view('user/satuankerja/verifikasi_penjualan_bmn', $data);
	}


}

?>