<?php

class article{
	private $Id;
	private $Titre;
	private $Date_a;
	private $Description;
	private $Image;
	


	function __construct($Titre,$Date_a,$Description,$Image){
		$this->Titre=$Titre;
		$this->Date_a=$Date_a;
		$this->Description=$Description;
		$this->Image=$Image;

		
	}
	function getTitre(){
		return $this->Titre;
	}
	function getImage(){
		return $this->Image;
	}
	function getDescription(){
		return $this->Description;
	}
	function getDate_a(){
		return $this->Date_a;
	}


}

?>