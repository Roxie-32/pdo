<?php 
include_once 'db.php';

class select extends dbconnect{
    
    public function selectData(){

        $query = "SELECT * FROM pdo.users";

        $prepareQuery= $this->conn->prepare($query);

        $select = $prepareQuery->execute();

        $result= $query->fetch();
    }
   
}



?>