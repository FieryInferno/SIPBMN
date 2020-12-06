<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function index()
	{
	 $this->load->view('user/home_user');	
	}

    public function index2()
	{
	 $this->load->view('user/satuankerja/home_user');
	}

	public function index3()
	{
		$this->load->view('user/satuankerja/home_user2');
	}

	public function logout() {
        $username = $_SESSION['USERNAME'];
		$user = $this->db->get_where('user', array('username' => $username))->row_array();
        session_destroy();
			echo "<script>
				alert('Anda telah logout dari SIPBMN');
				</script>";
				 header('location:'.base_url().'index.php/Guest/index');
       
    }
}