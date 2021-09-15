<?php

include_once("PaiementStrategy.php");


//PaiementStrategy interface implementation

class PaypalStrategy implements PaiementStrategy{

	private $email;
	private $password;

	public function __construct($email, $pass){
		$this->email=$email;
		$this->password=$pass;
	}

	public function payer($montant) {
	
		return nl2br("\n >>> $montant € paid by Paypal.");
	
	}

}

?>
