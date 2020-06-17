<?php

include_once "../config.php";

class fournisseurC{

	
    function AfficherFournisseur(){

        $sql="SELECT * From fournisseur";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }

    
    function AfficherLivreur(){

        $sql="SELECT * From livreur";
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