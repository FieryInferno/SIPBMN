<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function index()
	{
		$data['laporan']	= $this->GetLaporanmodel->get();
		$this->load->view('user/satuankerja/laporan', $data);
	}
	
	public function index2()
	{
		$data['laporan']	= $this->GetLaporanmodel->get();
		$this->load->view('user/satuankerja/laporan_bmn', $data);
	}

	public function index3()
	{
		$data['laporan']	= $this->GetLaporanmodel->get();
		$this->load->view('user/satuankerja/laporan_bmn_bk', $data);
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

		$xlsx1	= $_FILES['xlsx1']['name'];
		if ($xlsx1 = ''){} else{
			$config ['upload_path'] = './assets/spbmn';
			$config ['allowed_types'] = 'xls|xlsx';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('xlsx1')) {
				echo $this->upload->display_errors();
				die();
				echo "File gagal diunggah!";	
			}else {
				$xlsx1	= $this->upload->data('file_name');
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

		$xlsx2	= $_FILES['xlsx2']['name'];
		if ($xslx2 = ''){} else{
			$config ['upload_path'] = './assets/spbmn';
			$config ['allowed_types'] = 'xls|xlsx';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('xlsx2')) {
				echo $this->upload->display_errors();
				die();
				echo "File gagal diunggah!";	
			}else {
				$xlsx2	= $this->upload->data('file_name');
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

		$xlsx3	= $_FILES['xlsx3']['name'];
		if ($xlsx3 = ''){} else{
			$config ['upload_path'] = './assets/spbmn';
			$config ['allowed_types'] = 'xlsx|xlsx';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('xlsx3')) {
				echo $this->upload->display_errors();
				die();
				echo "File gagal diunggah!";	
			}else {
				$xlsx3	= $this->upload->data('file_name');
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

		$xlsx4	= $_FILES['xlsx4']['name'];
		if ($xlsx = ''){} else{
			$config ['upload_path'] = './assets/spbmn';   
			$config['allowed_types']    = 'xls|xlsx';    
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('xlsx4')) {
				echo $this->upload->display_errors();
				die();
				echo "File gagal diunggah!";	
			}else {
				$xlsx4	= $this->upload->data('file_name');
			}
		}

		$data = array(
			'pdf1'		=> $pdf1,
			'xlsx1'		=> $xlsx1,
			'pdf2'		=> $pdf2,
			'xlsx2'		=> $xlsx2,
			'pdf3'		=> $pdf3,
			'xlsx3'		=> $xlsx3,
			'pdf4'		=> $pdf4,
			'xlsx4'		=> $xlsx4
		);


		$this->laporanmodel->unggahlaporan($data);
		redirect('User/Laporan');
	}

}

?>