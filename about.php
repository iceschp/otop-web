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
    <meta charset="utf-8">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="aboutstyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="icon" href="image/icon.png" type="icon">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto:wght@300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- nav bar -->
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
    <!-- About us -->
    <br>
    <div class="aboutbox">
        <br>
        <p class="pcenter">About Us</p>
        <img class="imgabout" src="image/team.png">
        <br>
        <p class="post">เว็บไซต์นี้พัฒนาขึ้นโดย นางสาวจิราพร งิ้วแดง ,นายลภัส อุดมลัลลภ และนางสาววรัญญา แสงชมภู
            ซึ่งเว็บไซต์นี้ขายสินค้า OTOP คือผลไม้อบแห้ง
            กลุ่มเราเล็งเห็นว่าประเทศไทยเป็นประเทศที่อุดมสมบูรณ์ไปด้วยผักและผลไม้ และมีผลไม้ส่งออกทั้งในและต่างประเทศ
            พวกเราจึงนำผลิตภัณฑ์ OTOP ของจังหวัดต่างๆ มาทำเป็นเว็บไซต์เพื่อส่งเสริมสินค้าของไทยและรายได้ให้กับชุมชนต่างๆ
        </p>
    </div>
    <p class="pcenter">______________</p>

    <div class="container">
        <div class="row d-flex justify-content-center">
            <!-- milk profile -->
            <div class="col">
                <div class="txtcenter">
                    <img class="profile" src="image/milkprofile.jpg">
                    <p>Jiraporn Ngewdang</p>
                    <a class="gitlink" href="https://github.com/jirapornNgewdang"><i class="fa fa-github"
                            style="font-size:24px"></i> GitHub</a>
                </div>
            </div>
            <!-- jui profile -->
            <div class="col">
                <div class="txtcenter">
                    <img class="profile" src="image/juiprofile.jpg">
                    <p>Lapat Udomwallop</p>
                    <a class="gitlink" href="https://github.com/Rintori"><i class="fa fa-github"
                            style="font-size:24px"></i> GitHub</a>
                </div>
            </div>
            <!-- ice profile -->
            <div class="col">
                <div class="txtcenter">
                    <img class="profile" src="image/iceprofile.jpg">
                    <p>Warunya Sangchompoo</p>
                    <a class="gitlink" href="https://github.com/iceschp"><i class="fa fa-github"
                            style="font-size:24px"></i> GitHub</a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- code -->
    <div class="txtusing">
    <div class="container  bgtxt">
        <div class="row">
            <div class="col-md">
                <p>We're using HTML CSS JAVASCRIPT PHP on this website.</p>
            </div>
            <div class="col-md">
                <img src="image/logocode.png" width="500px">
            </div>
        </div>
    </div>
    </div>
    <br>
    
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