<?php
include "../core/ProduitC.php";
include "../entities/Produit.php";


$ProduitC=new ProduitC();
$Id=$_GET['Id'];
$varb=$_GET['categories'];
$WL=$ProduitC->WishListProduit($Id);
$test=1;
echo ("<script language='javascript'>window.location.href='AfficherProduit.php?notification=$test&categories=$varb'</script>");
?>
    