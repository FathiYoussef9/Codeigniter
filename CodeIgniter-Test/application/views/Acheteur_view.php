<!DOCTYPE html>
<html>
<head>
	<title>ACHETEUR</title>
</head>
<body>

<p>espace ACHETEUR </p>

<h1 class="display-4">Hello, <?php echo $this->session->userdata('Login');?>!</h1>
<a  href="<?php echo site_url('Login/logout');?>">log out  </a>
</body>
</html>