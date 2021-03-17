<?php
include('../connection.php');
//session_start();


$userlog = $passlog = "";
$sucess = $err = "";

if (isset($_POST['login'])) {
	$userlog = $_POST['usernamelog'];
	$passlog = $_POST['passwordlog'];

//create the sql query to fetch records from the database

$query= "SELECT * FROM users WHERE user_name='$userlog' AND password = '".md5($passlog)."' ";

$result = mysqli_query($con, $query);
//

//logic to check if user exists.
$num = mysqli_num_rows($result);

if ($num == 1) {

// when user logs in corrrectly.
$sucess = "login successful";
	$role = "SELECT role FROM users WHERE user_name='$userlog' AND password='".md5($passlog)."'";
$results = mysqli_query($con, $role);

$row = mysqli_fetch_assoc($results);
if ($row['role'] == "admin") {
	$_SESSION['admin'] = $userlog;
	header("location: ../admin/admin.php");
	
}
else if ($row['role'] == "student") {

	$_SESSION['student'] = $userlog;
	header("location: ../student/student.php");
}
else if($row['role']=="staff"){
$_SESSION['staff']  = $userlog;
header("location: ../staff/staff.php");

}
}
else{

$err = "wrong login creditentials";
	header('location:login.php');
}

	//code...
}



?>