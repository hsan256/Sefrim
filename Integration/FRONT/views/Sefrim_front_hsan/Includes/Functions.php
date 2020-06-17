<?php
function Redirect_to($New_Location){
  header("Location:".$New_Location);
  exit;
}

function CheckUserNameExistsOrNot($UserName){
  global $ConnectingDB;
  $sql    = "SELECT user_name FROM users WHERE user_name=:userName";
  $stmt   = $ConnectingDB->prepare($sql);
  $stmt->bindValue(':userName',$UserName);
  $stmt->execute();
  $Result = $stmt->rowcount();
  if ($Result==1) {
    return true;
  }else {
    return false;
  }
}

function Login_Attempt($UserName,$Password){
  global $ConnectingDB;
  $sql = "SELECT * FROM users WHERE user_name=:userName AND user_pass=:passWord LIMIT 1";
  $stmt = $ConnectingDB->prepare($sql);
  $stmt->bindValue(':userName',$UserName);
  $stmt->bindValue(':passWord',$Password);
  $stmt->execute();
  $Result = $stmt->rowcount();
  if ($Result==1) {
    return $Found_Account=$stmt->fetch();
  }else {
    return null;
  }
}

function Confirm_Login(){
if (isset($_SESSION["UserId"])) {
  return true;
}  else {
  $_SESSION["ErrorMessage"]="Login Required !";
  Redirect_to("login.php");
}
}

function TotalPromotion(){
  global $ConnectingDB;
  $sql = "SELECT * FROM produit Where tauxpromo != 0 LIMIT 4";
  $stmt   = $ConnectingDB->prepare($sql);
  $stmt->execute();
}

function display_top4_promotions(){
  //display top 4 promotions
  global $ConnectingDB;
  $sql = "SELECT * FROM produit where tauxpromo != 0 ORDER BY tauxpromo desc LIMIT 4";
  $Execute =$ConnectingDB->query($sql);
  while ($DataRows=$Execute->fetch()) {

    $img = $DataRows['Image'];
    $pid = $DataRows['Id'];
    $pr = $DataRows['Prix'];
    $qt_dispo = $DataRows['Quantite'];
    $name = $DataRows['Nom'];
    $tauxpromo = $DataRows['tauxpromo'];

    echo'
    <div class="grid12-3">
      <div><img src="../../BACK/views/'.$img.'" alt="custom-image"></div>
      <p>'.$name.'</p>
       <h4 class="heading">Promotion JUSQUA '.$tauxpromo.'% OFF</h4>
    </div>
    ';
  }
}

function display_all_promotions($max_promo,$type){
    global $ConnectingDB;
    $sql = "SELECT * FROM produit where tauxpromo != 0 ORDER BY $type ASC LIMIT {$max_promo}";
    $Execute =$ConnectingDB->query($sql);

    while($DataRows=$Execute->fetch(PDO::FETCH_ASSOC)){

      $img = $DataRows['Image'];
      $pid = $DataRows['Id'];
      $pr = $DataRows['Prix'];
      $qt_dispo = $DataRows['Quantite'];
      $name = $DataRows['Nom'];
      $tauxpromo = $DataRows['tauxpromo'];

      echo'
      <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
        <div class="item-inner">
          <div class="item-img">
            <div class="item-img-info"><a href="product-detail-promo.html" title="Retis lapen casen" class="product-image"><img src="../../BACK/views/'.$img.'" alt="Retis lapen casen"></a>
              <div class="sale-label sale-top-right">Sale</div>
                <div class="item-box-hover">
                  <div class="box-inner">
                    <div class="product-detail-bnt"><a class="button detail-bnt" type="button"><span>Quick View</span></a></div>
                      <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>

                    </div>
                  </div>
                </div>
              </div>
              <div class="item-info">
                <div class="info-inner">
                  <div class="item-title"><a href="product-detail-promo.html" title="Retis lapen casen">'.$name.' '.$tauxpromo.'% OFF</a> </div>
                    <div class="item-content">
                      <div class="rating">
                        <div class="ratings">
                          <div class="rating-box">
                            <div class="rating" style="width:80%"></div>
                          </div>
                          <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                        </div>
                      </div>
                      <div class="item-price">
                        <div class="price-box"><span class="regular-price" id="product-price-1"><span class="price">'.$pr.' Dinars/KG</span> </span> </div>
                      </div>
                      <div class="add_cart">
                        <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </li>
      ';
    }
}

function display_list_promotions($max_promo,$type){
  global $ConnectingDB;
  $sql = "SELECT * FROM produit where tauxpromo != 0 ORDER BY $type ASC LIMIT {$max_promo}";
  $Execute =$ConnectingDB->query($sql);

  while($DataRows=$Execute->fetch(PDO::FETCH_ASSOC)){
    $img = $DataRows['Image'];
    $pid = $DataRows['Id'];
    $pr = $DataRows['Prix'];
    $oldprice = $DataRows['oldpr'];
    $qt_dispo = $DataRows['Quantite'];
    $name = $DataRows['Nom'];
    $tauxpromo = $DataRows['tauxpromo'];
    $des = $DataRows['Description'];

    echo'
    <li class="item first">
      <div class="product-image"> <a href="product-detail.html" title="HTC Rhyme Sense"> <img class="small-image" src="../../BACK/views/'.$img.'" alt="HTC Rhyme Sense"> </a> </div>
      <div class="product-shop">
        <h2 class="product-name"><a href="product-detail.html" title="HTC Rhyme Sense">HTC Rhyme Sense</a></h2>
        <div class="ratings">
          <div class="rating-box">
            <div style="width:50%" class="rating"></div>
          </div>
          <p class="rating-links"> <a href="#/review/product/list/id/167/category/35/">1 Review(s)</a> <span class="separator">|</span> <a href="#review-form">Add Your Review</a> </p>
        </div>
        <div class="desc std">
          <p>'.$des.' <a class="link-learn" title="" href="#">Learn More</a> </p>
        </div>
        <div class="price-box">
          <p class="old-price"> <span class="price-label"></span> <span id="old-price-212" class="price"> '.$oldprice.' Dinars/KG</span> </p>
          <p class="special-price"> <span class="price-label"></span> <span id="product-price-212" class="price"> '.$pr.' Dinars/KG</span> </p>
        </div>
        <div class="actions">
          <button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
          <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="#"><span>Add to Compare</span></a> </span> </div>
      </div>
    </li>
    ';
  }

}

function display_pub(){
  global $ConnectingDB;
  $sql = "SELECT * FROM produit where pub != 0 ORDER BY Prix ASC";
  $Execute = $ConnectingDB->query($sql);

  while($DataRows=$Execute->fetch(PDO::FETCH_ASSOC)){

    $img = $DataRows['Image'];
    $pid = $DataRows['Id'];
    $pr = $DataRows['Prix'];
    $oldprice = $DataRows['oldpr'];
    $qt_dispo = $DataRows['Quantite'];
    $name = $DataRows['Nom'];
    $tauxpromo = $DataRows['tauxpromo'];
    $des = $DataRows['Description'];

    echo'
    <div class="item">
                      <div class="item-inner">
                        <div class="item-img">
                          <div class="item-img-info"><a href="product-detail-pub.php?view=1&source='.$pid.'" title="Retis lapen casen" class="product-image"><img src="../../BACK/views/'.$img.'" alt="Retis lapen casen"></a>
                            <div class="new-label new-top-left">Pub</div>
                            <div class="item-box-hover">
                              <div class="box-inner">
                                <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                                <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>

                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"><a href="product-detail.html" title="Retis lapen casen">'.$name .'</a> </div>
                            <div class="item-content">
                              <div class="rating">
                                <div class="ratings">
                                  <div class="rating-box">
                                    <div class="rating" style="width:80%"></div>
                                  </div>
                                  <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                </div>
                              </div>
                              <div class="item-price">
                                <div class="price-box"><span class="regular-price" ><span class="price">'.$pr.' Dinars/kg</span> </span> </div>
                              </div>
            <div class="add_cart">
                                  <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

    ';

  }
}


?>
