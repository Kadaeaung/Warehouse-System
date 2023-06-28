<?php 

$conn= new mysqli('localhost','root','','cms_db')or die("Could not connect to mysql".mysqli_error($con));
	$con=new PDO("mysql:host=localhost;dbname=cms_db",'root','');
	$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
