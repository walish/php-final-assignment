<?php
$conn = new mysqli('localhost', 'root', '','final_test_php');
 
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
} 
mysqli_set_charset($conn,'utf8');

?>