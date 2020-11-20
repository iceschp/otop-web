<?php

    include_once('function.php'); 
    $userdata  = new DB_con();
    if(isset($_POST['submit'])){
        $fname = $_POST['fullname'];
        $uname = $_POST['username'];
        $uemail = $_POST['email'];
        $password =$_POST['password'];
        
        
        $sql = $userdata->registration($fname, $uname, $uemail, $password);  
        if ($sql) {
            
          echo "<script>alert('Registor Successful!');</script>";
          echo "<script>window.location.href='signin.php'</script>";
      } else {
          echo "<script>alert('Something went wrong! Please try again.');</script>";
          echo "<script>window.location.href='signin.php'</script>";
      }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTOP Register Page</title>

    <link rel="stylesheet" href="indexRegister.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="icon" href="image/icon.png" type="icon">
    <meta name="viewport" content="width=device-widht, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto:wght@300&display=swap"
        rel="stylesheet">
</head>

<body>
    <script>
    function checkusername(val) {
        $.ajax({
            type: 'POST'
            url: 'checkuser_available.php'
            data: 'username=' + val,
            success: function(data) {
                $('#usernameavailable').html(data);
            }
        });
    }
    </script>
    <div class="container">
        <h1 class="mt-5">Register Otop shopping online</h1>
        <hr>
        <form method="post">
            <div class="form-group">
                <label for="fullname" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="username" placeholder="fullname" name="fullname">
            </div>
            <div class="form-group">
                <label for="username" class="form-label">User Name</label>
                <input type="text" class="form-control" id="username" placeholder="username" name="username"
                    onblur="checkusername(this.value)">
                <span id="usernameavailable"></span>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="email" name="email">
            </div>
            <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="password" name="password">
            </div>
            <button type="submit" id="submit" name="submit" class="btn btn-success">Register</button>
        </form>
    </div>

</body>

</html>