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
        <div class="logo"> <a href="index.html" title="Flavours HTML">
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
                  <li id="nav-home" class="level0 parent drop-menu"><a class="level-top active" href="Accueil.php"><span>Accueil</span></a>
                    
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
                    <li class="level1 first parent"><a href="blog.html"><span>Blog</span></a> 
                    <!--sub sub category-->
                    <ul class="level2 right-sub">
                      <li class="level2 nav-2-1-1 first"><a href="blog-detail.html"><span>Blog Detail</span></a></li>
                    </ul>
                    <!--sub sub category--> 
                    </li>
                    <li class="level1"><a href="contact-us.html"><span>Contact us</span></a> </li>
                    
                    
                    <li class="level1"><a href="quickview.html"><span>Aperçu</span></a> </li>
                    <li class="level1"><a href="newsletter.html"><span>Newsletter</span></a> </li>                  
                    </ul>
                  </li>
                  <li class="fl-custom-tabmenulink mega-menu"> <a href="#" class="level-top"> <span>Publicité</span> </a>
                    <div class="level0-wrapper fl-custom-tabmenu" style="left: 0px; display: none;">
                      <div class="container">
                        <div class="header-nav-dropdown-wrapper clearer">
                          <div class="grid12-3">
                           
                            <div><img src="images/custom-img1.jpg" alt="custom-image"></div>
                             <h4 class="heading">VENTE JUSQU'À 30% DE REMISE</h4>
                          </div>
                          <div class="grid12-3">
                           
                            <div><img src="images/custom-img2.jpg" alt="custom-image"></div>
                             <h4 class="heading">VENTE JUSQU'À 30% DE REMISE</h4>
                          </div>
                          <div class="grid12-3">
                            <div><img src="images/custom-img3.jpg" alt="custom-image"></div>
                             <h4 class="heading">VENTE JUSQU'À 30% DE REMISE</h4>
                          </div>
                          <div class="grid12-3">
                            <div><img src="images/custom-img4.jpg" alt="custom-image"></div>
                            <h4 class="heading">VENTE JUSQU'À 30% DE REMISE</h4>
                          </div>
                        </div>
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
         
  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
        <div class="page-title">
<h2>Shopping Cart</h2>
</div>
        </div>
      </div>
    </div>
  </div>
       
<!-- Afficher Livraison/Commande -->  
          
<?php
 
 include "../core/commandeC.php";

 $commande1C= new commandeC();
//  $listeLivraison=$livraison1C->AfficherLivraison();
  
    $var=$_GET['id'];
 
 $result1=$commande1C->RecupererLivraison($var);
 $result=$commande1C->RecupererCommande($var);
  function array_empty($result1)
{
    foreach($result1 as $row => $Statut)
        if(empty($Statut))
            return false;
    return true;
  }
 if(array_empty($result1)){
   $stat="Verification de la commande";
  
 }else {
  $stat="commande passé";
 }

 foreach($result as $row){
    $id=$row['id'];
    
    $ModePaiment=$row['ModePaiment'];
    
    $Prix=$row['Prix'];



?>

<div class="main-container col1-layout wow bounceInUp animated">     
              
 <div class="main">                     
 <div class="cart wow bounceInUp animated">
    
 <div class="table-responsive shopping-cart-tbl  container">
    <form action="#" method="post">
        <input name="form_key" type="hidden" value="EPYwQxF6xoWcjLUr">
        <fieldset>
            <table id="shopping-cart-table" class="data-table cart-table table-striped">
              <colgroup>
                <col width="1">
                <col>
                <col width="1">
                <col width="1">
                <col width="1">
                <col width="1">
                <col width="1">
              </colgroup>
               <thead>
                 <tr class="first last">
                        <th rowspan="1">&nbsp;</th> 
                        <th rowspan="1"><span class="nobr">Référence Commande</span></th>
                        <th rowspan="3"><span class="nobr">Prix</span></th>
                        <th rowspan="3"><span class="nobr">Paiment</span></th>
                     <!--   <th rowspan="2"><span class="nobr">Date Livraison</span></th> -->
                        <th rowspan="4"><span class="nobr">Etat</span></th>
                        <th rowspan="1" class="a-center">&nbsp;</th>
                  </tr>
               </thead>
               
               <tbody>
                  
                  <tr class="first last odd">
                    <td class="image hidden-table"></td>
                     <td><?php echo $id; ?></td>
                    <!--<td class="a-right hidden-table"><span class="cart-price"><span class="price"><?php echo $DateLivraison; ?></span></span></td> -->
                   <td class="a-center movewishlist"><?php echo $Prix; ?></td>
                    <td class="a-right movewishlist"> <span class="cart-price"><span class="price"><?php echo $ModePaiment; ?></span></span></td>
                   <td class="a-right movewishlist"> <span class="cart-price"><span class="price"><?php echo $stat; ?></span></span></td>
                 </tr> 

              </tbody>
               <?php } 
                  
               ?>
            </table>
            
        </fieldset>
    </form>
</div>

 <!-- /Afficher Livraison/Commande -->





<div class="cart-collaterals container"> 
<!-- BEGIN COL2 SEL COL 1 -->


<!-- BEGIN TOTALS COL 2 -->
          
  <div class="our-features-box wow bounceInUp animated animated">
    <div class="container">
      <ul>
        <li>
          <div class="feature-box free-shipping">
            <div class="icon-truck"></div>
            <div class="content">Livraison gratuite à partir de 59 Dinars </div>
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
              <div><a href="index.html"><img src="images/logo2.png" alt="footer logo"></a></div>
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

<!-- JavaScript --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/parallax.js"></script> 
<script type="text/javascript" src="js/revslider.js"></script> 
<script type="text/javascript" src="js/common.js"></script> 
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script> 
<script type="text/javascript" src="js/jquery.flexslider.js"></script> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="js/jquery.mobile-menu.min.js"></script>


</body>
<!-- Mirrored from themesground.com/flavours/version1/shopping-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Apr 2020 11:56:21 GMT -->
</html>