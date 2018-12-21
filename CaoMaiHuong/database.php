<?php
    $link = mysqli_connect("localhost", "root","");
    if($link === false){
        die("ERROR: Could not connect. ".mysqli_connect_error());
    }
    
    $sql = "CREATE DATABASE articles";
    if(mysqli_query($link, $sql)){
        echo "Database created successfully";
    } else{
        echo "ERROR: Could not able to execute $sql." . mysqli_error($link);
    }

    require "connect.php";
    $sql = " CREATE TABLE article(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        title VARCHAR(256) NOT NULL,
        descriptionn VARCHAR(256),
        img_src TEXT,
        content TEXT,
        author VARCHAR(50),
        created_date DATETIME 
    )";
    if(mysqli_query($link, $sql)){
        echo "Table created successfully";
    } else{
        echo "ERROR: Could not able to execute $sql." . mysqli_error($link);
    }
?>