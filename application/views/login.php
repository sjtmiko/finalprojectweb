<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LOG IN</title>
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.css') ?>">
</head>
<body>
    
<center>
<div>
            
<div class="col-md-4">
    <div>
        <h1>Login</h1>
    <p class="text-danger"><?php echo $this->session->flashdata('msg_login'); ?></p>
    </div>
    <div class="card-body">
    <form action="<?php echo base_url('login/aksi_login'); ?>" method="post">
        <div class="form-group">
        <label>Username</label>
        <input type="text" class="form-control" name="username" placeholder="Username">
        </div>
        <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
    </div>
	<div class="text-center p-t-115">
						<span class="txt1">
							Don’t have an account?
						</span>

						<a class="txt2" href="<?php echo base_url('login/register'); ?>">
							Sign Up
						</a>
	</div>
    
</form>
</div>
</div></center>
</body>
</html>