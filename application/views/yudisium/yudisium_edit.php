<!-- Begin Page Content -->  
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Edit Yudisium</h1>
	<form method="post" action="<?= base_url('yudisium/yudisium_edit_act') ?>">

		<!-- Simpan id -->
		<input type="hidden" name="id" value="<?= $data_yudisium->id_yudisium; ?>">
		<div class="form-group">
			<label>NIM</label>
			<input type="text" class="form-control" name="nim" value="<?= $data_yudisium->nim; ?>">
		</div>
		<div class="form-group">
			<label>Nama</label>
			<input type="text" class="form-control" name="nama" value="<?= $data_yudisium->nama; ?>">
		</div>
		<div class="form-group">
			<label>IPK</label>
			<input type="text" class="form-control" name="ipk" value="<?= $data_yudisium->ipk; ?>">
		</div>
		<div class="form-group">
			<label>Jumlah SKS</label>
			<input type="text" class="form-control" name="jumlah_sks" value="<?= $data_yudisium->jumlah_sks; ?>">
		</div>
		<div class="form-group">
			<label>Nilai D</label>
			<input type="text" class="form-control" name="nilai_d" value="<?= $data_yudisium->nilai_d; ?>">
		</div>
		<div class="form-group">
			<label>Nilai E</label>
			<input type="text" class="form-control" name="nilai_e" value="<?= $data_yudisium->nilai_e; ?>">
		</div>
		<div class="form-group">
			<label>Status</label>
			<input type="text" class="form-control" name="status" value="<?= $data_yudisium->status; ?>">
		</div>
		<div class="form-group">
			<label>Ket</label>
			<input type="text" class="form-control" name="ket" value="<?= $data_yudisium->ket; ?>">
		</div>
		<div>
		<button type="submit" class="btn btn-primary">Submit</button>
		<a class="btn btn-warning" href="<?= base_url('yudisium/view_yudisium') ?>">Batal</a>
		</div>
	</form>
</div>
<!-- /.container-fluid