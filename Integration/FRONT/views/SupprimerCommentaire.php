<?php

include_once "../core/commentaireC.php";

$commentaire1C=new commentaireC();

  $var=$_GET["id"];
  $commentaire1C->SupprimerCommentaire($_GET["id"]);
   echo ("<script language='javascript'>window.location.href='AfficherArticle.php'</script>");
  



?>