<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Otop Shopping Cart</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="shopping.css">
    </head>
    <body>
        <div id="shopping-cart">
            <div class="txt-heading">Otop Shopping Cart</div>
            <a href="shopping.php?action=empty">Empty Cart</a>
            <table class="tbl-cart" cellpadding="10" cellspacing="1">
                <tbody>
                    <tr>
                        <th style="text-align: left;"> Name</th>
                        <th style="text-align: left;"> Code</th>
                        <th style="text-align: right;" width="5%"> Quantity</th>
                        <th style="text-align: right;" width="10%"> Unit Price</th>
                        <th style="text-align: right;" width="10%"> Price</th>
                        <th style="text-align: center;" width="5%">Remove</th>
                    </tr>
                    <tr>
                        <td><img src="product-images" class="cart-item-image" alt=""></td>
                        <td></td>
                        <td style="text-aling: right;"width="5%">1</td>
                        <td style="text-aling: right;" width="10%">120บาท</td>
                        <td style="text-aling: right;" width="10%">120บาท</td>
                        <td style="text-aling: center"><a href="#" class="btnRemoveAction"><img src=""></a></td>
                    </tr>
                    <tr>
                        <td colspan="2" text-align="right">Total</td>
                        <td text-align="right">1</td>
                        <td text-align="right" colspan="2">120บาท</td>
                    </tr>
                </tbody>
            </table>
        </div>













       <!---------------------------------------Footer-------------------------------->
  <footer class="footer">
        <div class="footer-left">

            <img src="image/icon.png">
            
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem sapiente, optio minima similique aliquam rerum excepturi maiore.</p>
            <div class="socials">
                <a href="#"><i class="fab fa-facebook-square"></i></a>
                <a href="#"><i class="fab fa-twitter-square"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
    </div>
    <div>
        <ul class="footer-right">
            <li>
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
            <li>
                <h2 class="txt-foot">Address</h2>
                <ul class="box">
                    <li><a>123 , Asok</a></li>
                    <li><a>Bkk Thailand</a></li>
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