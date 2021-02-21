<?php


class dbconnect {
    public $conn;

  public function __construct()
    {
       $this->conn = new PDO("mysql: host = localhost;dbname = pdo", 'root', '');
       $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    }
    
}


?>