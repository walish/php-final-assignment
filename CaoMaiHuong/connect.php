<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "articles";
    $link = mysqli_connect($hostname, $username, $password, $database);
    if($link === false){
        die("ERROR: Could not connect. ".mysqli_connect_error());
    }
?>