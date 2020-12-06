
<!DOCTYPE html>
<html lang="en">
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
					<li><a href="handler.php?aksi=homeadmin"><i class="icon-home"></i> Home</a></li>
					<?php if(isset($_SESSION['level'])){?>
					<li><a href="handler.php?aksi=data_admin"><i class="icon-leaf"></i> Data Admin</a></li>
					<li><a href="handler.php?aksi=data_user"><i class="icon-book"></i> Data Mahasiswa</a></li>
					<li><a href="handler.php?aksi=transaksi"><i class="icon-th-large"></i> Transaksi</a></li>
					<li><a href="handler.php?aksi=data_kas"><i class="icon-barcode"></i> Data Kas</a></li>
					<li><a href="handler.php?aksi=data_buku"><i class="icon-tasks"></i> Data Buku</a></li>
					<li><a href="handler.php?aksi=ebook"><i class="icon-folder-open"></i> Ebook</a></li>
					<li><a href="handler.php?aksi=about_admin"><i class="icon-briefcase"></i> About</a></li>
					<?php }?>
					<li class="dropdown pull-right">
					
					<?php if (isset($_SESSION['nama'])):?>
						<a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-user"></i> <?php echo $_SESSION['nama'];?> <strong class="caret"></strong></a>
						<ul class="dropdown-menu">
							<li><a href="handler.php?aksi=logout"><i class="icon-off"></i> Logout</a></li>
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
<div style="text-align: justify;"><b>Halaman Admin Perpustakaan</b><br>
<i>Di dalam menu ini seorang admin perpustakaan bisa melakukan kegiatan-kegiatan yang bersangkutan dengan administrasi yaitu sebagai berikut : </i></div>
<ul>
<li>Melihat Data Admin</li>
<li>Melihat Data Mahasiswa</li>
<li>Melakukan Transaksi Peminjaman &amp; Pengembalian Buku Perpustakaan</li>
<li>Update Data Buku Perpustakaan</li>
<li>Upload Ebook Perpustakaan</li>
</ul>
<br><p align="center"><img src="<?php echo base_url(); ?>assets/img/book5.jpg" width="250" height="250"></br>
<br>

<div style="text-align: justify;"><b>Perhatian !!!</b><br>
<i>Seorang admin harus mengikuti peraturuan perpustakaan berikut ini : </i>
<ol>
<li>Tidak boleh menambahkan seorang admin sembarangan, harus memiliki izin terlebih dahulu dari kepala perpustakaan.</li>
<li>Penambahan admin sengaja tidak disediakan dalam tabel admin namun bisa menambahkan secara manual dalam Mysql PhpMyAdmin atau bisa juga pada form penambahan akun.</li>
<li>Seorang admin harus tahu betul bagaimana mengoprasikan aplikasi.</li>
<li>Admin tidak boleh sembarangan menghapus data penting perpustakaan.</li>
<li>Untuk mengupdate data buku harus dilakukan secara berkala semenjak ada buku baru yang masuk.</li>
<li>Upload Ebook harus menyertakan sumbernya.</li>
<li>Bila ada admin yang melanggar ketentuan harus siap untuk diberhentikan.</li>
</ol>

</div>
<p class="footer">&nbsp;</p>
</div>
</body>
</html>
