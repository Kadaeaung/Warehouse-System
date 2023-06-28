 <?php

	 include('dbconnect.php');

	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	var_dump($_POST);
	
	$file_exe=$file_exe_array[2];

	$sql="INSERT INTO customer(firstname,lastname,email,password)VALUES(:firstname,:lastname,:email,:password)";
	$stmt= $conn1->prepare($sql);
	$stmt->bindParam(':firstname',$firstname);
	$stmt->bindParam(':lastname',$lastname);
	$stmt->bindParam(':email',$email);
	$stmt->bindParam(':password',$password);
	
  	$stmt->execute();
  	

	session_start();
	

	header('location:clogin.php');

		

?> 

<?php

 
?>