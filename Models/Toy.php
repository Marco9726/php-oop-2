<?php
class Toy extends Card
{
	public $characteristics;
	public $size;

	public function __construct($_characteristics, $_size)
	{
		$this->characteristics = $_characteristics;
		$this->size = $_size;
	}
}
