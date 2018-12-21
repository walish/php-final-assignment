<?php 
	$servername = "localhost";
	$username = "root";  
	$password = "";    
	$dbname = "test";  
	
	$conn = new mysqli($servername,$username,$password,$dbname);

	//Check connection
	if ($conn->connect_error) {
		die("Error: Could not connect ".$conn->connect_error);
	}

	// //Create database
	// $sql = "CREATE DATABASE smart";
	// if ($conn->query($sql) === TRUE) {
	// 	echo "Database created successfully";
	// } else {
	// 	echo "Error creating database: " .$conn->error;
	// }	


	//Create table
	$sql1 = "CREATE TABLE news(
		title VARCHAR(100)  NOT NULL, 
		img VARCHAR(200)  NOT NULL,
		description TEXT NOT NULL
		)";
	if ($conn->query($sql1) === TRUE) {
   		echo "Table created successfully";
	} else {
    	// echo "Error creating table: " .$conn->error;
    }
 ?>