<?php 
session_start();

//untuk "login_multiuser" bisa diganti dan sesuaikan dengan folder project
//tujuan seperti dibuat menggunakan $_SERVER['HTTP_HOST'] agar hostname berubah sendiri secara dinamis

include "base-url.php";

isset ($_GET['app']) ? $app = $_GET['app'] : $app = 'admin';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Ebook</title>
	<link href="<?php echo $base_url;?>asset/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo $base_url;?>asset/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="<?php echo $base_url;?>asset/css/style.css" rel="stylesheet">
	
    <link href="<?php echo $base_url;?>asset/css/datepicker2.css" rel="stylesheet">
	
	<link rel="shortcut icon" href="<?php echo $base_url;?>asset/img/book.ico">
	<script type="text/javascript" src="<?php echo $base_url;?>asset/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo $base_url;?>asset/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo $base_url;?>asset/js/scripts.js"></script>
	
    <script type="text/javascript" src="<?php echo $base_url;?>asset/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo $base_url;?>asset/js/bootstrap-datepicker2.js"></script>
	
</head>
<body>

<?php if($_SESSION['level']!='admin'){
echo '<div class="alert alert-error"> Maaf Anda Harus Login sebagai level Admin terlebih dahulu untuk mengakses halaman ini </div>';//jika bukan admin jangan lanjut
die ('');
?>

<?php } ?>

<?php
    if(isset($_POST['submit'])){
	
	$fakultas = $_POST['fakultas'];
	
	if ($fakultas == 'hukum'){
		$direktori = 'ebook/hukum/';
	}
	else if ($fakultas == 'teknik'){
		$direktori = 'ebook/teknik/';
	}
	else if ($fakultas == 'ekonomi'){
		$direktori = 'ebook/ekonimi/';
	}
	else if ($fakultas == 'fai'){
		$direktori = 'ebook/fai/';
	}
	else if ($fakultas == 'it'){
		$direktori = 'ebook/it/';
	}
	else if ($fakultas == 'sosial'){
		$direktori = 'ebook/sosial/';
	}
	else if ($fakultas == 'pendidikan'){
		$direktori = 'ebook/pendidikan/';
	}
	else if ($fakultas == 'pertanian'){
		$direktori = 'ebook/pertanian/';
	}
	
     //$direktori = 'ebook-it/'; //Folder penyimpanan file
     $max_size  = 2500000000*10; //Ukuran file maximal 25mb
     $nama_file = $_FILES['file']['name']; //Nama file yang akan di Upload
     $file_size = $_FILES['file']['size']; //Ukuran file yang akan di Upload
     $nama_tmp  = $_FILES['file']['tmp_name']; //Nama file sementara
	 $type  	= $_FILES['file']['type']; //Type file
     $upload = $direktori . $nama_file; //Memposisikan direktori penyimpanan dan file
    //Proses akan dimulai apabila File telah dipilih sebelumnya
    if($nama_file == ""){echo "File Gagal di Upload karena anda tidak memilih file apapun!";}
    else{
    //Proses upload file jika ukuran lebih kecil dari yang di tentukan
	
	if($type != "application/pdf") {
		echo '<script type="text/javascript">alert("Gagal, pdf tidak valid.");
		window.location.href="homeadmin.php?app=ebook";
		</script>';
	}

    if($file_size <= $max_size)
     {
      if(move_uploaded_file($nama_tmp, $upload)){echo '<div class="alert alert-success"> File Berhasil di Upload ke Direktori : '.$direktori.$nama_file.' </div>';}
	   else{echo '<div class="alert alert-error"> File '.$nama_file.' Gagal di Upload karena Ukuran File Melebihi Kapasitas '.$max_size.' byte </div>';}
     }
    else
    {
     //Jika ukuran file lebih besar dari yang ditentukan
     echo '<div class="alert alert-error"> File '.$nama_file.' Gagal di Upload karena Ukuran File Melebihi Kapasitas '.$max_size.' byte </div>';
    }}}
    else
    {
     echo '<div class="alert alert-info"> Anda Harus ke Menu Upload Sebelum Mengakses Halaman ini </div>';
    }
?>

<a href="homeadmin.php?app=ebook" class="btn btn-mini"><i class="icon-folder-open"></i> Menu Ebook</a>

</body>
<html>  