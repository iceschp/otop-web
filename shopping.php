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
    </body>
</html>