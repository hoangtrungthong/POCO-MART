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
    <?php require 'pages/headers/index.php' ?>

    <!-- menu -->
    <?php require 'pages/menu/index.php' ?>

    <div>
        <div class="container">
        <!-- banner -->
        <?php require 'pages/banner/index.php' ?>
        
        <!-- swiper -->
        <?php require 'pages/swiper/index.php' ?>
        
        <!-- products -->
        <?php require 'pages/products/index.php' ?>
        </div>
        <div class="container">
        <!-- techology -->
        <?php require 'pages/techology/index.php' ?>

        <!-- fashion_products -->
        <?php require 'pages/fashion/index.php' ?>

        <!-- suggest -->
        <?php require 'pages/suggest/index.php' ?>

        <!-- news -->
        <?php require 'pages/news/index.php' ?>
        </div>
    </div>

    <!-- footer -->
    <?php require 'pages/footer/index.php' ?>
</body>
<?php require 'vendor/scripts.php' ?>
</html>
