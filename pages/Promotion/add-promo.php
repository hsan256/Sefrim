<?php
  require_once 'connection/dbconfig.php';

  include_once('connection/connectionz.php');

  if(isset($_POST['pid']) && isset($_POST['pr']) && isset($_POST['tauxpromo'])
  && isset($_POST['Quantite']) && isset($_POST['quantite_dispo']) && isset($_POST['Description']))
  {
    $id =  $_POST['pid'];

    $oldprice = $_POST['pr'];

    $tauxpromo = $_POST['tauxpromo'];

    $qt = $_POST['Quantite'];

    $qt_dispo = $_POST['quantite_dispo'];

    $des = $_POST['Description'];

    $newprice = $oldprice - (($oldprice * $tauxpromo) / 100);

    if($tauxpromo >100 || $tauxpromo <0){
      echo '
      <link rel="stylesheet" href="style/style1.css" type="text/css"/>
              <div>
                      <h1><font color="red">Erreur ! le champ promotion doit être entre [0%..100%]</font></h1>

                      <p><a href="AjoutPromotion.php" ><button class="button" >Retour</button</a>
              </div>';
    }
    else{
      $stmt=$db_con->prepare("UPDATE `product` SET
        `pr` = '$newprice' ,
        `tauxpromo` = '$tauxpromo' ,
        `oldpr` = '$oldprice' ,
        `quantité_promo` = '$qt' ,
        `quantite` = '$qt_dispo' ,
        `des` = '$des'
        WHERE pid = '$id'");
      $stmt->execute(array(':id'=>$id));

        echo '
        <link rel="stylesheet" href="style/style1.css" type="text/css"/>
                <div>
                        <h1><font color="green">Vous avez crée une promotion avec SUCCÈS !</font></h1>

                        <p><a href="AjoutPromotion.php" ><button class="button" >Retour</button</a>
                </div>';

    }

  }
?>
