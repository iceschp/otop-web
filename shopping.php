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
    <link rel="stylesheet" href="shopping.css">
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
    <!-- navbar -->
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
                <img src="image/dry1.png" alt="banana" width="600" height="600">
            </div>
            <div class="carousel-item">
                <img src="image/dry2.jpg" alt="apple" width="600" height="600">
            </div>
            <div class="carousel-item">
                <img src="image/dry3.jpg" alt="man3" width="600" height="600">
            </div>
            <div class="carousel-item">
                <img src="image/dry4.jpg" alt="man2" width="600" height="600">
            </div>
            <div class="carousel-item">
                <img src="image/dry5.jpeg" alt="man1" width="600" height="600">
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

<div id="shopping-cart">
    <div class="txt-heading">Shopping Cart</div>
    <a href="shopping.php?action=empty" id="btnEmpty">Empty Cart</a>

    <table class="tbl-cart" cellpadding="10" cellspacing="1">
        <tbody>
            <tr>
                <th style="text-align: left;">Name</th>
                <th style="text-align: left;">Code</th>
                <th style="text-align: right;" width="5%">Quantity</th>
                <th style="text-align: right;" width="10%">Unite Price</th>
                <th style="text-align: right;" width="10%">Price</th>
                <th style="text-align: right;" width="5%">Remove</th>
            </tr>

            <tr>
                <td img scr="product-images" alt=""></td>
                <td>ABCDEF</td>
                <td style="text-align: right;">1</td>
                <td style="text-align: right;">$1000</td>
                <td style="text-align: right;">$1000</td>
                <td style="text-align: center;"><a href="#" class="btnRemoveAction"><img style="width: 20px;"src="image/icon-delete.png" alt="Remove Item"></td>
            </tr>

            <tr>
                <td colspan="2" align="right">Total:</td>
                <td align="right">1</td>
                <td align="right" colspan="2">$1000.00</td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>

<div id="product-grid">
    <div class="producy-item">
        <form action="shopping.php?action=add&code">
            <div class="product-image">
                <img src="" alt="images">
            </div>
            <div class="product-title-footer">
                <div class="product-title">Camera</div>
                <div class="product-price">$1000</div>
                <div class="cart-action">
                    <input type="text" class="product-quantity" name="quantity" value="1" size="2">
                    <input type="submit" value="Add to cart" class="btnAddAction">
                </div>
            </div>
        </form>
    </div>
</div>




    <!---------------Services Section--------------->
<br><br><br><br><br>

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
while($row = mysqli_fetch_assoc($result)) {
  $id = $row["ID"];
	$topic = $row["topic"];
	$pic = $row["pic"];
    $content = $row["content"];
    $price = $row["pice"];
    print "<div class=\"container\" style=\"margin: 5;\">";
   print " <div class=\"row\">";
   print " <div class=\"col-sm-4\">";
    print "  <div class=\"card\"> ";
   print  "  <div class=\"card-body\">";
     print    " <img src=\"$pic\" class=\"fruits-img\">";
    print "      <h5 class=\"card-title\">$topic</h5>";
    print "     <p class=\"card-text\">$content</p>";
    print   " <button  class =\"bnt-shop\"class=\"btn btn-dark\" style=\"  box-shadow: none;
    padding: 5px 15px;
    margin-bottom: 10px;
    border: none;
    border-radius: 20px;
    background-image: linear-gradient(to right, #a517ba,#5f1782);\"><a><i class=\"fas fa-shopping-basket\" style=\"color: #fff;\"></i>$price</a></button>";
    print "   </div> ";
     print" </div>";
    print " </div>";
    print " <div class=\"col-sm-4\">";
    print "  <div class=\"card\"> ";
   print  "  <div class=\"card-body\">";
     print    " <img src=\"$pic\" class=\"fruits-img\">";
    print "      <h5 class=\"card-title\">$topic</h5>";
    print "     <p class=\"card-text\">$content</p>";
    print   " <button  class =\"bnt-shop\"class=\"btn btn-dark\" style=\"  box-shadow: none;
    padding: 5px 15px;
    margin-bottom: 10px;
    border: none;
    border-radius: 20px;
    background-image: linear-gradient(to right, #a517ba,#5f1782);\"><a><i class=\"fas fa-shopping-basket\" style=\"color: #fff;\"></i>$price</a></button>";
    print "   </div> ";
     print" </div>";
    print " </div>";

    print " <div class=\"col-sm-4\">";
    print "  <div class=\"card\"> ";
   print  "  <div class=\"card-body\">";
     print    " <img src=\"$pic\" class=\"fruits-img\">";
    print "      <h5 class=\"card-title\">$topic</h5>";
    print "     <p class=\"card-text\">$content</p>";
    print   " <button  class =\"bnt-shop\"class=\"btn btn-dark\" style=\"  box-shadow: none;
    padding: 5px 15px;
    margin-bottom: 10px;
    border: none;
    border-radius: 20px;
    background-image: linear-gradient(to right, #a517ba,#5f1782);\"><a><i class=\"fas fa-shopping-basket\" style=\"color: #fff;\"></i>$price</a></button>";
    print "   </div> ";
     print" </div>";
    print " </div>";
    print " <hr>";
    print  "</div>";
    print  "</div>";
    // print " <div class=\"col-md-4 services\">";
    // print    " <img src=\"$pic\" class=\"fruits-img\">";
    // print    " <h4>$topic</h4> ";
    // print   " <button  class =\"bnt-shop\"class=\"btn btn-dark\"><a><i class=\"fas fa-shopping-basket\"></i>$price</a></button>";
    // print "  <p>$content</p>" ;
    // print "</div> \n";
}
mysqli_close($conn);
?>
</div>
</div>
<br><br><br>

    
    
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