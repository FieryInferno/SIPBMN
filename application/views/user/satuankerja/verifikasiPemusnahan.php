<!DOCTYPE html>
<html lang="en">
	<?php $this->load->view('template/head'); ?>
<body>
<div id="container">
	<?php $this->load->view('template/navbar'); ?>
<div id="content">

	<div class="container-fluid">
		<p>Nama Satuan kerja:</p>
		<p>Tanggal Ajuan:</p>
		<p>Nama Pengaju:</p>
		<p>Nomor Pengajuan:</p>
		<br /	>
	</div>

	<div class="container-fluid">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Berkas</th>
					<th>File</th>
					<th>Checklist</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$no	= 1;
					foreach ($pemusnahan as $key) { ?>
						<tr>
							<td><p align="center"><?= $no++; ?></p></td>
							<th>Surat Permohonan Pemusnahan BMN</th>
							<td><a href="<?= base_url(); ?>assets/spbmn/<?= $key->pdf1; ?>"><?php echo $key->pdf1 ?></a></td>
							<td><p align="center"><input type="checkbox" name=""></p></td>
						</tr>
						<tr>
							<td><p align="center"><?= $no++; ?></p></td>
							<th>SK PSP</th>
							<td><a href="<?= base_url(); ?>assets/spbmn/<?= $key->pdf2; ?>"><?php echo $key->pdf2 ?></a></td>
							<td><p align="center"><input type="checkbox" name=""></p></td>
						</tr>
						<tr>
							<td><p align="center"><?= $no++; ?></p></td>
							<th>SK Tim Internal</th>
							<td><a href="<?= base_url(); ?>assets/spbmn/<?= $key->pdf3; ?>"><?php echo $key->pdf3 ?></a></td>
							<td><p align="center"><input type="checkbox" name=""></p></td>
						</tr>
						<tr>
							<td><p align="center"><?= $no++; ?></p></td>
							<th>Berita Acara Penelitian yang ditandatangani oleh Tim Internal</th>
							<td><a href="<?= base_url(); ?>assets/spbmn/<?= $key->pdf4; ?>"><?php echo $key->pdf4 ?></a></td>
							<td><p align="center"><input type="checkbox" name=""></p></td>
						</tr>
						<tr>
							<td><p align="center"><?= $no++; ?></p></td>
							<th>Penjelasan dan pertimbangan pemusnahan BMN</th>
							<td><a href="<?= base_url(); ?>assets/spbmn/<?= $key->pdf5; ?>"><?php echo $key->pdf5 ?></a></td>
							<td><p align="center"><input type="checkbox" name=""></p></td>
						</tr>
                        <tr>
							<td><p align="center"><?= $no++; ?></p></td>
                            <th>Surat pernyataan atas kebenaran formil dan materil objek dan besaran nilai yang diusulkan</th>
							<td><a href="<?= base_url(); ?>assets/spbmn/<?= $key->pdf6; ?>"><?php echo $key->pdf6 ?></a></td>
							<td><p align="center"><input type="checkbox" name=""></p></td>
						</tr>
                        <tr>
							<td><p align="center"><?= $no++; ?></p></td>
							<th>Surat penyataan bahwa BMN tidak lagi dapat digunakan, dimanfaatkan, dan/atau dipindahtangankan atau BMN harus dilakukan pemusnahan berdasarkan ketentuan peraturan perundang-undangan</th>
							<td><a href="<?= base_url(); ?>assets/spbmn/<?= $key->pdf7; ?>"><?php echo $key->pdf7 ?></a></td>
							<td><p align="center"><input type="checkbox" name=""></p></td>
						</tr>
                        <tr>
							<td><p align="center"><?= $no++; ?></p></td>
                            <th>Foto asli BMN yang diusulkan dimusnahkan</th>
							<td><a href="<?= base_url(); ?>assets/spbmn/<?= $key->pdf8; ?>"><?php echo $key->pdf8 ?></a></td>
							<td><p align="center"><input type="checkbox" name=""></p></td>
						</tr>
                        <tr>
							<td><p align="center"><?= $no++; ?></p></td>
							<th>Surat Pernyataan Pemusnahan Tidak Mengganggu Tugas Pokok dan Fungsi</th>
							<td><a href="<?= base_url(); ?>assets/spbmn/<?= $key->pdf9; ?>"><?php echo $key->pdf9 ?></a></td>
							<td><p align="center"><input type="checkbox" name=""></p></td>
						</tr>
                        <tr>
							<td><p align="center"><?= $no++; ?></p></td>
							<th>Lampiran BMN</th>
							<td><a href="<?= base_url(); ?>assets/spbmn/<?= $key->xlsx; ?>"><?php echo $key->xlsx ?></a></td>
							<td><p align="center"><input type="checkbox" name=""></p></td>
						</tr>
					<?php }
				?>
			</tbody>
		</table>
	</div>
	<br />

	<form>
		<div class="form-group" align="center">
			<label for="exampleFormControlTextarea1">Komentar</label>
			<textarea class="form-control container-fluid" id="exampleFormControlTextarea1" rows="3"></textarea>
		</div>
	</form>

	<div class="container-fluid" align="center">
		<form method="post">
			 <p><input type="checkbox" name="verifikasi[]"> Yakin ingin kirim ke Biro Hukum?</p>
		</form>
	</div>

	 </div>
      <div class="container-fluid">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Submit ke Satuan Kerja</button>
        <button type="submit" class="btn btn-primary">Submit ke Biro Hukum</button>
      </div>

<p class="footer">&nbsp;</p>
</div>
</body>
</html>
