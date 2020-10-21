<?php
require "includes/common.php";
?>
<!DOCTYPE html>

<html>

<head>
    <title>About Us | E-Store.com</title>
    <link rel="shortcut icon" href="img\srtcticon.png" type="image/png">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <style>
        .image {
            background: url(img/about.jpg);
        }
    </style>
</head>

<body>
    <!-- Header -->
    <?php include 'includes/header.php'; ?>
    
    <div class="container">
        <h1 class="text-center" style="margin-top: 0%; padding-top: 0%; margin-bottom: 20px;">About Us</h1>
        <img src="img/about.jpg" alt=""
            style="display: block; margin-left: auto; margin-right: auto; width: 90%; height: 20%; margin-bottom: 40px;">

        <div class="container"> 
            <p style="letter-spacing: 1px; font-family: sans-serif;">
                Mobile phones are no longer a luxury these days and have become a necessity for everyone, be it for
                communication or for entertainment purposes. We presents you a varied range of mobile phones from
                different
                popular brands across India. These mobile phones come with different specifications so that you can find
                the
                one that is suitable for you with ease. Explore our latest collection to enjoy online mobile shopping
                like
                never before.Choose from an assortment of mobile phones in order to stay connected with your near and
                dear
                ones in a convenient manner.
            </p>
            <p style="letter-spacing: 1px; margin-bottom: 15rem; min-width: 300px; font-family: sans-serif;">
                Planning to upgrade your smartphone or gift a smartphone to your loved ones? Reliance Digital is the
                right
                place to select an extensive range of smartphones from top brands. Choose from Samsung Mobile, Apple
                iPhone,
                ONEPLUS Mobile, Xioami Mobile phones and more. Pick your choice from Android or iOS operating system. We
                have whatever you are looking for; phones with quad core processor, octa core
                processor, 4G-LTE and 4G-VoLTE. Discover smartphones with single/dual SIM, advanced dual cameras, selfie
                camera, water resistant phones, dust resistant phones, and finger-print sensor enabled phones, phones
                with
                face detection technology, phones with expandable memory, Phones with long battery life, phones with
                pre-loaded apps and much more.
            </p>
        </div>

    </div>
    <?php include 'includes/footer.php'; ?>
</body>

</html>