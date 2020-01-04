<!--Begin Page Content -->  
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Input data KRS</h1>
	<!-- koding disini -->
	<form method="post" action="<?= base_url('krs/krs_add_act') ?>">
		
		<div class="form-group">
			<label>Kode Matakuliah</label>
			<input type="text" class="form-control" name="kode_matkul">
		</div>
		<div class="form-group">
			<label>Nama Matakuliah</label>
			<input type="text" class="form-control" name="nama_matkul">
		</div>
		<div class="form-group">
			<label>Jumlah SKS</label>
			<input type="text" class="form-control" name="jumlah_sks">
		</div>
        <div class="form-group">
			<label>Konsentrasi</label>
			<input type="text" class="form-control" name="konsentrasi">
		</div>
        <div class="form-group">
			<label>Semester</label>
			<input type="text" class="form-control" name="semester">
		</div>







		<button type="submit" class="btn btn-primary">Submit</button>
		<a class="btn btn-warning" href="<?= base_url('krs/view_krs') ?>">Batal</a>
	</form>

</div>
<!-- /.container-fluid