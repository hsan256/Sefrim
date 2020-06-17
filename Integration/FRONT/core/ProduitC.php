<?php
include "../config.php";

class ProduitC{

    function WishListProduit($Id){
         $sql="UPDATE produit SET  Statut=1   WHERE Id=:Id";
        
        $db = config::getConnexion();

    try{        
        $req=$db->prepare($sql);
      
        
        $req->bindValue(':Id',$Id);
        
        
            $s=$req->execute();
            
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   
  
        }
        
    }

    function SupprimerWishListProduit($Id){
         $sql="UPDATE produit SET  Statut=0   WHERE Id=:Id";
        
        $db = config::getConnexion();

    try{        
        $req=$db->prepare($sql);
      
        
        $req->bindValue(':Id',$Id);
        
        
            $s=$req->execute();
            
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   
  
        }
        
    }

    function RecupererProduit($v){
    $sql="SELECT * From produit where Type='$v'";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
        }
    }

    function RecupererProduitWL(){
    $sql="SELECT * From produit where Statut=1";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
        }
    }


    function ProduitPopup($v){
    $sql="SELECT * From produit where Id='$v'";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
        }
    }

    function CompterProduitWL(){
        $sql="SELECT count(*) from `produit` where Statut=1 ";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        
        try{
            $req->execute();
            return $req;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
    
    function AfficherProduit(){

        $sql="SELECT * From produit";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
    function DernierProduit(){

        $sql="SELECT * FROM produit where Statut=1 ORDER BY id DESC LIMIT 0, 1 ";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   

    }
     function TriParNom($Type){

        $sql="SELECT * FROM produit WHERE Type='$Type' ORDER BY Nom ASC";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }

    function TriParPrix($Type){

        $sql="SELECT * FROM produit WHERE Type='$Type' ORDER BY Prix ASC";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }


}

?>