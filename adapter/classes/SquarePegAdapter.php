
<?php


class SquarePegAdapter extends RoundPeg
{
	// In fact, the adapter contains an instance of the SquarePeg.
	private $squarePeg;

	public function __construct($squarePeg)
	{
		$this->squarePeg = $squarePeg;
	}


	/*  
		The adapter masquerades as a round piece 
	    with a radius that could fit the square piece 
		wrapped by the adapter. 
	*/
	public function getRadius()
	{
		return $this->squarePeg->getWidth() * sqrt(2) / 2;
	}

}

# NAY_

?>