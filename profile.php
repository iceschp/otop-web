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

<body >
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
                        <a class="nav-link" href="index1.php"><span><i class="fas fa-home"></i></span>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shopping.php"><span><i class="fas fa-shopping-basket"></i>Product</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php"><span><i class="far fa-address-card"></i>About
                                us</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="promotion.php"><span><i class="fas fa-tags"></i>Promotion</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php"><span><i class="fas fa-user"></i>
                                <?php echo $_SESSION['fname']; ?></span></a>
                    </li>
                    <li class="nav-item">
                        <a href="logout.php" class="btn btn-danger">Logout</a></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-----------------banner section---------------->
    <section id="banner">
    <div class="container-profile" style="margin-left:40%">
        
            <h2 class="profile" style="font-family: 'Roboto', sans-serif; font-size:60px;">MY PROFILE</h2>
            
                 <img class="img-pro" style="border-radius: 50%;  width: 25%; margin:5%; margin-left:10%;" src="image/blank-profile.png" alt="">
            
            <div class="fullname" style="margin-bottom:3%;">
                <span class="fas fa-user fa-2x"></span>&nbsp;&nbsp;
                <span class="txt-fullname" style="font-family: 'Roboto', sans-serif; font-size:30px;">&nbsp;&nbsp;FULLNAME &nbsp;&nbsp;&nbsp;:</span>&nbsp;
                <span style="font-family: 'Roboto', sans-serif; font-size:25px;  margin: 30px;
                background-color: #ffffff;
                border-radius: 5px;
               
                 border: 1px;
                 opacity: 0.6;
                 filter: alpha(opacity=60);">
                 <span style="color:#000"><?php echo $_SESSION['fname']; ?></span></span>
           </div>
           <div class="user" style="margin-bottom:3%;">
                <span class="fas fa-user fa-2x"></span>&nbsp;&nbsp;
                <span class="txt-user" style="font-family: 'Roboto', sans-serif; font-size:30px;">&nbsp;&nbsp;USERNAME &nbsp;&nbsp;:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <span style="font-family: 'Roboto', sans-serif; font-size:25px;  margin: 30px;
                background-color: #ffffff;
                border-radius: 5px;
               
                 border: 1px;
                 opacity: 0.6;
                 filter: alpha(opacity=60);">
                 <span style="color:#000"><?php echo $_SESSION['uname']; ?></span></span>
           </div>
           <div class="email" style="margin-bottom:3%;">
                <span class="fas fa-envelope fa-2x"></span>&nbsp;&nbsp;
                <span class="txt-emailr" style="font-family: 'Roboto', sans-serif; font-size:30px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EMAIL  :</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <span style="font-family: 'Roboto', sans-serif; font-size:25px;  margin: 30px;
                background-color: #ffffff;
                border-radius: 5px;
               
                 border: 1px;
                 opacity: 0.6;
                 filter: alpha(opacity=60);">
                 <span style="color:#000"><?php echo $_SESSION['uemail']; ?></span></span>
           </div>
           <div class="password" style="margin-bottom:3%;">
                <span class="fas fa-key fa-2x"></span>
                <span class="txt-emailr" style="font-family: 'Roboto', sans-serif; font-size:30px;">&nbsp;&nbsp;PASSWORD :</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <span style="font-family: 'Roboto', sans-serif; font-size:25px;  margin: 30px;
                background-color: #ffffff;
                border-radius: 5px;
               
                 border: 1px;
                 opacity: 0.6;
                 filter: alpha(opacity=60);">
                 <span style="color:#000"><?php echo $_SESSION['password']; ?></span></span>
           </div>


                  
        
    </div>
    </section>

















   <!---------------------------------------Footer-------------------------------->
   <footer class="footer">
    <div>
        <ul class="footer-right">
        <li class="icon-footer">
            <ul class="box">
              <img class="imgfoot" src="image/icon.png">
                
               
                    <li><a>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem sapiente, optio minima similique aliquam rerum excepturi maiore.</a></li>
                    
                    <span><a href="https://www.facebook.com/eatgostudygo" class="socials"><i class="fab fa-facebook-square" ></i></a></span>
                    <span><a href="https://twitter.com" class="socials"><i class="fab fa-twitter-square"></i></a></span>
                    <span><a href="https://www.instagram.com/eatgostudygo/" class="socials"><i class="fab fa-instagram"></i></a></span>
                </ul>
            </li>
            <li class="Product-footer">
                <h2 class="txt-foot">Product</h2>
                <ul class="box">
                    <li><a href="#">Theme Design</a></li>
                    <li><a href="#">Plugin Design</a></li>
                    <li><a href="#">Plugin Design</a></li>
                    <li><a href="#">Plugin Design</a></li>
                </ul>
            </li>
            <li class="features">
                <h2 class="txt-foot">Useful link</h2>
                <ul class="box">
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Pricing</a></li>
                </ul>
            </li>
            
        </ul>
</div>
        <div class="footer-bottom">
            <p>All Right reserved by &copy;conceptial 2020</p>
        </div>
    </footer>
   
</body>

</html>