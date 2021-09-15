<?php
	
	//We start with the Strategy interface, which implements the method (s) that will change
	
	interface PaiementStrategy {
		public function payer($montant);
	}

?>
