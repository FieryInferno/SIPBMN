<!DOCTYPE html>
<?php 
include('koneksi.php');
include('koneksi_transaksi.php');
include('transaksi_fungsi.php');
?>
<html>
<body>
<?php empty( $app ) ? header('location:../homeuser.php') : '' ; if(isset($_SESSION['level'])){?>

<?php if($_SESSION['level']!='user'){
echo '<div class="alert alert-error"> Maaf Anda Harus Login sebagai level User terlebih dahulu untuk mengakses halaman ini </div>';//jika bukan user jangan lanjut
die ('');
?>

<?php } ?>

<div style="text-align:justify;"><img src="../user.png" width="50" height="50" style="float:left; margin:0 9px 3px 0;" /><legend>Profile Mahasiswa</legend></h3>

<div class="tab-content">
<table width="600" class="table table-bordered table-condensed table-hover" style="width:5px;">
	<thead>

    <?php
	$username = $_GET['username'];	
    $sql = "SELECT * from user WHERE username='".$_SESSION['username']."'";
    foreach ($dbh->query($sql) as $data) :
	?>	
	    <tr class="nowrap">
		    <th align="left">Photo</th>
		    <th> : </th>
	    <td><img src="foto/<?php echo $data['foto']?>" width="100" height="100"></a></td>
		<tr class="nowrap">
			<th align="left">Username</th>
			<th> : </th>
			<td align="left"><?php echo $data['username'] ?></td>
	    </tr>
		<tr class="nowrap">
			<th align="left">Password</th>
		    <th> : </th>
		    <td align="left"><?php echo $data['password'] ?></td>
		</tr>
		<tr class="nowrap">
			<th align="left">Nama</th>
			<th> : </th>
			<td align="left"><?php echo $data['nama'] ?></td>
		</tr>
			<th align="left">Jenis Kelamin</th>
			<th> : </th>
			<td align="left"><?php echo $data['jk'] ?></td>
		<tr class="nowrap">	
			<th align="left">Tempat Lahir</th>
		    <th> : </th>
			<td align="left"><?php echo $data['tempat'] ?></td>
		</tr>	
		<tr class="nowrap">	
			<th align="left">Tanggal Lahir</th>
			<th> : </th>
			<td align="left"><?php echo $data['lahir'] ?></td>
		</tr>
        <tr class="nowrap">		
			<th align="left">Fakultas</th>
			<th> : </th>
			<td align="left"><?php echo $data['fakultas'] ?></td>
		</tr>
        <tr class="nowrap">		
			<th align="left">Jurusan</th>
			<th> : </th>
			<td align="left"><?php echo $data['jurusan'] ?></td>
        </tr>
        <tr class="nowrap">		
		    <th align="left">Tahun Angkatan</th>
			<th> : </th>
			<td align="left"><?php echo $data['tahun'] ?></td>
	    </tr>
		<tr class="nowrap">
		<th align="left">Alamat</th>
		    <th> : </th>
			<td align="left"><?php echo $data['alamat'] ?></td>
		</tr>
		<tr class="nowrap">
		<th align="left">Email</th>
		    <th> : </th>
			<td align="left"><?php echo $data['email'] ?></td>
		</tr>
        <tr class="nowrap">		
			<th align="left">Ponsel</th>
		    <th> : </th>
			<td align="left"><?php echo $data['hp'] ?></td>
		</tr>
		<tr class="nowrap">		
			<th align="left">Nama File Foto</th>
		    <th> : </th>
			<td align="left"><?php echo $data['foto'] ?></td>
		</tr>
			<?php if($_SESSION['level']=='user'){?>
		<tr class="nowrap">
		<th align="left">Alat</th>
			<th> : </th>
			<?php if($_SESSION['level']=='user'){?>
			<th align="left"><a href="handler.php?username=<?php echo $data['username']; ?>&aksi=edit_user" class="btn btn-mini"><i class="icon-edit"></i> Edit</a>
			<?php } ?>
		</tr>
			<?php } ?>
			
		</tr>
	</thead>
		
		<?php
    endforeach;
?>

</table>
<p><b>Note : </b>Data di atas merupakan data user profil yang terdaftar dalam sistem perpustakaan, seorang user bisa mengedit profile mereka sendiri, untuk mengupload foto silahkan gunakan menu upload di bawah ini, upload foto sesuai nama foto yang terupdate.</p>
</div>

<div style="text-align:justify;"><img src="../foto.png" width="50" height="50" style="float:left; margin:0 9px 3px 0;" /><legend>Upload File Foto</legend></h3>
	<form name="form" enctype="multipart/form-data" action="handler.php?aksi=proses_foto" method="POST">
    <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
	Upload : <input name="file" type="file" style="cursor:pointer;" /><br><br>
    <input type="submit" name="submit" value="Upload" />
    </form>

<?php 
}else{
echo '<div class="alert alert-error"> Maaf Anda Harus Login terlebih dahulu untuk mengakses halaman ini </div>';
}
?>
<br>
<div style="text-align:justify;"><img src="../status.png" width="50" height="50" style="float:left; margin:0 9px 3px 0;" /><legend>Status Peminjaman Buku</legend></h3>

<div id="wrapper">
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">

<div class="tab-content">

<?php 
	include "root.php";
	$db=new data();
	$db->status_peminjaman_buku();
?>

<p><b>Note : </b>Data di atas merupakan status peminjaman buku perpustakaan sebagai pengingat mahasiswa yang sedang meminjam buku perputakaan, perpanjangan buku hanya boleh dilakukan 1x, batas waktu peminjaman 7 hari bila lewat dari batas itu akan dikenakan denda sebaesar Rp.500/hari.</p>
</div>

</div>
		</div>
	</div>
</div>

</body>
</html>