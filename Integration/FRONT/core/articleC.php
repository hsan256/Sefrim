<?php

include_once "../config.php";

class articleC{

	
    function AfficherArticle(){

        $sql="SELECT * From article";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }

    function RecupererArticle($Id){
        $sql="SELECT * from article where Id='$Id'";
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