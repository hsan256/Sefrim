<?php
  require_once 'connection/dbconfig.php';

  include_once('connection/connectionz.php');

  if(isset($_GET['pid']))
  {
    $id =  $_GET['pid'];
    $stmt=$db_con->prepare("UPDATE `product` SET `pub` = 1 WHERE pid = '$id'");
    $stmt->execute(array(':id'=>$id));

      echo '
      <link rel="stylesheet" href="style/style1.css" type="text/css"/>
              <div>
                      <h1><font color="green">Publicté crée avec SUCCÈS !</font></h1>

                      <p><a href="AjoutPublicite.php" ><button class="button" >Retour</button</a>
              </div>';

  }
?>
