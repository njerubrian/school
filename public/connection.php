<?php
session_start();

$servername= "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "school";


$con = new mysqli($servername,$dbusername, $dbpassword, $dbname);

//  if ($dblink ->connect_error) {
// 	die("connection failed". $dblink->connect_error);
//  }
// else{
//  	echo "database connected successfully";
//  	echo "<br>";
//  }

//  $sql = "CREATE DATABASE school";
// if ( mysqli_query($dblink, $sql)) {
//  	echo "school databsae created successfully";
	
//  }
//  else
//  {
//  	echo "error creating school databse". "<br>". mysqli_error($dblink);
//      echo "<br>";
//  }

//creating table staff.

 // $table1 = "CREATE TABLE staff
 // (
 // 	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 // 	employee_id INT(11)NOT NULL,
 // 	first_name VARCHAR(30) NOT NULL,
 // 	last_name VARCHAR(30) NOT NULL,
 // 	gender VARCHAR(30) NOT NULL,
 // 	phone_number BIGINT(10) NOT NULL,
 // 	salary INT(11) NOT NULL,
 // 	reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
 // )";

 // if ($con->query($table1) == true) {
 // 	echo "table staff created successfully";
 // 	# code...
 // }
 // else{
 // 	echo "error creating table staff". "<br>". $con->error;

 // 	echo "<br>";
 // }

 // //creating table student


 //   $table2 = "CREATE TABLE student(
 //   id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 //   reg_number  BIGINT(11)  NOT NULL,
 //   first_name VARCHAR(11) NOT NULL,
 //   last_name VARCHAR(30) NOT NULL,
 //   gender VARCHAR(30) NOT NULL,
 //   reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
 //   )";
 //  if ($con->query($table2) == true) {
 //   	echo "table student created successfully";
 //   	# code...
 //   }
 //   else{
 //  	echo "error creating table student". "<br>". $con->error;

 //  	echo "<br>";
 //   }

// $sql = "CREATE TABLE admin(
//  id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//  user_name VARCHAR(250) NOT NULL,
//  password VARCHAR(250)  NOT NULL
// )";

// if ($con->query($sql) == true) {
//      echo "table admin created successfully";
//      # code...
//    }
//    else{
//    echo "error creating table admin". "<br>". $con->error;

//    echo "<br>";
//    }
 ?>