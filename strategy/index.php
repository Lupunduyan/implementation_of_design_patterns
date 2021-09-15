<?php

include_once("classes/Item.php");
include_once("classes/PaypalStrategy.php");
include_once("classes/CreditCardStrategy.php");
		
$item1 = new Item("BOOK: PHP'",25);
$item2 = new Item("BOOK: JAVA",155690);

//pay by paypal
$paypal = new PaypalStrategy("number", "password");
echo $item1->payer($paypal);

//pay by credit card
$card = new CreditCardStrategy( "1234567890123456", "786", "12/15");
echo $item2->payer($card);

?>


