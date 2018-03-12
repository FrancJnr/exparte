<?php
require "../BaseApp/db.php";

class Model{

    
    public function insertUsers(){
        $db = new Db;
        $conn=$db->dbConnect();

        $query="INSERT INTO `auth_users` (`username`, `password`, `salt`) VALUES ('francis', 'chege', '123456')";
        $result=mysqli_query($conn,$query);
        if($result){
            echo "record inserted";
        }
        else{
            
            echo "failed to   ";
            echo $query;
        }
    }
    
  
}
$model=new Model;
$model->insertUsers();

    
  

?>