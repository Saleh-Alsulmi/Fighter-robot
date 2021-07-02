<?php

$servername="localhost";
$username="root";
$password="";
$database_name="test";

$ID = rand(0, 999);


$conn= mysqli_connect($servername, $username, $password, $database_name);

//connection checker

if(!$conn) {
	
	die("Connection failed: " . mysqli_connect_error());
	
}

if (isset($_POST['save'])) {
	
	$eng1= $_POST['R1'];
	$eng2= $_POST['R2'];
	$eng3= $_POST['R3'];
	$eng4= $_POST['R4'];
	$eng5= $_POST['R5'];
	$eng6= $_POST['R6'];
	$st= $_POST['status'];
	
	$sql_query = "INSERT INTO robot_arm(ID,Engine_1,Engine_2,Engine_3,Engine_4,Engine_5,Engine_6,Status)
	VALUES ('$ID','$eng1','$eng2','$eng3','$eng4','$eng5','$eng6','$st')";
	
	
	if (mysqli_query($conn, $sql_query)){
		
		echo "New Entery Has inserted successfully !";
		
	}
	else {
		
		echo "Error insertion: " . $sql . "" . mysqli_error($conn);
		
	}
	
	mysqli_close($conn);
	
}
	

?>