<?php
$pinjam		= date("d-m-Y");
$seminggu	= mktime(0,0,0,date("n"),date("j")+7,date("Y"));
$duaminggu  = mktime(0,0,0,date("n"),date("j")+14,date("Y"));
$kembali  	= date("d-m-Y", $seminggu);
$kembali2   = date("d-m-Y", $duaminggu);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Input Transaksi</title>
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
<div class="page-header"><h3><img src="<?php echo base_url(); ?>assets/img/book7.png" width="50" height="50" /> Input Transaksi Buku Perpustakaan</div>
</div>
  
  <img src="<?php echo base_url(); ?>assets/img/transaksi.jpg" id="full-screen-background-image" />
  
<div id="wrapper">
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">
			
<fieldset style="width: 100%; margin: auto;">
<legend>Formulir Input Data Transaksi Peminjaman</legend>
<form action="<?php echo base_url()."index.php/Admin/Admin/input_transaksi_action"; ?>" method="post">
<input type="hidden" name="pinjam" value="<?php echo $pinjam; ?>">
<input type="hidden" name="kembali" value="<?php echo $kembali; ?>">
<input type="hidden" name="kembali2" value="<?php echo $kembali2; ?>">
		
		<p>
            Data Peminjam<br />
		<select class="span4" name="peminjam">
		<option value="" selected>Username &amp; Nama Peminjam</option>
				<?php foreach($data as $d) { 
               echo "<option value=".$d['username'].'.'.$d['nama'].">".$d['username'].'.'.$d['nama']."</option>";
				}
				?>
		</select>
        </p>
		
		<p>
            Judul Buku<br />
		<select class="span4" name="buku">
		<option value="" selected>Pilih Judul Buku</option>
				<?php foreach($data2 as $d2) { 
               echo "<option value=".$d2['id_buku'].'.'.$d2['judul'].">".$d2['id_buku'].'.'.$d2['judul']."</option>";
				}
				?>
		</select>
        </p>
		
        <p>
		
            Tanggal Pinjam<br />
            <b><?php echo $pinjam; ?></b>
        </p>
        
        <p>
            Tangal Kembali<br />
            <b>1 Minggu : <?php echo $kembali; ?> | 2 Minggu : <?php echo $kembali2; ?></b>
        </p>
		
		<p>
			Keterangan<br />
			<select type="text" name="ket">
		    <option selected disabled>Pilih Keterangan Pinjam</option>	
			<option>1x</option>
			<option>2x</option> </select>
		</p>	
		
        <p>
            <input type="submit" value="Simpan" />
            <input type="reset" value="Reset" onClick="return confirm('Reset transaksi yang telah dimasukan?')">
        </p>
    </form>
</fieldset>
			</div>
		</div>
	</div>
</div>

</body>
</html>