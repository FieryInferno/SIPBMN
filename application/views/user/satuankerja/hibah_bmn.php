<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('template/head'); ?>
<body>
<div id="container">
		<?php $this->load->view('template/navbarUser'); ?>
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
							<th>Surat Permohonan Hibah BMN</th>
							<th>SK PSP BMN</th>
							<th>Alasan untuk Menghibahkan</th>
							<th>Peruntukkan Hibah</th>
							<th>Surat Kesediaan Menerima Hibah</th>
							<th>Data Calon Penerima Hibah</th>
							<th>Berita Acara Penelitian yang ditandatangani oleh tim internal</th>
							<th>SK Tim Internal</th>
							<th>Foto Asli BMN</th>
							<th>Surat Pernyataan Hibah Tidak Mengganggu Tugas Pokok dan Fungsi</th>
							<th>Dokumen Penganggaran BMN</th>
							<th>Lampiran BMN</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$no=1; 
							foreach($spbmn as $spbmn) : ?>
								<tr>
									<td><?php echo $no++ ?></td>
									<td><?php echo $spbmn->pdf1 ?></td>
									<td><?php echo $spbmn->pdf2 ?></td>
									<td><?php echo $spbmn->pdf3 ?></td>
									<td><?php echo $spbmn->pdf4 ?></td>
									<td><?php echo $spbmn->pdf5 ?></td>
									<td><?php echo $spbmn->pdf6 ?></td>
									<td><?php echo $spbmn->pdf7 ?></td>
									<td><?php echo $spbmn->pdf8 ?></td>
									<td><?php echo $spbmn->pdf9 ?></td>
									<td><?php echo $spbmn->pdf10 ?></td>
									<td><?php echo $spbmn->pdf11 ?></td>
									<td><?php echo $spbmn->xlsx ?></td>
								</tr>
							<?php endforeach; 
						?>
					</tbody>
				</table>
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
						<label>Surat Permohonan Persetujuan Penggunaan Sementara (format pdf)</label>
						<input type="file" name="pdf1" class="form-control">
					</div>
					<div class="form-group">
						<label>Surat Permohonan Penggunaan Sementara dari Kementerian/Lembaga lain (format pdf)</label>
						<input type="file" name="pdf2" class="form-control">
					</div>
					<div class="form-group">
						<label>Lampiran BMN</label>
						<input type="file" name="xlsx" class="form-control">
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