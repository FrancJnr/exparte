<?php

class Db{
//connect to a database
public $dbhost="localhost";
public $dbname="exparte";
public $dbuser="root";
public $dbpassword="";


public function dbConnect(){

    $connection=mysqli_connect($this->dbhost,$this->dbuser,$this->dbpassword,$this->dbname);
    if (mysqli_connect_errno()){
        echo("The connection to ".$this->dbname." could not be established check your connection details".mysqli_error_list);

    }else{
       
    }

    return $connection;
}


}
?>