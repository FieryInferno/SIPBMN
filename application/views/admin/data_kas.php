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
					<li ><a href="<?php echo base_url()."index.php/Admin/Admin/index"; ?>"><i class="icon-home"></i> Home</a></li>
					<?php if(isset($_SESSION['level'])){?>
					<li ><a href="<?php echo base_url()."index.php/Admin/Admin/data_admin"; ?>"><i class="icon-leaf"></i> Data Admin</a></li>
					<li ><a href="<?php echo base_url()."index.php/Admin/Admin/data_user"; ?>"><i class="icon-book"></i> Data Mahasiswa</a></li>
					<li ><a href="<?php echo base_url()."index.php/Admin/Admin/transaksi"; ?>"><i class="icon-th-large"></i> Transaksi</a></li>
					<li ><a href="<?php echo base_url()."index.php/Admin/Admin/data_kas"; ?>"><i class="icon-barcode"></i> Data Kas</a></li>
					<li ><a href="<?php echo base_url()."index.php/Admin/Admin/data_buku"; ?>"><i class="icon-tasks"></i> Data Buku</a></li>
					<li ><a href="<?php echo base_url()."index.php/Admin/Admin/data_ebook"; ?>"><i class="icon-folder-open"></i> Ebook</a></li>
					<li ><a href="<?php echo base_url()."index.php/Admin/Admin/about"; ?>"><i class="icon-briefcase"></i> About</a></li>
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


<div style="text-align:justify;"><img src="<?php echo base_url(); ?>assets/img/money.png" width="50" height="50" style="float:left; margin:0 9px 3px 0;" /><legend>Data Kas Perpustakaan</legend></h3>

<p>
	<a href="<?php echo base_url()."index.php/Admin/Admin/input_kas"; ?>" class="btn btn-mini"><i class="icon-qrcode"></i> Input Kas</a>&nbsp; <a href="<?php echo base_url()."index.php/Admin/Admin/print_datakas"; ?>" class="btn btn-mini"><i class="icon-print"></i> Print</a>&nbsp;
</p>


<div class="tab-content">
<table class="table table-bordered table-condensed table-hover" style="width:1px;">
	<thead>
		<tr class="nowrap">
        	<th align="left">No</th>
			<th align="left">ID Kas</th>
			<th align="left">Tanggal Pembayaran</th>
			<th align="left">Denda</th>
			
			<th colspan = "1" align="center">Alat</th>
	
		</tr>
	</thead>
		<?php 
		$no=1;
		foreach($data_kas as $dk) { ?>
	<tbody>
		<tr class="nowrap">
        	<td><?php echo $no++ ?></td>
			<td><?php echo $dk['id_kas'] ?></td>
			<td><?php echo $dk['tgl'] ?></td>
            <td><?php echo $dk['denda'] ?></td>
			<td><a href="<?php echo base_url()."index.php/Admin/Admin/hapus_kas/".$dk['id_kas'];?>" class="btn btn-mini" onClick="return confirm('Delete data kas dengan ID : <?php echo $dk['id_kas'];?>');"><i class="icon-trash"></i> Delete</a></td>
	
		</tr>
<?php
    }
?>
	</tbody>
</table>

<table width="211" class="table table-bordered table-condensed table-hover">
<tr>
      <td width="20">
        <?php 
        echo "<h5><b>Jumlah Total Kas = Rp.".$total_denda."</b></h5>";
        ?>        
      </td>
    </tr>
</table>
<p><b>Note : </b>Data di atas merupakan data uang kas yang telah tersimpan setelah melakukan proses transaksi bila ada mahasiswa yang dikenakan denda.</p>
</div>
<p class="footer">&nbsp;</p>
</div>

</body>
</html>