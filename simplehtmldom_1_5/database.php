<?php
include_once 'config.php';

$sql = "CREATE DATABASE final_test_php";
if ($conn->query($sql) === TRUE) {
    echo "Tạo database thành công";
} else {
    echo "Tạo database thất bại: " . $conn->error;
}

$sql1 = "CREATE CREATE TABLE News (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(300) NOT NULL,
    link VARCHAR(300) NOT NULL,
    img VARCHAR(300) NOT NULL,
    des VARCHAR(300) NOT NULL
)
";
if ($conn->query($sql1) === TRUE) {
    
} else {
    echo "Tạo bảngthất bại: " . $conn->error;
}


