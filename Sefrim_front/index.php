<?php require_once("Includes/DB.php"); ?>
<?php require_once("Includes/Functions.php"); ?>
<?php require_once("Includes/Sessions.php"); ?>
<?php
$_SESSION["TrackingURL"]=$_SERVER["PHP_SELF"];
//echo $_SESSION["TrackingURL"];
Confirm_Login();
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themesground.com/flavours/version1/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Apr 2020 11:51:17 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Home</title>
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no">
<meta name="description" content="Default Description">
<meta name="keywords" content="fashion, store, E-commerce">
<meta name="robots" content="*">
<link rel="icon" href="#" type="image/x-icon">
<link rel="shortcut icon" href="#" type="image/x-icon">

<!-- CSS Style -->
<link rel="stylesheet" type="text/css" href="stylesheet/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="stylesheet/font-awesome.css" media="all">
<link rel="stylesheet" type="text/css" href="stylesheet/revslider.css" >
<link rel="stylesheet" type="text/css" href="stylesheet/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="stylesheet/owl.theme.css">
<link rel="stylesheet" type="text/css" href="stylesheet/jquery.bxslider.css">
<link rel="stylesheet" type="text/css" href="stylesheet/jquery.mobile-menu.css">
<link rel="stylesheet" type="text/css" href="stylesheet/style.css" media="all">
<link rel="stylesheet" type="text/css" href="stylesheet/responsive.css" media="all">

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
<meta name="viewport" content="initial-scale=1.0, width=device-width">

</head>
<body>
<div id="page">
 <header>
  <div class="header-banner">
    <div class="assetBlock">
      <div style="height: 20px; overflow: hidden;" id="slideshow">
        <p style="display: block;">HOT DAYS! - <span>50%</span> GET READY FOR SUMMER! &gt;</p>
        <p style="display: none;">SALE UP TO <span>40%</span> HURRY LIMITED OFFER! &gt;</p>
      </div>
     </div>
  </div>
  <div id="header">
    <div class="header-container container">
	 <div class="row">
      <div class="logo"> <a href="index.php" title="Flavours HTML">
        <div><img src="images/logo.png" alt="Flavours Store"></div>
        </a> </div>
      <div class="fl-nav-menu">

          <nav>
            <div class="mm-toggle-wrap">
              <div class="mm-toggle"><i class="icon-align-justify"></i><span class="mm-label">Menu</span> </div>
            </div>
            <div class="nav-inner">
              <!-- BEGIN NAV -->
              <ul id="nav" class="hidden-xs">
                <li id="nav-home" class="level0 parent drop-menu"><a class="level-top active" href="index.php"><span>Home</span></a>
                  <ul class="level1" style="display: none;">
                    <li class="level1 parent"><a href="http://htmldemo.themesmart.net/flavours/version1/"><span>Home Version 1</span></a></li>
                  </ul>
                </li>

                <li class="mega-menu"> <a class="level-top" href="grid.html"><span>ahla bik</span></a>
                  <div class="level0-wrapper dropdown-6col" style="left: 0px; display: none;">
                    <div class="container">
                      <div class="level0-wrapper2">
                        <div class="col-1">
                          <div class="nav-block nav-block-center">
                            <!--mega menu-->
                            <ul class="level0">
                              <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>houaida</span></a>
                                <!--sub sub category-->
                                <ul class="level1">
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>kifeh tawa
</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>bored</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>like for like</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>instakhram</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                </ul>
                                <!--level1-->
                                <!--sub sub category-->
                              </li>
                              <!--level3 nav-6-1 parent item-->
                              <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Fruit Salads‎</span></a>
                                <!--sub sub category-->
                                <ul class="level1">
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Candle Salad</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Frogeye Salad</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Green Papaya Salad</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Waldorf salad</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                </ul>
                                <!--level1-->
                                <!--sub sub category-->
                              </li>
                              <!--level3 nav-6-1 parent item-->
                              <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Salad Dressings</span></a>
                                <!--sub sub category-->
                                <ul class="level1">
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Louis Dressings</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>French Dressings</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Gingner Dressings</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Italian Dressings</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                </ul>
                                <!--level1-->
                                <!--sub sub category-->
                              </li>
                              <!--level3 nav-6-1 parent item-->
                              <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Leaf Vegetable</span></a>
                                <!--sub sub category-->
                                <ul class="level1">
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Fenugreek</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Spinach</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Malva</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Cabbage</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                </ul>
                                <!--level1-->
                                <!--sub sub category-->
                              </li>
                              <!--level3 nav-6-1 parent item-->
                              <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Stem Vegetables</span></a>
                                <!--sub sub category-->
                                <ul class="level1">
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Crithmum</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Fallopia Japonica</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Celery</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Cardoon</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                </ul>
                                <!--level1-->
                                <!--sub sub category-->
                              </li>
                              <!--level3 nav-6-1 parent item-->
                              <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Root Vegetables</span></a>
                                <!--sub sub category-->
                                <ul class="level1">
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Garlic</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Onion</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Potato</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Taros</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                </ul>
                                <!--level1-->
                                <!--sub sub category-->
                              </li>
                              <!--level3 nav-6-1 parent item-->
                            </ul>
                            <!--level0-->
                          </div>
                          <!--nav-block nav-block-center-->
                        </div>
                        <!--col-1-->
                        <div class="col-2">
                          <div class="menu_image"><a title="" href="grid.html"><img alt="menu_image" src="images/menu-bag.png"></a></div>

                        </div>
                        <!--col-2-->
                      </div>
                      <!--level0-wrapper2-->
                    </div>
                    <!--container-->
                  </div>
                  <!--level0-wrapper dropdown-6col-->
                  <!--mega menu-->
                </li>
                <li class="mega-menu"> <a class="level-top" href="grid.html"><span>Soups‎</span></a>
                  <div class="level0-wrapper dropdown-6col" style="left: 0px; display: none;">
                    <div class="container">
                      <div class="level0-wrapper2">
                        <div class="nav-block nav-block-center">
                          <!--mega menu-->
                          <ul class="level0">
                            <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Cold Soups</span></a>
                              <!--sub sub category-->
                              <ul class="level1">
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Red Bean Soup</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Fruit Soup</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Naengguk</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Borscht</span></a> </li>
                                <!--level2 nav-6-1-1-->
                              </ul>
                              <!--level1-->
                              <!--sub sub category-->
                            </li>
                            <!--level3 nav-6-1 parent item-->
                            <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Cream Soups</span></a>
                              <!--sub sub category-->
                              <ul class="level1">
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Chowder</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Asparagus Soup</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Broccoli Soup</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Mushroom Soup</span></a> </li>
                                <!--level2 nav-6-1-1-->
                              </ul>
                              <!--level1-->
                              <!--sub sub category-->
                            </li>
                            <!--level3 nav-6-1 parent item-->
                            <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Vegitable Soups</span></a>
                              <!--sub sub category-->
                              <ul class="level1">
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>French Onion Soup</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Leek Soup</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Minestrone</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Spring Soup</span></a> </li>
                                <!--level2 nav-6-1-1-->
                              </ul>
                              <!--level1-->
                              <!--sub sub category-->
                            </li>
                            <!--level3 nav-6-1 parent item-->
                            <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Bean Soups</span></a>
                              <!--sub sub category-->
                              <ul class="level1">
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Bouneschlupp</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Jókai Bean Soup</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Kwati Soup</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Senate bean</span></a> </li>
                                <!--level2 nav-6-1-1-->
                              </ul>
                              <!--level1-->
                              <!--sub sub category-->
                            </li>
                            <!--level3 nav-6-1 parent item-->
                            <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Bread Soups</span></a>
                              <!--sub sub category-->
                              <ul class="level1">
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Tomato Soup</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Manchow Soup</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Sweet Corn Soup</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Shorba Soup</span></a> </li>
                                <!--level2 nav-6-1-1-->
                              </ul>
                              <!--level1-->
                              <!--sub sub category-->
                            </li>
                            <!--level3 nav-6-1 parent item-->
                            <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Chinese Soups</span></a>
                              <!--sub sub category-->
                              <ul class="level1">
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Hot & Sour</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Noodle Soup</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Corn Crab Soup</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Sago Soup</span></a> </li>
                                <!--level2 nav-6-1-1-->
                              </ul>
                              <!--level1-->
                              <!--sub sub category-->
                            </li>
                            <!--level3 nav-6-1 parent item-->
                          </ul>
                          <!--level0-->
                        </div>
                        <!--nav-block nav-block-center-->
                        <div class="nav-add">
                          <div class="push_item">
                            <div class="push_img"><a href="#"><img src="images/menu-img2.jpg" alt="menu item 1"></a></div>

                          </div>
                          <div class="push_item">
                           <div class="push_img"><a href="#"><img src="images/menu-img1.jpg" alt="menu item 2"></a></div>

                          </div>
                          <div class="push_item">
                           <div class="push_img"><a href="#"><img src="images/menu-img3.jpg" alt="menu item 3"></a></div>

                          </div>
                          <div class="push_item push_item_last">
                          <div class="push_img"><a href="#"><img src="images/menu-img4.jpg" alt="menu item 4"></a></div>

                          </div>
                        </div>
                      </div>
                      <!--level0-wrapper2-->
                    </div>
                    <!--container-->
                  </div>
                  <!--level0-wrapper dropdown-6col-->
                  <!--mega menu-->
                </li>
                <li class="mega-menu"> <a class="level-top" href="grid.html"><span>Fast Food</span></a>
                  <div class="level0-wrapper dropdown-6col" style="left: 0px; display: none;">
                    <div class="container">
                      <div class="level0-wrapper2">
                        <div class="nav-block nav-block-center">
                          <!--mega menu-->

                          <ul class="level0">
                            <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Indian</span></a>
                              <!--sub sub category-->
                              <ul class="level1">
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Aloo Chaat</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Batata Vada</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Kachori</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Panipuri</span></a> </li>
                                <!--level2 nav-6-1-1-->
                              </ul>
                              <!--level1-->
                              <!--sub sub category-->
                            </li>
                            <!--level3 nav-6-1 parent item-->
                            <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Pizza</span></a>
                              <!--sub sub category-->
                              <ul class="level1">
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Greek Pizza</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Pizza Rolls</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Grilled Pizza</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Pizza Strips</span></a> </li>
                                <!--level2 nav-6-1-1-->
                              </ul>
                              <!--level1-->
                              <!--sub sub category-->
                            </li>
                            <!--level3 nav-6-1 parent item-->
                            <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>McDonald's</span></a>
                              <!--sub sub category-->
                              <ul class="level1">
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Kiwiburger</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Happy Meal</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>McMuffin</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>McGriddles</span></a> </li>
                                <!--level2 nav-6-1-1-->
                              </ul>
                              <!--level1-->
                              <!--sub sub category-->
                            </li>
                            <!--level3 nav-6-1 parent item-->
                            <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Wendy's Foods</span></a>
                              <!--sub sub category-->
                              <ul class="level1">
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Bacon Deluxe</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Baconator</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Frescata</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Frosty</span></a> </li>
                                <!--level2 nav-6-1-1-->
                              </ul>
                              <!--level1-->
                              <!--sub sub category-->
                            </li>
                            <!--level3 nav-6-1 parent item-->
                            <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Burger King</span></a>
                              <!--sub sub category-->
                              <ul class="level1">
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Big King</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>TenderCrisp</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Whopper</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Kuro Burger</span></a> </li>
                                <!--level2 nav-6-1-1-->
                              </ul>
                              <!--level1-->
                              <!--sub sub category-->
                            </li>
                            <!--level3 nav-6-1 parent item-->
                            <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Sandwiches</span></a>
                              <!--sub sub category-->
                              <ul class="level1">
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Hamburgers</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span> Hot Dogs‎</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>American Sandwiches</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Chilean Sandwiches</span></a> </li>
                                <!--level2 nav-6-1-1-->
                              </ul>
                              <!--level1-->
                              <!--sub sub category-->
                            </li>
                            <!--level3 nav-6-1 parent item-->
                          </ul>
                          <!--level0-->
                        </div>
                        <!--nav-block nav-block-center-->
                      </div>
                      <!--level0-wrapper2-->
                    </div>
                    <!--container-->
                  </div>
                  <!--level0-wrapper dropdown-6col-->
                  <!--mega menu-->
                </li>
                <li class="mega-menu"> <a class="level-top" href="grid.html"><span>Sandwiches‎</span></a> </li>
                <li class="level0 parent drop-menu"><a href="#"><span>Pages</span> </a>
                <!--sub sub category-->
                  <ul class="level1">
                  <li class="level1 first"><a href="grid.html"><span>Product Grid</span></a></li>
                  <li class="level1 nav-10-2"> <a href="list.html"> <span>Product List</span> </a> </li>
                  <li class="level1 nav-10-3"> <a href="product-detail.html"> <span>Product Detail</span> </a> </li>
                  <li class="level1 nav-10-4"> <a href="shopping-cart.html"> <span>Cart Page</span> </a> </li>
                  <li class="level1 first parent"><a href="checkout.html"><span>Checkout</span></a>
                  <!--sub sub category-->
                  <ul class="level2 right-sub">
                    <li class="level2 nav-2-1-1 first"><a href="checkout-method.html"><span>Method</span></a></li>
                    <li class="level2 nav-2-1-5 last"><a href="checkout-billing-info.html"><span>Billing Info</span></a></li>
                  </ul>
                  <!--sub sub category-->
                  </li>
                  <li class="level1 nav-10-4"> <a href="wishlist.html"> <span>Wishlist</span> </a> </li>
                  <li class="level1"> <a href="dashboard.php"> <span>Dashboard</span> </a> </li>
                  <li class="level1"> <a href="multiple-addresses.html"> <span>Multiple Addresses</span> </a> </li>
                  <li class="level1"> <a href="about-us.html"> <span>About us</span> </a> </li>
                  <li class="level1 first parent"><a href="blog.html"><span>Blog</span></a>
                  <!--sub sub category-->
                  <ul class="level2 right-sub">
                    <li class="level2 nav-2-1-1 first"><a href="blog-detail.html"><span>Blog Detail</span></a></li>
                  </ul>
                  <!--sub sub category-->
                  </li>
                  <li class="level1"><a href="contact-us.html"><span>Contact us</span></a> </li>
                  <li class="level1"><a href="404error.html"><span>404 Error Page</span></a> </li>
                  <li class="level1"><a href="login.php"><span>Login Page</span></a> </li>
                  <li class="level1"><a href="quickview.html"><span>Quick View</span></a> </li>
                  <li class="level1"><a href="newsletter.html"><span>Newsletter</span></a> </li>
                  </ul>
                </li>
                <li class="fl-custom-tabmenulink mega-menu"> <a href="Offre_eddawakh.php" class="level-top"> <span>Offer eddawakh</span> </a>
                  <div class="level0-wrapper fl-custom-tabmenu" style="left: 0px; display: none;">
                    <div class="container">
                      <div class="header-nav-dropdown-wrapper clearer">
                        <?php display_top4_promotions(); ?>
                      </div>
                  </div>
                </li>
              </ul>
              <!--nav-->
              </div>
              </nav>
        </div>
        <!--row-->
      </div>
      <div class="fl-header-right">
        <div class="fl-links">
          <div class="no-js"> <a title="Company" class="clicker"></a>
            <div class="fl-nav-links">
              <div class="language-currency">

                <p style="color:#88BE4C; margin-left: 10px;">Welcome <?php echo''.$_SESSION["UserName"].'' ?></p>

                <!--fl-language-->
                <!-- END For version 1,2,3,4,6 -->
                <!-- For version 1,2,3,4,6 -->
                <div class="fl-currency">
                  <ul class="currencies_list">
                    <li><a href="#" title="EGP"> £</a></li>
                    <li><a href="#" title="EUR"> €</a></li>
                    <li><a href="#" title="USD"> $</a></li>
                  </ul>
                </div>
                <!--fl-currency-->
                <!-- END For version 1,2,3,4,6 -->
              </div>
              <ul class="links">
                <li><a href="dashboard.php" title="My Account">My Account</a></li>
                <li><a href="wishlist.html" title="Wishlist">Wishlist</a></li>
                <li><a href="checkout.html" title="Checkout">Checkout</a></li>
                <li><a href="blog.html" title="Blog"><span>Blog</span></a></li>
                <?php
                if ($_SESSION["UserId"]!=null){
                  echo '<li class="last"><a href="logout.php" title="Login"><span>Logout</span></a></li>';
                }
                else {
                  echo '<li class="last"><a href="login.php" title="Login"><span>Login</span></a></li>';
                }
                ?>
              </ul>
            </div>
          </div>
        </div>
        <div class="fl-cart-contain">
          <div class="mini-cart">
            <div class="basket"> <a href="shopping-cart.html"><span> 2 </span></a> </div>
            <div class="fl-mini-cart-content" style="display: none;">
              <div class="block-subtitle">
                <div class="top-subtotal">2 items, <span class="price">$259.99</span> </div>
                <!--top-subtotal-->
                <!--pull-right-->
              </div>
              <!--block-subtitle-->
              <ul class="mini-products-list" id="cart-sidebar">
                <li class="item first">
                  <div class="item-inner"><a class="product-image" title="timi &amp; leslie Sophia Diaper Bag, Lemon Yellow/Shadow White" href="#l"><img alt="timi &amp; leslie Sophia Diaper Bag, Lemon Yellow/Shadow White" src="products-images/p4.jpg"></a>
                    <div class="product-details">
                      <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                      <!--access-->
                      <strong>1</strong> x <span class="price">$179.99</span>
                      <p class="product-name"><a href="product-detail.html">timi &amp; leslie Sophia Diaper Bag...</a></p>
                    </div>
                  </div>
                </li>
                <li class="item last">
                  <div class="item-inner"><a class="product-image" title="JP Lizzy Satchel Designer Diaper Bag - Slate Citron" href="#"><img alt="JP Lizzy Satchel Designer Diaper Bag - Slate Citron" src="products-images/p3.jpg"></a>
                    <div class="product-details">
                      <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                      <!--access-->
                      <strong>1</strong> x <span class="price">$80.00</span>
                      <p class="product-name"><a href="product-detail.html">JP Lizzy Satchel Designer Diaper Ba...</a></p>
                    </div>
                  </div>
                </li>
              </ul>
              <div class="actions">
                <button class="btn-checkout" title="Checkout" type="button" onClick="window.location=checkout.html"><span>Checkout</span></button>
              </div>
              <!--actions-->
            </div>
            <!--fl-mini-cart-content-->
          </div>
        </div>
        <!--mini-cart-->
        <div class="collapse navbar-collapse">
              <form class="navbar-form" role="search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search">
                  <span class="input-group-btn">
                  <button type="submit" class="search-btn"> <span class="glyphicon glyphicon-search"> <span class="sr-only">Search</span> </span> </button>
                  </span> </div>
              </form>
            </div>
        <!--links-->
      </div>
    </div>
	</div>
  </header>
  <!--container-->
  <div class="content">
  <div id="thm-mart-slideshow" class="thm-mart-slideshow">
    <div class="container">
      <div id='thm_slider_wrapper' class='thm_slider_wrapper fullwidthbanner-container' >
        <div id='thm-rev-slider' class='rev_slider fullwidthabanner'>
          <ul>
            <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='images/slide-img1.jpg'><img src='images/slide-img2.jpg'  data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="slider-image1" />
              <div class="info">
                <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-x='0'  data-y='210'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;'><span>Get 50% off</span></div>
                <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='0'  data-y='300'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'><span>Simply delicious</span></div>
                <div class='tp-caption sfb  tp-resizeme ' data-x='0'  data-y='550'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'><a href='#' class="buy-btn">Shop Now</a></div>
                <div    class='tp-caption Title sft  tp-resizeme ' data-x='0'  data-y='420'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>Little things make a big difference</div>
              </div>
            </li>
            <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='images/slide-img2.jpg'><img src='images/slide-img1.jpg'  data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="slider-image2"  />
              <div class="info">
                <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-x='0'  data-y='210'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;'><span>Fresh Look</span></div>
                <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='0'  data-y='300'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'><span>100% Refreshing</span></div>
                <div class='tp-caption sfb  tp-resizeme ' data-x='0'  data-y='550'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'><a href='#' class="buy-btn">Shop Now</a></div>
                <div    class='tp-caption Title sft  tp-resizeme ' data-x='0'  data-y='420'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>Farm Fresh Produce Right to Your Door</div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>




  <div id="top">
  <div class="container">
  <div class="row">
    <ul>
      <li>
        <div>
        <a href="#" data-scroll-goto="1">
          <img src="images/speakers.png" alt="promotion-banner1">
        </a>
        </div>
      </li>
      <li>
       <div>
        <a href="#" data-scroll-goto="2">
          <img src="images/schedule.png" alt="promotion-banner2">
        </a>
        </div>
      </li>
      <li>
       <div>
        <a href="#" data-scroll-goto="3">
          <img src="images/details.png" alt="promotion-banner3">
        </a>
        </div>
      </li>
      <li>
       <div>
        <a href="#" data-scroll-goto="4">
          <img src="images/sponsors.png" alt="promotion-banner4">
        </a>
		</div>
      </li>
      <li>
       <div>
        <a href="#" data-scroll-goto="5">
          <img src="images/team.png" alt="promotion-banner5">
        </a>
        </div>
      </li>
      <li>
       <div>
        <a href="http://themesground.com/register">
          <img src="images/register.png" alt="promotion-banner6">
        </a>
        </div>
      </li>
    </ul>
	</div>
	</div>
  </div>

  <!--Category slider Start-->
  <div class="top-cate">
  <div class="featured-pro container">
    <div class="row">
      <div class="slider-items-products">
        <div class="new_title">
          <h2>Top Categories</h2>

        </div>
        <div id="top-categories" class="product-flexslider hidden-buttons">
          <div class="slider-items slider-width-col4 products-grid">
            <div class="item">
              <div class="pro-img"><img src="products-images/p1.jpg" alt="Retis lapen casen">
                <div class="pro-info">Soups</div>
              </div>
            </div>
            <!-- Item -->
            <div class="item">
              <div class="pro-img"><img src="products-images/p2.jpg" alt="Retis lapen casen">
                <div class="pro-info">Sandwiches</div>
              </div>
            </div>
            <!-- End Item -->
            <!-- Item -->
            <div class="item">
              <div class="pro-img"><img src="products-images/p3.jpg" alt="Retis lapen casen">
                <div class="pro-info">Fast Food</div>
              </div>
            </div>
            <!-- End Item -->
            <div class="item">
              <div class="pro-img"><img src="products-images/p4.jpg" alt="Retis lapen casen">
                <div class="pro-info">Vegetables</div>
              </div>
            </div>
            <!-- Item -->
            <div class="item">
              <div class="pro-img"><img src="products-images/p5.jpg" alt="Retis lapen casen">
                <div class="pro-info">Fruits</div>
              </div>
            </div>
            <!-- End Item -->
            <!-- Item -->
            <div class="item">
              <div class="pro-img"><img src="products-images/p6.jpg" alt="Retis lapen casen">
                <div class="pro-info">Beans</div>
              </div>
            </div>
            <!-- End Item -->
            <!-- Item -->
            <div class="item">
              <div class="pro-img"><img src="products-images/p7.jpg" alt="Retis lapen casen">
                <div class="pro-info">Salads‎</div>
              </div>
            </div>
            <!-- End Item -->
            <!-- Item -->
            <div class="item">
              <div class="pro-img"><img src="products-images/p8.jpg" alt="Retis lapen casen">
                <div class="pro-info">Chinese</div>
              </div>
            </div>
            <!-- End Item -->
			 <!-- Item -->
            <div class="item">
              <div class="pro-img"><img src="products-images/p9.jpg" alt="Retis lapen casen">
                <div class="pro-info">South Indian</div>
              </div>
            </div>
            <!-- End Item -->
			 <!-- Item -->
            <div class="item">
              <div class="pro-img"><img src="products-images/p10.jpg" alt="Retis lapen casen">
                <div class="pro-info">Parath's</div>
              </div>
            </div>
            <!-- End Item -->
			 <!-- Item -->
            <div class="item">
              <div class="pro-img"><img src="products-images/p11.jpg" alt="Retis lapen casen">
                <div class="pro-info">Leafy Veg</div>
              </div>
            </div>
            <!-- End Item -->
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
  <!--Category silder End-->




   <!-- best Pro Slider -->
  <section class=" wow bounceInUp animated">
    <div class="best-pro slider-items-products container">
      <div class="new_title">
        <h2>Best Seller</h2>
      </div>
      <div class="cate-banner-img"><img src="images/category-banner.jpg" alt="Retis lapen casen"></div>
      <div id="best-seller" class="product-flexslider hidden-buttons">
        <div class="slider-items slider-width-col4 products-grid">
          <div class="item">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="product-detail.html" title="Retis lapen casen" class="product-image"><img src="products-images/p1.jpg" alt="Retis lapen casen"></a>
                                  <div class="new-label new-top-left">New</div>
                                  <div class="item-box-hover">
                                    <div class="box-inner">
                                      <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                                      <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>

                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="product-detail.html" title="Retis lapen casen">Retis lapen casen</a> </div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating" style="width:80%"></div>
                                        </div>
                                        <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price" ><span class="price">$125.00</span> </span> </div>
                                    </div>
									<div class="add_cart">
                                        <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

          <!-- Item -->
          <div class="item">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="product-detail.html" title="Retis lapen casen" class="product-image"><img src="products-images/p2.jpg" alt="Retis lapen casen"></a>
                                  <div class="new-label new-top-left">New</div>
                                  <div class="item-box-hover">
                                    <div class="box-inner">
                                      <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                                      <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>

                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="product-detail.html" title="Retis lapen casen">Retis lapen casen</a> </div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating" style="width:80%"></div>
                                        </div>
                                        <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price" ><span class="price">$125.00</span> </span> </div>
                                    </div>
									<div class="add_cart">
                                        <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
          <!-- End Item -->

          <!-- Item -->
          <div class="item">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="product-detail.html" title="Retis lapen casen" class="product-image"><img src="products-images/p3.jpg" alt="Retis lapen casen"></a>
                                  <div class="sale-label sale-top-left">Sale</div>
                                  <div class="item-box-hover">
                                    <div class="box-inner">
                                      <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                                      <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>

                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="product-detail.html" title="Retis lapen casen">Retis lapen casen</a> </div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating" style="width:80%"></div>
                                        </div>
                                        <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price" ><span class="price">$125.00</span> </span> </div>
                                    </div>
									<div class="add_cart">
                                        <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
          <!-- End Item -->

          <div class="item">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="product-detail.html" title="Retis lapen casen" class="product-image"><img src="products-images/p4.jpg" alt="Retis lapen casen"></a>
                                  <div class="new-label new-top-left">New</div>
                                  <div class="item-box-hover">
                                    <div class="box-inner">
                                      <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                                      <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>

                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="product-detail.html" title="Retis lapen casen">Retis lapen casen</a> </div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating" style="width:80%"></div>
                                        </div>
                                        <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price" ><span class="price">$125.00</span> </span> </div>
                                    </div>
									<div class="add_cart">
                                        <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

          <!-- Item -->
          <div class="item">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="product-detail.html" title="Retis lapen casen" class="product-image"><img src="products-images/p5.jpg" alt="Retis lapen casen"></a>
                                  <div class="new-label new-top-left">New</div>
                                  <div class="item-box-hover">
                                    <div class="box-inner">
                                      <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                                      <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>

                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="product-detail.html" title="Retis lapen casen">Retis lapen casen</a> </div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating" style="width:80%"></div>
                                        </div>
                                        <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price" ><span class="price">$125.00</span> </span> </div>
                                    </div>
									<div class="add_cart">
                                        <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
          <!-- End Item -->

          <!-- Item -->
          <div class="item">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="product-detail.html" title="Retis lapen casen" class="product-image"><img src="products-images/p6.jpg" alt="Retis lapen casen"></a>
                                  <div class="new-label new-top-left">New</div>
                                  <div class="item-box-hover">
                                    <div class="box-inner">
                                      <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                                      <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>

                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="product-detail.html" title="Retis lapen casen">Retis lapen casen</a> </div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating" style="width:80%"></div>
                                        </div>
                                        <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price" ><span class="price">$125.00</span> </span> </div>
                                    </div>
									<div class="add_cart">
                                        <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
          <!-- End Item -->
        </div>
      </div>
    </div>
  </section>



  <!-- Home Lastest Blog Block -->
  <div class="latest-blog wow bounceInUp animated animated container">
    <!--exclude For version 6 -->
      <div class="new_title">
        <h2>Latest Blog</h2>
      </div>
      <!--blog-title-->
      <!--For version 1,2,3,4,5,6,8 -->
        <div class="col-lg-4 col-md-4 col-xs-12 col-sm-4 blog-post">
          <div class="blog_inner">
            <div class="blog-img"> <a href="blog-detail.html"> <img src="images/blog-img1.jpg" alt="blog image"> </a>
              <div class="mask"> <a class="info" href="blog-detail.html">Read More</a> </div>
            </div>
            <!--blog-img-->
			<div class="blog-info">
			<div class="post-date">
              <time class="entry-date" datetime="2015-05-11T11:07:27+00:00">14 <br> April</time>
              </div>
            <h3><a href="blog-detail.html">Lorem ipsum dolor sit amet, consectetur adipiscing</a></h3>
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada ...</p>
            <a class="readmore" href="blog-detail.html">Read More</a> </div>
			</div>
          <!--blog_inner-->
        </div>
        <!--col-lg-4 col-md-4 col-xs-12 col-sm-4-->
		<div class="col-lg-4 col-md-4 col-xs-12 col-sm-4 blog-post">
          <div class="blog_inner">
            <div class="blog-img"> <a href="blog-detail.html"> <img src="images/blog-img2.jpg" alt="blog image"> </a>
              <div class="mask"> <a class="info" href="blog-detail.html">Read More</a> </div>
            </div>
            <!--blog-img-->
			<div class="blog-info">
			<div class="post-date">
              <time class="entry-date" datetime="2015-05-11T11:07:27+00:00">14 <br> April</time>
              </div>
            <h3><a href="blog-detail.html">Lorem ipsum dolor sit amet, consectetur adipiscing</a></h3>

            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada ...</p>
            <a class="readmore" href="blog-detail.html">Read More</a> </div>
			</div>
          <!--blog_inner-->
        </div>

        <!--col-lg-4 col-md-4 col-xs-12 col-sm-4-->
        <div class="col-lg-4 col-md-4 col-xs-12 col-sm-4 blog-post">
          <div class="blog_inner">
            <div class="blog-img"> <a href="blog-detail.html"> <img src="images/blog-img3.jpg" alt="blog image"> </a>
              <div class="mask"> <a class="info" href="blog-detail.html">Read More</a> </div>
            </div>
            <!--blog-img-->
			<div class="blog-info">
			<div class="post-date">
              <time class="entry-date" datetime="2015-05-11T11:07:27+00:00">14 <br> April</time>
              </div>
            <h3><a href="blog-detail.html">Lorem ipsum dolor sit amet, consectetur adipiscing</a></h3>

            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada ...</p>
            <a class="readmore" href="blog-detail.html">Read More</a> </div>
			</div>
          <!--blog_inner-->
        </div>
        <!--col-lg-4 col-md-4 col-xs-12 col-sm-4-->

      <!--END For version 1,2,3,4,5,6,8 -->
      <!--exclude For version 6 -->
    <!--container-->
  </div>

   <!-- Logo Brand Block -->
  <div class="brand-logo wow bounceInUp animated">
    <div class="container">
      <div class="row">
      <div class="logo-brand col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <div class="new_title">
        <h2>Brand Logo</h2>
      </div>
        <div class="slider-items-products">
          <div id="brand-slider" class="product-flexslider hidden-buttons">
            <div class="slider-items slider-width-col6">
              <!-- Item -->
              <div class="item">
              <div class="logo-item"><a href="#"><img src="images/b-logo7.png" alt="Image"></a></div>
               <div class="logo-item"><a href="#"><img src="images/b-logo2.png" alt="Image"></a></div>
               </div>
              <!-- End Item -->
              <!-- Item -->
               <div class="item">
              <div class="logo-item"><a href="#"><img src="images/b-logo1.png" alt="Image"></a></div>
               <div class="logo-item"><a href="#"><img src="images/b-logo4.png" alt="Image"></a></div>
               </div>
              <!-- End Item -->
              <!-- Item -->
             <div class="item">
              <div class="logo-item"><a href="#"><img src="images/b-logo5.png" alt="Image"></a></div>
               <div class="logo-item"><a href="#"><img src="images/b-logo6.png" alt="Image"></a></div>
               </div>
              <!-- End Item -->
              <!-- Item -->
              <div class="item">
              <div class="logo-item"><a href="#"><img src="images/b-logo3.png" alt="Image"></a></div>
               <div class="logo-item"><a href="#"><img src="images/b-logo2.png" alt="Image"></a></div>
               </div>
              <!-- End Item -->
              <!-- Item -->
             <div class="item">
              <div class="logo-item"><a href="#"><img src="images/b-logo1.png" alt="Image"></a></div>
               <div class="logo-item"><a href="#"><img src="images/b-logo4.png" alt="Image"></a></div>
               </div>
              <!-- End Item -->
              <!-- Item -->
             <div class="item">
              <div class="logo-item"><a href="#"><img src="images/b-logo5.png" alt="Image"></a></div>
               <div class="logo-item"><a href="#"><img src="images/b-logo6.png" alt="Image"></a></div>
               </div>
              <!-- End Item -->

            </div>
          </div>
        </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 testimonials-section">
        <div class="offer-slider parallax parallax-2">
      <ul class="bxslider">
        <li>
		<div class="avatar"><img src="images/photo.jpg" alt="Image"></div>
		<div class="testimonials">"Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer."</div>
		<div class="clients_author">	Smith John	<span>Happy Customer</span>	</div>
		</li>
         <li>
		<div class="avatar"><img src="images/photo1.jpg" alt="Image"></div>
		<div class="testimonials">"Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer."</div>
		<div class="clients_author">	Karla Anderson	<span>Happy Customer</span>	</div>
		</li>
          <li>
		<div class="avatar"><img src="images/photo.jpg" alt="Image"></div>
		<div class="testimonials">"Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer."</div>
		<div class="clients_author">	Smith John	<span>Happy Customer</span>	</div>
		</li>

       </ul>
       </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <div class="our-features-box wow bounceInUp animated animated">
    <div class="container">
      <ul>
        <li>
          <div class="feature-box free-shipping">
            <div class="icon-truck"></div>
            <div class="content">FREE SHIPPING on order over $99</div>
          </div>
        </li>
        <li>
          <div class="feature-box need-help">
            <div class="icon-support"></div>
            <div class="content">Need Help +1 800 123 1234</div>
          </div>
        </li>
        <li>
          <div class="feature-box money-back">
            <div class="icon-money"></div>
            <div class="content">Money Back Guarantee</div>
          </div>
        </li>
        <li class="last">
          <div class="feature-box return-policy">
            <div class="icon-return"></div>
            <div class="content">30 days return Service</div>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <!-- For version 1,2,3,4,6 -->

  <footer>
    <!-- BEGIN INFORMATIVE FOOTER -->
    <div class="footer-inner">
	<div class="newsletter-row">
      <div class="container">
        <div class="row">
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col">
            <!-- Footer Payment Link -->
            <div class="payment-accept">
              <div><img src="images/payment-1.png" alt="payment1"> <img src="images/payment-2.png" alt="payment2"> <img src="images/payment-3.png" alt="payment3"> <img src="images/payment-4.png" alt="payment4"></div>
            </div>
          </div>
          <!-- Footer Newsletter -->
          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col1">
            <div class="newsletter-wrap">
              <h4>Sign up for emails</h4>
              <form action="#" method="post" id="newsletter-validate-detail1">
                <div id="container_form_news">
                  <div id="container_form_news2">
                    <input type="text" name="email" id="newsletter1" title="Sign up for our newsletter" class="input-text required-entry validate-email" placeholder="Enter your email address">
                    <button type="submit" title="Subscribe" class="button subscribe"><span>Subscribe</span></button>
                  </div>
                  <!--container_form_news2-->
                </div>
                <!--container_form_news-->
              </form>

            </div>
            <!--newsletter-wrap-->
          </div>

        </div>
      </div>
      <!--footer-column-last-->
    </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-xs-12 col-lg-4">
		  <div class="co-info">
              <div><a href="index.php"><img src="images/logo.png" alt="footer logo"></a></div>
              <address>
              <div><em class="icon-location-arrow"></em> <span>ABC Town Luton Street, New York 226688</span></div>
              <div> <em class="icon-mobile-phone"></em><span> + 0800 567 345</span></div>
              <div> <em class="icon-envelope"></em><span>support@themesmart.net</span></div>
              </address>
              <div class="social">
                <ul class="link">
                  <li class="fb pull-left"><a target="_blank" rel="nofollow" href="#" title="Facebook"></a></li>
                  <li class="tw pull-left"><a target="_blank" rel="nofollow" href="#" title="Twitter"></a></li>
                  <li class="googleplus pull-left"><a target="_blank" rel="nofollow" href="#" title="GooglePlus"></a></li>
                  <li class="rss pull-left"><a target="_blank" rel="nofollow" href="#" title="RSS"></a></li>
                  <li class="pintrest pull-left"><a target="_blank" rel="nofollow" href="#" title="PInterest"></a></li>
                  <li class="linkedin pull-left"><a target="_blank" rel="nofollow" href="#" title="Linkedin"></a></li>
                  <li class="youtube pull-left"><a target="_blank" rel="nofollow" href="#" title="Youtube"></a></li>
                </ul>
              </div>
            </div>
			</div>

			 <div class="col-sm-8 col-xs-12 col-lg-8">
            <div class="footer-column">
              <h4>Quick Links</h4>
              <ul class="links">
                <li class="first"><a title="How to buy" href="http://themesground.com/blog/">Blog</a></li>
                <li><a title="FAQs" href="#">FAQs</a></li>
                <li><a title="Payment" href="#">Payment</a></li>
                <li><a title="Shipment" href="#">Shipment</a></li>
                <li><a title="Where is my order?" href="#">Where is my order?</a></li>
                <li class="last"><a title="Return policy" href="#">Return policy</a></li>
              </ul>
            </div>
            <div class="footer-column">
              <h4>Style Advisor</h4>
              <ul class="links">
                <li class="first"><a title="Your Account" href="#">Your Account</a></li>
                <li><a title="Information" href="#">Information</a></li>
                <li><a title="Addresses" href="#">Addresses</a></li>
                <li><a title="Addresses" href="#">Discount</a></li>
                <li><a title="Orders History" href="#">Orders History</a></li>
                <li class="last"><a title=" Additional Information" href="#"> Additional Information</a></li>
              </ul>
            </div>
            <div class="footer-column">
              <h4>Information</h4>
              <ul class="links">
                <li class="first"><a title="Site Map" href="#">Site Map</a></li>
                <li><a title="Search Terms" href="#">Search Terms</a></li>
                <li><a title="Advanced Search" href="#">Advanced Search</a></li>
                <li><a title="History" href="#">About Us</a></li>
                <li><a title="History" href="#">Contact Us</a></li>
                <li><a title="Suppliers" href="#">Suppliers</a></li>
              </ul>
            </div>




          </div>

          <!--col-sm-12 col-xs-12 col-lg-8-->
          <!--col-xs-12 col-lg-4-->
        </div>
        <!--row-->

      </div>

      <!--container-->
    </div>
    <!--footer-inner-->

    <div class="footer-middle">
      <div class="container">
        <div class="row">
          <div class="row"> </div>
        </div>
        <!--row-->
      </div>
      <!--container-->
    </div>
    <!--footer-middle-->
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-xs-12 coppyright">© 2015 Flavours. All Rights Reserved.</div>

        </div>
        <!--row-->
      </div>
      <!--container-->
    </div>
    <!--footer-bottom-->
    <!-- BEGIN SIMPLE FOOTER -->
  </footer>
  <!-- End For version 1,2,3,4,6 -->

</div>
<!--page-->
<!-- Mobile Menu-->
<div id="mobile-menu">
  <ul>
    <li>
      <div class="home"><a href="#"><i class="icon-home"></i>Home</a> </div>
    </li>
    <li><a href="#">Pages</a>
      <ul>
        <li><a href="grid.html">Grid</a></li>
        <li> <a href="list.html">List</a></li>
        <li> <a href="product-detail.html">Product Detail</a></li>
        <li> <a href="shopping-cart.html">Shopping Cart</a></li>
        <li><a href="checkout.html">Checkout</a>
          <ul>
            <li><a href="checkout-method.html">Checkout Method</a></li>
            <li><a href="checkout-billing-info.html">Checkout Billing Info</a></li>
          </ul>
        </li>
        <li> <a href="wishlist.html">Wishlist</a></li>
        <li> <a href="dashboard.php">Dashboard</a></li>
        <li> <a href="multiple-addresses.html">Multiple Addresses</a></li>
        <li> <a href="about-us.html">About us</a></li>
        <li><a href="blog.html">Blog</a>
          <ul>
            <li><a href="blog-detail.html">Blog Detail</a></li>
          </ul>
        </li>
        <li><a href="contact-us.html">Contact us</a></li>
        <li><a href="404error.html">404 Error Page</a></li>
      </ul>
    </li>
    <li><a href="grid.html">Salads‎</a>
      <ul>
        <li><a href="grid.html"><span>Bread Salads‎</span></a>
          <ul>
            <li> <a href="grid.html"><span>Cappon Magro</span></a> </li>
            <li> <a href="grid.html"><span>Dakos</span></a> </li>
            <li> <a href="grid.html"><span>Fattoush</span></a> </li>
            <li> <a href="grid.html"><span>Panzanella</span></a> </li>
          </ul>
        </li>
        <li> <a href="grid.html"><span>Fruit Salads‎</span></a>
          <ul>
            <li> <a href="grid.html"><span>Candle Salad</span></a> </li>
            <li> <a href="grid.html"><span>Frogeye Salad</span></a> </li>
            <li> <a href="grid.html"><span>Green Papaya Salad</span></a> </li>
            <li> <a href="grid.html"><span>Waldorf salad</span></a> </li>
          </ul>
        </li>
        <li> <a href="grid.html"><span>Salad Dressings</span></a>
          <ul>
            <li> <a href="grid.html"><span>Louis Dressings</span></a> </li>
            <li> <a href="grid.html"><span>French Dressings</span></a> </li>
            <li> <a href="grid.html"><span>Gingner Dressings</span></a> </li>
            <li> <a href="grid.html"><span>Italian Dressings</span></a> </li>
          </ul>
        </li>
        <li> <a href="grid.html"><span>Leaf Vegetable</span></a>
          <ul>
            <li> <a href="grid.html"><span>Fenugreek</span></a> </li>
            <li> <a href="grid.html"><span>Spinach</span></a> </li>
            <li> <a href="grid.html"><span>Malva</span></a> </li>
            <li> <a href="grid.html"><span>Cabbage</span></a> </li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="grid.html">Soups</a>
      <ul>
        <li> <a href="grid.html"><span>Cold Soups</span></a>
        <ul>
          <li> <a href="grid.html"><span>Red Bean Soup</span></a> </li>
          <li> <a href="grid.html"><span>Fruit Soup</span></a> </li>
          <li> <a href="grid.html"><span>Naengguk</span></a> </li>
          <li> <a href="grid.html"><span>Borscht</span></a> </li>
        </ul>
        </li>
        <li> <a href="grid.html"><span>Cream Soups</span></a>
        <ul>
          <li> <a href="grid.html"><span>Chowder</span></a> </li>
          <li> <a href="grid.html"><span>Asparagus Soup</span></a> </li>
          <li> <a href="grid.html"><span>Broccoli Soup</span></a> </li>
          <li> <a href="grid.html"><span>Mushroom Soup</span></a> </li>
        </ul>
        </li>
        <li> <a href="grid.html"><span>Vegitable Soups</span></a>
        <ul>
          <li> <a href="grid.html"><span>French Onion Soup</span></a> </li>
          <li> <a href="grid.html"><span>Leek Soup</span></a> </li>
          <li> <a href="grid.html"><span>Minestrone</span></a> </li>
          <li> <a href="grid.html"><span>Spring Soup</span></a> </li>
        </ul>
        </li>
        <li> <a href="grid.html"><span>Bean Soups</span></a>
        <ul>
          <li> <a href="grid.html"><span>Bouneschlupp</span></a> </li>
          <li> <a href="grid.html"><span>Jókai Bean Soup</span></a> </li>
          <li> <a href="grid.html"><span>Kwati Soup</span></a> </li>
          <li> <a href="grid.html"><span>Senate bean</span></a> </li>
        </ul>
        </li>
        <li> <a href="grid.html"><span>Bread Soups</span></a>
        <ul>
          <li> <a href="grid.html"><span>Tomato Soup</span></a> </li>
          <li> <a href="grid.html"><span>Manchow Soup</span></a> </li>
          <li> <a href="grid.html"><span>Sweet Corn Soup</span></a> </li>
          <li> <a href="grid.html"><span>Shorba Soup</span></a> </li>
        </ul>
        </li>
        <li> <a href="grid.html"><span>Chinese Soups</span></a>
        <ul>
          <li> <a href="grid.html"><span>Hot & Sour</span></a> </li>
          <li> <a href="grid.html"><span>Noodle Soup</span></a> </li>
          <li> <a href="grid.html"><span>Corn Crab Soup</span></a> </li>
          <li> <a href="grid.html"><span>Sago Soup</span></a> </li>
        </ul>
        </li>
      </ul>
    </li>
    <li><a href="grid.html">Fast Food</a>
      <ul>
        <li> <a href="grid.html"><span>Indian</span></a>
        <ul>
          <li> <a href="grid.html"><span>Aloo Chaat</span></a> </li>
          <li> <a href="grid.html"><span>Batata Vada</span></a> </li>
          <li> <a href="grid.html"><span>Kachori</span></a> </li>
          <li> <a href="grid.html"><span>Panipuri</span></a> </li>
        </ul>
        </li>
        <li> <a href="grid.html"><span>Pizza</span></a>
        <ul>
          <li> <a href="grid.html"><span>Greek Pizza</span></a> </li>
          <li> <a href="grid.html"><span>Pizza Rolls</span></a> </li>
          <li> <a href="grid.html"><span>Grilled Pizza</span></a> </li>
          <li> <a href="grid.html"><span>Pizza Strips</span></a> </li>
        </ul>
        </li>
        <li> <a href="grid.html"><span>McDonald's</span></a>
        <ul>
          <li> <a href="grid.html"><span>Kiwiburger</span></a> </li>
          <li> <a href="grid.html"><span>Happy Meal</span></a> </li>
          <li> <a href="grid.html"><span>McMuffin</span></a> </li>
          <li> <a href="grid.html"><span>McGriddles</span></a> </li>
        </ul>
        </li>
        <li> <a href="grid.html"><span>Wendy's Foods</span></a>
        <ul>
          <li> <a href="grid.html"><span>Bacon Deluxe</span></a> </li>
          <li> <a href="grid.html"><span>Baconator</span></a> </li>
          <li> <a href="grid.html"><span>Frescata</span></a> </li>
          <li> <a href="grid.html"><span>Frosty</span></a> </li>
        </ul>
        </li>
        <li> <a href="grid.html"><span>Burger King</span></a>
        <ul>
          <li> <a href="grid.html"><span>Big King</span></a> </li>
          <li> <a href="grid.html"><span>TenderCrisp</span></a> </li>
          <li> <a href="grid.html"><span>Whopper</span></a> </li>
          <li> <a href="grid.html"><span>Kuro Burger</span></a> </li>
        </ul>
        </li>
        <li> <a href="grid.html"><span>Sandwiches</span></a>
        <ul>
          <li> <a href="grid.html"><span>Hamburgers</span></a> </li>
          <li> <a href="grid.html"><span> Hot Dogs‎</span></a> </li>
          <li> <a href="grid.html"><span>American Sandwiches</span></a> </li>
          <li> <a href="grid.html"><span>Chilean Sandwiches</span></a> </li>
        </ul>
        </li>
      </ul>
    </li>
    <li><a href="grid.html">Sandwiches‎</a></li>
    <li><a href="contact-us.html">Contact Us</a></li>
  </ul>
</div>
<div class="popup1" style="display: block;">

<div class="newsletter-sign-box">

<div class="newsletter">
<img src="images/close-icon.png" alt="close" class="x" onClick="HideMe();">
<div class="newsletter_img">
<img alt="newsletter" src="images/newsletter_img.png"></div>
    <form method="post" id="popup-newsletter" name="popup-newsletter" class="email-form">
        <h3>Newsletter Sign up</h3>

        <h4>sign up for our exclusive email list and be the first to hear of special offers.</h4>
     <div class="newsletter-form">
        <div class="input-box">
           <input type="text" name="email" id="newsletter2" title="Sign up for our newsletter" placeholder="Enter your email address" class="input-text required-entry validate-email">
           <button type="submit" title="Subscribe" class="button subscribe"><span>Subscribe</span></button>

        </div> <!--input-box-->
     </div> <!--newsletter-form-->
        <label class="subscribe-bottom"><input type="checkbox" name="notshowpopup" id="notshowpopup">Don’t show this popup again</label>
    </form>



</div> <!--newsletter-->

  </div> <!--newsletter-sign-box-->
</div>
<div id="fade" style="display: block;"></div>

<!-- JavaScript -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/parallax.js"></script>
<script type="text/javascript" src="js/revslider.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/jquery.mobile-menu.min.js"></script>

<script type="text/javascript">
        jQuery(document).ready(function(){
            jQuery('#thm-rev-slider').show().revolution({
                dottedOverlay: 'none',
                delay: 5000,
                startwidth: 0,
                startheight:900,

                hideThumbs: 200,
                thumbWidth: 200,
                thumbHeight: 50,
                thumbAmount: 2,

                navigationType: 'thumb',
                navigationArrows: 'solo',
                navigationStyle: 'round',

                touchenabled: 'on',
                onHoverStop: 'on',

                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,

                spinner: 'spinner0',
                keyboardNavigation: 'off',

                navigationHAlign: 'center',
                navigationVAlign: 'bottom',
                navigationHOffset: 0,
                navigationVOffset: 20,

                soloArrowLeftHalign: 'left',
                soloArrowLeftValign: 'center',
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,

                soloArrowRightHalign: 'right',
                soloArrowRightValign: 'center',
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,

                shadow: 0,
                fullWidth: 'on',
                fullScreen: 'on',

                stopLoop: 'off',
                stopAfterLoops: -1,
                stopAtSlide: -1,

                shuffle: 'off',

                autoHeight: 'on',
                forceFullWidth: 'off',
                fullScreenAlignForce: 'off',
                minFullScreenHeight: 0,
                hideNavDelayOnMobile: 1500,

                hideThumbsOnMobile: 'off',
                hideBulletsOnMobile: 'off',
                hideArrowsOnMobile: 'off',
                hideThumbsUnderResolution: 0,

                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                fullScreenOffsetContainer: ''
            });
        });
        </script>
<script type="text/javascript">
    function HideMe()
    {
        jQuery('.popup1').hide();
        jQuery('#fade').hide();
    }
</script>
</body>

<!-- Mirrored from themesground.com/flavours/version1/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Apr 2020 11:55:29 GMT -->
</html>
