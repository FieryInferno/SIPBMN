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
				<tr>
					<td><p align="center">1</p></td>
					<td>Surat Permohonan SK PSP</td>
					<td><a href="<?= base_url(); ?>assets/spbmn/<?= $spbmn[0]->pdf1; ?>"><?php echo $spbmn[0]->pdf1 ?></a></td>
					<td><p align="center"><input type="checkbox" name=""></p></td>
				</tr>
				<tr>
					<td><p align="center">2</p></td>
					<td>Surat Permohonan SK PSP</td>
					<td><a href="<?= base_url(); ?>assets/spbmn/<?= $spbmn[0]->pdf1; ?>"><?php echo $spbmn[0]->pdf2 ?></a></td>
					<td><p align="center"><input type="checkbox" name=""></p></td>
				</tr>
				<tr>
					<td><p align="center">3</p></td>
					<td>Surat Permohonan SK PSP</td>
					<td><a href="<?= base_url(); ?>assets/spbmn/<?= $spbmn[0]->pdf1; ?>"><?php echo $spbmn[0]->pdf3 ?></a></td>
					<td><p align="center"><input type="checkbox" name=""></p></td>
				</tr>
				<tr>
					<td><p align="center">4</p></td>
					<td>Surat Permohonan SK PSP</td>
					<td><a href="<?= base_url(); ?>assets/spbmn/<?= $spbmn[0]->pdf1; ?>"><?php echo $spbmn[0]->pdf4 ?></a></td>
					<td><p align="center"><input type="checkbox" name=""></p></td>
				</tr>
				<tr>
					<td><p align="center">5</p></td>
					<td>Surat Permohonan SK PSP</td>
					<td><a href="<?= base_url(); ?>assets/spbmn/<?= $spbmn[0]->pdf1; ?>"><?php echo $spbmn[0]->xlsx ?></a></td>
					<td><p align="center"><input type="checkbox" name=""></p></td>
				</tr>
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
			 <p align="center"><input type="checkbox" name="verifikasi[]"> Verifikasi?</p>
		</form>
	</div>

	 </div>
      <div class="container-fluid">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>

<p class="footer">&nbsp;</p>
</div>
</body>
</html>
