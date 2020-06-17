<?php require_once("Includes/DB.php"); ?>
<?php require_once("Includes/Functions.php"); ?>
<?php require_once("Includes/Sessions.php"); ?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themesground.com/flavours/version1/quickview.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Apr 2020 11:56:28 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Flavours Home Page</title>
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
<link rel="stylesheet" type="text/css" href="stylesheet/flexslider.css">
<link rel="stylesheet" type="text/css" href="stylesheet/owl.theme.css">
<link rel="stylesheet" type="text/css" href="stylesheet/jquery.bxslider.css">
<link rel="stylesheet" type="text/css" href="stylesheet/jquery.mobile-menu.css">
<link rel="stylesheet" type="text/css" href="stylesheet/style.css" media="all">


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
          <p style="display: block;">JOURS CHAUDS! - <span>50%</span> PRÉPAREZ-VOUS POUR L'ÉTÉ! &gt;</p>
          <p style="display: none;">VENTE JUSQU'À <span>40%</span> OFFRE LIMITÉE! &gt;</p>
        </div>
        <ul >
          <li class="customlinks"><a href="login.html">Login / Register</a></li>
        </ul>

       </div>
    </div>
    <div id="header">
      <div class="header-container container">
     <div class="row">
        <div class="logo"> <a href="Accueil.php" title="Flavours HTML">
          <div><img src="images/logo3.png" alt="Flavours Store"></div>
          </a> </div>
        <div class="fl-nav-menu">

            <nav>
              <div class="mm-toggle-wrap">
                <div class="mm-toggle"><i class="icon-align-justify"></i><span class="mm-label">Menu</span> </div>
              </div>
              <div class="nav-inner">
                <!-- BEGIN NAV -->
                <ul id="nav" class="hidden-xs">
                  <li id="nav-home" class="level0 parent drop-menu"><a class="level-top active" href="Acceuil.php"><span>Accueil</span></a>

                  </li>

                  <li class="mega-menu"> <a class="level-top" href="AfficherProduit.php?categories=fruit"><span>LES FRUITS</span></a>
                    <div class="level0-wrapper dropdown-6col" style="left: 0px; display: none;">
                      <div class="container">
                        <div class="level0-wrapper2">
                          <div class="col-1">
                            <div class="nav-block nav-block-center">
                              <?php
                                include_once "../core/ProduitC.php";
                                $ProduitC1=new ProduitC();
                                $listeProduit3= $ProduitC1->RecupererProduit("fruit");
                                foreach ($listeProduit3 as $row) {

                              ?>
                              <!--mega menu-->
                              <ul class="level0">
                                <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span><?php echo $row['Nom']; ?></span></a>

                                </li>
                              </ul>
                            <?php }?>
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

                   <li class="mega-menu"> <a class="level-top" href="AfficherProduit.php?categories=legume"><span>LES LEGUMES</span></a>
                    <div class="level0-wrapper dropdown-6col" style="left: 0px; display: none;">
                      <div class="container">
                        <div class="level0-wrapper2">
                          <div class="col-1">
                            <div class="nav-block nav-block-center">
                              <?php
                                include_once "../core/ProduitC.php";
                                $ProduitC1=new ProduitC();
                                $listeProduit3= $ProduitC1->RecupererProduit("legume");
                                foreach ($listeProduit3 as $row) {

                              ?>
                              <!--mega menu-->
                              <ul class="level0">
                                <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span><?php echo $row['Nom']; ?></span></a>

                                </li>
                              </ul>
                            <?php }?>
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
                  <li class="mega-menu"> <a class="level-top" href="AfficherProduit.php?categories=autre_produit"><span>Autre Produit</span></a>
                    <div class="level0-wrapper dropdown-6col" style="left: 0px; display: none;">
                      <div class="container">
                        <div class="level0-wrapper2">
                          <div class="col-1">
                            <div class="nav-block nav-block-center">
                              <?php
                                include_once "../core/ProduitC.php";
                                $ProduitC1=new ProduitC();
                                $listeProduit3= $ProduitC1->RecupererProduit("autre produit");
                                foreach ($listeProduit3 as $row) {

                              ?>
                              <!--mega menu-->
                              <ul class="level0">
                                <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span><?php echo $row['Nom']; ?></span></a>

                                </li>
                              </ul>
                            <?php }?>
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
                  <li class="mega-menu"> <a class="level-top" href="about-us.html"><span>à propos</span></a> </li>
                  <li class="level0 parent drop-menu"><a href="#"><span>Pages</span> </a>
                  <!--sub sub category-->
                    <ul class="level1">




                    <li class="level1 first parent"><a href="checkout.html"><span>Checkout</span></a>
                    <!--sub sub category-->
                    <ul class="level2 right-sub">
                      <li class="level2 nav-2-1-1 first"><a href="checkout-method.html"><span>Method</span></a></li>
                      <li class="level2 nav-2-1-5 last"><a href="checkout-billing-info.html"><span>Billing Info</span></a></li>
                    </ul>
                    <!--sub sub category-->
                    </li>
                    <li class="level1 first parent"><a href="AfficherArticle.php"><span>Blog</span></a>
                    <!--sub sub category-->

                    <!--sub sub category-->
                    </li>
                    <li class="level1"><a href="contact-us.html"><span>Contact us</span></a> </li>


                    <li class="level1"><a href="quickview.html"><span>Aperçu</span></a> </li>
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
                  <div class="fl-language">
                    <ul class="lang">
                      <li><a href="#"> <img src="images/english.png" alt="English"> <span>Anglais</span> </a></li>
                      <li><a href="#"> <img src="images/francais.png" alt="French"> <span>Français</span> </a></li>
                      <li><a href="#"> <img src="images/german.png" alt="German"> <span>Allemand</span> </a></li>
                    </ul>
                  </div>
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
                  <li><a href="dashboard.html" title="My Account">Mon compte</a></li>
                  <li><a href="wishlist.html" title="Wishlist">Liste de souhaits</a></li>
                  <li><a href="checkout.html" title="Checkout">Checkout</a></li>
                  <li><a href="blog.html" title="Blog"><span>Blog</span></a></li>
                  <li class="last"><a href="login.html" title="Login"><span>S'identifier</span></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="fl-cart-contain">
            <div class="mini-cart">
              <div class="basket"> <a href="shopping-cart.html"><span> 2 </span></a> </div>
              <div class="fl-mini-cart-content" style="display: none;">
                <div class="block-subtitle">
                  <div class="top-subtotal">2 items, <span class="price">1500DT</span> </div>
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
                        <strong>1</strong> x <span class="price">200 dt</span>
                        <p class="product-name"><a href="product-detail.html">timi &amp; leslie Sophia Diaper Bag...</a></p>
                      </div>
                    </div>
                  </li>
                  <li class="item last">
                    <div class="item-inner"><a class="product-image" title="JP Lizzy Satchel Designer Diaper Bag - Slate Citron" href="#"><img alt="JP Lizzy Satchel Designer Diaper Bag - Slate Citron" src="products-images/p3.jpg"></a>
                      <div class="product-details">
                        <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                        <!--access-->
                        <strong>1</strong> x <span class="price">200DT</span>
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
                <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-x='0'  data-y='210'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;'><span>Obtenez 50% de remise</span></div>
                <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='0'  data-y='300'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'><span>Tout simplement délicieux</span></div>
                <div class='tp-caption sfb  tp-resizeme ' data-x='0'  data-y='550'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'><a href='grid.html' class="buy-btn">ACHETEZ MAINTENANT</a></div>
                <div    class='tp-caption Title sft  tp-resizeme ' data-x='0'  data-y='420'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>Les petites choses font une grande différence
                </div>
              </div>
            </li>
            <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='images/slide-img2.jpg'><img src='images/slide-img1.jpg'  data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="slider-image2"  />
              <div class="info">
                <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-x='0'  data-y='210'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;'><span>look Frais</span></div>
                <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='0'  data-y='300'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'><span>100% rafraîchissant</span></div>
                <div class='tp-caption sfb  tp-resizeme ' data-x='0'  data-y='550'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'><a href='grid.html' class="buy-btn">ACHETEZ MAINTENANT</a></div>
                <div    class='tp-caption Title sft  tp-resizeme ' data-x='0'  data-y='420'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'></div>Produits frais de la ferme à votre porte</div>
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
                <div class="pro-info">oignon</div>
              </div>
            </div>
            <!-- Item -->
            <div class="item">
              <div class="pro-img"><img src="products-images/p2.jpg" alt="Retis lapen casen">
                <div class="pro-info">Mais</div>
              </div>
            </div>
            <!-- End Item -->
            <!-- Item -->
            <div class="item">
              <div class="pro-img"><img src="products-images/p3.jpg" alt="Retis lapen casen">
                <div class="pro-info">tomate</div>
              </div>
            </div>
            <!-- End Item -->
            <div class="item">
              <div class="pro-img"><img src="products-images/p4.jpg" alt="Retis lapen casen">
                <div class="pro-info">petit pois</div>
              </div>
            </div>
            <!-- Item -->
            <div class="item">
              <div class="pro-img"><img src="products-images/p5.jpg" alt="Retis lapen casen">
                <div class="pro-info">cerice</div>
              </div>
            </div>
            <!-- End Item -->
            <!-- Item -->
            <div class="item">
              <div class="pro-img"><img src="products-images/p6.jpg" alt="Retis lapen casen">
                <div class="pro-info">eptit panier</div>
              </div>
            </div>
            <!-- End Item -->
            <!-- Item -->
            <div class="item">
              <div class="pro-img"><img src="products-images/p7.jpg" alt="Retis lapen casen">
                <div class="pro-info">mangue‎</div>
              </div>
            </div>
            <!-- End Item -->
            <!-- Item -->
            <div class="item">
              <div class="pro-img"><img src="products-images/p8.jpg" alt="Retis lapen casen">
                <div class="pro-info">salade</div>
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
        <h2>Publicité</h2>
      </div>
      <!--<div class="cate-banner-img"><img src="images/category-banner.jpg" alt="Retis lapen casen"></div>-->
      <div id="best-seller" class="product-flexslider hidden-buttons">
        <div class="slider-items slider-width-col4 products-grid">


          <!-- Item -->
          <?php display_pub(); ?>
          <!-- End Item -->
        </div>
      </div>
    </div>
  </section>



  <!-- Home Lastest Blog Block -->
  <div class="latest-blog wow bounceInUp animated animated container">
    <!--exclude For version 6 -->
      <div class="new_title">
        <h2>DERNIER BLOG</h2>
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

<?php
include_once "../core/fournisseurC.php";
$fournisseur1C=new fournisseurC();
$listeFournisseur= $fournisseur1C->AfficherFournisseur();

$listeLivreur= $fournisseur1C->AfficherLivreur();





?>

  <div class="brand-logo wow bounceInUp animated">
    <div class="container" style="width: 1320px">
      <div class="row">
      <div class="logo-brand col-lg-6 col-md-6 col-sm-6 col-xs-12" style="min-height: 342px;">
      <div class="new_title">
        <h2>Brand Logo</h2>
      </div>
        <div class="slider-items-products">
          <div id="brand-slider" class="product-flexslider hidden-buttons">
            <div class="slider-items slider-width-col6" >
              <!-- Item -->
              <?php foreach ($listeFournisseur as $row)
                        {
              ?>
              <div class="item" >
              <div class="logo-item" style="width: 200px; height: 140px"><a href="<?php echo $row['Link']; ?>"> <img src="<?php echo $row['Image']; ?>">  </a></div>

               </div>
             <?php } ?>
              <!-- End Item -->


            </div>
          </div>
        </div>
        </div>


<!-- partie livreur metier-->

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 testimonials-section">
        <div class="offer-slider parallax parallax-2">
      <ul class="bxslider">
         <?php foreach ($listeLivreur as $row)
                        { ?>
          <li>
               <div class="avatar"><img src="<?php echo $row['Image']; ?>  " alt="Image" style="width: 80px;padding: 7px"></div>
               <div class="testimonials">"Nos livreurs sont toujours à votre disponibilité ."</div>
                <div class="clients_author">  <?php echo $row['Nom'] ?>  <span><?php echo $row['Prenom'] ?></span> </div>

            </li>
          <?php }
                    ?>
       </ul>
       </div>
        </div>

<!-- /partie livreur metier-->


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
            <div class="content"><a href="livraison.php">Livraison gratuite à partir de 59 Dinars</a> </div>
          </div>
        </li>
        <li>
          <div class="feature-box need-help">
            <div class="icon-support"></div>
            <div class="content">Pour plus d'information +2169999999</div>
          </div>
        </li>
        <li>
          <div class="feature-box money-back">
            <div class="icon-money"></div>
            <div class="content">Moyen de paiement en ligne sécurisé </div>
          </div>
        </li>
        <li class="last">
          <div class="feature-box return-policy">
            <div class="icon-return"></div>
            <div class="content">Garantie & Service après vente</div>
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
              <h4>Insrivez vous </h4>
              <form action="#" method="post" id="newsletter-validate-detail1">
                <div id="container_form_news">
                  <div id="container_form_news2">
                    <input type="text" name="email" id="newsletter1" title="Sign up for our newsletter" class="input-text required-entry validate-email" placeholder="Entrer votre adresse email">
                    <button type="submit" title="Subscribe" class="button subscribe"><span>Je m'inscris </span></button>
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
              <div><a href="Accueil.php"><img src="images/logo7.png" alt="footer logo"></a></div>
              <address>
              <div><em class="icon-location-arrow"></em> <span>Rue Banane , Charguia 2 , 2035 Ariana,Tunis </span></div>
              <div> <em class="icon-mobile-phone"></em><span> + 216 99999999</span></div>
              <div> <em class="icon-envelope"></em><span>Sefrim@gmail.com</span></div>
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
              <h4>Lien rapide</h4>
              <ul class="links">
                <li class="first"><a title="How to buy" href="http://themesground.com/blog/">Blog</a></li>
                <li><a title="FAQs" href="#">FAQs</a></li>
                <li><a title="Payment" href="#">Payement</a></li>
                <li><a title="Shipment" href="#">Cargaison</a></li>
                <li><a title="Where is my order?" href="#">Mon Panier</a></li>
                <li class="last"><a title="Return policy" href="#">Politique de retour</a></li>
              </ul>
            </div>
            <div class="footer-column">
              <h4>Pour Vous</h4>
              <ul class="links">
                <li class="first"><a title="Your Account" href="#">Votre compte</a></li>
                <li><a title="Information" href="#">Information</a></li>
                <li><a title="Addresses" href="#">Adresses</a></li>
                <li><a title="Addresses" href="#">Promotion</a></li>
                <li><a title="Orders History" href="#">Historique d'achat</a></li>
                <li class="last"><a title=" Additional Information" href="#"> Autre Information</a></li>
              </ul>
            </div>
            <div class="footer-column">
              <h4>Information</h4>
              <ul class="links">
                <li class="first"><a title="Site Map" href="#">Site Map</a></li>
                <li><a title="Search Terms" href="#">Terme de recherche</a></li>
                <li><a title="Advanced Search" href="#">recherche avancée</a></li>
                <li><a title="History" href="#">À Propos De Nous</a></li>
                <li><a title="History" href="#">Nous Contacter</a></li>
                <li><a title="Suppliers" href="#">Fournisseur</a></li>
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
          <div class="col-sm-12 col-xs-12 coppyright">© 2015 Saveur. Tous les droits sont réservés.</div>

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

<!-- Mirrored from themesground.com/flavours/version1/Accueil.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Apr 2020 11:55:29 GMT -->
</html>
