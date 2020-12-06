<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Perpustakaan Online</title>
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
      }

      a:link, a:visited, a:hover {
        color: blue;
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
<style type="text/css">

.font1 {
    font-family: "Baskerville Old Face";
	color : black;
	font-size : 35pt;
}
.font2 {
    font-family: "Comic Sans MS";
	color : orange;
	font-size : 13pt;
}
.font3 {
    font-family: "Palace Script MT";
	color : red;
	font-size : 30pt;
}
.font4 {
    font-family: "Kristen ITC";
	color : blue;
	font-size : 13pt;
}
</style>
	
</head>
<body>
<div id="container">
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<div class="page-header"><h3><img src="<?php echo base_url(); ?>assets/img/book1.png" width="50" height="50" /> <a class="font1">Sistem Informasi Perpustakaan</a> <small><b class="font2"></b></small></h3></div>
				<ul class="nav nav-tabs">
					<li><a href="homeupdate.php"><i class="icon-book"></i> Peraturan</a></li>
					
					<?php if(isset($_SESSION['level'])){?>
					<?php }?>
					<li class="dropdown pull-right">
					
					<?php if (isset($_SESSION['nama'])):?>
						<a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-user"></i> <?php echo $_SESSION['nama'];?> <strong class="caret"></strong></a>
						<ul class="dropdown-menu">
							<li><a href="logout.php"><i class="icon-off"></i> Logout</a></li>
							<?php else:?>
						<a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-user"></i> Guest <strong class="caret"></strong></a>
						<ul class="dropdown-menu">
							<li><a href="#"><i class="icon-th-list"></i> Buat Akun Perpus</a></li>
							<li class="divider"></li>
							<li><a href="homeadmin.php?app=login"><i class="icon-user"></i> Login</a></li>
							<?php endif;?>							
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
<div id="content">
<p>
	<a href="<?php echo base_url()."index.php/Admin/Admin/index";?>" class="btn btn-mini"><i class="icon-user"></i> Home Admin</a>
</p>
<div style="text-align: justify;"><b>Halaman Update Perpustakaan</b><br>
<i>Seorang admin perpustakaan bisa melakukan kegiatan-kegiatan yang bersangkutan dengan update data mahasiswa "user" dan data pengurus "admin" maupun data buku yaitu sebagai berikut : </i></div>
<ul>
<li>Memambahkan Data Mahasiswa, Data Pengurus dan Data Buku</li>
<li>Mengedit Data Mahasiswa, Data Pengurus dan Data Buku</li>
<li>Menghapus Data Mahasiswa, Data Pengurus dan Data Buku</li>
<li>Mencari Data Mahasiswa, Data Pengurus dan Data Buku</li>
</ul>
<br><p align="center"><img src="<?php echo base_url(); ?>assets/img/book6.png" width="250" height="250"></br>
<br>

<div style="text-align: justify;"><b>Perhtian !!!</b><br>
<i>Seorang admin yang memasuki halaman ini harus mengikuti peraturuan perpustakaan berikut ini : </i>
<ol>
<li>Tidak boleh menambahkan seorang member, pengurus dan buku perpustakaan sembarangan, kecuali memang terdaftar di dalam mahasiswa UNSIKA.</li>
<li>Admin harus mengecek secara berkala data mahasiswa yang terdaftar, pengurus dan buku.</li>
<li>Admin tidak boleh sembarangan menghapus data mahasiswa perpustakaan, data pengurus dan juga buku.</li>
<li>Admin tidak boleh sembarangan mengedit data mahasiswa perpustakaan, data pengurus dan data buku, kecuali memang ada perubahan dan ada konfirmasi dari pihak terkait.</li>
<li>Seorang admin harus mengikuti prosedur perpustakaan.</li>
<li>Gunakan dengan maksimal fungsi update data untuk keperluan tertentu, misalnya dalam pencarian data mahasiswa, pengurus dan data buku yang terdaftar.</li>
<li>Bila ada admin yang melanggar ketentuan harus siap untuk diberhentikan.</li>
</ol>

</div></div>
<p class="footer"><a class="font3"></p>
</div>

</body>
</html>