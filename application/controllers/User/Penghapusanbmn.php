<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penghapusanbmn extends CI_Controller {

	public function index()
	{
		$data['spbmn']	= $this->PhbmnModel->getPenghapusan();
		$this->load->view('user/satuankerja/penghapusan_bmn', $data);
	}

	public function index2()
	{
		$data['phbmn']	= $this->PhbmnModel->getPenghapusan();
		$this->load->view('user/satuankerja/verifikasi_penghapusan_bmn', $data);
	}

}

?>