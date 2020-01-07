<!-- Begin Page Content -->  
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Edit krs</h1>
<form method="post" action="">

		<!-- Simpan id -->
        <input type="hidden" name="id" value="<?= $data_krs->id_krs; ?>">
		<div class="form-group">
			<label>NIM</label>
			<input type="text" class="form-control" name="nim" value="<?= $data_krs->nim; ?>">
		</div>
		<div class="form-group">
			<label>Nama Mahasiswa</label>
			<input type="text" class="form-control" name="nama" value="<?= $data_krs->nama_mhs; ?>">
		</div>
		<div class="form-group">
			<label>Semester</label>
			<input type="text" class="form-control" name="semester" value="<?= $data_krs->semester; ?>">
		</div>
		<div class="form-group">
			<label>Konsentrasi</label>
			<input type="text" class="form-control" name="konsentrasi" value="<?= $data_krs->konsentrasi; ?>">
		</div>
		<div class="form-group">
			<label>Mata Kuliah Wajib</label>
			<input type="text" class="form-control" name="matkul_wajib" value="<?= $data_krs->matkul_wajib; ?>">
		</div>
        <div class="form-group">
			<label>Mata Kuliah Konsentrasi</label>
			<input type="text" class="form-control" name="matkul_konsentrasi" value="<?= $data_krs->matkul_konsentrasi; ?>">
		</div>
		<div>
		<button type="submit" class="btn btn-primary">Submit</button>
		<a class="btn btn-warning" href="<?= base_url('krs/view_krs') ?>">Batal</a>
		</div>
	</form>
</div>
<!-- /.container-fluid