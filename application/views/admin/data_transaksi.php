<?php
function terlambat($tgl_dateline, $tgl_kembali) {

$tgl_dateline_pcs = explode ("-", $tgl_dateline);
$tgl_dateline_pcs = $tgl_dateline_pcs[2]."-".$tgl_dateline_pcs[1]."-".$tgl_dateline_pcs[0];

$tgl_kembali_pcs = explode ("-", $tgl_kembali);
$tgl_kembali_pcs = $tgl_kembali_pcs[2]."-".$tgl_kembali_pcs[1]."-".$tgl_kembali_pcs[0];

$selisih = strtotime ($tgl_kembali_pcs) - strtotime ($tgl_dateline_pcs);

$selisih = $selisih / 86400;

if ($selisih>=1) {
	$hasil_tgl = floor($selisih);
}
else {
	$hasil_tgl = 0;
}
return $hasil_tgl;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Data Transaksi</title>
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
	
    <link href="<?php echo base_url(); ?>assets/css/datepicker2.css" rel="stylesheet">
	
	<link rel="shortcut icon" href=<?php echo base_url(); ?>assets/img/book.ico">
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
<div class="page-header"><h3><img src="<?php echo base_url(); ?>assets/img/blue.png" width="50" height="50" /> Data Transaksi Buku Perpustakaan</div>
</div>
  
  <img src="<?php echo base_url(); ?>assets/img/data_perpus.jpg" id="full-screen-background-image" />
 <div id="wrapper">
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">
<div id="content">
<div class="tab-content">

<table class="table table-bordered table-condensed table-hover">
	<thead>
		<tr class="nowrap">
        <tr><td align="left">No</td>
		    <td align="left">Judul Buku</td>
			<td align="left">ID Buku</td>
			<td align="left">Nama Peminjam</td>
			<td align="left">ID Peminjam</td>
			<td align="left">Tgl. Pinjam</td>
			<td align="left">Tgl. Kembali</td>
			<td align="left">Status</td>
			<td align="left">Keterangan</td>
			<td align="left">Terlambat</td>
			<td align="left">Kembali</td>
			<td align="left">Perpanjang</td>
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
	  <td class='td-data'>".$d['ket']."</td>
	  <td class='td-data'>";

	    $tgl_dateline=$d['tgl_kembali'];
		$tgl_kembali=date('d-m-Y');
		$lambat=terlambat($tgl_dateline, $tgl_kembali);
		$denda=$lambat*500;
		if ($lambat>0) {
		echo "<font color='red'>$lambat hari <br> Denda : Rp $denda</font>";
		}
		else {
		echo $lambat." hari";
		}
echo "</td>
	  <td class='td-data'><a href=' ".base_url().'index.php/Admin/Admin/kembali_action/'.$d['id_transaksi'].'/'.$d['id_buku'].'/'.$denda."  '><i class='btn btn-mini' >Kembali&nbsp;<i class='icon-check'></i></i></a></td>
	  <td class='td-data'><a href='  ".base_url().'index.php/Admin/Admin/perpanjang_action/'.$d['id_transaksi'].'/'.$d['id_buku'].'/'.$lambat.'/'.$tgl_dateline.'/'.$d['ket']." '><i class='btn btn-mini'>Perpanjang&nbsp;<i class='icon-plus-sign'></i></i></a></td>
	  </tr>";
}
?>
</tbody>
</table>

<a href="<?php echo base_url()."index.php/Admin/Admin/cetak_laporan_peminjaman"; ?>" class="btn btn-mini"><i class="icon-print"></i> Print</a>&nbsp;<a href="<?php echo base_url()."index.php/Admin/Admin/transaksi"; ?>" class="btn btn-mini"><i class="icon-th-large"></i> Transaksi</a>
<br>
<br>

<p><b>Note : </b>Data di atas merupakan data buku yang siap di perpanjang maupun siap untuk dikembalikan, perpanjangan buku hanya boleh dilakukan 1x, batas waktu peminjaman 7 hari bila lewat dari batas itu akan dikenakan denda sebaesar Rp.500/hari. Batas perpanjangan peminjaman buku dapat dilakukan jika belum memiliki keterlambatan pengembalian</p>
</div>
<p class="footer">&nbsp;</p>
</div>
</body>
</html>