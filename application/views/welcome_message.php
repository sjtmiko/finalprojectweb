<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<!--link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css');?>"-->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.css">
	
	
</head>
<body>
<div class="jumbotron">
<h1>Halaman Welcome Message</h1>
</div>
<div class="container">
	<h1 >Welcome to Amikom!</h1>

	<a href="<?php echo base_url('welcome/profile');?>"><button class="btn btn-warning btn-lg" >Profile</button></a>
	<a href="<?php echo base_url('welcome/about');?>"><button class="btn btn-warning btn-lg" >About</button></a>
	<div class="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/Welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>