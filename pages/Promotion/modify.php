<?php
  require_once 'connection/dbconfig.php';

  include_once('connection/connectionz.php');

  if(isset($_GET['pid']) && isset($_GET['tauxpromo']))
  {
    $id =  $_GET['pid'];

    $tauxpromo = $_GET['tauxpromo'];

    $oldprice = $_GET['pr'];

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
      $stmt=$db_con->prepare("UPDATE `product` SET `pr` = '$newprice', `tauxpromo` = '$tauxpromo' , `oldpr` = '$oldprice' WHERE pid = '$id'");
      $stmt->execute(array(':id'=>$id));

        echo '
        <link rel="stylesheet" href="style/style1.css" type="text/css"/>
                <div>
                        <h1><font color="green">Vous avez modifier une promotion avec SUCCÈS !</font></h1>

                        <p><a href="AjoutPromotion.php" ><button class="button" >Retour</button</a>
                </div>';

    }

  }
?>
