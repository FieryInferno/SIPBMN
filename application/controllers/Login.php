<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 
	 public function index()
	{
		$username = $this->input->post("username");
        $password = $this->input->post("password");
        $cnt = $this->db->get_where('user', array('username' => $username, 'password' => $password))->num_rows();
        $user = $this->db->get_where('user', array('username' => $username))->row_array();
        $this->username = $username;
            if ($cnt > 0 && $user['level'] == 'admin') 
			{
                //array_push($user);
                $_SESSION['username'] = $user['username'];
				$_SESSION['nama'] = $user['nama'];
				$_SESSION['level'] = $user['level'];
				echo "<script>
				alert('Login User Administrator Berhasil');
				
				</script>";
				header('location:'.base_url().'index.php/Admin/Admin/index');
           
            } else if ($cnt > 0 && $user['level'] == 'user')
			{
                //array_push($user);
                $_SESSION['username'] = $user['username'];
				$_SESSION['nama'] = $user['nama'];
				$_SESSION['level'] = $user['level'];
                echo "<script>
				alert('Login User Berhasil');
				
				</script>";
				header('location:'.base_url().'index.php/User/User/index');

            } else if ($cnt > 0 && $user['level'] == 'user2')
			{
                //array_push($user);
                $_SESSION['username'] = $user['username'];
				$_SESSION['nama'] = $user['nama'];
				$_SESSION['level'] = $user['level'];
                echo "<script>
				alert('Login User Berhasil');
				
				</script>";
				header('location:'.base_url().'index.php/User/User/index2');

             } else if ($cnt > 0 && $user['level'] == 'admin2')
			{
                //array_push($user);
                $_SESSION['username'] = $user['username'];
				$_SESSION['nama'] = $user['nama'];
				$_SESSION['level'] = $user['level'];
                echo "<script>
				alert('Login BMN Berhasil');
				
				</script>";
				header('location:'.base_url().'index.php/User/User/index3');
            }
			
				 else
			{
			    echo "<script>
				alert('Login User Tidak Berhasil');
				</script>";
                header('location:'.base_url().'index.php/Guest/beranda_login');
            }
	}
	public function admin()
	{
	 $this->load->view('admin/home_admin');	
	}
	
	public function user()
	{
	 $this->load->view('user/home_user');	
	}
	public function user2()
	{
	 $this->load->view('user/satuankerja/home_user');	
	}

	public function logout() {
        $username = $_SESSION['USERNAME'];
		$user = $this->db->get_where('user', array('username' => $username))->row_array();
        session_destroy();
			echo "<script>
				alert('Anda telah logout dari sistem informasi perpustakaan');
				</script>";
				 header('location:'.base_url().'index.php/Guest/index');
       
    }
}
