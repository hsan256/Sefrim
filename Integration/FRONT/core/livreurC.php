<?php
include "../config.php";

class livreurC{

	

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

    
    

    function RecupererLivreur($Cin){
        $sql="SELECT * from livreur where Cin='$Cin'";
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