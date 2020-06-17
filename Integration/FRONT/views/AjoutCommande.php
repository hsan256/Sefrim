<?php

include "../core/commandeC.php";
include "../entities/commande.php";

if (isset($_POST['id']) and isset($_POST['Adresse']) and isset($_POST['Ville']) and isset($_POST['Gouvernaurat']) and isset($_POST['CodePostale']) and isset($_POST['ModePaiment']) and isset($_POST['ModeLivraison']) and isset($_POST['Prix']) ){
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$commande1C=new commandeC();
$commande1 = new commande ($_POST['id'],$_POST['Adresse'],$_POST['Ville'],$_POST['Gouvernaurat'],$_POST['CodePostale'],$_POST['ModePaiment'],$_POST['ModeLivraison'],$_POST['Prix']);
$commande1C->AjouterCommande($commande1);
$idd=$_POST['id'];
echo ("<script language='javascript'>window.location.href='AfficherCommande.php?id=$idd'</script>");
//header('Location: AfficherLivraison.php');
	
}else{
	echo "vérifier les champs";
}


?>