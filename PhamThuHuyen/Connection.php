<?php 
	$servername = "localhost";
	$username = "root";  
	$password = "";    
	$dbname = "myDB";  
	
	$conn = new mysqli($servername,$username,$password,$dbname);

	//Check connection
	if ($conn->connect_error) {
		die("Error: Could not connect ".$conn->connect_error);
	}

	//Create database
	$sql = "CREATE DATABASE myDB";
	if ($conn->query($sql) === TRUE) {
		// echo "Database created successfully";
	} else {
		// echo "Error creating database: " .$conn->error;
	}	


	//Create table
	$sql1 = "CREATE TABLE news (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
		title VARCHAR(255) NOT NULL,
		image VARCHAR(255) NOT NULL,
		description VARCHAR(255) NOT NULL,
		posted_time VARCHAR(255) NOT NULL	
		)";
	if ($conn->query($sql1) === TRUE) {
   		// echo "Table created successfully";
	} else {
    	// echo "Error creating table: " .$conn->error;
    }
 ?>