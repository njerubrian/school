<?php

include("../connection.php");


//global variable to check whether username is taken.
$_SESSION['userTaken'] = "username is already taken!!!";
$_SESSION['userRegistered'] = "registration successful";

$username =$firstname = $lastname = $email = $password = $conpassword = $role = "";
$err = "";

if (isset($_POST['save'])) {

	$username = $_POST['username'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
   $role = $_POST['role'];
   $password = $_POST['password'];
   $conpassword = $_POST['conpassword'];


      if ( $conpassword !== $password) {
         $err = "passwords and confirmed password do not match";
      }

      else{

         //encrypt password.

         $encrypted_pass = md5($password);
         $encrypted_conpas= md5($conpassword);
 
      }

}

   if (!empty($username) && !empty($firstname) && !empty($lastname) && !empty($email) && !empty($password) && !empty($conpassword) && !empty($role)  && preg_match("/^[a-z A-Z - ']*$/", $lastname) &&preg_match("/^[a-z A-Z - ']*$/", $firstname  )) {


   	
   		// fetch records from the database

   		$regsql = ("SELECT * FROM users WHERE user_name = '$username'");
   		$result = mysqli_query($con, $regsql);
   		$num = mysqli_num_rows($result);

   	
   	if ($num ==1) {
   		$_SESSION['usertaken'];
   		header('location: signup.php');
   	}
   	else{
   		$sql = ("INSERT INTO users(user_name,first_name,last_name,email,role,password) VALUES ('$username','$firstname', '$lastname', '$email','$role', '$encrypted_pass')");
   		mysqli_query($con,$sql);
   		header('location: login.php?registered=true');
   	}
   	
   }




?>