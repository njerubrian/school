
<!DOCTYPE html>
<html>
<head>
	<title>edit student records</title>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="../../bootstrap/css/bootstrap-grid.css" media="all" type="text/css" rel="stylesheet">
		<link href="../../bootstrap/css/bootstrap-grid.min.css" media="all" type="text/css" rel="stylesheet">
			<link href="../../bootstrap/css/bootstrap.css" media="all" type="text/css" rel="stylesheet">
				<link href="../../bootstrap/css/bootstrap.min.css" media="all" type="text/css" rel="stylesheet">
</head>
<body>
<?php
require 'update.php'; 

?>

	<div class = "row">
		<div class="col">
			
				<h1>edit student records</h1>
				<a href="registered.php"><button class = "btn btn-info">check updated records</button></a>
     </div>
     
 </div>
     <hr>
     <br>

     <div class = "container">


		<form action="update.php" method="post" enctype="multipart/form-data">
			<div class = "col sear">
     	<input type="text" name="search" placeholder="search.." class="searchbar">
     	<input type="submit" name="searchvalue" value="search record" class="btn btn-primary">

     </div>
			<div class= " form-group row">

				<input type="hidden" name="id" value = "<?php echo $id; ?>">
				
				<label for ="firstname">first name:</label>
				<input type="text" value="<?php
                echo $firstname; ?>" name="firstname" placeholder="Enter first name here" class ="form-control"  >
			</div>



				<div class="form-group row">
					<label for ="lastname">last name:</label>
				<input type="text"value="<?php echo $lastname; ?>" name="lastname" placeholder="Enter last name here" class =" form-control" >
			</div> <hr>

				<div>
					<h6>select gender:</h6>
					<input type="radio" name="gender"  class="form-group" value="male" required="" value="<?php echo $gender; ?>">
				<label for ="gender">male</label>
				

				<input type="radio" name="gender" value="<?php echo $gender; ?>" required="">
				<label for ="gender" >female</label>
				


				<input type="radio" name="gender" value="<?php echo $gender; ?>" required="">
				<label for ="gender">other</label>
				</div> <hr>
				<div class="row">

				<label for= "program"><h6>select program:</h6></label>
				<select name="program" class="form-control">
					<option value="<?php echo $program; ?>"><?php echo $program; ?></option>
					<option>MIT</option>
					<option>oracle</option>
					<option>python</option>
					<option>java</option>
					<option>CCNA</option>
					<option> CCNP</option>
					<option>C++</option>
					

				</select>	

				</div>
				<hr>
				<div class="form-group"> 
			
			<label><h6>student profile picture:</h6></label> <br>
				<input type="file" name="fileImage"> 
				
			</div><hr>



                <input type="submit" name="update" class="btn btn-success" value="update record"> 
					

					<input type="reset" name="reset" class="btn btn-warning"> 
				</div>

		
			<hr>

				


			</form>

     	 </div> <br>


</body>
</html>