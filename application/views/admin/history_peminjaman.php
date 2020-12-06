<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>History Transaksi</title>
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
<div class="page-header"><h3><img src="<?php echo base_url(); ?>assets/img/kembali.png" width="50" height="50" /> Data Transaksi Buku Perpustakaan</div>
</div>
  
  <img src="<?php echo base_url(); ?>assets/img/history.jpg" id="full-screen-background-image" />
  
<div id="wrapper">
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">

<div class="tab-content">
<table class="table table-bordered table-condensed table-hover">
	<thead>
		<tr class="nowrap">
            <td align="left">No</td>
		    <td align="left">Judul Buku</td>
			<td align="left">ID Buku</td>
			<td align="left">Nama Peminjam</td>
			<td align="left">ID Peminjam</td>
			<td align="left">Tgl. Pinjam</td>
			<td align="left">Tgl. Kembali</td>
			<td align="left">Status</td>
	    </tr>
	</thead>
	<tbody>
<?php
$no=0;
foreach($data as $d) { 
$no++;
echo "<tr>
	  <td class='td-data'>".$no."</td>
      <td class='pinggir-data'>".$d['judul_buku']."</td>
	  <td class='td-data'>".$d['id_buku']."</td>
	  <td class='td-data'>".$d['nama_peminjam']."</td>
	  <td class='td-data'>".$d['id_peminjam']."</td>
	  <td class='td-data'>".$d['tgl_pinjam']."</td>
	  <td class='td-data'>".$d['tgl_kembali']."</td>
	  <td class='td-data'>".$d['status']."</td>
	  </tr>";

}
?>
</tbody>
</table>
<a href="<?php echo base_url()."index.php/Admin/Admin/pdf_data_history"; ?>" class="btn btn-mini"><i class="icon-print"></i> Print</a>&nbsp;<a href="<?php echo base_url()."index.php/Admin/Admin/transaksi"; ?>" class="btn btn-mini"><i class="icon-th-large"></i> Transaksi</a>
<br>
<br>

<p><b>Note : </b>Data di atas merupakan data history peminjaman buku perpustakaan baik buku yang sudah dikembalikan maupun belum dikembalikan, berguna sebagai data control management buku perpustakaan.</p>
</div>

</div>
		</div>
	</div>
</div>

</body>
</html>