<?php
session_start();
include_once "../core/commentaireC.php";
include_once "../entities/commentaire.php";
 //$IdClient=$_SESSION['CID'];
if(isset($_POST['Description']))
{  
	$Id="";
	$IdClient="";
	$Id_Artcle=$_GET['Id'];
    $Date_C =Date('Y-m-d H:i:s');
    $Commentaire1C = new commentaireC();
    $Commentaire1 = new commentaire($Id,$IdClient,$Date_C,$_POST['Description'],$_GET['Id']);
    $Commentaire1C->AjouterCommentaire($Commentaire1);
    $test=1;
    echo ("<script language='javascript'>window.location.href='AfficherCommentaire.php?Id=$Id_Artcle'</script>");

  }else{
    echo "fail";
  }

    ?>
