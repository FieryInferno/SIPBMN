<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>SIPBMN</title>
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
			<div class="page-header"><h3><img src="<?php echo base_url(); ?>assets/img/book1.png" width="50" height="50" /> <a class="font1">Sistem Informasi Pengelolaan Barang Milik Negara</a> <small><b class="font2"></b></small></h3></div>
				<ul class="nav nav-tabs">
					<li><a href="<?php echo base_url()."index.php/User/User/index"; ?>"><i class="icon-home"></i> Home</a></li>
					<?php if(isset($_SESSION['level'])){?>

						<li class="dropdown pull-left">

						<a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-star-empty"></i> Verifikasi Permohonan Penetapan<strong class="caret"></strong></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url()."index.php/User/Statuspbmn/index3"; ?>"><i class="icon-star-empty"></i> Status Penggunaan BMN</a></li>
					</ul>
					</li>
						
						<li class="dropdown pull-left">

							<a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-star-empty"></i> Verifikasi Permohonan Persetujuan<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo base_url()."index.php/User/Sementarabmn/index3"; ?>"><i class="icon-star-empty"></i> Hibah BMN</a></li>
								<li><a href="<?php echo base_url()."index.php/User/Hibahbmn/index3"; ?>"><i class="icon-star-empty"></i> Hibah BMN</a></li>
								<li><a href="<?php echo base_url()."index.php/User/Penjualanbmn/index3"; ?>"><i class="icon-star-empty"></i> Penjualan BMN</a></li>
								<li><a href="<?php echo base_url()."index.php/User/Penghapusanbmn/index3"; ?>"><i class="icon-star-empty"></i> Penghapusan BMN</a></li>
						</ul>
						</li>

						<li><a href="<?php echo base_url()."index.php/User/User/index"; ?>"><i class="icon-home"></i> Penyampaian Laporan Pengawasan dan Pengendalian BMN</a></li>

						<li><a href="<?php echo base_url()."index.php/User/User/index"; ?>"><i class="icon-home"></i> Monitoring dan Evaluasi Permasalahan BMN</a></li>

				    <li><a href="handler.php?aksi=about"><i class="icon-briefcase"></i> About</a></li>				
					<?php }?>

					<li class="dropdown pull-right">
					
					<?php if (isset($_SESSION['nama'])):?>
						<a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-user"></i> <?php echo $_SESSION['nama'];?> <strong class="caret"></strong></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url()."index.php/User/User/logout"; ?>"><i class="icon-off"></i> Logout</a></li>
							<?php else:?>
						<a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-user"></i> Guest <strong class="caret"></strong></a>
							<li><a href="<?php echo base_url()."index.php/Guest/beranda_login"; ?>"><i class="icon-user"></i> Login</a></li>
							<?php endif;?>							
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
<div id="content">

<p class="footer">&nbsp;</p>
</div>
</body>
</html>
