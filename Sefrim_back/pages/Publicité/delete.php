<?php
  require_once 'connection/dbconfig.php';

  include_once('connection/connectionz.php');

  if(isset($_GET['pid']))
  {
    $id = $_GET['pid'];
    $stmt=$db_con->prepare("UPDATE `product` SET `pub` = 0 WHERE pid=:id");
    $stmt->execute(array(':id'=>$id));

      echo '	<div id="main2">

                      <h1><font color="Green">Publicité Supprimé avec SUCCÈS !</font></h1>

                      <p><b>Publicité Supprimé de façon permanente...</b></p>

                      <p><a href="SupprimerPublicite.php" ><button class="button" >Retour</button</a>
      </p>
              </div>';
  }
?>
