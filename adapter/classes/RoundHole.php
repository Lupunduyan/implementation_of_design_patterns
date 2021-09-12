
<?php 


class RoundHole
{

	protected $radius;

	public function __construct($radius)
	{
		$this->radius = $radius;
	}

	public function getRadius()
	{
		return $this->radius;
	}

	public function fits($roundPeg)
	{
		if ($this->getRadius() >= $roundPeg->getRadius())
		{
			return nl2br("\n >>> The piece fits. Round piece radius = ".$roundPeg->getRadius());
		}

		return nl2br("\n >>> The piece don't fits. Round piece radius = ".$roundPeg->getRadius());
	}


}

# NAY_

?>