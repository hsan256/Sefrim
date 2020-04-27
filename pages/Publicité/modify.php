<?php
  require_once 'connection/dbconfig.php';

  include_once('connection/connectionz.php');

  if(isset($_GET['Description']))
  {
    $id =  $_GET['pid'];

    $des = $_GET['Description'];

    $stmt=$db_con->prepare("UPDATE `product` SET `des` = '$des' WHERE pid = '$id'");
    $stmt->execute(array(':id'=>$id));

      echo '
      <link rel="stylesheet" href="style/style1.css" type="text/css"/>
              <div>
                      <h1><font color="green">Vous avez modifier une publicité avec SUCCÈS !</font></h1>

                      <p><a href="ModifierPublicite.php" ><button class="button" >Retour</button</a>
              </div>';

  }
?>
