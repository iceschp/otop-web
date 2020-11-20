<?php
    session_start();
    include_once('function.php');

    if($_SESSION['id']==""){
        header("location: signin.php");
    } else {
       
    }

?>
<!DOCTYPE html>
<html>

<head>
    <title>OTOP SHOPPING ONLINE</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="icon" href="image/icon.png" type="icon">
    <meta name="viewport" content="width=device-widht, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto:wght@300&display=swap"
        rel="stylesheet">
</head>

<body style="background: linear-gradient(to right, #a517ba,#5f1782);">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="image/icon.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

            <div class="collaspe navber-collaspe" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><span><i class="fas fa-home"></i></span>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><span><i class="fas fa-shopping-basket"></i>Product</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php"><span><i class="far fa-address-card"></i>About
                                us</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="promotion.php"><span><i class="fas fa-tags"></i>Promotion</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><span><i class="fas fa-user"></i>
                                <?php echo $_SESSION['fname']; ?></span></a>
                    </li>
                    <li class="nav-item">
                        <a href="logout.php" class="btn btn-danger">Logout</a></span></a>
                    </li>
                </ul>
                <br>
            </div>
        </div>
    </nav>
    <!-----------------banner section---------------->
    <div class="container">
        <from action="" method="post">
            <button class="btn btn-dark" style="float: right; width:70px" name="Submit1"> Edit</button>
        </from>
        <div class="wrapper">
            <h2 class="profile">My Profile</h2>
            <div class="fullname">
                        <span class="fas fa-user"></span>
                         <span class="txt-fullname">Fullname</span>
                         <span><?php echo $_SESSION['fname']; ?></span>
                        
                    </div>
            <span> 
             <i class="fas fa-user"></i><?php echo $_SESSION['fname']; ?></span>
             <div>
             <i class="fas fa-envelope-open-text"></i><?php echo $_SESSION['uemail']; ?></div>
             <div>
             <i class="fas fa-key"></i><?php echo $_SESSION['password']; ?></></div>
            <div>
            <i class="fas fa-key"></i> <?php echo $_SESSION['uname']; ?></>
            </div>                  
        </div>
    </div>
   
      
       
    








</body>

</html>