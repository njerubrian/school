<?PHP

include ("../connection.php");


$firstname = $lastname = $gender = $filename = $program= $newtarget =" ";
$err = "";






if (isset($_POST["save"])) {

   $firstname = ($_POST['firstname']);
   $lastname = ($_POST['lastname']);
   $gender = ($_POST['gender']);
$program = ($_POST['program'])	;

$filename = $_FILES	['file']['name'];
 $target = "../../profiles/".basename($_FILES['file']['name']);
$filenametemp = $_FILES	['file']['tmp_name'];
 move_uploaded_file($filenametemp, $target);



 if (!empty($firstname) && !empty($lastname) && !empty($gender) &&!empty($program) && preg_match("/^[a-z A-Z - ']*$/", $lastname) &&preg_match("/^[a-z A-Z - ']*$/", $firstname  )) {


$reg_number = random_num(11);
$sql = "INSERT INTO student(reg_number, first_name, last_name, gender, program,profiles)  VALUES ('$reg_number','$firstname','$lastname','$gender', '$program', '$filename')";

	
	if ($con->query($sql)===TRUE ) {
		header("location: registered.php");

		echo "new record created successfuly";
	}
		# code...
	
	else{
		echo "error". $sql. "<br>". $con->error;
	}

		
	
}	

	
else{
	$err = "fill in valid information". "<br>" ." make sure first and lastname do not have numbers !!!!";
}
}



function random_num($length){
	$text = "";
	if ($length<5) {
		$length = 5;
		
	}
	$len = rand(4, $length);
	for ($i=0; $i <$len ; $i++) { 
		$text .= rand(0,9);
		
	}
	return $text;
}
    



 if (isset($_GET['edit'])) {

       $id = $_GET['edit'];
       //$firstname = $lastname = $gender = $program =" ";

$result = $con->query("SELECT * FROM student WHERE  id=$id") or die($con->error);

$row = $result->fetch_array();

         $firstname = $row['first_name'];
        $lastname = $row['last_name'];
        $gender = $row['gender'];
        $program = $row['program'];
        
    
             
        }



         if (isset($_POST['update'])) {



        $id = $_POST['id'];
        
$firstname = $lastname = $gender = $program = $filename =" ";

 $newtarget = "../../profiles/".basename($_FILES['fileImage']['name']);


   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $gender = $_POST['gender'];
   $program = $_POST['program'];


$filename = $_FILES	['fileImage']['name'];

// $newfilenametemp = $_FILES['fileImage']['tmp_name'];




	
   $update = "UPDATE student SET first_name='$firstname', last_name= '$lastname', gender='$gender', program='$program', profiles ='$filename' WHERE id='$id'";


   unlink('../../profiles/$filename');

     
   $con->query($update) or die($con->error);  
   $resultQuery =   $con->query($update);
   if ($resultQuery) {
   	# code...
   	  move_uploaded_file($_FILES['fileImage']['tmp_name'], $newtarget);
   	  echo "image uploaded";
   } else {
   	  echo "image not uploaded";
   }
   header("location: registered.php");  
}
    


?>


