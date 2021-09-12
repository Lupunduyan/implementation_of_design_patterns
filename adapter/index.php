<?php

require_once("classes/RoundHole.php");
require_once("classes/SquarePeg.php");
require_once("classes/RoundPeg.php");
require_once("classes/SquarePegAdapter.php");


$hole = new RoundHole(10);
$rpeg = new RoundPeg(10);

echo $hole->fits($rpeg); // true

$small_sqpeg = new SquarePeg(10);
$large_sqpeg = new SquarePeg(20);

// Error : incompatible types
// $hole->fits(small_sqpeg);

$small_sqpeg_adapter = new SquarePegAdapter($small_sqpeg);
$large_sqpeg_adapter = new SquarePegAdapter($large_sqpeg);

echo $hole->fits($small_sqpeg_adapter); // true
echo $hole->fits($large_sqpeg_adapter); // false

# NAY_

?>