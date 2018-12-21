<?php
class Database
{
	private $host = "localhost";
	private $db_name = "final";
	private $username = "root";
	private $password = "";
	public $connection;


	function createTable($link)
	{
		$create_table = "CREATE TABLE article(
			id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
			title VARCHAR(255) NOT NULL,
			story VARCHAR(255) NOT NULL,
			detail VARCHAR(255) NOT NULL UNIQUE
		)";
		if (mysqli_query($link, $create_table)){
		echo "OK";
		}else{
		echo "FAILED executing $create_table".mysqli_error($link);
		}
	}

	function createDB($link)
	{
		$create = "CREATE DATABASE final";
		if (mysqli_query($link,$create)){
			echo "OK";
		}else{
			echo "FAILED creating db".mysqli_error($link);
		}
	}
	
	function __construct()
	{
		if (!isset($this -> connection)){
			$this -> connection = mysqli_connect($this->host,$this->username,$this->password,$this->db_name);
			if (!$this -> connection){
				echo "Error connecting to database";
			}
		}
	}

	public function getConnection()
	{
		return $this->connection;
	}
}
?>