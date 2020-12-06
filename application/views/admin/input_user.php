<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Daftar Admin &amp; User</title>
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
	
    <link href="<?php echo base_url(); ?>assets/css/datepicker2.css" rel="stylesheet">
	
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/book.ico">
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
	
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker2.js"></script>

<style type="text/css">
      html, body {
        height: 100%;
        width: 100%;
        padding: 0;
        margin: 0;
      }

      #full-screen-background-image {
        z-index: -999;
        min-height: 100%;
        min-width: 1024px;
        width: 100%;
        height: auto;
        position: fixed;
        top: 0;
        left: 0;
      }

      #wrapper {
  	  width: 1000px;
      margin: auto;
      background-color:rgba(255,255,255,0.9);
      border-radius: 50px;
      }

      a:link, a:visited, a:hover {
        color: #333;
        font-style: italic;
      }

      a.to-top:link,
      a.to-top:visited, 
      a.to-top:hover {
        margin-top: 1000px;
        display: block;
        font-weight: bold;
        padding-bottom: 30px;
        font-size: 30px;
      }

    </style>

</head>
<body>

<?php if($_SESSION['level']!='admin'){
echo '<div class="alert alert-error"> Maaf Anda Harus Login sebagai level Admin terlebih dahulu untuk mengakses halaman ini </div>';//jika bukan admin jangan lanjut
die ('');
?>

<?php } ?>

<div id="wrapper">
<div class="page-header"><h3><img src="<?php echo base_url(); ?>assets/img/mhs.png" width="50" height="50" /> Daftar Akun Mahasiswa Perpustakaan - Mahasiswa</div>
</div>
  
  <img src="<?php echo base_url(); ?>assets/img/perpus.jpg" id="full-screen-background-image" />
  
<div id="wrapper">
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">
			
<fieldset style="width: 100%; margin: auto;">
<legend>Formulir Input Data Mahasiswa POLSUB</legend>
<form action="<?php echo base_url()."index.php/Admin/Admin/do_input_user"; ?>" method="post">
		
		<p>
            Username<br />
            <input type="text" name="username" required />
        </p>
		
		<p>
            Password<br />
            <input type="password" name="password" required />
        </p>
		
        <p>
            Nama Lengkap<br />
            <input type="text" name="nama" required />
        </p>
        
        <p>
		    Jenis Kelamin<br />
			<select type="text" name="jk">
		    <option selected disabled>Pilih Jenis Kelamin</option>		
			<option>L</option>
			<option>P</option> </select>
        </p>
		
		<p>
            Tempat Lahir<br />
            <input type="text" name="tempat" required />
        </p>
		
		<p>
	
		<label class="control-label"> Tanggal Lahir </label>
         <input type="text" id="datepicker" name="lahir" class="input"  >  
        </p>
		
		<p>
			Fakultas<br />
			<select type="text" name="fakultas">
		   	<option selected disabled>Pilih Fakultas</option>
			<option>Fakultas Hukum</option>
			<option>Fakultas Teknik</option>
			<option>Fakultas Ekonomi</option>
			<option>Fakultas Agama Islam</option>
			<option>Fakultas Ilmu Komputer</option>
			<option>Fakultas Ilmu Sosial dan Ilmu Politik</option>
			<option>Fakultas Keguruan dan Ilmu Pendidikan</option>
			<option>Fakultas Pertanian</option> </select>
		</p>
        
		<p>
            Program Studi<br />
			<select type="text" name="jurusan">
			<option selected disabled>Pilih Jurusan</option>
			<option>Ilmu Hukum S-1</option>
			<option>Pascasarjana Magister Manajemen</option>
			<option>Manajemen S-1</option>
			<option>Akuntansi S-1</option>
			<option>Akuntansi D-3</option>
			<option>Pendidikan Luar Sekolah S-1</option>
			<option>Pendidikan Matematika S-1</option>
			<option>Pendidikan Bahasa Inggris S-1</option>
			<option>Pendidikan Jasmani dan Kesehatan S-1</option>
			<option>Agroteknologi S-1</option>
			<option>Kebidanan D-3</option>
			<option>Pendidikan Agama Islam S-1</option>
			<option>Teknik Industri S-1</option>
			<option>Teknik Mesin S-1</option>
			<option>Teknik Mesin D-3</option>
			<option>Teknik Informatika S-1</option>
			<option>Ilmu Komunikasi S-1</option>
			<option>Ilmu Pemerintahan S-1</option> </select>
        </p>

        <p>
            Tahun Angkatan<br />
            <input type="text" name="tahun" />
        </p>
		
		<p>
            Alamat<br />
            <input type="text" name="alamat" required />
        </p>
		
		<p>
            Email<br />
            <input type="email" name="email" required />
        </p>
        
        <p>
            Nomor Handphone<br />
            <input type="text" name="hp" required />
        </p>
		        
        <p>
		    Level<br />
			<select type="text" name="level">
			<option selected disabled>Pilih Level</option>			
			<option>user</option></select>
        </p>		
		
        <p>
            <input type="submit" value="Simpan" />
            <input type="reset" value="Reset" onClick="return confirm('Reset data yang telah dimasukan?')">
        </p>
    </form>
</fieldset>
			</div>
		</div>
	</div>
</div>

    <script> 
    //options method for call datepicker
	$('#datepicker').datepicker({
         format: 'dd-mm-yyyy',
		 autoclose: true,
		 todayHighlight: true
	})
    </script>
	
</body>
</html>