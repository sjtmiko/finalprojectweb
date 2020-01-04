<!--Begin Page Content -->  
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">input data Wisuda</h1>
	<!-- koding disini -->
	<form method="post" action="<?= base_url('wisuda/wisuda_add_act') ?>">
		<div class="form-group">
			<label>NIM</label>
			<input type="text" class="form-control" name="nim">
		</div>
		<div class="form-group">
			<label>Nama</label>
			<input type="text" class="form-control" name="nama">
		</div>
		<div class="form-group">
			<label>Jurusan</label>
			<input type="text" class="form-control" name="jurusan">
		</div>
		<div class="form-group">
			<label>Jadwal</label>
			<input type="text" class="form-control" name="jadwal">
		</div>

		<button type="submit" class="btn btn-primary">Submit</button>
		<a class="btn btn-warning" href="<?= base_url('wisuda/view_wisuda') ?>">Batal</a>
	</form>

</div>
<!-- /.container-fluid