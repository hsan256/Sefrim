<?php
  require_once 'connection/dbconfig.php';

  include_once('connection/connectionz.php');

  if(isset($_GET['pid']))
  {
    $id = $_GET['pid'];
    $stmt=$db_con->prepare("UPDATE `product` SET `tauxpromo` = '0', `pr` = oldpr WHERE pid=:id");
    $stmt->execute(array(':id'=>$id));

      echo '	<div id="main2">

                      <h1><font color="red">Promotion Supprimé avec SUCCÈS !</font></h1>

                      <p><b>¨Promotion Supprimé de façon permanente...</b></p>

                      <p><a href="SupprimerPromotion.php" ><button class="button" >Retour</button</a>
      </p>
              </div>';
  }
?>
