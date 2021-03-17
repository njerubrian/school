<?php

include("../connection.php");


$firstname = $lastname = $phone = $salary =$gender = $category = "";
$fnameerr = $lnameerr =$phoneerr = $salaryerr = $gendererr = $categoryerr = "";

$employee_id='';

if (isset($_POST['save'])) {

	if (empty($_POST["firstname"])){
		$fnameerr = " * provide first name";
		
	}
	else{
		$firstname = ($_POST["firstname"]);
		if (!preg_match("/^[a-z A-Z- ']*$/", $firstname )) {
			$fnameerr = "* only letters a-z and spaces";
		}
	}

	if (empty($_POST["lastname"])) {

		$lnameerr = " * provide second name";
	}
	else{
		$lastname = ($_POST["lastname"]);

		if (!preg_match("/^[a-z A-Z ']*$/", $lastname)) {
			
			$lnameerr = "only letters a-z and spaces";
		}
	}

	if (empty($_POST["phone"])) {
		$phoneerr = " * phone number is required";
		
	}
	else{
		$phone = ($_POST["phone"]);
		// validating phone number
		function validate_phone_number($phone){
     // Allow +, - and . in phone number
     $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
     // Remove "-" from number
     $phone_to_check = str_replace("-", "", $filtered_phone_number);

     // Check the lenght of number
     // This can be customized if you want phone number from a specific country
     if (strlen($phone_to_check) < 10 || strlen($phone_to_check) > 14) {
        $phoneerr = " * invalid phone number";
     } 
		
		}
	}

	if (empty($_POST["salary"]) && !filter_var($salary, FILTER_VALIDATE_INT)) {

		$salaryerr = " * salary should be in numbers";
		
	}
	else{
		$salary = ($_POST["salary"]);
	}


if (!empty($_POST["gender"])) {
	$gender = ($_POST["gender"]);
	# code...
}
else{
	$gendererr = " * select gender";
}

if (!empty($_POST["category"])) {

	$category = ($_POST["category"]);
	
}
else
{
	$categoryerr = " *select employment field";
}

 $query = "SELECT * FROM staff ORDER BY id DESC limit 1";
  $result = mysqli_query($con, $query);
  $row = mysqli_fetch_array($result);
  $lastid = $row['id'];
  

  if ($lastid == "") {
  	
  $employee_id = "EMP1";
 	 }
 	 else
 	 	{
 	 		$employee_id = substr($lastid , 3);
 	 		$employee_id = intval($employee_id);

 	 		$employee_id = "EMP" .($employee_id+1);
 	 	

	}

if (empty($fnameerr) && empty($lnameerr)) {

	
	# code...
	$sql = "INSERT INTO staff(employee_id, first_name, last_name, gender, job_type, phone_number, salary)  VALUES ('$employee_id', '$firstname', '$lastname', '$gender', '$category', '$phone','$salary')";
    if ($con->query($sql)===TRUE ) {

		echo "new record created successfuly";
	}
		# code...
	
	else{
		echo "error". $sql. "<br>". $con->error;
	}

} else {
	echo " data is invalid ";
}



}








?>



<!DOCTYPE html>
<html>
<head>
	<title>staff registration page</title>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="../../bootstrap/css/bootstrap-grid.css" media="all" type="text/css" rel="stylesheet">
		<link href="../../bootstrap/css/bootstrap-grid.min.css" media="all" type="text/css" rel="stylesheet">
			<link href="../../bootstrap/css/bootstrap.css" media="all" type="text/css" rel="stylesheet">
				<link href="../../bootstrap/css/bootstrap.min.css" media="all" type="text/css" rel="stylesheet">
</head>
<body>
	<div class = "flex-container">
		<h1>Staff registration page</h1>
     </div>
     <hr>
     <br>


     <div class = "container">


		<form action="staff.php" method="post" >



	<div class="form-group row">

		<label for="employee_id">empoyee id:</label>
		<input type="text" name="employee_id" value="<?php echo $employee_id;  ?>" readonly="" class ="form-control">
		
	</div>
			<div class= " form-group row">
				<label for ="firstname">first name:</label>
				<input type="text" name="firstname" placeholder="Enter first name here" class ="form-control">

				<span><?php echo $fnameerr; ?></span>
			</div>



				<div class="form-group row">
					<label for ="lastname">last name:</label>
				<input type="text" name="lastname" placeholder="Enter last name here" class =" form-control"> <span><?php echo $lnameerr; ?></span>
			</div>

			<div class = "row form-group">
				<label for = "phone">phone number:</label>
				<input type="tel" name="phone" placeholder="0701020304" class="form-control"><span><?php echo $phoneerr; ?></span>
			</div>
			<div class = "form-group row">
				<label>salary</label>
				<input type="text" name="salary" placeholder="enter staff salary" class="form-control">
				<span><?php echo $salaryerr; ?></span>
			
			</div> <hr>


				<div >
					<h6>select gender:</h6>
					
					<input type="radio" name="gender" value="male" class="form-group">
				<label for ="gender">male</label>
				

				<input type="radio" name="gender" value="female">
				<label for ="gender">female</label>
				


				<input type="radio" name="gender" value="other">
				<label for ="gender">other</label>
				</div> <span><?php echo $gendererr; ?></span>

				<div>
					<h6>select employment field:</h6>

					<input type="radio" name="category" value = "tutor">
					<label for="category">tutor</label>


					<input type="radio" name="category" value = "technician">
					<label for="category">technician</label>


					<input type="radio" name="category" value = "driver">
					<label for="category">driver</label>


					<input type="radio" name="category" value = "cook">
					<label for="category">cook</label>


					<input type="radio" name="category" value = "groundsman">
					<label for="category">groundsman</label> <span><?php echo $categoryerr; ?></span>
				</div><hr>



				<div>
					<input type="submit" name="save" class="btn btn-success">

					 <input type="reset" name="reset" class="btn btn-warning">
				</div>

				</div>


			</form>

     	 </div> <br>

</body>
</html>