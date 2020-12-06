<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

 	public function __construct()
        {   
            parent::__construct();
			date_default_timezone_set('Asia/Jakarta');
            //$this->load->library('Pdf');
	        //session_start();
        }
	
	public function index()
	{
	 $data["page"] = "home_admin";
	 $this->load->view('admin/home_admin',$data);	
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
	//Management User
	public function data_admin() {
	$data = $this->adminmodel->GetAdmin();
	$this->load->view('admin/data_admin',array('data' => $data));		
	}
	
	public function data_user() {
	
	$data = $this->mahasiswamodel->GetMahasiswa();
	$this->load->view('admin/data_user',array('data' => $data));		
	}
	
	public function input_user() {
	
	$this->load->view('admin/input_user');
	}

	
	public function do_input_user(){
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$nama = $_POST['nama'];
	$jk = $_POST['jk'];
	$tempat= $_POST['tempat'];
	$lahir = $_POST['lahir'];
	$fakultas = $_POST['fakultas'];
	$jurusan = $_POST['jurusan'];
	$tahun = $_POST['tahun'];
	$alamat = $_POST['alamat'];
	$email = $_POST['email'];
	$hp = $_POST['hp'];
	$foto = '-';
	$level = 'user';
	
	$data = array('username' => $username,'password' => $password,'nama' => $nama,'jk' => $jk,'tempat' => $tempat,'lahir' => $lahir,'fakultas' => $fakultas,'jurusan' => $jurusan,'tahun' => $tahun,'alamat' => $alamat,'email' => $email,'hp' => $hp,'foto' => $foto,'level' => $level);
	$res=$this->mahasiswamodel->InsertData('user',$data);
		if($res >= 1){
		echo "<script>
		alert('Input Data User Berhasil');
		window.location.href='data_user';
		</script>";
		}else{
		echo "<script>
		alert('Input Data User Gagal');
		window.location.href='data_user';
		</script>";	
	    }
	}
	
	
	public function edit_user($username) {
	    $user = $this->mahasiswamodel->GetMahasiswa("where username ='$username'");
		$data= array(
		'username' => $user[0]['username'],
		'password' => $user[0]['password'],
		'nama' => $user[0]['nama'],
		'jk' => $user[0]['jk'],
		'tempat' => $user[0]['tempat'],
		'lahir' => $user[0]['lahir'],
		'fakultas' => $user[0]['fakultas'],
		'jurusan' => $user[0]['jurusan'],
		'tahun' => $user[0]['tahun'],
		'alamat' => $user[0]['alamat'],
		'email' => $user[0]['email'],
		'hp' => $user[0]['hp'],
		'foto' => $user[0]['foto']
		);
		$this->load->view('admin/edit_user',$data);
	
	}
	
	public function do_edit_user(){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$nama = $_POST['nama'];
	$jk = $_POST['jk'];
	$tempat = $_POST['tempat'];
	$lahir = $_POST['lahir'];
	$fakultas = $_POST['fakultas'];
	$jurusan = $_POST['jurusan'];
	$tahun = $_POST['tahun'];
	$alamat = $_POST['alamat'];
	$email = $_POST['email'];
	$hp = $_POST['hp'];
	
	$data = array('password' => $password,'nama' => $nama,'jk' => $jk,'tempat' => $tempat,'lahir' => $lahir,'fakultas' => $fakultas,'jurusan' => $jurusan,'tahun' => $tahun,'alamat' => $alamat,'email' => $email,'hp' => $hp);
	$where = array('username'=>$username);
	
	$res=$this->mahasiswamodel->UpdateData('user',$data,$where);
				
		if($res >= 1){
		echo "<script>
		alert('Edit Data User Berhasil');
		window.location.href='data_user';
		</script>";
		}else{
		echo "<script>
		alert('Edit Data User Gagal');
		window.location.href='data_user';
		</script>";	
	    }
	}
	
	public function hapus_user($username) {
		$where = array('username' => $username);
	    $res = $this->mahasiswamodel->DeleteData('user',$where);
			
			if($res >= 1){
			$this->session->set_flashdata('pesan','Delete Data '.$username.' Berhasil');
			redirect('Admin/Admin/data_user');
			}
			else{
			echo "<h2>Delete Data User Gagal</h2>";		
			}
	
	}
		
	public function peraturan_admin() {
	$this->load->view('admin/homeupdate');
	}
	
	public function edit_admin($username){
	    $admin = $this->adminmodel->GetAdmin("where username ='$username'");
		$data= array(
		'username' => $admin[0]['username'],
		'password' => $admin[0]['password'],
		'nama' => $admin[0]['nama'],
		'jk' => $admin[0]['jk'],
		'tempat' => $admin[0]['tempat'],
		'lahir' => $admin[0]['lahir'],
		'fakultas' => $admin[0]['fakultas'],
		'jurusan' => $admin[0]['jurusan'],
		'tahun' => $admin[0]['tahun'],
		'alamat' => $admin[0]['alamat'],
		'email' => $admin[0]['email'],
		'hp' => $admin[0]['hp'],
		'foto' => $admin[0]['foto']
		);
		$this->load->view('admin/edit_admin',$data);
	}
	
	public function do_edit(){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$nama = $_POST['nama'];
	$jk = $_POST['jk'];
	$tempat = $_POST['tempat'];
	$lahir = $_POST['lahir'];
	$fakultas = $_POST['fakultas'];
	$jurusan = $_POST['jurusan'];
	$tahun = $_POST['tahun'];
	$alamat = $_POST['alamat'];
	$email = $_POST['email'];
	$hp = $_POST['hp'];
	
	$data = array('password' => $password,'nama' => $nama,'jk' => $jk,'tempat' => $tempat,'lahir' => $lahir,'fakultas' => $fakultas,'jurusan' => $jurusan,'tahun' => $tahun,'alamat' => $alamat,'email' => $email,'hp' => $hp);
	$where = array('username'=>$username);
	
	$res=$this->adminmodel->UpdateData('user',$data,$where);
				
		if($res >= 1){
		echo "<script>
		alert('Edit Data Admin Berhasil');
		window.location.href='data_admin';
		</script>";
		}else{
		echo "<script>
		alert('Edit Data Admin Gagal');
		window.location.href='data_admin';
		</script>";	
	    }
		
		
	}
	
	public function hapus_admin($username){
	$where = array('username' => $username);
	$res = $this->adminmodel->DeleteData('user',$where);
			
			if($res >= 1){
			$this->session->set_flashdata('pesan','Delete Data '.$username.' Berhasil');
			redirect('Admin/Admin/data_admin');
			}
			else{
			echo "<h2>Delete Data Admin Gagal</h2>";		
			}	
	}

//Management Buku	
	
	public function data_buku() {
	
	$data = $this->bukumodel->GetBuku();
	$this->load->view('admin/data_buku',array('data' => $data));		
	}
	
	public function input_buku() {
	
	$this->load->view('admin/input_buku');
	}

	
	public function do_input_buku(){
	
	$id_buku = $_POST['id_buku'];
	$judul = $_POST['judul'];
	$terbit = $_POST['terbit'];
	$penerbit = $_POST['penerbit'];
	$halaman= $_POST['halaman'];
	$jumlah = $_POST['jumlah'];
	$peroleh = $_POST['peroleh'];
	$tanggal = $_POST['tanggal'];
		
	$data = array('id_buku' => $id_buku,'judul' => $judul,'terbit' => $terbit,'penerbit' => $penerbit,'halaman' => $halaman,'jumlah' => $jumlah,'peroleh' => $peroleh,'tanggal' => $tanggal);
	$res=$this->bukumodel->InsertData('buku',$data);
		if($res >= 1){
		echo "<script>
		alert('Input Data Buku Berhasil');
		window.location.href='data_buku';
		</script>";
		}else{
		echo "<script>
		alert('Input Data Buku Gagal');
		window.location.href='data_buku';
		</script>";	
	    }
	}
	
	
	public function edit_buku($id_buku){
	    $buku = $this->bukumodel->GetBuku("where id_buku ='$id_buku'");
		$data= array(
		'id_buku' => $buku[0]['id_buku'],
		'judul' => $buku[0]['judul'],
		'terbit' => $buku[0]['terbit'],
		'penerbit' => $buku[0]['penerbit'],
		'halaman' => $buku[0]['halaman'],
		'jumlah' => $buku[0]['jumlah'],
		'peroleh' => $buku[0]['peroleh'],
		'tanggal' => $buku[0]['tanggal']
		);
		$this->load->view('admin/edit_buku',$data);
	}
	
	public function do_edit_buku(){
	$id_buku = $_POST['id_buku'];
	$judul = $_POST['judul'];
	$terbit = $_POST['terbit'];
	$penerbit = $_POST['penerbit'];
	$halaman = $_POST['halaman'];
	$jumlah = $_POST['jumlah'];
	$peroleh = $_POST['peroleh'];
	$tanggal = $_POST['tanggal'];
	
	$data = array('judul' => $judul,'terbit' => $terbit,'penerbit' => $penerbit,'halaman' => $halaman,'jumlah' => $jumlah,'peroleh' => $peroleh,'tanggal' => $tanggal);
	$where = array('id_buku'=>$id_buku);
	
	$res=$this->bukumodel->UpdateData('buku',$data,$where);
				
		if($res >= 1){
		echo "<script>
		alert('Edit Data Buku Berhasil');
		window.location.href='data_buku';
		</script>";
		}else{
		echo "<script>
		alert('Edit Data Buku Gagal');
		window.location.href='data_buku';
		</script>";	
	    }
	}
	
	public function hapus_buku($id_buku){
	$where = array('id_buku' => $id_buku);
	$res = $this->bukumodel->DeleteData('buku',$where);
			
			if($res >= 1){
			$this->session->set_flashdata('pesan','Delete Data '.$id_buku.' Berhasil');
			redirect('Admin/Admin/data_buku');
			}
			else{
			echo "<h2>Delete Data Buku Gagal</h2>";		
			}	
	}
	
	//Management transaksi

	public function transaksi(){
	
	 $this->load->view('admin/transaksi');	
	 
	}
	
	public function data_transaksi(){
	  $data = $this->db->query("SELECT * FROM transaksi WHERE status='Pinjam' ORDER BY id_transaksi")->result_array();
	  $this->load->view('admin/data_transaksi',array('data' => $data));	
	
	}
	
	public function input_transaksi(){
	$data = $this->db->query("SELECT * FROM user where level = 'user' ORDER BY username ASC ")->result_array();
	$data2 = $this->db->query("SELECT * FROM buku ORDER BY id_buku ASC ")->result_array();
	$this->load->view('admin/input_transaksi',array('data' => $data,'data2' => $data2));
	}
	
	public function input_transaksi_action(){
    
	$tgl_pinjam		= isset($_POST['pinjam']) ? $_POST['pinjam'] : "";
	$tgl_kembali	= isset($_POST['kembali']) ? $_POST['kembali'] : "";
	$tgl_kembali2	= isset($_POST['kembali2']) ? $_POST['kembali2'] : "";

	$dapat_buku		= $_POST['buku'];
	$pecah_buku		= explode (".", $dapat_buku);
	$id_buku		= $pecah_buku[0];
	
	$dapat_mhs		= $_POST['peminjam'];
	$pecah_mhs		= explode (".", $dapat_mhs);
	$id_mhs 		= $pecah_mhs[0];

	$ket			= isset($_POST['ket']) ? $_POST['ket'] : "";
	
	$buku = $this->db->query("SELECT * FROM buku where id_buku='".$id_buku."'")->result_array();
	$judul_buku=$buku[0]['judul'];
    
	$peminjam = $this->db->query("SELECT * FROM user where username='".$id_mhs."'")->result_array();
	$username=$peminjam[0]['username'];
	$nama=$peminjam[0]['nama'];
	
	$jml_buku = $this->db->query("select jumlah from buku where id_buku='".$id_buku."'")->result_array();
	$sisa_buku=$jml_buku[0]['jumlah'];
	$sisa_buku_akhir = $sisa_buku - 1;
	
	if ($sisa_buku == 0) {
		echo "<script>alert('Stok bukunya telah habis, tidak bisa melakukan transaksi, tambahkan stok buku segera');</script>";
		redirect('Admin/Admin/input_transaksi');
	} 
	else if($ket == "1x"){
	
		$data = array('judul_buku' => $judul_buku,'id_buku' => $id_buku,'nama_peminjam' => $nama,'id_peminjam' => $id_mhs,'tgl_pinjam' => $tgl_pinjam,'tgl_kembali' => $tgl_kembali,'status' => 'Pinjam','ket' => $ket);
		
		$data2 = array('jumlah' => $sisa_buku_akhir);
		$where = array('id_buku'=>$id_buku);
		
		$res=$this->transaksimodel->InsertData('transaksi',$data);
		$res2=$this->bukumodel->UpdateData('buku',$data2,$where);
		
		if($res >= 1){
		echo "<script>
		alert('Input Data Peminjaman 1x Berhasil');
		window.location.href='data_transaksi';
		</script>";
		}else{
		echo "<script>
		alert('Input Data Peminjaman 1x Gagal');
		window.location.href='data_transaksi';
		</script>";	
	    }
	}
	else if($ket == "2x"){
	
		$data = array('judul_buku' => $judul_buku,'id_buku' => $id_buku,'nama_peminjam' => $nama,'id_peminjam' => $id_mhs,'tgl_pinjam' => $tgl_pinjam,'tgl_kembali' => $tgl_kembali2,'status' => 'Pinjam','ket' => $ket);
		
		$data2 = array('jumlah' => $sisa_buku_akhir);
		$where = array('id_buku'=>$id_buku);
		
		$res=$this->transaksimodel->InsertData('transaksi',$data);
		$res2=$this->bukumodel->UpdateData('buku',$data2,$where);
		
		if($res >= 1){
		echo "<script>
		alert('Input Data Peminjaman 2x Berhasil');
		window.location.href='data_transaksi';
		</script>";
		}else{
		echo "<script>
		alert('Input Data Peminjaman 2x Gagal');
		window.location.href='data_transaksi';
		</script>";	
	    }
	}
	
	}	
	
	public function kembali_action($get_id_transaksi,$get_id_buku,$get_denda){
	//$maks_pinjam		= 2; //maksimal peminjaman
	//$maks_hari_pinjam	= 7; //maksimal hari peminjaman
	//$instansi			= "nama_instansi";
	//$alamat			= "alamat_instansi";
	//$logo				= "";
	
	$denda			= $get_denda;
	$id_transaksi	= $get_id_transaksi;
	$id_buku		= $get_id_buku;
	

		$dates = date('d-m-Y');

		$data1 = array('status' => 'Kembali');
		$where1 = array('id_transaksi'=>$id_transaksi);
		
		$buku = $this->db->query("SELECT * FROM buku where id_buku='".$id_buku."'")->result_array();
		$jumlah_buku=$buku[0]['jumlah'];
		$kembali_buku = $jumlah_buku + 1;
		$data2 = array('jumlah' => $kembali_buku);
		$where2 = array('id_buku'=>$id_buku);
		
		$data3 = array('id_kas' => '','tgl' => $dates,'denda' => $denda);
	
		$res1=$this->transaksimodel->UpdateData('transaksi',$data1,$where1);
		$res2=$this->bukumodel->UpdateData('buku',$data2,$where2);
		$res3=$this->kasmodel->InsertData('kas',$data3);
		
	 	if($res2 >= 1){
			$this->session->set_flashdata('pesan','Pengembalian Buku '.$id_buku.' Berhasil');
			redirect('Admin/Admin/data_transaksi');
		
		}else{
			$this->session->set_flashdata('pesan','Pengembalian Buku '.$id_buku.' Gagal');
			redirect('Admin/Admin/data_transaksi');	
	    }

	} //end kembali
	
	
	public function history_peminjaman(){
	 $data = $this->db->query("SELECT * FROM transaksi ORDER BY id_transaksi DESC")->result_array();
	 $this->load->view('admin/history_peminjaman',array('data' => $data));	
	}
	
	public function perpanjang_action($get_id_transaksi,$get_id_buku,$get_lambat,$get_tgl_dateline,$get_ket){
	$id_transaksi	= $get_id_transaksi;
	$id_buku		= $get_id_buku;
	$tgl_kembali	= $get_tgl_dateline;
	$lambat			= $get_lambat;
	$ket			= $get_ket;
	
	if($lambat > 0) {
		echo '<script type="text/javascript">alert("Buku yang dipinjam tidak dapat diperpanjang, karena sudah terlambat. Kembalikan dahulu, kemudian pinjam kembali.");
		window.location.href="'.base_url().'index.php/Admin/Admin/data_transaksi'.'";
		</script>';
		}
	else if($ket == "2x") {
		echo '<script type="text/javascript">alert("Buku yang dipinjam tidak dapat diperpanjang, karena sudah dipinjam selama 2 Minggu. Kembalikan dahulu, kemudian pinjam kembali.");
		window.location.href="'.base_url().'index.php/Admin/Admin/data_transaksi'.'";
		</script>';
		}  
	else if($ket == "1x" && $lambat <= 7 ) {
		$pecah			= explode("-",$tgl_kembali);
		$next_7_hari	= mktime(0,0,0,$pecah[1],$pecah[0]+7,$pecah[2]);
		$hari_next		= date("d-m-Y", $next_7_hari);
		$data2 = array('tgl_kembali' => $hari_next,'ket' => "2x");
		$where2 = array('id_transaksi'=>$id_transaksi);
		$res2=$this->transaksimodel->UpdateData('transaksi',$data2,$where2);
	
		if($res2 >= 1){
			$this->session->set_flashdata('pesan','Perpanjangan Buku '.$id_buku.' Berhasil');
			redirect('Admin/Admin/data_transaksi');
		
		}else{
			$this->session->set_flashdata('pesan','Peerpanjangan Buku '.$id_buku.' Gagal');
			redirect('Admin/Admin/data_transaksi');	
	    }
	} 
	
	}//end perpanjang action
	
	//Management Kas
	public function data_kas() {//penggabungan pengambilan data query tertentu dan query keseluruhan menggunakan index array
	 $data = $this->kasmodel->GetKas();
	 $data['data_kas'] = $this->db->query("select * from kas order by id_kas asc")->result_array();
	 $kas = $this->db->query("SELECT SUM(denda) as jumlah_denda FROM kas")->result_array();
	 $data["total_denda"]= $kas[0]['jumlah_denda'];
	 $this->load->view('admin/data_kas',$data);
	}
	
	public function input_kas() {
	$kas = $this->db->query("SELECT MAX(id_kas) as id_kashigh FROM kas")->result_array();
	$id_kashigh = $kas[0]['id_kashigh'];
	$data["id_kassekarang"]= $id_kashigh + 1;
	$this->load->view('admin/input_kas',$data);
	}
	
	public function simpan_kas() {
	
	$id_kas = $_POST['id_kas'];
	$tgl = date("d-m-Y");
	$denda = $_POST['denda'];
		
	$data = array('id_kas' => $id_kas,'tgl' => $tgl,'denda' => $denda);
	$res=$this->kasmodel->InsertData('kas',$data);
		if($res >= 1){
		echo "<script>
		alert('Input Data Kas Berhasil');
		window.location.href='data_kas';
		</script>";
		}else{
		echo "<script>
		alert('Input Data Kas Gagal');
		window.location.href='data_kas';
		</script>";	
	    }
	}
	
	public function hapus_kas($id_kas){
	$where = array('id_kas' => $id_kas);
	$res = $this->kasmodel->DeleteData('kas',$where);
			
			if($res >= 1){
			$this->session->set_flashdata('pesan','Delete Data '.$id_kas.' Berhasil');
			redirect('Admin/Admin/data_kas');
			}
			else{
			echo "<h2>Delete Data Kas Gagal</h2>";	
			redirect('Admin/Admin/data_kas');	
			}	
	}

	public function cetak_laporan_peminjaman() {
	
			$data['peminjaman'] = $this->transaksimodel->GetTransaksi();
			$this->load->view('admin/cetak_peminjaman',$data);	
	}

//Management Ebook

	public function data_ebook() {
	
	$data = $this->ebookmodel->GetEbook();
	$this->load->view('admin/data_ebook',array('data' => $data));		
	}
	
	public function input_ebook() {
	
	$this->load->view('admin/input_ebook');
	}
	
	public function input_kebook() {
	
	$this->load->view('admin/input_kebook');
	}

	
	public function do_input_ebook(){
		$judul = $_POST['judul'];
		$kategori = $_POST['kategori'];
		$file = $_FILES['userfile']['name'];//harus ada
		$jenis= $_POST['jenis'];
		$tanggal = date("Y-m-d");
		
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'pdf';
		$this->load->library('upload', $config);
		 
		if ((! $this->upload->do_upload()))
		{
		// Jika Konfigurasi tidak cocok :
		$data = array('error' => $this->upload->display_errors('<span class="error">','</span>'));	
		$data['judul'] = $judul;
		$this->load->view('admin/data_ebook',$data);
		echo "<script>
		alert('Input Data Ebook Gagal');
		window.location.href='data_ebook';
		</script>";	
		}
		else
		{
		$data = array('upload_data' => $this->upload->data()); //harus ada
		$get_name = $this->upload->data(); // harus ada
		$nama_berkas = $get_name['file_name']; // harus ada
		$data = array('judul' => $judul,'kategori' => $kategori,'file' => $nama_berkas,'jenis' => $jenis,'tanggal' => $tanggal);
		$res=$this->ebookmodel->InsertData('ebook',$data);
		if($res >= 1){
		echo "<script>
		alert('Input Data Ebook Berhasil');
		window.location.href='data_ebook';
		</script>";
		}
		
		}
	}
	
	public function do_input_kebook(){
		$judul = $_POST['judul'];
		$kategori = $_POST['kategori'];
		$file = $_FILES['userfile']['name'];//harus ada
		$jenis= $_POST['jenis'];
		$tanggal = date("Y-m-d");
		
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'zip|rar';
		$this->load->library('upload', $config);
	
	if ((! $this->upload->do_upload()))
		{
		// Jika Konfigurasi tidak cocok :
		$data = array('error' => $this->upload->display_errors('<span class="error">','</span>'));	
		$data['judul'] = $judul;
		$this->load->view('admin/data_ebook',$data);
		echo "<script>
		alert('Input Data Kumpulan Ebook Gagal');
		window.location.href='data_ebook';
		</script>";	
		}
	else
		{
		$data = array('upload_data' => $this->upload->data()); //harus ada
		$get_name = $this->upload->data(); // harus ada
		$nama_berkas = $get_name['file_name']; // harus ada
		$data = array('judul' => $judul,'kategori' => $kategori,'file' => $nama_berkas,'jenis' => $jenis,'tanggal' => $tanggal);
		$res=$this->ebookmodel->InsertData('ebook',$data);
		if($res >= 1){
		echo "<script>
		alert('Input Data Kumpulan Ebook Berhasil');
		window.location.href='data_ebook';
		</script>";
		}
		
		}
	}

	public function hapus_ebook($id_ebook){
	
	   $ebook = $this->db->query("SELECT file FROM ebook where id_ebook='$id_ebook'")->result_array();
	   $file_name = $ebook[0]['file'];
	   unlink("./uploads/".$file_name);
	
	   $where = array('id_ebook' => $id_ebook);
	   $res = $this->ebookmodel->DeleteData('ebook',$where);
			
			if($res >= 1){
			$this->session->set_flashdata('pesan','Delete Data '.$id_ebook.' Berhasil');
			redirect('Admin/Admin/data_ebook');
			}
			else{
			echo "<h2>Delete Data Ebook Gagal</h2>";	
			redirect('Admin/Admin/data_ebook');	
			}	
	}
	
	public function about() {
	
			$this->load->view('admin/about');
	}

}
