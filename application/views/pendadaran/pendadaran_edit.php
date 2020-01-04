<!-- Begin Page Content -->  
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Edit Pendadaran</h1>
	<form method="post" action="<?= base_url('pendadaran/pendadaran_edit_act') ?>">

		<!-- Simpan id -->
		<input type="hidden" name="id" value="<?= $data_pendadaran->id_pendadaran; ?>">
		<div class="form-group">
			<label>Hari / Tanggal</label>
			<input type="text" class="form-control" name="waktu" value="<?= $data_pendadaran->hari_tanggal; ?>">
		</div>
		<div class="form-group">
			<label>Jam</label>
			<input type="text" class="form-control" name="jam" value="<?= $data_pendadaran->jam; ?>">
		</div>
		<div class="form-group">
			<label>Ruang</label>
			<input type="text" class="form-control" name="ruang" value="<?= $data_pendadaran->ruang; ?>">
		</div>
		<div class="form-group">
			<label>NIM</label>
			<input type="text" class="form-control" name="nim" value="<?= $data_pendadaran->nim; ?>">
		</div>
		<div class="form-group">
			<label>Nilai</label>
			<input type="text" class="form-control" name="nilai" value="<?= $data_pendadaran->nilai; ?>">
		</div>
		<div class="form-group">
			<label>Status</label>
			<input type="text" class="form-control" name="status" value="<?= $data_pendadaran->status; ?>">
		</div>
		<div class="form-group">
			<label>Dosen Pendamping</label>
			<input type="text" class="form-control" name="dosen" value="<?= $data_pendadaran->dosen_pendamping; ?>">
		</div>
		<div>
		<button type="submit" class="btn btn-primary">Submit</button>
		<a class="btn btn-warning" href="<?= base_url('pendadaran/view_pendadaran') ?>">Batal</a>
		</div>
	</form>
</div>
<!-- /.container-fluid