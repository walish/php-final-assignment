<?php
    include "classes/Connection.php";

    $connection = new Connection();

    // Create new database (if not exists yet)
    $conn = $connection->connectToHost();
    $sql_create_database = "CREATE DATABASE IF NOT EXISTS giangvdmdoisongphapluat";
    if ($conn->query($sql_create_database)) {
        echo "Connected to host successfully!" . "<br>";
    } else{
        die("ERROR: Could not connect! " . mysqli_error($conn));
    }

    // Create table "Article"
    $conn = $connection->connectToDb();
    $sql_create_table = " CREATE TABLE IF NOT EXISTS Article (
        ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        Title VARCHAR(255) NOT NULL UNIQUE,
        ArticleUrl VARCHAR(255) NOT NULL UNIQUE,
        ImageSource VARCHAR(255) NOT NULL,
        PublishDateTime VARCHAR(100) NOT NULL,
        ArticleDescription TEXT,
        Content TEXT NOT NULL
    )";
    if ($conn->query($sql_create_table)) {
        echo "Table(s) created successfully!" . "<br>";
    }
    else{
        echo "ERROR: Could not able to execute $sql_create_table. " . mysqli_error($conn);
    }

    // Set charset
    // mysqli_set_charset($conn, "utf8_vietnamese_ci");
    
    $connection->closeConnection();