<?php

     include_once('function.php');
     $usernamecheck = new DB_con();
     // Getting post value
     $uname = $_POST['username'];
     $sql = $usernamecheck->usernameavailble();
     $num =  mysqli_num_rows($sql);
     if ($num>0){
         echo "<span style='color: red;'>Username already associated with another account.</span>";
         echo "<scrip>$('#submit').prop('disabled',true);</scrip>";
     } else {
        echo "<span style='color: green;'>Username available for registration.</span>";
        echo "<scrip>$('#submit').prop('disabled',false);</scrip>";
     }
?>