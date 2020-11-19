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
        <link rel="stylesheet" href="promotion.css">
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
        <link rel = "icon" href =  "image/icon.png" type = "icon"> 
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>
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
    
          <!----------------cont------------->
          <!---------------slidertion Section--------------->
           <section id="banner">
          <div>
              <h1 class="headline">PROMOTION SALE</h1>
          </div>
          <br><br>
          <section id="slider">
            <input type="radio" name="slider" id="s1" >
            <input type="radio" name="slider" id="s2" >
            <input type="radio" name="slider" id="s3" checked>
            <input type="radio" name="slider" id="s4" >
            <input type="radio" name="slider" id="s5" >

            <label for="s1" id="slide1">
                <img src="image/strawberry.jpg" height="100%" width="100%">
            </label>
            <label for="s2" id="slide2">
                <img src="image/subpa.jpg" height="100%" width="100%">
            </label>
            <label for="s3" id="slide3">
                <img src="image/banana.jpg" height="100%" width="100%">
            </label>
            <label for="s4" id="slide4">
                <img src="image/apple1.jpg" height="100%" width="100%">
            </label>
            <label for="s5" id="slide5">
                <img src="image/banana1.jpg" height="100%" width="100%">
            </label>
          </section>
          <br>
          <br>
          <br>
          </section>

          
          
        
   
         




          <!---------------Services Section--------------->
    <section id="services">
      <div class="conlainer text-center">
          <h1 class="title-fruits">DEHYDRATED FRUITS</h1>
          <button type="button" class="btn btn-primary">ALL FRUITS</button>
          <div class="row text-center">

              <div class="col-md-4 services">
                  <img src="image/mangoreal.jpg" class="fruits-img">
                  <h4>DEHYDRATED MANGO</h4>
                  <button class="bnt-shop"><a><i class="fas fa-shopping-basket"></i>ADD</a></button>
                  <p>YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK
                      YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK</p>
              </div>
              <div class="col-md-4 services">
                  <img src="image/Guava.jpg" class="fruits-img">
                  <h4>DEHYDRATED GUAVA</h4>
                  <button class="bnt-shop"><a><i class="fas fa-shopping-basket"></i>ADD</a></button>
                  <div class="old">
                    <p>3000</p>
                  </div>
                  <div class="new">
                    <h4>1500</h4>
                  </div>
              </div>
              <div class="col-md-4 services">
                  <img src="image/straw.jpg" class="fruits-img">
                  <h4>DEHYDRATED STRAWBERRY</h4>
                  <button class="bnt-shop"><a><i class="fas fa-shopping-basket"></i>ADD</a></button>
                  <p>YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK
                      YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK</p>
              </div>
              <div class="col-md-4 services">
                  <img src="image/cherry tomoto.jpg" class="fruits-img">
                  <h4>DEHYDRATED Cherry Tomato</h4>
                  <button class="bnt-shop"><a><i class="fas fa-shopping-basket"></i>ADD</a></button>
                  <p>YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK
                      YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK</p>
              </div>
              <div class="col-md-4 services">
                  <img src="image/pinlGUAva.jpg" class="fruits-img">
                  <h4>DEHYDRATED Pink Guava</h4>
                  <button class="bnt-shop"><a><i class="fas fa-shopping-basket"></i>ADD</a></button>
                  <p>YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK
                      YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK</p>
              </div>
              <div class="col-md-4 services">
                  <img src="image/peach.jpg" class="fruits-img">
                  <h4>DEHYDRATED Peach</h4>
                  <button class="bnt-shop"><a><i class="fas fa-shopping-basket"></i>ADD</a></button>
                  <p>YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK
                      YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK</p>
              </div>
              <div class="col-md-4 services">
                  <img src="image/Santol.jpg" class="fruits-img">
                  <h4>DEHYDRATED Santol</h4>
                  <button class="bnt-shop"><a><i class="fas fa-shopping-basket"></i>ADD</a></button>
                  <p>YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK
                      YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK</p>
              </div>
              <div class="col-md-4 services">
                  <img src="image/Passion Fruit.jpg" class="fruits-img">
                  <h4>DEHYDRATED Passion Fruit</h4>
                  <button class="bnt-shop"><a><i class="fas fa-shopping-basket"></i>ADD</a></button>
                  <p>YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK
                      YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK</p>
              </div>
              <div class="col-md-4 services">
                  <img src="image/Dragon Fruit.jpg" class="fruits-img">
                  <h4>DEHYDRATED Dragon Fruit</h4>
                  <button class="bnt-shop"><a><i class="fas fa-shopping-basket"></i>ADD</a></button>
                  <p>YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK
                      YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK</p>
              </div>

          </div>
      </div>

  </section>
          </body>
          </html>