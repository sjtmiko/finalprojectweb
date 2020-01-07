<!--Begin Page Content -->  
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Input data KRS</h1>
	<!-- koding disini -->
	<form method="post" action="<?= base_url('krs/krs_add_act') ?>">
		
		<div class="form-group">
			<label><b>NIM</b></label>
			<input type="text" class="form-control" name="nim">
		</div>
		<div class="form-group">
			<label><b>Nama Mahasiswa</b></label>
			<input type="text" class="form-control" name="nama_mhs">
		</div>
		<div class="form-group">
			<label><b>Semester</b></label>
			<input type="text" class="form-control" name="semester">
		</div>
		<div class="form-group">
			<label><b>Konsentrasi</b> </label>
			<h6><select name="konsentrasi">
				<option value="Web Development" name="matkul_konsentrasi">Web Development</option>
				<option value="Jaringan Komputer" name="matkul_konsentrasi">Jaringan Komputer</option>
				<option value="Animasi" name="matkul_konsentrasi">Animasi</option>
			</select>
		</div>
        <div class="form-group">
			<label><b>Mata Kuliah Wajib</b></label><br>
			<input type="checkbox" name="matkul_wajib" value="Metodologi Penelitian">Metodologi Penelitian<br>
			<input type="checkbox" name="matkul_wajib" value="Pengolahan Basisdata">Pengolahan Basisdata<br>
			<input type="checkbox" name="matkul_wajib" value="Bahasa Indonesia">Bahasa Indonesia<br>
		</div>
        <div class="form-group">
			<label><b>Mata Kuliah Konsentrasi</b></label><br>
			<input type="checkbox" name="matkul_konsentrasi" value="E-commers">E-commers<br>
			<input type="checkbox" name="matkul_konsentrasi" value="E-business">E-business<br>
			<input type="checkbox" name="matkul_konsentrasi" value="User Interface/User Experience">User Interface/User Experience<br>
			<input type="checkbox" name="matkul_konsentrasi" value="Struktur Data">Struktur Data<br>
			<input type="checkbox" name="matkul_konsentrasi" value="Perancangan Web 2">Perancangan Web 2<br><br>
		</div>

		<button type="submit" class="btn btn-primary">Submit</button>
		<a class="btn btn-warning" href="<?= base_url('krs/view_krs') ?>">Batal</a>
	</form>

</div>
<!-- /.container-fluid