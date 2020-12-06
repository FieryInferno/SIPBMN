<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Sistem Informasi Pengelolaan Barang Milik Negara</title>
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

						<a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-star-empty"></i> Permohonan Penetapan<strong class="caret"></strong></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url()."index.php/User/Statuspbmn/index"; ?>"><i class="icon-star-empty"></i> Status Penggunaan BMN</a></li>
					</ul>
					</li>
						
						<li class="dropdown pull-left">

							<a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-star-empty"></i> Permohonan Persetujuan<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo base_url()."index.php/User/Sementarabmn/index"; ?>"><i class="icon-star-empty"></i> Penggunaan Sementara BMN</a></li>
								<li><a href="<?php echo base_url()."index.php/User/Hibahbmn/index"; ?>"><i class="icon-star-empty"></i> Hibah BMN</a></li>
								<li><a href="<?php echo base_url()."index.php/User/Penjualanbmn/index"; ?>"><i class="icon-star-empty"></i> Penjualan BMN</a></li>
								<li><a href="<?php echo base_url()."index.php/User/Penghapusanbmn"; ?>"><i class="icon-star-empty"></i> Penghapusan BMN</a></li>
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
							<?php endif;?>
					</li>
				</ul>
			</div>
		</div>
	</div>
<div id="content">

<div style="text-align: justify;"><b>Halaman User Satuan Kerja</b><br>

	<div class="container-fluid">
		<p>Nama Satuan kerja:</p>
		<p>Tanggal Ajuan:</p>
		<p>Nama Pengaju:</p>
		<p>Nomor Pengajuan:</p>
		<br /	>
	</div>
<div class="container-fluid">
	<button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#unggahfile"><i class="fas fa-plus fa-sm"></i> Unggah File</button>

	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Surat Permohonan SK PSP</th>
			<th>Surat Pernyataan Tanggung Jawab</th>
			<th>Fotokopi BAST Perolehan BMN</th>
			<th>Surat Keterangan Kebenaran Fotokopi</th>
			<th>Lampiran BMN</th>
		</tr>

		<?php
		$no=1; 
		foreach($spbmn as $spbmn) : ?>

			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $spbmn->pdf1 ?></td>
				<td><?php echo $spbmn->pdf2 ?></td>
				<td><?php echo $spbmn->pdf3 ?></td>
				<td><?php echo $spbmn->pdf4 ?></td>
				<td><?php echo $spbmn->xlsx ?></td>
			</tr>

		<?php endforeach; ?>

	</table>
</div>

<!-- Modal -->
<div class="modal fade" id="unggahfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Unggah File</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        	<br>
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'index.php/User/Statuspbmn/unggah' ?>" method="post" enctype="multipart/form-data">

        	<div class="form-group">
        		<label>Surat Permohonan SK PSP</label><br>
        		<input type="file" name="pdf1" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Surat Pernyataan Tanggung Jawab</label><br>
        		<input type="file" name="pdf2" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Fotokopi BAST Perolehan BMN</label><br>
        		<input type="file" name="pdf3" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Surat Keterangan Kebenaran Fotokopi</label><br>
        		<input type="file" name="pdf4" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Lampiran BMN</label><br>
        		<input type="file" name="xlsx" class="form-control">
        	</div>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>

      </form>

    </div>
  </div>
</div>
