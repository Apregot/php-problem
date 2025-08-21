<?
class Entity
{
	public function copy(): static
	{
		$copiedEntity = new static();
		// do something
		return $copiedEntity;
	}

	//...
}