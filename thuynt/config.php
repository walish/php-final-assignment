<?php
class dbconnect{
	private $_host = 'localhost';
    private $_username = 'root';
    private $_password = '';
    private $_database = 'db_web';
    
    public $conn;
   
 function createTable($query)
    {
        $sql = "CREATE TABLE db_web(
            id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            title VARCHAR(255) NOT NULL,
            content VARCHAR(255) NOT NULL,
            image VARCHAR(255) NOT NULL
        )";
        if (mysqli_query($query, $sql)){
       echo("created");
        }else{
        echo "FAILED ".mysqli_error($query);
        }
         }
    public function __construct()
    {
        if (!isset($this->conn)) {
            
            $this->conn = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);
            
            
            if (!$this->conn) {
                echo 'Cannot connect to database server';
                exit;
            }            
        }    
        
        
    }
    function getConnect(){
    	return $this->conn;
    }
    
   
}

//$o = new dbconnect();
//$o->__construct();


?>