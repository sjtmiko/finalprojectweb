<!--Begin Page Content -->  
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">input data Pendadaran</h1>
	<!-- koding disini -->
	<form method="post" action="<?= base_url('pendadaran/pendadaran_add_act') ?>">
		
		<div class="form-group">
			<label>Hari / Tanggal</label>
			<input type="text" class="form-control" name="hari_tanggal">
		</div>
		<div class="form-group">
			<label>Jam</label>
			<input type="text" class="form-control" name="jam">
		</div>
		<div class="form-group">
			<label>Ruang</label>
			<input type="text" class="form-control" name="ruang">
		</div>
		<div class="form-group">
			<label>NIM</label>
			<input type="text" class="form-control" name="nim">
		</div>
		<div class="form-group">
			<label>Nilai</label>
			<input type="text" class="form-control" name="nilai">
		</div>
		<div class="form-group">
			<label>Status</label>
			<input type="text" class="form-control" name="status">
		</div>
		<div class="form-group">
			<label>Dosen Pendamping</label>
			<input type="text" class="form-control" name="dosen_pendamping">
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
		<a class="btn btn-warning" href="<?= base_url('pendadaran/view_pendadaran') ?>">Batal</a>
	</form>

</div>
<!-- /.container-fluid