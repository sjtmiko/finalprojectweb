<!-- Begin Page Content -->  
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Edit Wisuda</h1>
	<form method="post" action="<?= base_url('wisuda/wisuda_edit_act') ?>">

		<!-- Simpan id -->
		<input type="hidden" name="id" value="<?= $data_wisuda->id_wisuda; ?>">
		<div class="form-group">
			<label>NIM</label>
			<input type="text" class="form-control" name="nim" value="<?= $data_wisuda->nim; ?>">
		</div>
		<div class="form-group">
			<label>Nama Wisudawan</label>
			<input type="text" class="form-control" name="nama" value="<?= $data_wisuda->nama; ?>">
		</div>
		<div class="form-group">
			<label>Jurusan</label>
			<input type="text" class="form-control" name="jurusan" value="<?= $data_wisuda->jurusan; ?>">
		</div>
		<div class="form-group">
			<label>Jadwal</label>
			<input type="text" class="form-control" name="jadwal" value="<?= $data_wisuda->jadwal; ?>">
		</div>
		<div>
		<button type="submit" class="btn btn-primary">Submit</button>
		<a class="btn btn-warning" href="<?= base_url('wisuda/view_wisuda') ?>">Batal</a>
		</div>
	</form>
</div>
<!-- /.container-fluid