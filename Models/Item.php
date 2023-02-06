<?php
class Item extends Card
{
	public $material;
	public $size;

	public function __construct($_material, $_size)
	{
		$this->material = $_material;
		$this->size = $_size;
	}
}
