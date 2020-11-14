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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
        <link rel = "icon" href =  "image/icon.png" type = "icon"> 
        <meta name="viewport" content="width=device-widht, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img src ="image/icon.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

              <div class="collaspe navber-collaspe" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="index.html"><span><i class="fas fa-home"></i></span>Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><span><i class="fas fa-shopping-basket"></i>Product</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.html"><span><i class="far fa-address-card"></i>About us</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="promotion.html" ><span><i class="fas fa-tags"></i>Promotion</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" ><span><i class="fas fa-user"></i> <?php echo $_SESSION['fname']; ?></span></a>
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
            <div class="container">
            <div class="row">
              <div class="col-md-6">
                <p class="shop-title">BEST SHOPPING ONLINE</p>
                <p>YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK 
                  YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK</p>
                  <a href="#"><i class="far fa-play-circle"></i>Watch Tutorials</a>
              </div>
              <div class="col-md-6 text-center">
                 <img src="image/online shopping .png" class="img-fluid">
              </div>
            </div>
            </div>
            <!-- <img src="ima"> -->
          </section>
          <!-- Indicators -->
          <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
              <li data-target="#demo" data-slide-to="3"></li>
              <li data-target="#demo" data-slide-to="4"></li>
            </ul>
            
            <!-- The slideshow -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="image/banana1.jpg" alt="banana" width="600" height="600">
              </div>
              <div class="carousel-item">
                <img src="image/apple1.jpg" alt="apple" width="600" height="600">
              </div>
              <div class="carousel-item">
                <img src="image/allfruits.jpg" alt="mangoes" width="600" height="600">
              </div>
              <div class="carousel-item">
                <img src="image/strawberry.jpg" alt="mangoes" width="600" height="600">
              </div>
              <div class="carousel-item">
                <img src="image/subpa.jpg" alt="mangoes" width="600" height="600">
              </div>
            </div>
            
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
          </div>
          <!---------------Services Section--------------->
          <section id="services">
            <div class="conlainer text-center">
              <h1 class="title-fruits">DEHYDRATED FRUITS</h1>
              <button type="button"  class="btn btn-primary">ALL FRUITS</button>
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
                  <p>YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK 
                   YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK YAMAZAHAIMAK</p>
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
        <!---------------------------------------Footer-------------------------------->
        <footer >
          <div class="foot-main-content">
             <div class="foot-left-box">
                <h2>About us</h2>
                <div class="footcontent">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit
                    .Explicabo voluptatum minus perferendis saepe sint, repellat vel, 
                    dicta laborum commodi cupiditate, voluptatibus nisi </p>
                  <div class="social">
                    <a href="#">
                      <span class="fab fa-facebook-square "></span>
                    </a>
                    <a>
                      <span style="color: blueviolet;" class="fab fa-instagram icon-footer"></span>
                    </a>
                    <a>
                      <span style="color: rgb(59, 145, 145);" class="fab fa-twitter-square icon-footer"></span>
                    </a>
                    <a>
                      <span style="color: red;" class="fab fa-youtube icon-footer"></span>
                    </a>
                  </div>
                </div>
             </div>
             <div class="foot-center-box">
              <h2>Address</h2>
              <div class="footcontent">
                <div class="place">
                  <span class="fas fa-map-marker-alt"></span>
                  <span class="foot-text">Lorem ipsum dolor sit amet </span>
                </div>
                <div class="phone">
                  <span class="fas fa-phone-alt"></span>
                  <span class="foot-text">099-332-43534 </span>
                </div>
                <div class="email">
                  <span class="fas fa-envelope-square"></span>
                  <span class="foot-text">otopshopping_online@gamil.com</span>
                </div>
              </div>
             </div>
             <div class="foot-right-box">
               <h2>Contact us</h2>
               <div class="footcontent">
                 <form action="#">
                    <div class="email">
                      <div class="foot-text">Email</div>
                    <input type="email" required>
                    </div>
                    <div class="msg">
                      <div class="foot-text">Message</div>
                      <textarea rows="2" cols="25" required></textarea>
                    </div>
                    <div class="btn-send">
                        <button type="submit">Send</button>
                    </div>
                 </form>
               </div>
             </div>
          </div>
        </footer>
    </body>
</html>
