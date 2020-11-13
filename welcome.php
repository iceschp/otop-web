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
        <title>WELCOME OTOP</title>
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
        <div class="container"> 
            <h1 class="mt-5">WELCOME, <?php echo $_SESSION['fname']; ?></h1>
            <hr>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident nihil laudantium cum quas assumenda, dicta dolorem reprehenderit quae laboriosam, et, delectus quaerat libero veniam vitae reiciendis optio? Nemo, illum voluptas.
            </p>
            <a href="logout" class="btn btn-danger">Logout</a>
        </div>
    </body>
    </html>













<?php

?>