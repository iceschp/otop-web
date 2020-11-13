<?php 
   session_start();
    include_once('function.php'); 
    $userdata  = new DB_con();
    if(isset($_POST['login'])){
      $uname = $_POST['username'];
      $password = $_POST['password'];

      $result = $userdata->signin($uname,$password);
      $num = mysqli_fetch_array($result);

      if($num >0) {
          $_SESSION['id'] = $num['id'];
          $_SESSION['fname'] = $num['fullname'];
          echo "<script>alert('Login Successfull');</script>";
          echo "<script>window.location.href='welcome.php'</script>";
      } else {
        echo "<script>alert('Something went wrong! Please try again');</script>";
        echo "<script>window.location.href='signin.php'</script>";
      }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>OTOP Login Page</title>
        <link rel="stylesheet" href="stylesheet.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
        <link rel = "icon" href =  "image/icon.png" type = "icon"> 
        <meta name="viewport" content="width=device-widht, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>
     <div class="container">
         <h1 class="mt-5">Login Otop shopping online</h1>
         <hr>
     <form method="post">
  
  <div class="form-group">
    <label for="username" class="form-label">User Name</label>
    <input type="text" class="form-control" id="username" placeholder="username" name="username">
    <span id="usernameavailble"></span>
  </div>
  
  <div class="form-group">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" placeholder="password" name="password">
  </div>
  <button type="submit" name="login" class="btn btn-success">Login</button>
</form>
     </div>

    </body>
</html>