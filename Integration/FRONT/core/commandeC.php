<?php

include "../config.php";

class commandeC{

	function AjouterCommande($commande){
		$sql="insert into commande (id,Adresse,Ville,Gouvernaurat,CodePostale,ModePaiment,ModeLivraison,Prix) values (:id,:Adresse,:Ville,:Gouvernaurat,:CodePostale,:ModePaiment,:ModeLivraison,:Prix)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
       
        
		$req->bindValue(':id',$commande->getid());
		$req->bindValue(':Adresse',$commande->getAdresse());
		$req->bindValue(':Ville',$commande->getVille());
		$req->bindValue(':Gouvernaurat',$commande->getGouvernaurat());
		$req->bindValue(':CodePostale',$commande->getCode_Postale());
		$req->bindValue(':ModePaiment',$commande->getMode_Paiment());
		$req->bindValue(':ModeLivraison',$commande->getMode_Livraison());
		$req->bindValue(':Prix',$commande->getPrix());
        
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

	function RecupererLivraison($id){
        $sql="SELECT * from livraison where id='$id'";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function RecupererCommande($id){
        $sql="SELECT * from commande where id='$id'";
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