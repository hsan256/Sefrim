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
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <!--<ul>
            <li class="home"> <a href="index.html" title="Go to Home Page">Acceuil</a> <span>—› </span> </li>
            <li class="category1599"> <a href="grid.html" title="">Fruit</a> <span>—› </span> </li>
            <li class="category1600"> <a href="grid.html" title="">Légumes</a> <span>—› </span> </li>
            <li class="category1601"> <strong>Autres Produits</strong> </li>
          </ul> -->
        </div>
        <!--col-xs-12--> 
      </div>
      <!--row--> 
    </div>
    <!--container--> 
  </div>
  
</div>
<!--breadcrumbs--> 
<!-- BEGIN Main Container col2-left -->
<?php 
      include_once "../core/ProduitC.php";
      include_once "../core/CategorieC.php";
      $ProduitC=new ProduitC();
      $CategorieC=new CategorieC();
      $varb=$_GET['categories'];

      if($varb=="autre_produit"){
        $varb="autre produit";
      }
      $listeProduit= $ProduitC->RecupererProduit($varb);
      $dernierProduit=$ProduitC->DernierProduit();
      $listeCategorie= $CategorieC->AfficherCategorie();
      $nb_produitwl=$ProduitC->CompterProduitWL();
      
      foreach ($dernierProduit as $row) {
            		$Id_recent=$row['Id'];
            		$img_recent=$row['Image'];
            		$Image_recent="../../BACK/views/".$img_recent;
            		$Nom_recent=$row['Nom'];
            		$Prix_recent=$row['Prix'];
            	}
      foreach ($nb_produitwl as $row) {
                $nb_produit=$row['count(*)'];
      }

      ini_set('display_errors',0);
      //ini_set('display_errors',0);
         ?>
<section class="main-container col2-left-layout bounceInUp animated"> 
  <!-- For version 1, 2, 3, 8 --> 
  <!-- For version 1, 2, 3 -->
  <div class="container">
    <div class="row">
      <div class="col-main col-sm-9 col-sm-push-3 product-grid">
      <div class="pro-coloumn">
        <article class="col-main">
          <div class="toolbar">
            <div class="sorter">
              <div class="view-mode"> <span title="Grid" class="button button-active button-grid">&nbsp;</span><a href="list.html" title="List" class="button-list">&nbsp;</a> </div>
            </div>
            <div id="sort-by">
              <label class="left">Trier par: </label>
              <ul>
                <li><a href="#">Position<span class="right-arrow"></span></a>
                  <ul>
                    <li><a href="TriProduitNom.php?categories=<?php echo $varb ?>">Nom</a></li>
                    <li><a href="TriProduitPrix.php?categories=<?php echo $varb ?>">Prix</a></li>
                  </ul>
                </li>
              </ul>
              <a class="button-asc left" href="#" title="Set Descending Direction"><span class="top_arrow"></span></a> </div>
            <div class="pager">
              <div id="limiter">
                <label>Vue: </label>
                <ul>
                  <li><a href="#">15<span class="right-arrow"></span></a>
                    <ul>
                      <li><a href="#">20</a></li>
                      <li><a href="#">30</a></li>
                      <li><a href="#">35</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="pages">
                <label>Page:</label>
                <ul class="pagination">
                  <li><a href="#">&laquo;</a></li>
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
          </div>
          <?php
                      if($_GET['notification']==1){
                    ?>
                      <div class="alert alert-success" role="alert" style="margin-top: 25px;">
                        <strong>Succès!</strong> Produit ajouté à la liste des souhaits.
                      </div>
                    <?php }?>

          <div class="category-products">
            <ul class="products-grid">
              <?php foreach ($listeProduit as $row) 
                        { 
                        $img=$row['Image']; 
                        $image="../../BACK/views/".$img;
                   ?>
  
              <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">

                                   <div class="item-inner">
                                  
                              <div class="item-img">
                                <div class="item-img-info"><a href="product-detail.html" title="Retis lapen casen" class="product-image"><img src="<?php echo($image); ?>" alt="Retis lapen casen"></a>
                                
                                  <div class="item-box-hover">
                                    <div class="box-inner">
                                      <div class="product-detail-bnt" style="margin-right: 10px;"><span class="add-to-links">
                                      <input type="image" src="images/see.png" class="button detail-bnt" onclick="window.location.href='Popup.php?Id=<?php echo $row['Id']; ?>&categories=<?php echo ($varb) ?>';"></span>

                                      <input type="image" src="images/passion.png" class="button detail-bnt" onclick="window.location.href='AjoutProduitWL.php?Id=<?php echo $row['Id']; ?>&categories=<?php echo $varb ?>';">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="product-detail.html" title="Retis lapen casen"><?php echo $row['Nom'];  ?></a> </div>
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
                                      <div class="price-box"><span class="regular-price" id="product-price-1"><span class="price"><?php echo $row['Prix'];  ?></span> </span> </div>
                                    </div>
                  <div class="add_cart">
                                        <button class="button btn-cart" type="button" id="btnyassine"><span>Ajouter au panier</span></button>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                      <?php  }?>
              </li>
            </ul>
          </div>
        </article>
        </div>
        <div>
          
        </div>
        <!--  ///*///======    End article  ========= //*/// --> 
      </div>

      <aside class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9 wow bounceInUp animated"> 
        <!-- BEGIN SIDE-NAV-CATEGORY -->

          <div class="side-nav-categories">
          <div class="block-title"> Catégories </div>
          <?php
       foreach ($listeCategorie as $row) 
                        {
                          $Nom= $row['Nom'];
                          $listeProduit2= $ProduitC->RecupererProduit($Nom);

                    
         ?>
          <!--block-title--> 
          <!-- BEGIN BOX-CATEGORY -->
          <div class="box-content box-category">
            <ul>
              <li> <a class="active" href="AfficherProduit.php?categories=<?php echo($Nom);?>"><?php echo ($Nom);  ?></a> <span class="subDropdown minus"></span>
                <?php
       foreach ($listeProduit2 as $row) 
                        {
                          ?>
                <ul class="level0_415" style="display:block;">
                  <li> <a href="Popup.php?categories=<?php echo($Nom);?>&Id=<?php echo$row['Id'];?>"> <?php echo $row['Nom'];  ?> </a> <span></span>
                    <li></li>
                  </li>              
                </ul>
                              <?php }?>
              </li>   
              </li>
            </ul>
                  <?php }?>
          </div>
          <!--box-content box-category--> 
        </div>
        <!--side-nav-categories-->
        <div class="block block-layered-nav">
          <div class="block-title"> Acheter Selon </div>
          <div class="block-content">
            <p class="block-subtitle">les options d'achat </p>
            <dl id="narrow-by-list">
              <dt class="odd"> Les Catégories</dt>
              <dd class="odd">
                <ol>
                  <li> <a href="#"> Fruit <span class="count">(24)</span> </a> </li>
                  <li> <a href="#"> Légumes <span class="count">(24)</span> </a> </li>
                  <li> <a href="#"> Autres Produits <span class="count">(24)</span> </a> </li>
                  <li> <a href="#"> Boutique <span class="count">(24)</span> </a> </li>
                </ol>
              </dd>
              <dt class="last odd">Prix</dt>
              <dd class="last odd">
                <ol>
                  <li> <a href="#"> <span class="price">$0.00</span> - <span class="price">$99.99</span> <span class="count">(26)</span> </a> </li>
                  <li> <a href="#"> <span class="price">$100.00</span> and above <span class="count">(3)</span> </a> </li>
                </ol>
              </dd>
            </dl>
          </div>
        </div>
        <div class="custom-slider">
          <div>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li class="active" data-target="#carousel-example-generic" data-slide-to="0"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
              </ol>
              <div class="carousel-inner">
                <div class="item active"><img src="images/slide3.jpg" alt="slide3">
                  <div class="carousel-caption">
                    <h3><a title=" Sample Product" href="product-detail.html">50% de réduction</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a class="link" href="#">Acheter Maintenant </a></div>
                </div>
                <div class="item"><img src="images/slide1.jpg" alt="slide1">
                  <div class="carousel-caption">
                    <h3><a title=" Sample Product" href="product-detail.html">Collection chaude</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </div>
                <div class="item"><img src="images/slide2.jpg" alt="slide2">
                  <div class="carousel-caption">
                    <h3><a title=" Sample Product" href="product-detail.html">Collection d'été</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </div>
              </div>
              <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"> <span class="sr-only">Next</span> </a></div>
          </div>
        </div>
       
        <div class="block block-list block-cart">
          <div class="block-title"> Liste de souhait </div>
          <div class="block-content">
            <div class="summary">
              <p class="amount">il y a  <a href="#"><?php echo $nb_produit ?> ARTICLE(S) </a> dans votre liste de souhait.</p>
            </div>
            <div class="ajax-checkout">
              <button type="button" title="Checkout" class="button button-checkout" onclick="window.location.href='ListeSouhait.php?categories=<?php echo $varb ?>'"> <span>Voir Liste Souhait</span> </button>
            </div>
            <?php 
            	
            ?>
            <p class="block-subtitle">Recémment ajouté </p>
            <ul id="cart-sidebar" class="mini-products-list">
              <li class="item">
                <div class="item-inner"> <a href="#" class="product-image"><img src="<?php echo ($Image_recent); ?>" width="80" alt="product"></a>
                  <div class="product-details">
                    <div class="access"> <a onclick="window.location.href='SupprimerProduitWL.php?Id=<?php echo ($Id_recent); ?>&categories=<?php echo $varb ?>'" class="btn-remove1">Supprimer</a> 
                    <a href="#" title="Edit item" class="btn-edit">
                    <i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                    <!--access--> 
                    
                    <strong></strong><span class="price"><?php echo ($Nom_recent); ?></span>
                    <p class="product-name"><a href="#"><?php echo ($Prix_recent); ?>DT</a></p>
                  </div>
                  <!--product-details-bottoms--> 
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="block block-compare">
          <div class="block-title"> comparer les produits</div>
         <div class="block-content">
            <ol id="compare-items">
                    <li class="item odd">
                   <a href="#" class="btn-remove1" onClick="#"></a>
                <a class="product-name" href="#">RETIS LAPEN CASEN</a>            </li>
             <li class="item odd">
                   <a href="#" class="btn-remove1" onClick="#"></a>
                <a class="product-name" href="#">RETIS LAPEN CASEN</a>            </li>
             <li class="item odd">
                   <a href="#" class="btn-remove1" onClick="#"></a>
                <a class="product-name" href="#">RETIS LAPEN CASEN</a>            </li>
             <li class="item odd">
                   <a href="#" class="btn-remove1" onClick="#"></a>
                <a class="product-name" href="#">RETIS LAPEN CASEN</a>            </li>
              </ol>
       
        <div class="ajax-checkout">
            <button type="button" title="Compare" class="button button-compare" onClick="#"><span>comparer</span></button>
            <button class="button button-clear" href="#"><span>Vider</span></button>
        </div><!--ajax-checkout-->
        </div>
          <!--block-content--> 
        </div>
        <!--block block-list block-compare--> 
       

        <div class="block block-poll">
          <div class="block-title"> Sondage communaitaire </div>
          <form id="pollForm" action="#" method="post" onSubmit="return validatePollAnswerIsSelected();">
            <div class="block-content">
              <p class="block-subtitle">Quelle est votre couleur préférée</p>
              <ul id="poll-answers">
                <li class="odd">
                  <input type="radio" name="vote" class="radio poll_vote" id="vote_1" value="1">
                  <span class="label">
                  <label for="vote_1">Vert</label>
                  </span> </li>
                <li class="even">
                  <input type="radio" name="vote" class="radio poll_vote" id="vote_2" value="2">
                  <span class="label">
                  <label for="vote_2">Rouge</label>
                  </span> </li>
                <li class="odd">
                  <input type="radio" name="vote" class="radio poll_vote" id="vote_3" value="3">
                  <span class="label">
                  <label for="vote_3">noir</label>
                  </span> </li>
                <li class="last even">
                  <input type="radio" name="vote" class="radio poll_vote" id="vote_4" value="4">
                  <span class="label">
                  <label for="vote_4">bleu</label>
                  </span> </li>
              </ul>              
              <div class="actions">
                <button type="submit" title="Vote" class="button button-vote"><span>Vote</span></button>
              </div>
            </div>
          </form>
        </div>
       <div class="hot-banner"><img src="images/hot-trends-banner.jpg" alt="banner"></div>  
      </aside>
      <!--col-right sidebar--> 
    </div>
    <!--row--> 
  </div>
  <!--container--> 
</section>

<!--main-container col2-left-layout--> 
  
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
                <li><a title="Shipment" href="#">expédition</a></li>
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

<!-- Mirrored from themesground.com/flavours/version1/grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Apr 2020 11:56:18 GMT -->
</html>