<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statuspbmn extends CI_Controller {

	public function index()
	{
		$data['spbmn']	= $this->SpbmnModel->get();
		$this->load->view('user/satuankerja/status_penggunaan_bmn', $data);
	}
	
	public function index2()
	{
		$data['spbmn']	= $this->SpbmnModel->get();
		$this->load->view('user/satuankerja/verifikasi_status_penggunaan_bmn', $data);
	}

	public function unggah()
	{
		$pdf1	= $_FILES['pdf1']['name'];
		if ($pdf1 = ''){} else{
			$config ['upload_path'] = './assets/spbmn';
			$config ['allowed_types'] = 'pdf';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('pdf1')) {
				echo $this->upload->display_errors();
				die();
				echo "File gagal diunggah!";	
			}else {
				$pdf1	= $this->upload->data('file_name');
			}
		}

		$pdf2	= $_FILES['pdf2']['name'];
		if ($pdf2 = ''){} else{
			$config ['upload_path'] = './assets/spbmn';
			$config ['allowed_types'] = 'pdf';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('pdf2')) {
				echo $this->upload->display_errors();
				die();
				echo "File gagal diunggah!";	
			}else {
				$pdf2	= $this->upload->data('file_name');
			}
		}

		$pdf3	= $_FILES['pdf3']['name'];
		if ($pdf3 = ''){} else{
			$config ['upload_path'] = './assets/spbmn';
			$config ['allowed_types'] = 'pdf';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('pdf3')) {
				echo $this->upload->display_errors();
				die();
				echo "File gagal diunggah!";	
			}else {
				$pdf3	= $this->upload->data('file_name');
			}
		}

		$pdf4	= $_FILES['pdf4']['name'];
		if ($pdf4 = ''){} else{
			$config ['upload_path'] = './assets/spbmn';
			$config ['allowed_types'] = 'pdf';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('pdf4')) {
				echo $this->upload->display_errors();
				die();
				echo "File gagal diunggah!";	
			}else {
				$pdf4	= $this->upload->data('file_name');
			}
		}

		$xlsx	= $_FILES['xlsx']['name'];
		if ($xlsx = ''){} else{
			$config ['upload_path'] = './assets/spbmn';   
			$config['allowed_types']    = 'xls|xlsx';    
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('xlsx')) {
				echo $this->upload->display_errors();
				die();
				echo "File gagal diunggah!";	
			}else {
				$xlsx	= $this->upload->data('file_name');
			}
		}

		$data = array(
			'pdf1'		=> $pdf1,
			'pdf2'		=> $pdf2,
			'pdf3'		=> $pdf3,
			'pdf4'		=> $pdf4,
			'xlsx'		=> $xlsx
		);


		$this->Unggahfilemodel->unggahfile($data);
		redirect('User/Statuspbmn');
	}

}

?>