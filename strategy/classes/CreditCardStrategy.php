
<?php

include_once("PaiementStrategy.php");

//PaiementStrategy interface implementation

class CreditCardStrategy implements PaiementStrategy {

	private $numeroCarte;
	private $cryptogramme;
	private $dateExpiration;

	public function __construct($num, $crypto, $date) {
		
		$this->numeroCarte = $num;
		$this->cryptogramme = $crypto;
		$this->dateExpiration = $date;

	}

	public function payer($montant) {

		return nl2br("\n >>> $montant € paid by credit card.");

	}

}

?>
