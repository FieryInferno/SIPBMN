<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Perpustakaan Online</title>
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/book.ico">
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/scripts.js"></script>

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
				<div class="page-header"><h3><img src="<?php echo base_url(); ?>assets/img/book1.png" width="50" height="50" /> <a class="font1">Sistem Informasi Perpustakaan</a></h3></div>
				<ul class="nav nav-tabs">
					<li><a href="<?php echo base_url()."index.php/Admin/Admin/index"; ?>"><i class="icon-home"></i> Home</a></li>
					<?php if(isset($_SESSION['level'])){?>
				<li><a href="<?php echo base_url()."index.php/Admin/Admin/data_admin"; ?>"><i class="icon-leaf"></i> Data Admin</a></li>
					<li><a href="<?php echo base_url()."index.php/Admin/Admin/data_user"; ?>"><i class="icon-book"></i> Data Mahasiswa</a></li>
					<li><a href="<?php echo base_url()."index.php/Admin/Admin/transaksi"; ?>"><i class="icon-th-large"></i> Transaksi</a></li>
					<li><a href="<?php echo base_url()."index.php/Admin/Admin/data_kas"; ?>"><i class="icon-barcode"></i> Data Kas</a></li>
					<li><a href="<?php echo base_url()."index.php/Admin/Admin/data_buku"; ?>"><i class="icon-tasks"></i> Data Buku</a></li>
					<li><a href="<?php echo base_url()."index.php/Admin/Admin/data_ebook"; ?>"><i class="icon-folder-open"></i> Ebook</a></li>
					<li><a href="<?php echo base_url()."index.php/Admin/Admin/about"; ?>"><i class="icon-briefcase"></i> About</a></li>
					<?php }?>
					<li class="dropdown pull-right">
					<?php if (isset($_SESSION['nama'])):?>
						<a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-user"></i> <?php echo $_SESSION['nama'];?> <strong class="caret"></strong></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url()."index.php/Admin/Admin/logout"; ?>"><i class="icon-off"></i> Logout</a></li>
							<?php else:?>
						<a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-user"></i> Guest <strong class="caret"></strong></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url()."index.php/Guest/beranda_akun"; ?>"><i class="icon-th-list"></i> Buat Akun Perpus</a></li>
							<li class="divider"></li>
							<li><a href="<?php echo base_url()."index.php/Guest/beranda_login"; ?>"><i class="icon-user"></i> Login</a></li>
							<?php endif;?>							
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
<div id="content">

<div style="text-align:justify;"><img src="<?php echo base_url(); ?>assets/img/logo.jpeg" width="100" height="100" style="float:left; margin:0 9px 3px 0;" /><br><h3> Politeknik Negeri Subang</h3></br></div>
<br>

<b>&trade; Nama Mahasiswa</b><br>
<i><b>&copy; 2014 - <?php echo date('Y'); ?> Aplikasi Sistem Informasi Perpustakaan v2.2. All rights reserved.</b></i><br><br>

<div style="text-align:justify;"><img src="<?php echo base_url(); ?>assets/img/kontak.jpg" width="50" height="50" style="float:left; margin:0 9px 3px 0;" /><legend><b>Kontak Kami</b></legend></h3>
<i><b>Alamat :</b></i><br>
<br>
Telepon :
<ul>
<li></li>
</ul>

<div style="text-align:justify;"><img src="<?php echo base_url(); ?>assets/img/jam.png" width="50" height="50" style="float:left; margin:0 9px 3px 0;" /><legend><b>Jam Buka</b></legend></h3>
<i><b>Senin - Jumat :</b></i><br>
<ul>
<li>Buka : 08.00 AM</li>
<li>Istirahat : 12.00 - 13.00 PM</li>
<li>Tutup : 21.00 PM</li>
</ul>
<i><b>Sabtu :</b></i><br>
<ul>
<li>Buka : 08.00 AM</li>
<li>Istirahat : 12.00 - 13.00 PM</li>
<li>Tutup : 14.00 PM</li>
</ul>

<div style="text-align:justify;"><img src="<?php echo base_url(); ?>assets/img/koleksi.png" width="50" height="50" style="float:left; margin:0 9px 3px 0;" /><legend><b>Koleksi</b></legend></h3>
<div style="text-align: justify;">koleksi ebook perpustakaan dan kumpulan ebook jurnal.</div>

<div style="text-align:justify;"><img src="<?php echo base_url(); ?>assets/img/member.png" width="50" height="50" style="float:left; margin:0 9px 3px 0;" /><legend><b>Member Perpustakaan</b></legend></h3>
<div style="text-align: justify;">Untuk mengakses menu homeuser lalu mengkases koleksi ebook berserta bisa mendownload kumpulan ebook &amp; bisa melakukan transaksi peminjaman buku perpustakaan lalu pada admin silahkan buat akun berdasarkan NIM di menu pendaftaran akun baru.</div>
</div>
<p class="footer">&nbsp;</p>
</div>

</body>
</html>