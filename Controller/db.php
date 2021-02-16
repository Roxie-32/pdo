<?php


class dbconnect {
    public $conn;

  public function __construct()
    {
       $conn = new PDO("mysql: host = localhost; dbname = pdo", 'root', '');

    //    if($conn){
    //        return true;
    //    }else {
    //        return false;
    //    }
    }
    
}


?>