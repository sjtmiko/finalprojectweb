<!--Begin Page Content -->  
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">input data Yudisium</h1>
	<!-- koding disini -->
	<form method="post" action="<?= base_url('yudisium/yudisium_add_act') ?>">
		<div class="form-group">
			<label>NIM</label>
			<input type="text" class="form-control" name="nim">
		</div>
		<div class="form-group">
			<label>Nama</label>
			<input type="text" class="form-control" name="nama">
		</div>
		<div class="form-group">
			<label>IPK</label>
			<input type="text" class="form-control" name="ipk">
		</div>
		<div class="form-group">
			<label>Jumlah SKS</label>
			<input type="text" class="form-control" name="jumlah_sks">
		</div>
		<div class="form-group">
			<label>Nilai D</label>
			<input type="text" class="form-control" name="nilai_d">
		</div>
		<div class="form-group">
			<label>Nilai E</label>
			<input type="text" class="form-control" name="nilai_e">
		</div>
		<div class="form-group">
			<label>Status</label>
			<input type="text" class="form-control" name="status">
		</div>
		<div class="form-group">
			<label>Ket</label>
			<input type="text" class="form-control" name="ket">
		</div>

		<button type="submit" class="btn btn-primary">Submit</button>
		<a class="btn btn-warning" href="<?= base_url('yudisium/view_yudisium') ?>">Batal</a>
	</form>

</div>
<!-- /.container-fluid