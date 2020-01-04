<div class="container">
<div class="row justify-content-center">    

<!--Firman | Bikin halaman register akun-->	
<div class="col-md-4">	
<?php echo validation_errors(); ?>  	
	<?php echo form_open('login/register');?>
	<div>
		<center><label><H1>Sign Up</H1></label></center>
	</div>
    <div class="form-grup">
		 <Label>Nama:</Label>
		 <input class="form-control" type="text" name="name" placeholder="Nama"value="<?php echo set_value('name'); ?>"/>
		 <?php echo form_error('name'); ?>
	</div>
 
	<div class="form-grup">
		 <Label>Username:</Label>
		 <input class="form-control" type="text" name="username" placeholder="Username"value="<?php echo set_value('username'); ?>"/> 
		 <?php echo form_error('username'); ?>
	</div>
	
	<div class="form-grup">
		 <Label>Email:</Label>
		 <input class="form-control" type="text" name="email" placeholder="Gunakan Email Amikom" value="<?php echo set_value('email'); ?>"/>
		 <?php echo form_error('email'); ?>
	</div>

	<div class="form-grup">
		 <Label>Level:</Label>
		 <select class="form-control" name="level" value="<?php echo set_value('level'); ?>">
		 	<option value="mhs">Mahasiswa</option>
		 	<option value="dsn">Dosen</option>
		 </select>
	</div>
 
	<div class="form-grup">
     <Label>Password:</Label>
     <input class="form-control" type="password" name="password" placeholder="Password"value="<?php echo set_value('password'); ?>"/>
     <?php echo form_error('password'); ?>
	</div>
	
	<div class="form-grup">
     <Label>Password Confirm:</Label>
     <input class="form-control" type="password" name="password_conf" placeholder="Confirm Password"value="<?php echo set_value('password_conf'); ?>"/>
     <?php echo form_error('password_conf'); ?>
	</div>
 
     <hr><input class="btn btn-primary btn-block" type="submit" name="btnSubmit" value="Daftar" /><hr>
 
     <?php echo form_close();?>
 
     <p>
     Kembali ke halaman login ---> <?php echo anchor(site_url().'login','Login'); ?>
     </p>
</div>		
</div>
<?php echo form_close(); ?>
</div>