<?php 
include_once 'db.php';

    class insert extends dbconnect{

      public function registerMe(){
           try{ if(isset($_POST['register'])){
                $username= $_POST['username'];
                $password= $_POST['password'];
                $unit= $_POST['unit'];
    
                $newpassword=password_hash($password,PASSWORD_DEFAULT);
    
                //query and binding
                $query = "INSERT INTO pdo.users (username, password,unit) VALUES (?,?,?)";
    
                //prepare
                $prepareQuery= $this->conn->prepare($query);
    
                //execute
    
                $isInserted = $prepareQuery->execute([$username, $newpassword, $unit]);

    
                if($isInserted){
                        echo "Yes";
                }else{
                        "No";
                   }
            }} catch(PDOException $e) {
                echo "<br>" . $e->getMessage();
              }
    
            }
        }
    
?>