<!DOCTYPE html>
<html>
	<head>
		<title>login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	</head>
	<body>
      
	
      <div class="container">
		<br>
		<br>
		<div class="row justify-content-md-center">
		    <div class="col-md-4 col-md-offset-4">
				<form action="<?php echo site_url('Login/auth'); ?>" method="POST">
					<h2>Please sign in</h2>
				  <div class="form-group">
				    <label for="exampleInputUsername">Login</label>
				    <input type="username" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="emailHelp" placeholder="Username">
				    </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
				  </div>
                  <br>
				  <button type="submit" class="btn btn-primary">Sign In</button> &nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo site_url('Register');?>"> Sign Up</a>
				</form>
		    </div>
	 	</div>
	</div>
	</body>
</html>