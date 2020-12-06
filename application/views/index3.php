<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Perpustakaan Online</title>
	<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>asset/css/style.css" rel="stylesheet">
	<link rel="shortcut icon" href="<?php echo base_url();?>assets/img/book.ico">
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/scripts.js"></script>

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
				<div class="page-header"><h3><img src="<?php echo base_url();?>assets/img/book1.png" width="50" height="50" /> <a class="font1">Sistem Informasi Perpustakaan</a> <small><b class="font2"></b></small></h3></div>
				<ul class="nav nav-tabs">
					<li><a href="<?php echo base_url()."index.php/Guest/index";?>"><i class="icon-home"></i> Beranda</a></li>
					<li><a href="<?php echo base_url()."index.php/Guest/beranda_admin/";?>"><i class="icon-user"></i> Admin</a></li>
					<li><a href="<?php echo base_url()."index.php/Guest/beranda_user/";?>"><i class="icon-star-empty"></i> User</a></li>
					<li><a href="<?php echo base_url()."index.php/Guest/beranda_about/";?>"><i class="icon-briefcase"></i> About</a></li>
					
					<li class="dropdown pull-right">
					
				
						<a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-user"></i> <strong class="caret"></strong></a>
						<ul class="dropdown-menu">
							<li><a href="logout.php"><i class="icon-off"></i> Logout</a></li>
					
						<a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-user"></i> Guest <strong class="caret"></strong></a>
						<ul class="dropdown-menu">
							<li><a href="handler.php?aksi=sign_up"><i class="icon-th-list"></i> Buat Akun</a></li>
							<li><a href="handler.php?aksi=menu_intro"><i class="icon-globe"></i> Introduction</a></li>
							<li class="divider"></li>
							<li><a href="handler.php?aksi=menu_login"><i class="icon-user"></i> Login</a></li>
													
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
<div id="content">
<div style="text-align: justify;"><b>Aplikasi Sistem Informasi Perpustakaan POLSUB</b> dibuat menggunakan Bahasa Pemrograman PHP dengan Database MySQL di percantik dengan tampilan HTML5 dan CSS sebagai pemanisnya mengguakan CSS Bootstrap lalu untuk fungsi tertentu bisa menggunakan Javascript, ini hanyalah sebuah halaman website sistem informasi perpustakaan yang belum sempurna dan hanya sebagai implementasi dari tugas Pemrograman WEB hanya diimplementasikan di dalam localhost laptop/komputer kita, untuk implementasi tingkat lanjut bisa diteruskan kepada penyewaan web hosting dan domain tertentu agar menjadi sistem informasi perpustakaan yang fungsional dan efektifitas.</div>
<br><p align="center"><img src="<?php echo base_url();?>assets/img/book3.jpg"></br>
<div style="text-align: justify;">Sistem Informasi ini di buat dengan bertujuan untuk setidaknya melakukan update sistem dari yang tadinya dalam segi transaksi perpusatakaan masih manual dan dalam penyimpanannya pun masih dalam bentuk fisik di ubah menjadi suatu sistem yang terkomputerisasi lalu untuk dari segi datanya tersimpan secara aman dalam database, intinya sistem informasi perpustakaan ini di buat untuk memudahkan lebih kearah admin, lalu memberikan kenyamanan kepada user "Mahasiswa" sebagai pengguna sistem.</div>

</div>

</div>
</body>
</html>
