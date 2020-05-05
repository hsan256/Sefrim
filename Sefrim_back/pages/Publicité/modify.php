<?php
  require_once 'connection/dbconfig.php';

  include_once('connection/connectionz.php');

  if(isset($_POST['pid']) && isset($_POST['Description']))
  {
    $id =  $_POST['pid'];

    $des = $_POST['Description'];

    $permited  = array('jpg', 'jpeg', 'png', 'gif');
    $file_name = $_FILES['fileToUpload']['name'];
    $file_size = $_FILES['fileToUpload']['size'];
    $file_temp = $_FILES['fileToUpload']['tmp_name'];

    $div = explode('.', $file_name);
    $file_ext = strtolower(end($div));
    $unique_image = $id.'.'.$file_ext;
    $uploaded_image = "img_pub/".$unique_image;

    move_uploaded_file($file_temp, $uploaded_image);

    $stmt=$db_con->prepare("UPDATE `product` SET `des` = '$des' , `img_pub` = '$uploaded_image' WHERE pid = '$id'");
    $stmt->execute(array(':id'=>$id));

    if ($stmt) {
      echo '
      <link rel="stylesheet" href="style/style1.css" type="text/css"/>
              <div>
                      <h1><font color="green">Vous avez modifier une publicité avec SUCCÈS !</font></h1>

                      <p><a href="ModifierPublicite.php" ><button class="button" >Retour</button</a>
              </div>';

      }else {
     echo '
       <link rel="stylesheet" href="style/style1.css" type="text/css"/>
               <div>
                       <h1><font color="green">Error !</font></h1>

                       <p><a href="ModifierPublicite.php" ><button class="button" >Retour</button</a>
               </div>';
    }
}
?>
