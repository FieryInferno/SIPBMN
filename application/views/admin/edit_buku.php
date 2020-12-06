<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Edit Data</title>
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
<div class="page-header"><h3><img src="<?php echo base_url(); ?>assets/img/book2.png" width="50" height="50" /> Edit Data Buku Perpustakaan - Admin</div>
</div>

<img src="<?php echo base_url(); ?>assets/img/buku.jpg" id="full-screen-background-image" />
  
<div id="wrapper">
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">

<fieldset style="width: 100%; margin: auto;">
<legend>Formulir Edit Data Buku Perpustakaan</legend>
    
    <form action="<?php echo base_url()."index.php/Admin/Admin/do_edit_buku"; ?>" method="post">
        <input type="hidden" name="id_buku" value="<?php echo $id_buku; ?>" />
		
		<p>
            Judul Buku<br />
            <input type="text" name="judul" required value="<?php echo $judul; ?>"/>
        </p>
		
        <p>
            Tahun Terbit<br />
            <input type="text" name="terbit" required value="<?php echo $terbit; ?>"/>
        </p>
		
		<p>
            Penerbit<br />
            <input type="text" name="penerbit" required value="<?php echo $penerbit; ?>"/>
        </p>
        
		<p>
            Jumlah Halaman<br />
            <input type="text" name="halaman" required value="<?php echo $halaman; ?>"/>
        </p>
		
		<p>
            Jumlah Buku<br />
            <input type="text" name="jumlah" required value="<?php echo $jumlah; ?>"/>
        </p>
        
		<p>
            Asal Buku<br />
            <input type="text" name="peroleh" required value="<?php echo $peroleh; ?>"/>
        </p>
		
		<label class="control-label"> Tanggal Update </label>
            <input type="text" id="datepicker" name="tanggal" class="input" value="<?php echo $tanggal; ?>"/>
        </p>	
		
        <p>
          <input type="submit" value="Update" />
          <input type="reset" value="Reset" onClick="return confirm('Reset data yang telah diedit?')">
        </p>
    </form>
</fieldset>
			</div>
		</div>
	</div>
</div>

    <script> 
    //options method for call datepicker
	$('#datepicker').datepicker({
         format: 'dd-mm-yyyy',
		 autoclose: true,
		 todayHighlight: true
	})
    </script>

</body>
</html>