<?php

include "../config.php";
class LivraisonC{

	function AfficherLivraison(){

        $sql="SELECT * From livraison";
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