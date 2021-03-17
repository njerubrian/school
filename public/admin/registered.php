
<?php
include("../connection.php");


$query = "SELECT * FROM student";
$result = mysqli_query($con, $query);




?>





<!DOCTYPE html>
<html>
<head>
	<title>registered students</title>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../../css/style.css">
	<link href="../../bootstrap/css/bootstrap-grid.css" media="all" type="text/css" rel="stylesheet">
		<link href="../../bootstrap/css/bootstrap-grid.min.css" media="all" type="text/css" rel="stylesheet">
			<link href="../../bootstrap/css/bootstrap.css" media="all" type="text/css" rel="stylesheet">
				<link href="../../bootstrap/css/bootstrap.min.css" media="all" type="text/css" rel="stylesheet">


</head>
<body>

	<div class="flex-container">

			<a href="admin.php"><img src="../../images/home.png" width="80px" height="80px"><br><h6>home</h6></a>
				<h1 class="mango">registered students</h1>
				
			</div>
	<div class="container container-fluid">
		<table class="table">
			<thead class="thead-dark">
				<tr>
				<th scope = "col">#</th>
				<th scope = "col">reg number</th>
				<th scope = "col"> first name</th>
				<th scope = "col">last name</th>
				<th scope = "col">gender</th>
				<th scope = "col">program</th>
				<th scope="col">profile image</th>
				<th scope = "col">registration date</th>
				
				<th colspan="2">Actions</th>
				<tr>
				 </thead>

	 <tbody>
     <?php


     while ($row = $result->fetch_assoc()):
     
     ?>			 	
    <tr>
    	<th scope ="row"> <?php echo $row['id']; ?> </th>
    	<td scope ="row"> <?php echo $row['reg_number']; ?> </td>
    	<td scope ="row"> <?php echo $row['first_name']; ?> </td>
    	<td scope ="row"> <?php echo $row['last_name']; ?> </td>
    	<td scope ="row"> <?php echo $row['gender']; ?> </td>
    	<td scope ="row"> <?php echo $row['program']; ?> </td>
    	<td scope="row">
    		<?php
                  echo "<img src='../../profiles/" . $row['profiles'] ."' style='width: 100px; height: 100px;'>"
    		?>

    	</td>
    	<td scope ="row"> <?php echo $row['reg_date']; ?> </td>
    	<td>
    		<div class = "row">
    			<div class="btn-group">
    				

	<a class="btn btn-warning" name="edit" href="editor.php?edit=<?php echo $row['id']; ?>" >edit</a>
	
	
<a class ="btn btn-danger" name="delete" href="registered.php?delete=<?php echo $row['id']; ?>">delete</a>
</td>
</tr>

<?php
if (isset($_GET['delete'])) {

	$id = $_GET['delete'];
	$con -> query("DELETE FROM student WHERE id=$id") or die($con->error);
	echo "record deleted successfully";
	header("location: registered.php");
	# code...
}



?>
		
	
	
	




   
   
<?php endwhile; ?>




 </tbody>
			


		</table>
	</div>

</body>
</html>