<?php
class Item extends Card
{
	public $size;

	public function __construct($_size)
	{
		$this->size = $_size;
	}
}
