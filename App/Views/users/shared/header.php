<!DOCTYPE html>
<?php 
    session_start();
?>
<html>
<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    
    <!-- <script src="/assets/js/jquery-3.3.1.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
</head>
<body>

    <div class="container">
        <header id="header">
            <div class="row">
                <div class="col-md-4 col-sm-3 col-xs-5">
                    <div class="logo">
                        <a href="index.html" title=""><img src="/assets/images/logo.png"></a>
                    </div>
                </div>
                <div class="col-md-8 col-sm-9 col-xs-7 ">   
                    <div class="main-item">
                        <div class="item hidden-xs">
                             <!-- hidden-xs ẩn đối với màn hình đt -->
                            <div class="icon">
                                <i class="fas fa-truck"></i>
                            </div>
                            <div class="sub-freeship">
                                <h4>FREE SHIPPING</h4>
                                <p>Free shipping on call order</p>
                            </div>
                        </div>
                        <div class="item hidden-xs">
                            <div class="icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="sub-freeship">
                                <h4>HOTLINE</h4>
                                <p>+65 6876 0079</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <div class="sub-freeship">
                                <a href="enquiry.html" title=""><h4>Enquiry Cart</h4></a>
                                <p>(0)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <div class="home">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <button type="button" class="menu-bars"><i class="fas fa-bars"></i></button>
                    <ul class="sub-home ">
                        <li class="color-home">
                            <a href="index.html" title="">Home</a>
                        </li>
                        <li>
                            <a href="About-Us.html" title=""> About Us</a>
                        </li>
                        <li>
                            <a href="Project.html" title="">Projects</a>
                        </li>
                        <li>
                            <a href="Product.html" title="">our products</a> <i class="fas fa-angle-down"></i></li>
                        <li>
                            <a href="testimonial.html" title="">testimonial</a></li>
                        <li>
                            <a href="contact.html" title="">Contact Us</a></li>
                    </ul>    
                </div>
                <div class="col-md-4">
                    <div class="search">
                        <form>
                            <input type="text" placeholder="Search" name="Search">
                            <button type="submit"><i class="fas fa-search"></i> </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>