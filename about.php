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
            <div class="col-md" class="txt">
                <p>We're using HTML CSS JAVASCRIPT PHP on this website.</p>
            </div>
            <div class="col-md">
                <p>abcdefg</p>
            </div>
        </div>
    </div>
    </div>
    <br>
    <footer>
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