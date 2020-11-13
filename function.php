<?php
define('DB_SERVER','localhost'); //you host name
define('DB_USER','root'); //Database Username
define('DB_PASS',''); //Database Password
define('DB_NAME','register'); //Databasse Name
   
    class DB_con {
        function __contruct() {
            $conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
            $this->dbcon  = $conn;

            if (mysqli_connnect_errno()) {
                echo "Failed to connect to MySQL:" .mysqli_connect_error();
            }
           
        }
        public function usernameavailable($uname) {
           $checkuser = mysqli_query($this->dbcon,"SELECT username FROM tbluers WHERE username ='$uname'");
           return $checkuser;
        }
        public function registration($fname,$uname ,$uemail,$password) {
            $reg = mysqli_query($this->dbcon,"INSERT INTO tblusers(fullname, usersname, useremail, password) 
            VALUES('$fname','$uname' ,'$uemail','$password')");
            return $reg;
        }
        public function signin($uname,$password) {
            $signinquery = mysqli_query($this->dbcon,"SELECT id , fullname FROM tblusers WHERE 
            username = '$uname' AND '$password' ");
            return $signinquery;
        }
    }
?>