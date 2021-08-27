<?php
include("config/mysql_db.php");
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="//bizweb.dktcdn.net/100/429/689/themes/825316/assets/favicon.png?1627533814663" />
    <title>Poco Mart</title>
    <?php require 'vendor/styles.php' ?>
</head>
<body>
    <!-- header -->
    <?php require 'pages/home/headers/index.php' ?>

    <!-- menu -->
    <?php require 'pages/home/menu/index.php' ?>

    
    <div class="container">
        <!-- banner -->
        <?php require 'pages/home/banner/index.php' ?>
        
        <!-- swiper -->
        <?php require 'pages/home/swiper/index.php' ?>
        
        <!-- products -->
        <?php require 'pages/home/products/index.php' ?>

        <!-- techology -->
        <?php require 'pages/home/techology/index.php' ?>

        <!-- fashion_products -->
        <?php require 'pages/home/fashion/index.php' ?>

        <!-- suggest -->
        <?php require 'pages/home/suggest/index.php' ?>

        <!-- news -->
        <?php require 'pages/home/news/index.php' ?>
    </div> 

    <!-- footer -->
    <?php require 'pages/home/footer/index.php' ?>
</body>
<?php require 'vendor/scripts.php' ?>
</html>
