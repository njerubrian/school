

<!DOCTYPE html>
<html>
<head>
	<title>signup</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../../bootstrap/css/bootstrap-grid.css" media="all" type="text/css" rel="stylesheet">
		<link href="../../bootstrap/css/bootstrap-grid.min.css" media="all" type="text/css" rel="stylesheet">
			<link href="../../bootstrap/css/bootstrap.css" media="all" type="text/css" rel="stylesheet">
				<link href="../../bootstrap/css/bootstrap.min.css" media="all" type="text/css" rel="stylesheet">
<
</head>
<body>
	<?php 
	
	
	include'register.php'; ?>
<div class="jumbotron container-fluid">
	<h3 style="text-align: center;">Create Account</h3>



				
		
	<hr>
	<form action="register.php" method="post">
 <h3>
            <?php
             if(isset($_SESSION['userTaken'])){
                echo $_SESSION['userTaken'];
                unset($_SESSION['userTaken']);
                session_destroy();
             }

            ?>
         </h3>

		<div class="row">
			
				<label for="username">user name:</label>
				

				<input type="text" name="username" placeholder="enter username" name="username" class="form-control">
			
		</div>
		<div class="row">
			<label for="firstname">first name:</label>
			<input type="text" name="firstname" placeholder="enterfirst name" class="form-control">
		</div>
		<div class="row">
			<label>last name:</label>
			<input type="text" name="lastname" placeholder="enter last name" class="form-control">
			
		</div>
		<div class="row">
			<label for="email">email</label>
			<input onkeyup="trys();" type="email" name="email" placeholder="enter-email" id="email" class="form-control">
		</div><br>
		<div class="row">
			<label for="role">select role:</label>
			<select name="role" class="form-control">
			<option value="none" selected disabled hidden>...select role...</option>
			<option  value="admin">admin</option>
			<option value="staff">staff</option>
			<option value="student">student</option>
		</select>
		</div>



		<div class="row">
			<div class="col">
				<label for="password">password:</label>
				<input onkeyup="check();" type="password" name="password" placeholder="enter password" class="form-control" id="password" >
				
			</div>
			<div class="col">
				<span id="message"></span>
				<label for="conpassword">confirm password:</label>
				<input onkeyup="check();"  type="password" name="conpassword" placeholder="confirm password" class="form-control" id="conpass" >
				
			</div>
			
		</div><br>
		<div>
			<button id="save"  name="save" class="btn btn-success btn-block">Create Account</button>

			<a href="login.php"> <p style="text-align: center;">Have an account? login here</p></a>
		</div>
<span><?php echo $err;?></span>



	</form>
	


</div>

]

     <script type="text/javascript">
        let check = function (){
            if (document.getElementById('password').value === document.getElementById('conpass').value) {
                 
                 //span for password match 
                 document.getElementById('message').style.color = 'green';
                 document.getElementById('message').innerHTML = 'Passwords Match';
                 document.getElementById('save').disabled = false;

            } else {
                  //span for password match 
                 document.getElementById('message').style.color = 'red';
                 document.getElementById('message').innerHTML = 'Passwords do not Match';
                 document.getElementById('save').disabled = true;
            }
        }    
     




     </script>

 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>