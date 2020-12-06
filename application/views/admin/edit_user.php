<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Edit Data</title>
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


<div id="wrapper">
<div class="page-header"><h3><img src="<?php echo base_url(); ?>assets/img/pensil.png" width="50" height="50" /> Edit Data Mahasiswa Perpustakaan - User</div>
</div>

<img src="<?php echo base_url(); ?>assets/img/kelompok.jpg" id="full-screen-background-image" />
  
<div id="wrapper">
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">

<fieldset style="width: 100%; margin: auto;">
<legend>Formulir Edit Data Mahasiswa Polsub</legend>
    
    <form action="<?php echo base_url()."index.php/Admin/Admin/do_edit_user"; ?>" method="post">
        <input type="hidden" name="username" value="<?php echo $username; ?>" />
		
		<p>
            Password<br />
            <input type="text" name="password" required value="<?php echo $password; ?>"/>
        </p>
		
        <p>
            Nama Lengkap<br />
            <input type="text" name="nama" required value="<?php echo $nama; ?>"/>
        </p>
        
        <p>
            Jenis Kelamin<br />
            <?php if ($jk === "L") : ?>
            <input type="radio" name="jk" value="L" id="l" checked /><label for="l">L</label>
            <input type="radio" name="jk" value="P" id="p" /><label for="p">P</label>
            <?php else : ?>
            <input type="radio" name="jk" value="L" id="l" /><label for="l">L</label>
            <input type="radio" name="jk" value="P" id="p" checked /><label for="p">P</label>
            <?php endif; ?>
        </p>
		
		<p>
            Tempat Lahir<br />
            <input type="text" name="tempat" required value="<?php echo $tempat; ?>"/>
        </p>

		<p>
	
		<label class="control-label"> Tanggal Lahir </label>
            <input type="text" id="datepicker" name="lahir" class="input" value="<?php echo $lahir; ?>"/>
        </p>	
		
		<p>
            Fakultas<br />
      <select name="fakultas" required>
      <option value="">Pilih Fakultas</option>
      <option value="Fakultas Hukum" <?php if($fakultas == 'Fakultas Hukum'){ echo 'selected'; } ?>>Fakultas Hukum</option> <!-- jika data di database sama dengan value maka akan terselect/terpilih -->
      <option value="Fakultas Teknik" <?php if($fakultas == 'Fakultas Teknik'){ echo 'selected'; } ?>>Fakultas Teknik</option> <!-- jika data di database sama dengan value maka akan terselect/terpilih -->
      <option value="Fakultas Ekonomi" <?php if($fakultas == 'Fakultas Ekonomi'){ echo 'selected'; } ?>>Fakultas Ekonomi</option> <!-- jika data di database sama dengan value maka akan terselect/terpilih -->
      <option value="Fakultas Agama Islam" <?php if($fakultas == 'Fakultas Agama Islam'){ echo 'selected'; } ?>>Fakultas Agama Islam</option> <!-- jika data di database sama dengan value maka akan terselect/terpilih -->
      <option value="Fakultas Ilmu Komputer" <?php if($fakultas == 'Fakultas Ilmu Komputer'){ echo 'selected'; } ?>>Fakultas Ilmu Komputer</option> <!-- jika data di database sama dengan value maka akan terselect/terpilih -->
      <option value="Fakultas Ilmu Sosial dan Ilmu Politik" <?php if($fakultas == 'Fakultas Ilmu Sosial dan Ilmu Politik'){ echo 'selected'; } ?>>Fakultas Ilmu Sosial dan Ilmu Politik</option> <!-- jika data di database sama dengan value maka akan terselect/terpilih -->
      <option value="Fakultas Keguruan dan Ilmu Pendidikan" <?php if($fakultas == 'Fakultas Keguruan dan Ilmu Pendidikan'){ echo 'selected'; } ?>>Fakultas Keguruan dan Ilmu Pendidikan</option> <!-- jika data di database sama dengan value maka akan terselect/terpilih -->
      <option value="Fakultas Pertanian" <?php if($fakultas == 'Fakultas Pertanian'){ echo 'selected'; } ?>>Fakultas Pertanian</option> <!-- jika data di database sama dengan value maka akan terselect/terpilih -->
     </select>
            
           
        </p>
		
		<p>
            Jurusan<br />
           
      <select name="jurusan" required>
      <option value="">Pilih Jurusan</option>
      <option value="Ilmu Hukum S-1" <?php if($jurusan == 'Ilmu Hukum S-1'){ echo 'selected'; } ?>>Ilmu Hukum S-1</option> <!-- jika data di database sama dengan value maka akan terselect/terpilih -->
      <option value="Pascasarjana Magister Manajemen" <?php if($jurusan == 'Pascasarjana Magister Manajemen'){ echo 'selected'; } ?>>Pascasarjana Magister Manajemen</option> <!-- jika data di database sama dengan value maka akan terselect/terpilih -->
      <option value="Manajemen S-1" <?php if($jurusan == 'Manajemen S-1'){ echo 'selected'; } ?>>Manajemen S-1</option> <!-- jika data di database sama dengan value maka akan terselect/terpilih -->
      <option value="Akuntansi S-1" <?php if($jurusan == 'Akuntansi S-1'){ echo 'selected'; } ?>>Akuntansi S-1</option> <!-- jika data di database sama dengan value maka akan terselect/terpilih -->
      <option value="Akuntansi D-3" <?php if($jurusan == 'Akuntansi D-3'){ echo 'selected'; } ?>>Akuntansi D-3</option> <!-- jika data di database sama dengan value maka akan terselect/terpilih -->
           <option value="Pendidikan Luar Sekolah S-1" <?php if($jurusan == 'Pendidikan Luar Sekolah S-1'){ echo 'selected'; } ?>>Pendidikan Luar Sekolah S-1</option> <!-- jika data di database sama dengan value maka akan terselect/terpilih -->
           <option value="Pendidikan Matematika S-1" <?php if($jurusan == 'Pendidikan Matematika S-1'){ echo 'selected'; } ?>>Pendidikan Matematika S-1</option> <!-- jika data di database sama dengan value maka akan terselect/terpilih -->
           <option value="Pendidikan Bahasa Inggris S-1" <?php if($jurusan == 'Pendidikan Bahasa Inggris S-1'){ echo 'selected'; } ?>>Pendidikan Bahasa Inggris S-1</option> <!-- jika data di database sama dengan value maka akan terselect/terpilih -->
           <option value="Pendidikan Jasmani dan Kesehatan S-1" <?php if($jurusan == 'Pendidikan Jasmani dan Kesehatan S-1'){ echo 'selected'; } ?>>Pendidikan Jasmani dan Kesehatan S-1</option> <!-- jika data di database sama dengan value maka akan terselect/terpilih -->
           <option value="Agroteknologi S-1" <?php if($jurusan == 'Agroteknologi S-1'){ echo 'selected'; } ?>>Agroteknologi S-1</option> <!-- jika data di database sama dengan value maka akan terselect/terpilih -->
           <option value="Kebidanan D-3" <?php if($jurusan == 'Kebidanan D-3'){ echo 'selected'; } ?>>Kebidanan D-3</option> <!-- jika data di database sama dengan value maka akan terselect/terpilih -->
           <option value="Pendidikan Agama Islam S-1" <?php if($jurusan == 'Pendidikan Agama Islam S-1'){ echo 'selected'; } ?>>Pendidikan Agama Islam S-1</option> <!-- jika data di database sama dengan value maka akan terselect/terpilih -->
           <option value="Teknik Industri S-1" <?php if($jurusan == 'Teknik Industri S-1'){ echo 'selected'; } ?>>Teknik Industri S-1</option> <!-- jika data di database sama dengan value maka akan terselect/terpilih -->
           <option value="Teknik Mesin S-1" <?php if($jurusan == 'Teknik Mesin S-1'){ echo 'selected'; } ?>>Teknik Mesin S-1</option> <!-- jika data di database sama dengan value maka akan terselect/terpilih -->
           <option value="Teknik Mesin D-3" <?php if($jurusan == 'Teknik Mesin D-3'){ echo 'selected'; } ?>>Teknik Mesin D-3</option> <!-- jika data di database sama dengan value maka akan terselect/terpilih -->
           <option value="Teknik Informatika S-1" <?php if($jurusan == 'Teknik Informatika S-1'){ echo 'selected'; } ?>>Teknik Informatika S-1</option> <!-- jika data di database sama dengan value maka akan terselect/terpilih -->
           <option value="Ilmu Komunikasi S-1" <?php if($jurusan == 'Ilmu Komunikasi S-1'){ echo 'selected'; } ?>>Ilmu Komunikasi S-1</option> <!-- jika data di database sama dengan value maka akan terselect/terpilih -->
           <option value="Ilmu Pemerintahan S-1" <?php if($jurusan == 'Ilmu Pemerintahan S-1'){ echo 'selected'; } ?>>Ilmu Pemerintahan S-1</option> <!-- jika data di database sama dengan value maka akan terselect/terpilih -->
     </select>
     
     
        </p> 
        
		<p>
            Tahun Angkatan<br />
            <input type="text" name="tahun" required value="<?php echo $tahun; ?>"/>
        </p>
		
		<p>
            Alamat<br />
            <input type="text" name="alamat" required value="<?php echo $alamat; ?>"/>
        </p>
		
		<p>
            Email<br />
            <input type="email" name="email" required value="<?php echo $email; ?>"/>
        </p>
		
        <p>
            Nomor Handphone<br />
            <input type="text" name="hp" required value="<?php echo $hp; ?>" />
        </p>
		
        <p>
            <input type="submit" value="Edit" />
            <input type="reset" value="Reset" onClick="return confirm('Reset data yang telah diedit?')">
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