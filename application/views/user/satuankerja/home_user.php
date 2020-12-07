<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('template/head'); ?>
<body>
<div id="container">
		<?php $this->load->view('template/navbarUser'); ?>
<div id="content">

<div style="text-align: justify;"><b>Halaman User Perpustakaan</b><br>
<i>Di dalam menu ini seorang user perpustakaan bisa melakukan kegiatan-kegiatan yang bersangkutan dengan pelayanan aplikasi yaitu sebagai berikut : </i></div>
<ul>
<li>Melihat Profil Mahasiswa</li>
<li>Mengecek Status Peminjaman Buku</li>
<li>Membaca Buku Online</li>
<li>Download Kumpulan Ebook</li>
</ul>
<br><p align="center"><img src="<?php echo base_url(); ?>assets/img/book4.jpg" width="250" height="250"></br>
<br>

<div style="text-align: justify;"><b>Perhatian !!!</b><br>
<i>Seorang user harus mengikuti peraturuan perpustakaan berikut ini : </i>
<ol>
<li>User hanya diperbolehkan membuat satu akun menggunakan NPM sendiri yang terdaftar dalam lingkungan kampus.</li>
<li>Mahasiswa yang belum terdaftar "Guest" tidak diperbolehkan meminjam buku perpustakaan.</li>
<li>Untuk melakukan transaksi peminjaman atau pengembalianbuku bisa langsung memilih buku di perpustakaan lalu menghampiri admin untuk melakukan transaksi.</li>
<li>Mahasiswa yang terdaftar "User" bebas membaca buku online yang disediakan.</li>
<li>User bebas mendownload Ebook yang tersedia, boleh disebarluaskan namun tidak boleh dikomersilkan.</li>
<li>Mahasiswa harus tenang di dalam perpustkaan dan jangan membuat kegaduhan.</li>
<li>Bila ada user yang melanggar ketentuan harus siap untuk di delete akun perpustakaan.</li>
</ol>

</div>

<p class="footer">&nbsp;</p>
</div>
</body>
</html>
