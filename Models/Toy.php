<?php
class Toy extends Product
{
	public $features;
	public $size;

	public function __construct($_name, $_image, $_price, Animal $_animal, $_features, $_size)
	{
		parent::__construct($_name, $_image, $_price, $_animal);
		$this->features = $_features;
		$this->size = $_size;
	}
}
