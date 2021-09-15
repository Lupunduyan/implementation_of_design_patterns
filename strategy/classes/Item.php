<?php

include_once("PaiementStrategy.php");

// Finally, we implement the class that will use the pattern

class Item {

	private $nom;
	private $prix;

	public function __construct($nom, $prix) {
		$this->nom = $nom;
		$this->prix = $prix;
	}

	public function getNom() {
		return $this->nom;
	}

	public function getPrix() {
		return $this->prix;
	}

	public function payer($methode){

		return $methode->payer($this->getPrix());
		
	}
}

?>
