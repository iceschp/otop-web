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
    
          <!----------------cont------------->
          <!---------------slidertion Section--------------->
           <div id="banner">
          <div>
              <h1 class="headline">PROMOTION SALE</h1>
          </div>
          <br>
          <br>
          <section id="slider">
            <input type="radio" name="slider" id="s1" >
            <input type="radio" name="slider" id="s2" >
            <input type="radio" name="slider" id="s3" checked>
            <input type="radio" name="slider" id="s4" >
            <input type="radio" name="slider" id="s5" >

            <label for="s1" id="slide1">
                <img src="image/bannersale1.jpg" height="100%" width="100%">
            </label>
            <label for="s2" id="slide2">
                <img src="image//bannersale2.jpg" height="100%" width="100%">
            </label>
            <label for="s3" id="slide3">
                <img src="image/bannersale3.jpg" height="100%" width="100%">
            </label>
            <label for="s4" id="slide4">
                <img src="image/bannersale4.jpg" height="100%" width="100%">
            </label>
            <label for="s5" id="slide5">
                <img src="image/bannersale5.jpg" height="100%" width="100%">
            </label>
          </section>
             <br><br>
          </div>

          <h1 style=" padding-left: 35%;">DEHYDRATED FRUITS</h1>
<br><br><br>

<br>
                    
<div class="container" style="margin-top: 5;">
<?php
// Create connection
$conn = mysqli_connect("localhost", "root", "", "shopping_cart");
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM Shopping_Otop";
$result = mysqli_query($conn, $sql);

print "<div class=\"row\">";

while($row = mysqli_fetch_assoc($result)) {
  $id = $row["ID"];
	$topic = $row["topic"];
	$pic = $row["pic"];
    $content = $row["content"];
    $price = $row["pice"];
    
    print "<div class=\"col-sm-6\">";
    print "<div class=\"card\"> ";
    print "<div class=\"card-body\">";
    print "<img src=\"$pic\" class=\"fruits-img\">";
    print "<h5 class=\"card-title\">$topic</h5>";
    print "<p class=\"card-text\">$content</p>";
    print "<button  class =\"bnt-shop\"class=\"btn btn-dark\" style=\"  box-shadow: none;
    padding-left: 30%;
    padding: 5px 15px;
    margin-bottom: 10px;
    border: none;
    border-radius: 20px;
    background-image: linear-gradient(to right, #a517ba,#5f1782);\"><a><i class=\"fas fa-shopping-basket\" style=\"color: #fff;\"></i>$price</a></button>";
    print "</div>";
    print "</div>";
    print "</div>";

    print "<hr>";
}
mysqli_close($conn);
?>
</div>

  <!---------------------------------------Footer-------------------------------->
  <footer class="footer">
    <div>
        <ul class="footer-right">
        <li class="icon-footer">
            <ul class="box">
              <img class="imgfoot" src="image/icon.png">
                
               
                    <li><a>วิทยาลัยนวัตกรรมสื่อสารสังคม เอกคอมพิวเตอร์เพื่อการสื่อสาร</a></li>
                    
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