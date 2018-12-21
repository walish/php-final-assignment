<?php
    class Connection {
        private $hostname;
        private $username;
        private $password;
        private $database;
        public $conn;

        function __construct() {
            $this->hostname = "localhost";
            $this->username = "root";
            $this->password = "";
            $this->database = "giangvdmdoisongphapluat";
        }

        function __constructFull($hname, $uname, $pass, $dbname) {
            $this->hostname = $hname;
            $this->username = $uname;
            $this->password = $pass;
            $this->database = $dbname;
        }

        public function connectToDb() {
            $this->conn = mysqli_connect($this->hostname, $this->username, $this->password, $this->database);
            return $this->conn;
        }
        
        public function connectToHost() {
            $this->conn = mysqli_connect($this->hostname, $this->username, $this->password);
            return $this->conn;
        }

        public function closeConnection() {
            if ($this->conn) {
                mysqli_close($this->conn);
            }   
        }

    }