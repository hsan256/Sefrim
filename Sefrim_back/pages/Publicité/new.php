<?php
require_once 'connection/dbconfig.php';

include_once('connection/connectionz.php');

   if (isset($_POST["submit"])) {
    $permited  = array('jpg', 'jpeg', 'png', 'gif');
    $file_name = $_FILES['fileToUpload']['name'];
    $file_size = $_FILES['fileToUpload']['size'];
    $file_temp = $_FILES['fileToUpload']['tmp_name'];

    $div = explode('.', $file_name);
    $file_ext = strtolower(end($div));
    $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
    $uploaded_image = "img/".$unique_image;

    move_uploaded_file($file_temp, $uploaded_image);
    $stmt=$db_con->prepare("UPDATE `product` SET `img_pub` = uploaded_image WHERE pid=:id");
    $stmt->execute(array(':id'=>$id));
    if ($stmt) {
     echo "<span class='success'>Image Inserted Successfully.
     </span>";
    }else {
     echo "<span class='error'>Image Not Inserted !</span>";
    }
   }
  ?>
