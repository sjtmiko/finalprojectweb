<!--Begin Page Content -->  
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Manajemen User</h1>
	<!-- koding disini -->
	<form method="post" action="<?= base_url('admin/user_add_act') ?>">
		<div class="form-group">
			<label>Nama User</label>
			<input type="text" class="form-control" name="nama">
		</div>
		<div class="form-group">
			<label>Username</label>
			<input type="text" class="form-control" name="username">
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="password" class="form-control" name="password">
		</div>
		<div class="form-grup">
		 <Label>Level:</Label>
		 <select class="form-control" name="level" value="<?php echo set_value('level'); ?>">
		 	<option value="mhs">Mahasiswa</option>
		 	<option value="dsn">Dosen</option>
		 </select>
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="text" class="form-control" name="Email">
		</div>

		<button type="submit" class="btn btn-primary">Submit</button>
		<a class="btn btn-warning" href="<?= base_url('admin/user') ?>">Batal</a>
	</form>

</div>
<!-- /.container-fluid