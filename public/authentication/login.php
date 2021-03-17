<?php
include ("access.php");

?>


<!DOCTYPE html>
<html>
<head>
	<title>login page</title>

	<title>school management system</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../../bootstrap/css/bootstrap-grid.css" media="all" type="text/css" rel="stylesheet">
		<link href="../../bootstrap/css/bootstrap-grid.min.css" media="all" type="text/css" rel="stylesheet">
			<link href="../../bootstrap/css/bootstrap.css" media="all" type="text/css" rel="stylesheet">
				<link href="../../bootstrap/css/bootstrap.min.css" media="all" type="text/css" rel="stylesheet">
<

</head>
<body>
	<div class="jumbotron container-fluid">
		<div>
			<h3 style="text-align: center; ">login in
			</h3>
			<hr>
			<span><?php echo $sucess; ?></span>

			
		</div>
		<form action="access.php" method="post">
			<!-- message displayed after user enters wrong credentials -->
			


				
			</h4>

			<div class="col">
				<label for="usernamelog">user name:</label>
				<input type="text" name="usernamelog" placeholder="enter username here" class="form-control">
				
			</div>

			<div class="col">
				<label for="passwordlog">password:</label>
				<input type="password" name="passwordlog" placeholder="enter password" class="form-control">
				
			</div><br>

			<div>
				<input type="submit" name="login" value="login"class="btn btn-success btn-block">
				<a href="signup.php"><p style="text-align: center;">Don't have an account? create yours here</p></a>

			</div>
			<span><?php echo $err; ?></span>


		</form>
		
	</div>

</body>
</html>