<?php empty( $app ) ? header('location:../homeuser.php') : '' ; if(isset($_SESSION['level'])){ ?>

<?php if($_SESSION['level']!='user'){
echo '<div class="alert alert-error"> Maaf Anda Harus Login sebagai level User terlebih dahulu untuk mengakses halaman ini </div>';//jika bukan user jangan lanjut
die ('');
?>

<?php } ?>

<div style="text-align:justify;"><img src="../download.png" width="50" height="50" style="float:left; margin:0 9px 3px 0;" /><legend>Download Kumpulan Ebook Perpustakaan</legend></h3>
<ul>
<li><a href="kumpulan/it/"> Ilmu Komputer </a> <br></li>
<li><a href="kumpulan/sosial/"> Ilmu Sosial dan Politik </a> <br></li>
<li><a href="kumpulan/pendidikan/"> Keguruan dan Ilmu Pendidikan </a> <br></li>
<li><a href="kumpulan/hukum/"> Hukum </a> <br></li>
<li><a href="kumpulan/pertanian/"> Teknik </a> <br></li>
<li><a href="kumpulan/ekonomi/"> Ekonomi </a> <br></li>
<li><a href="kumpulan/fai/"> Agama Islam </a> <br></li>
<li><a href="kumpulan/pertanian/"> Pertanian </a> <br></li>
</ul>
<?php 
}else{
echo '<div class="alert alert-error"> Maaf Anda Harus Login terlebih dahulu untuk mengakses halaman ini </div>';
}