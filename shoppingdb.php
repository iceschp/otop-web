<?php

class dbcontroller{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "shopping_cart";
    private $conn;

    function __construct(){
        $this->conn = $this->connectdb();
    }

    function connectdb(){
        $conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
        return $conn;
    }

    function runquery($query){
        $result = mysqli_query($this->conn, $query);

        while($row = mysqli_fetch_assoc($result)){
            $resultset[] = $row;
        }
        if(!empty($resultset))
            return $resultset;
    }

    function numrows($query){
        $result = mysqli_query($this->conn, $query);
        $rowcount = mysqli_num_rows($result);
        return $rowcount; 
    }
}


?>