<!DOCTYPE html>
<html lang="en">
	<?php $this->load->view('template/head'); ?>
<body>
<div id="container">
	<?php $this->load->view('template/navbar'); ?>
	<div id="content">
		<div style="text-align: justify;"><b>Halaman User Satuan Kerja</b><br>
		<div class="container-fluid">
			<p>Nama Satuan kerja:</p>
			<p>Tanggal Ajuan:</p>
			<p>Nama Pengaju:</p>
			<p>Nomor Pengajuan:</p>
			<br /	>
		</div>
		<div class="container-fluid">
			<button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#unggahfile"><i class="fas fa-plus fa-sm"></i> Unggah File</button>
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
						foreach ($laporan as $key) { ?>
							<tr>
								<td><p align="center"><?= $no++; ?></p></td>
								<td>Laporan Penggunaan BMN</td>
								<td><a href="<?= base_url(); ?>assets/spbmn/<?= $key->pdf1; ?>"><?php echo $key->pdf1 ?></a></td>
								<td><p align="center"><input type="checkbox" name=""></p></td>
							</tr>
							<tr>
								<td><p align="center"><?= $no++; ?></p></td>
								<td>Laporan Pemanfaatan BMN</td>
								<td><a href="<?= base_url(); ?>assets/spbmn/<?= $key->pdf2; ?>"><?php echo $key->pdf2 ?></a></td>
								<td><p align="center"><input type="checkbox" name=""></p></td>
							</tr>
							<tr>
								<td><p align="center"><?= $no++; ?></p></td>
								<td>Laporan Pemindahtanganan BMN</td>
								<td><a href="<?= base_url(); ?>assets/spbmn/<?= $key->pdf3; ?>"><?php echo $key->pdf3 ?></a></td>
								<td><p align="center"><input type="checkbox" name=""></p></td>
							</tr>
							<tr>
								<td><p align="center"><?= $no++; ?></p></td>
								<td>Laporan Hasil Penertiban BMN</td>
								<td><a href="<?= base_url(); ?>assets/spbmn/<?= $key->pdf4; ?>"><?php echo $key->pdf4 ?></a></td>
								<td><p align="center"><input type="checkbox" name=""></p></td>
							</tr>
						<?php }
					?>
				</tbody>	
			</table>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="unggahfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Unggah File</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<br>
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?php echo base_url(). 'index.php/User/Statuspbmn/unggah' ?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label>Laporan Penggunaan BMN (pdf)</label><br>
						<input type="file" name="pdf1" class="form-control">
					</div>
					<div class="form-group">
						<label>Laporan Penggunaan BMN (xlsx)</label><br>
						<input type="file" name="xlsx1" class="form-control">
					</div>
					<div class="form-group">
						<label>Laporan Pemanfaatan BMN (pdf)</label><br>
						<input type="file" name="pdf2" class="form-control">
					</div>
					<div class="form-group">
						<label>Laporan Pemanfaatan BMN (xlsx)</label><br>
						<input type="file" name="xlsx2" class="form-control">
					</div>
					<div class="form-group">
						<label>Laporan Pemindahtanganan BMN (pdf)</label><br>
						<input type="file" name="pdf3" class="form-control">
					</div>
					<div class="form-group">
						<label>Laporan Pemindahtanganan BMN (xlsx)</label><br>
						<input type="file" name="xlsx3" class="form-control">
					</div>
					<div class="form-group">
						<label>Laporan Hasil Penerbitan BMN</label><br>
						<input type="file" name="pdf4" class="form-control">
					</div>
					<div class="form-group">
						<label>Laporan Hasil Penerbitan BMN</label><br>
						<input type="file" name="xlsx4" class="form-control">
					</div>
			</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
			<button type="submit" class="btn btn-primary">Simpan</button>
		</div>
			</form>
		</div>
	</div>
</div>
