<!DOCTYPE html>
<html>
<head>
	<title>student registration page</title>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../../css/style.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="../../bootstrap/css/bootstrap-grid.css" media="all" type="text/css" rel="stylesheet">
		<link href="../../bootstrap/css/bootstrap-grid.min.css" media="all" type="text/css" rel="stylesheet">
			<link href="../../bootstrap/css/bootstrap.css" media="all" type="text/css" rel="stylesheet">
				<link href="../../bootstrap/css/bootstrap.min.css" media="all" type="text/css" rel="stylesheet">
</head>
<body>
	
	<div class = "row">
		<div class="col">
			<div class="flex-container">

			<a href="admin.php"><img src="../../images/home.png" width="50px" height="50px"><br><h6>home</h6></a>
				<h1 class="mango">Student registration page</h1>
				<a href="registered.php"><button class = "btn btn-info buttons">check registered students</button></a>
			</div>
     </div>
     
 </div>
     <hr>
     <br>


     <div class = "container">


		<form action="update.php" method="post" enctype="multipart/form-data">
			<div class = "col searc">
     	<input type="text" name="search" placeholder="search.." class="searchbar">
     	<input type="submit" name="searchvalue" value="search record" class="btn btn-primary">

     </div>
			<div class= " form-group row">
				<label for ="firstname">first name:</label>
				<input type="text" name="firstname" placeholder="Enter first name here" class ="form-control" required="">
			</div>



				<div class="form-group row">
					<label for ="lastname">last name:</label>
				<input type="text" name="lastname" placeholder="Enter last name here" class =" form-control" required="">
			</div> <hr>

				<div>
					<h6>select gender:</h6>
					<input type="radio" name="gender"  class="form-group" value="male" required="">
				<label for ="gender">male</label>
				

				<input type="radio" name="gender" value="female" required="">
				<label for ="geNder" >female</label>
				


				<input type="radio" name="gender" value="other" required="">
				<label for ="gender">other</label>
				</div> <hr>

				<div class="row">

				<label for= "program"><h6>select program:</h6></label>
				<select name="program" class="form-control">
					<option value="none" selected disabled hidden>--select program-----</option>
					<option value="MIT" >MIT</option>
					<option value="Oracle" >oracle</option>
					<option value="python" >python</option>
					<option value="java" >java</option>
					<option value="CCNA" >CCNA</option>
					<option value="CCNP" >ccnp</option>
					<option value="C++" >C++</option>
					

				</select>
				</div>
				<hr>	
			<div class="form-group"> 
			
			<label><h6>student profile picture:</h6></label> <br>
				<input type="file" name="file">
			</div>




				<hr>



                 <div>
                 

                 		


				<div>
					<input type="submit" name="save" class="btn btn-success">

					<input type="reset" me="nareset" class="btn btn-warning"> 
				</div>

			

			</form>

     	 </div> <br>

</body>
</html>