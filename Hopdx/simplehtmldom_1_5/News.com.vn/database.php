<?php
/**
 * Created by PhpStorm.
 * User: xuanh
 * Date: 19-Dec-18
 * Time: 9:02 AM
 */
$conn = new mysqli('localhost', 'root', '','news');

if ($conn === false) {
    die('Error: could not connect ' . mysqli_connect_error());
}



?>