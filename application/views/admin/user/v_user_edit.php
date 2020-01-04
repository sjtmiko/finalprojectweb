<!-- Begin Page Content -->  
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Manajemen User</h1>
	<form method="post" action="<?= base_url('admin/user_edit_act') ?>">

		<!-- Simpan id -->
		<input type="hidden" name="id" value="<?= $user->id; ?>">
		<div class="form-group">
			<label>Nama User</label>
			<input type="text" class="form-control" name="nama" value="<?= $user->nama; ?>">
		</div>
		<div class="form-group">
			<label>Username</label>
			<input type="text" class="form-control" name="username" value="<?= $user->username; ?>">
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
			<input type="text" class="form-control" name="Email" value="<?= $user->Email; ?>">
		</div>
		<div>
		<button type="submit" class="btn btn-primary">Submit</button>
		<a class="btn btn-warning" href="<?= base_url('admin/user') ?>">Batal</a>
		</div>
	</form>
</div>
<!-- /.container-fluid