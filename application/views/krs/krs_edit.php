<!-- Begin Page Content -->  
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Edit krs</h1>
<form method="post" action="" method="post" >

		<!-- Simpan id -->
        <input type="hidden" name="id" value="<?= $data_krs->id_krs; ?>">
		<div class="form-group">
			<label>kode matakuliah</label>
			<input type="text" class="form-control" name="nim" value="<?= $data_krs->kode_matkul; ?>">
		</div>
		<div class="form-group">
			<label>Nama Matakuliah</label>
			<input type="text" class="form-control" name="nama" value="<?= $data_krs->nama_matkul; ?>">
		</div>
		<div class="form-group">
			<label>Jumlah SKS</label>
			<input type="text" class="form-control" name="jurusan" value="<?= $data_krs->jumlah_sks; ?>">
		</div>
		<div class="form-group">
			<label>Konsentrasi</label>
			<input type="text" class="form-control" name="jadwal" value="<?= $data_krs->konsentrasi; ?>">
		</div>
        <div class="form-group">
			<label>Semester</label>
			<input type="text" class="form-control" name="jadwal" value="<?= $data_krs->semester; ?>">
		</div>
		<div>
		<button type="submit" class="btn btn-primary">Submit</button>
		<a class="btn btn-warning" href="<?= base_url('krs/view_krs') ?>">Batal</a>
		</div>
	</form>
</div>
<!-- /.container-fluid